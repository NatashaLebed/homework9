<?php

namespace Acme\GuestbookBundle\EventListener;

use Acme\GuestbookBundle\Event\MyEvent;
use Symfony\Component\EventDispatcher\Event;

class MyEventListener
{
    public function onMyEventAction(Event $event)
    {
        $new_message = 'ChangeMessage';
        $event->setMessage($new_message);
    }
}