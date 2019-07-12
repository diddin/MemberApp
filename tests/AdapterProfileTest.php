<?php

require '../vendor/autoload.php';

use app\user\adapter\AdapterProfile;
use \app\user\adapter\DaoProfile;
use PHPUnit\Framework\TestCase;

/**
 * Class AdapterProfileTest
 */
class AdapterProfileTest extends TestCase
{

    /**
     *
     */
    public function testGetAll()
    {
        $person = new \app\user\factory\FactoryPerson();

        $db = \app\config\singleton\Database::get();

        $dao = new DaoProfile($db, $person);

        $adapter = new AdapterProfile(new DaoProfile($db, $person));

        $this->assertEquals($adapter->getAll(), $dao->findAll());
    }

    /**
     *
     */
    public function testHasLogin()
    {
        $person = new \app\user\factory\FactoryPerson();

        $db = \app\config\singleton\Database::get();

        $adapter = new AdapterProfile(new DaoProfile($db, $person));

        $this->assertEquals($adapter->hasLogin(), $adapter->hasLogin());

    }

    /**
     *
     */
    public function testGetUpdate()
    {
        $db = \app\config\singleton\Database::get();

        $person = new \app\user\factory\FactoryPerson();

        $person->create()->setUserId(2);
        $person->create()->setFirstName("user");
        $person->create()->setLastName("kedua");
        $person->create()->setEmail("userkedua@mail.com");
        $person->create()->setDateOfBirth("1992-10-10");
        $person->create()->setOccupation("IT MANAGER");
        $person->create()->setLastUpdate("2019-10-10");


        $this->assertEquals($person->create()->getUserId(), 2);
        $this->assertEquals($person->create()->getFirstName(), "user");
        $this->assertEquals($person->create()->getLastName(), "kedua");
        $this->assertEquals($person->create()->getEmail(), "userkedua@mail.com");
        $this->assertEquals($person->create()->getDateOfBirth(), "1992-10-10");
        $this->assertEquals($person->create()->getOccupation(), "IT MANAGER");
        $this->assertEquals($person->create()->getLastUpdate(), "2019-10-10");
    }

    /**
     *
     */
    public function testGetDelete()
    {
        $person = new \app\user\factory\FactoryPerson();
        $person->create()->setUserId(1);
        $person->create()->getUserId();
        $db = \app\config\singleton\Database::get();

        $dao = new DaoProfile($db, $person);

        $adapter = new AdapterProfile(new DaoProfile($db, $person));

        $this->assertNotSame($dao, $adapter);
    }

    /**
     *
     */
    public function testGetOne()
    {
        $person = new \app\user\factory\FactoryPerson();
        $person->create()->setUserId(2);
        $person->create()->getUserId();

        $db = \app\config\singleton\Database::get();

        $adapter = new AdapterProfile(new DaoProfile($db, $person));
        $adapter->getOne();

        foreach ($adapter->getOne() as $data) {
            echo $data['first_name'] . $data['last_name'] . $data['email']
            . $data['occupation'] . $data['birth'] . $data['last_update'];
        };

    }

    /**
     *
     */
    public function testGetRegister()
    {
        $person = new \app\user\factory\FactoryPerson();

        $person->create()->setUserId(1);

        $this->assertSame($person->create()->getUserId(), 1);
    }
}
