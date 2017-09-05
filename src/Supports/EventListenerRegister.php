<?php

namespace MyPackage\Supports;


class EventListenerRegister
{
    private $eventNames;

    

    public function __construct($eventNames = array())
    {
        $this->eventNames = $eventNames;
    }

    public function isRegistered($name) {

        foreach($this->eventNames as $eventName) {
            if(strtolower($eventName) == strtolower($name)) return true;
        }

        return false;
    }


}