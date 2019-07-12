<?php

require '../../../vendor/autoload.php';

$db = \app\config\singleton\Database::get();

$factoryPerson = new \app\user\factory\FactoryPerson();

$person = $factoryPerson->create();


$service = new \app\user\adapter\AdapterUser(new \app\user\adapter\DaoUser($db, $factoryPerson));

    /*Test getOne

    $person->setId(1);

    foreach ($service->getOne() as $index => $data) {
    echo $data['username'];
    } */
    ////////////////////////////////////////

    /*Test get All
*//*
    foreach ($service->getAll() as $index => $data) {
    echo $data['username'];
    echo '<br>';
    echo $data['password'];
    }
    ///////////////////////////////////////

    /*Test get Update */
/*
    $time = date("Y-m-d");

    $person->setId(4);
    $person->setUserName("jkjkjkjkj");
    $person->setPassword("purworejo");
    $person->setActive("Yes");
    $person->setLastLogin($time);

    $service->getUpdate();

    ///////////////////////////////////////

    /* Test get Delete */
    /*
    $person->setId(1);

    if($service->getDelete() > 0){
        echo "success";
    } else {
        echo "failed";
    } */
    ///////////////////////////////////////
///
    /* Test get Login */

    //$person->setUserName("userkedua");
    //$person->setPassword("userkedua");

    //$service->getLogin();

    ///////////////////////////////////////
///
    /*Test Has Login
    */ /*
    $person->setUserName("purworejo");
*/
    //$service->hasLogin();

    ///////////////////////////////////////
///
    /*Test Logout */
    //session_start();
    //$time = date("Y-m-d");
    //$person->setLastLogin($time);
    //$person->setId($_SESSION['id']);
    //$service->logout();
    ///////////////////////////////////////
///
    /* Test Register

    $time = date("Y-m-d");

    $person->setId();
    $person->setUserName("userketiga");
    $person->setPassword("userketiga");
    $person->setActive("Yes");
    $person->setLastLogin($time);

    if($service->getRegister() > 0 ) {
        echo "success";
    } else {
        echo "failed";
    } */
    ////////////////////////////////////////
///


