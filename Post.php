<?php

class Post
{
    public function post (PostInterface $post)
    {
        return $post->send();
    }
}