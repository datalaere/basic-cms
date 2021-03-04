<?php

require '../app/bootstrap.php';

session_destroy();

redirect(APP_URL . '/admin/login.php');