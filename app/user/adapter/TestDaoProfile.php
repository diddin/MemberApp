<?php

require '../../../vendor/autoload.php';

$db = \app\config\singleton\Database::get();

$factoryPerson = new \app\user\factory\FactoryPerson();

$person = $factoryPerson->create();

$service = new \app\user\adapter\DaoProfile($db, $factoryPerson);

/*
//Test Find

$person->setUserId(1);

if($service->find() > 0) {
    foreach ($service->find() as $data){
        echo $data['first_name']  .$data['last_name'];
    }
};
*/
/*
// Test Find All

foreach ($service->findAll() as $data) {
    echo $data['last_name'];
} */

// Test Insert
/*
$time = date("Y-m-d");
$person->setUserId(4);
$person->setFirstName("User");
$person->setLastName("Ke lima");
$person->setEmail("kelima@mail.com");
$person->setDateOfBirth("1993-07-14");
$person->setOccupation("IT Marketing");
$person->setLastUpdate($time);

if($service->insert() > 0){
    echo "success insert data";
} else {
    echo "failed";
} */

// Test Update
/*
$time = date("Y-m-d");
$person->setUserId(5);
$person->setFirstName("User");
$person->setLastName("Ke lima");
$person->setEmail("kelima@mail.com");
$person->setDateOfBirth("1993-07-14");
$person->setOccupation("IT Marketing");
$person->setLastUpdate($time);

if($service->put() > 0 ){
    echo "success";
} else {
    echo " Failed";
} */

// Test Destroy
/*
$person->setUserId(5);
if($service->destroy() > 0){
    echo "success delete";
} else {
    echo "failde delete";
}

