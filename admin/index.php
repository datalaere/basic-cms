<?php

require '../app/bootstrap.php';

$request = request_query();

if(!$_SESSION['user']) {
   redirect(APP_URL . '/admin/login.php');
}

if($request['type'] == 'posts') {

    require 'posts/create.php';
    require 'posts/read.php';
    require 'posts/update.php';
    require 'posts/delete.php';

    return true;
} 

if($request['type'] == 'users') {

    require 'users/create.php';
    require 'users/read.php';
    require 'users/update.php';
    require 'users/delete.php';

    return true;
} 

include APP_VIEWS . '/backend/admin.php';
