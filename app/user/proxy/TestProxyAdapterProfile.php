<?php

require '../../../vendor/autoload.php';

$db = \app\config\singleton\Database::get();

$factoryPerson = new \app\user\factory\FactoryPerson();

$person = $factoryPerson->create();

$adapter = new \app\user\adapter\AdapterProfile(new \app\user\adapter\DaoProfile($db, $factoryPerson));

$proxy = new \app\user\proxy\ProxyAdapterProfile($adapter);


/* Test Get One
$person->setUserId(5);

if($proxy->getOne() > 0){
    foreach ($proxy->getOne() as $index => $data){
        echo $data['last_name'];
    }
} */


// Test test getAll
/*
if($proxy->getAll() > 0){
    foreach ($adapter->getAll() as $index => $data){
        echo $data['last_name'];
        echo '<br>';
    }
} */

// Test add data
/*
$time = date("Y-m-d");
$person->setUserId(5);
$person->setFirstName("User");
$person->setLastName("Ke lima");
$person->setEmail("kelima@mail.com");
$person->setDateOfBirth("1993-07-14");
$person->setOccupation("IT Marketing");
$person->setLastUpdate($time);

if($proxy->getRegister() > 0 ){
    echo "success";
} else {
    echo "failed";
} */

// Test Put
/*
$time = date("Y-m-d");
$person->setUserId(5);
$person->setFirstName("User");
$person->setLastName("Ke lIMA");
$person->setEmail("kelima@mail.com");
$person->setDateOfBirth("1993-07-14");
$person->setOccupation("IT Marketing");
$person->setLastUpdate($time);

if($proxy->getUpdate() > 0) {
    echo "success";
} else {
    echo "failed";
} */

// Test Delete
/*
$person->setUserId(5);
if($proxy->getDelete() > 0) {
    echo "success delete data";
} else {
    echo "failed delete data";
}


