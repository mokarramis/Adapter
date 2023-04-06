<?php

require_once 'Rapid.php';
require_once 'Ordinary.php';
require_once 'Post.php';
require_once 'OrdinaryAdapter.php';
require_once 'RapidAdapter.php';

$ordinary = new OrdinaryAdapter(new Ordinary());
$rapid = new RapidAdapter(new Rapid());
$post = new Post();

echo $post->post($ordinary) . "\n" . $post->post($rapid);
