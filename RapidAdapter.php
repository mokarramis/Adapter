<?php

require_once 'PostInterface.php';


class RapidAdapter implements PostInterface
{
    public function __construct(private Rapid $rapid)
    {
        
    }

    public function send()
    {
        return "Send with Rapid";
    }
}