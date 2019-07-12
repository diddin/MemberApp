<?php

require '../../../vendor/autoload.php';

$db = \app\config\singleton\Database::get();

$factoryPerson = new \app\user\factory\FactoryPerson();

$person = $factoryPerson->create();

$service = new \app\user\adapter\AdapterUser(new \app\user\adapter\DaoUser($db, $factoryPerson));

$proxy = new \app\user\proxy\ProxyAdapterUser($service);


/*Test getOne

$person->setId(5);

foreach ($proxy->getOne() as $data) {
echo $data['username'];
} /*/
////////////////////////////////////////

/*Test get All
*//*

foreach ($proxy->getAll() as $data) {
echo $data['username'];
echo '<br>';
echo $data['password'];
}
///////////////////////////////////////

/*Test get Update */
/*
$time = date("Y-m-d");

$person->setId(4);
$person->setUserName("purworejo");
$person->setPassword("purworejo");
$person->setActive("Yes");
$person->setLastLogin($time);

$update = $service->getUpdate();
///////////////////////////////////////

/* Test get Delete */
/*
$person->setId(1);

if($proxy->getDelete() > 0){
    echo "success";
} else {
    echo "failed";
} */
///////////////////////////////////////
///
/* Test get Login */

//$person->setUserName("userkedua");
//$person->setPassword("userkedua");
//$proxy->getLogin();

///////////////////////////////////////
///
/*Test Has Login
*/ /*
    $person->setUserName("purworejo");
    */
    //session_start();
    //$proxy->hasLogin();

///////////////////////////////////////
///
/*Test Logout */
/*
session_start();
$username = $_SESSION['username'];

$time = date("Y-m-d");

$person->setUserName($username);
$person->setLastLogin($time);
$proxy->logout();
*/
///////////////////////////////////////
///
/* Test Register
*//*
$time = date("Y-m-d");

//$person->setId();
$person->setUserName("userketiga");
$person->setPassword("userketiga");
$person->setActive("Yes");
$person->setLastLogin($time);

if($proxy->getRegister() > 0 ) {
    echo "success";
} else {
    echo "failed";
} */
////////////////////////////////////////
///
