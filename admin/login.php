<?php

require '../app/bootstrap.php';


if(!empty($_POST)) {

    $user = $app['db']->table('users')->where('username', '=', $_POST['username'])->first();

    if($user->password === md5($_POST['password'])) {

        $_SESSION['user'] = $user->ID;
        redirect(APP_URL . '/admin');
        
    } else {
        redirect(APP_URL . '/admin/login.php');
    }

} else {
    include APP_VIEWS . '/backend/login.php';
}
