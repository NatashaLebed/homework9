<?php

namespace Acme\GuestbookBundle\Event;

use Symfony\Component\EventDispatcher\Event;

class PostAddedEvent extends  Event
{
    protected $guest;

    public function __construct($guest)
    {
        $this->guest = $guest;
    }

    public function getGuest()
    {
        $guest = $this->guest;
    }

}