<?php

session_start();
if(isset($_SESSION['id'])){
    header('location: Home.php');
}

require '../vendor/autoload.php';

\app\controller\Route::get()->dashboard();