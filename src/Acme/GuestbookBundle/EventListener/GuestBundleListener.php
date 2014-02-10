<?php

namespace Acme\GuestbookBundle\EventListener;

use Symfony\Component\EventDispatcher\Event;

class GuestBundleListener
{
    protected $mailer = null;

    public function onPostAddedAction(Event $event)
    {
        $transport = \Swift_MailTransport::newInstance();
        $mailer = \Swift_Mailer::newInstance($transport);

        $message = \Swift_Message::newInstance()
            ->setSubject('Post added')
            ->setFrom('admin@mysite.com')
            ->setTo('natasha.lebed@gmail.com')
            ->setBody('New Post was added');

        $mailer->send($message);
    }
}