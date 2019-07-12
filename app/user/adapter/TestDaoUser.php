<?php

require '../../../vendor/autoload.php';

$db = \app\config\singleton\Database::get();

$factoryPerson = new \app\user\factory\FactoryPerson();

$person = $factoryPerson->create();
$person->setId(2);
$service = new \app\user\adapter\DaoUser($db, $factoryPerson);

/*  Test find()

  */

    foreach ($service->find() as $data) {
    $json = $data;

} echo json_encode($json);/*

/*    Test findAll()
*/
/*  $result = $service->findAll();

    while($data[] = $result->fetch(\PDO::FETCH_ASSOC) ){

        echo json_encode($data);
    }
*/

    /* Test put
/*
    $time = date("Y-m-d");

    $person->setId(2);
    $person->setPassword("purworejo");
    $person->setActive("Yes");
    $person->setLastLogin($time);

    $service->put();
*/

    /* Test Destroy

    $person->setId(2);
    $service->destroy();
    */

    /* Test Login Logout

*//*  $time = date("Y-m-d");
    $person->setLastLogin($time);
    $person->setUserName("userkedua");
    $person->setPassword("userkedua");
*/
    //$service->login();
    //$service->isLogin();
    //$service->logout();

    /* Test Insert

    $time = date("Y-m-d");

    $person->setUserName("userkelima");
    $person->setPassword("userkelima");
    $person->setActive("Yes");
    $person->setLastLogin($time);

    $service->insert();

    if($service->insert() > 0) {
        echo "succes inserted data";
    } else {
        throw new \InvalidArgumentException("failed");
    }

*/
