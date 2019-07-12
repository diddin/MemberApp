<?php

require '../../../vendor/autoload.php';

try {

    $person = new \app\user\factory\Person();


    $person->setId("2");
    $person->setUserName("f");
    $person->setPassword("fddddddd");
    $person->setActive("f");
    $person->setLastLogin("f");

    $person->setUserId("3");
    $person->setFirstName("f");
    $person->setLastLogin("f");
    $person->setDateOfBirth("f");
    $person->setOccupation("f");
    $person->setLastUpdate("f");

    echo $person->getId();
    echo '<br>';
    echo $person->getUserName();
    echo '<br>';
    echo $person->getPassword();
    echo '<br>';
    echo $person->getActive();
    echo '<br>';
    echo $person->getLastLogin();
    echo '<br>';

    echo $person->getUserId();
    echo '<br>';
    echo $person->getFirstName();
    echo '<br>';
    echo $person->getLastLogin();
    echo '<br>';
    echo $person->getDateOfBirth();
    echo '<br>';
    echo $person->getOccupation();
    echo '<br>';
    echo $person->getLastUpdate();

} catch(\Exception $e){
    echo $e->getMessage();
}

