<?php

namespace Acme\GuestbookBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Acme\GuestbookBundle\Entity\Guests;

class LoadGuestsData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $p1 = new Guests();
        $p1->setUser('Masha');
        $p1->setMail('Masha@test.com');
        $p1->setMessage('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed tortor ullamcorper, rhoncus
         massa convallis, fermentum arcu. Mauris vel nibh non justo fringilla auctor. Suspendisse sed porta mi. Sed
          tempor purus risus, et porttitor ipsum egestas vitae. Sed a nisi quis felis aliquet consectetur lacinia et
           nunc. Praesent suscipit feugiat dolor quis volutpat. Morbi nisl magna, tincidunt nec dui ac, posuere congue
           magna. Donec vel pulvinar nulla. Fusce lectus augue, dignissim condimentum lectus eu, venenatis vestibulum
           ligula. Mauris tempor massa in quam pharetra, mollis malesuada dui congue.');

        $p2 = new Guests();
        $p2->setUser('Petya');
        $p2->setMail('Petya@test.com');
        $p2->setMessage('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed tortor ullamcorper, rhoncus
         massa conallis, fermentum arcu. Mauris vel nibh non justo fringilla auctor. Suspendisse sed porta mi. Sed
          tempor purus risus, et porttitor ipsum egestas vitae. Sed a nisi quis felis aliquet consectetur lacinia et
           nunc. Praesent suscipit feugiat dolor quis volutpat. Morbi nisl magna, tincidunt nec dui ac, posuere congue
           magna. Donec vel pulvinar nulla. Fusce lectus augue, dignissim condimentum lectus eu, venenatis vestibulum
           ligula. Mauris tempor massa in quam pharetra, mollis malesuada dui congue.');

        $p3 = new Guests();
        $p3->setUser('Vasya');
        $p3->setMail('Vasya@test.com');
        $p3->setMessage('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed tortor ullamcorper, rhoncus
         massa convallis, fermentum arcu. Mauris vel nibh non justo fringilla auctor. Suspendisse sed porta mi. Sed
          tempor purus risus, et porttitor ipsum egestas vitae. Sed a nisi quis felis aliquet consectetur lacinia et
           nunc. Praesent suscipit feugiat dolor quis volutpat. Morbi nisl magna, tincidunt nec dui ac, posuere congue
           magna. Donec vel pulvinar nulla. Fusce lectus augue, dignissim condimentum lectus eu, venenatis vestibulum
           ligula. Mauris tempor massa in quam pharetra, mollis malesuada dui congue.');

        $p4 = new Guests();
        $p4->setUser('Kolya');
        $p4->setMail('Kolya@test.com');
        $p4->setMessage('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed tortor ullamcorper, rhoncus
         massa convallis, fermentum arcu. Mauris vel nibh non justo fringilla auctor. Suspendisse sed porta mi. Sed
          tempor purus risus, et porttitor ipsum egestas vitae. Sed a nisi quis felis aliquet consectetur lacinia et
           nunc. Praesent suscipit feugiat dolor quis volutpat. Morbi nisl magna, tincidunt nec dui ac, posuere congue
           magna. Donec vel pulvinar nulla. Fusce lectus augue, dignissim condimentum lectus eu, venenatis vestibulum
           ligula. Mauris tempor massa in quam pharetra, mollis malesuada dui congue.');

        $p5 = new Guests();
        $p5->setUser('Katya');
        $p5->setMail('Katya@test.com');
        $p5->setMessage('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed tortor ullamcorper, rhoncus
         massa convallis, fermentum arcu. Mauris vel nibh non justo fringilla auctor. Suspendisse sed porta mi. Sed
          tempor purus risus, et porttitor ipsum egestas vitae. Sed a nisi quis felis aliquet consectetur lacinia et
           nunc. Praesent suscipit feugiat dolor quis volutpat. Morbi nisl magna, tincidunt nec dui ac, posuere congue
           magna. Donec vel pulvinar nulla. Fusce lectus augue, dignissim condimentum lectus eu, venenatis vestibulum
           ligula. Mauris tempor massa in quam pharetra, mollis malesuada dui congue.');

        $p6 = new Guests();
        $p6->setUser('Vitya');
        $p6->setMail('Vitya@test.com');
        $p6->setMessage('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed tortor ullamcorper, rhoncus
         massa convallis, fermentum arcu. Mauris vel nibh non justo fringilla auctor. Suspendisse sed porta mi. Sed
          tempor purus risus, et porttitor ipsum egestas vitae. Sed a nisi quis felis aliquet consectetur lacinia et
           nunc. Praesent suscipit feugiat dolor quis volutpat. Morbi nisl magna, tincidunt nec dui ac, posuere congue
           magna. Donec vel pulvinar nulla. Fusce lectus augue, dignissim condimentum lectus eu, venenatis vestibulum
           ligula. Mauris tempor massa in quam pharetra, mollis malesuada dui congue.');

        $p7 = new Guests();
        $p7->setUser('Ira');
        $p7->setMail('Ira@test.com');
        $p7->setMessage('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed tortor ullamcorper, rhoncus
         massa convallis, fermentum arcu. Mauris vel nibh non justo fringilla auctor. Suspendisse sed porta mi. Sed
          tempor purus risus, et porttitor ipsum egestas vitae. Sed a nisi quis felis aliquet consectetur lacinia et
           nunc. Praesent suscipit feugiat dolor quis volutpat. Morbi nisl magna, tincidunt nec dui ac, posuere congue
           magna. Donec vel pulvinar nulla. Fusce lectus augue, dignissim condimentum lectus eu, venenatis vestibulum
           ligula. Mauris tempor massa in quam pharetra, mollis malesuada dui congue.');

        $p8 = new Guests();
        $p8->setUser('Dima');
        $p8->setMail('Dima@test.com');
        $p8->setMessage('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed tortor ullamcorper, rhoncus
         massa convallis, fermentum arcu. Mauris vel nibh non justo fringilla auctor. Suspendisse sed porta mi. Sed
          tempor purus risus, et porttitor ipsum egestas vitae. Sed a nisi quis felis aliquet consectetur lacinia et
           nunc. Praesent suscipit feugiat dolor quis volutpat. Morbi nisl magna, tincidunt nec dui ac, posuere congue
           magna. Donec vel pulvinar nulla. Fusce lectus augue, dignissim condimentum lectus eu, venenatis vestibulum
           ligula. Mauris tempor massa in quam pharetra, mollis malesuada dui congue.');

        $p9 = new Guests();
        $p9->setUser('Vova');
        $p9->setMail('Vova@test.com');
        $p9->setMessage('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed tortor ullamcorper, rhoncus
         massa convallis, fermentum arcu. Mauris vel nibh non justo fringilla auctor. Suspendisse sed porta mi. Sed
          tempor purus risus, et porttitor ipsum egestas vitae. Sed a nisi quis felis aliquet consectetur lacinia et
           nunc. Praesent suscipit feugiat dolor quis volutpat. Morbi nisl magna, tincidunt nec dui ac, posuere congue
           magna. Donec vel pulvinar nulla. Fusce lectus augue, dignissim condimentum lectus eu, venenatis vestibulum
           ligula. Mauris tempor massa in quam pharetra, mollis malesuada dui congue.');

        $p10 = new Guests();
        $p10->setUser('Nina');
        $p10->setMail('Nina@test.com');
        $p10->setMessage('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed tortor ullamcorper, rhoncus
         massa convallis, fermentum arcu. Mauris vel nibh non justo fringilla auctor. Suspendisse sed porta mi. Sed
          tempor purus risus, et porttitor ipsum egestas vitae. Sed a nisi quis felis aliquet consectetur lacinia et
           nunc. Praesent suscipit feugiat dolor quis volutpat. Morbi nisl magna, tincidunt nec dui ac, posuere congue
           magna. Donec vel pulvinar nulla. Fusce lectus augue, dignissim condimentum lectus eu, venenatis vestibulum
           ligula. Mauris tempor massa in quam pharetra, mollis malesuada dui congue.');

        $manager->persist($p1);
        $manager->persist($p2);
        $manager->persist($p3);
        $manager->persist($p4);
        $manager->persist($p5);
        $manager->persist($p6);
        $manager->persist($p7);
        $manager->persist($p8);
        $manager->persist($p9);
        $manager->persist($p10);

        $manager->flush();

    }
}