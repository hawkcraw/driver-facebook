<?php

namespace BotMan\Drivers\Facebook\Events;

class MessageEchoes extends FacebookEvent
{
    /**
     * Return the event name to match.
     *
     * @return string
     */
    public function getName()
    {
        return 'message_echoes';
    }
}
