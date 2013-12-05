<?php

namespace Acme\GuestbookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Acme\GuestbookBundle\Entity\Guests;
use Acme\TaskBundle\Form\Type\GuestsType;

use Pagerfanta\Pagerfanta;
use Pagerfanta\Adapter\ArrayAdapter;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AcmeGuestbookBundle:Default:index.html.twig');
    }

    public function createAction()
    {
        $guest = new Guests();
        $guest->setUser('Natasha');
        $guest->setMail('test@test.com');
        $guest->setMessage('Lorem ipsum dolor');

        $em = $this->getDoctrine()->getManager();
        $em->persist($guest);
        $em->flush();

        return new Response('Created guest id '.$guest->getId());
    }

    public function viewPostsAction($page, Request $request)
    {
        $posts = $this->getDoctrine()->getRepository('AcmeGuestbookBundle:Guests')
            ->findAll();

        if (!$posts) {
            throw $this->createNotFoundException(
                'No posts found'
            );
        }

        if (!$page)
        {
            $page = 1;
        }

        $pager = new Pagerfanta(new ArrayAdapter($posts));
        $pager->setMaxPerPage(3);
        $pager->getCurrentPage($page);

        try {
            $pager->setCurrentPage($page);
        } catch (NotValidCurrentPageException $e) {
            throw new NotFoundHttpException('Illegal page');
        }

        return $this->render('AcmeGuestbookBundle:Default:viewPost.html.twig', array(
                'posts' => $pager,
        ));
    }

    public function addPostAction(Request $request)
    {
        $guest = new Guests();
//        $guest->setUser('Natasha');
//        $guest->setMail('1111111@test.com');
//        $guest->setMessage('Lorem ipsum dolor');

        $form = $this->createForm('guests', $guest);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($guest);
            $em->flush();

            return $this->redirect($this->generateUrl('acme_guestbook_viewPosts'));
        }

        return $this->render('AcmeGuestbookBundle:Default:addPost.html.twig', array(
            'form' => $form->createView(),
        ));
    }

}

