<?php

require_once 'PostInterface.php';


class OrdinaryAdapter implements PostInterface
{
    public function __construct(private Ordinary $ordinary)
    {
        
    }

    public function send()
    {
        return "Send with ordinary post";
    }
}