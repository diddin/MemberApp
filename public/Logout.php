<?php

session_start();

require '../vendor/autoload.php';

\app\controller\Route::post()->logout();
