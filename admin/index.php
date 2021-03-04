<?php

require '../app/bootstrap.php';

$posts = $app['db']->table('posts')->get(['*'], [], ['ORDER BY' => 'created DESC'])->results();

var_dump($posts);