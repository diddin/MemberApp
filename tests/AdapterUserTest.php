<?php

namespace tests;

require '../vendor/autoload.php';

use app\config\singleton\Database;
use app\user\adapter\AdapterUser;
use app\user\adapter\DaoUser;
use app\user\factory\FactoryPerson;
use app\user\factory\Person;
use PHPUnit\Framework\TestCase;

/**
 * Class AdapterUserTest
 * @package tests
 */
class AdapterUserTest extends TestCase
{

    /**
     *
     */
    public function testGetUpdate()
    {
        $person = new FactoryPerson();

        $person->create()->setId(1);

        $this->assertEquals($person->create()->getId(), 1);
    }

    /**
     *
     */
    public function testLogout()
    {
        $person = new FactoryPerson();

        $person->create()->setId(1);

        $this->assertEquals($person->create()->getId(), 1);
    }

    /**
     *
     */
    public function testGetLogin()
    {
        $person = new FactoryPerson();

        $person->create()->setUserName("userkedua");
        $person->create()->setPassword("userkedua");
        $person->create()->setActive("Yes");

        $this->assertEquals($person->create()->getUserName(), "userkedua");
        $this->assertEquals($person->create()->getPassword(), "userkedua");
        $this->assertEquals($person->create()->getActive(), "Yes");

    }

    /**
     *
     */
    public function testGetRegister()
    {
        $person = new FactoryPerson();

        $person->create()->setUserName("userkeenam");
        $person->create()->setPassword("userkeenam");
        $person->create()->setActive("Yes");
        $person->create()->setLastLogin("2019-11-10");

        $this->assertEquals($person->create()->getUserName(), "userkeenam");
        $this->assertEquals($person->create()->getPassword(), "userkeenam");
        $this->assertEquals($person->create()->getActive(),"Yes");
        $this->assertEquals($person->create()->getLastLogin(), "2019-11-10");
    }

    /**
     *
     */
    public function testGetAll()
    {
        $person = new FactoryPerson();

        $db = Database::get();

        $dao = new DaoUser($db, $person);

        $adapter = new AdapterUser(new DaoUser($db, $person));

        $this->assertEquals($dao->findAll(), $adapter->getAll());
    }

    /**
     *
     */
    public function testGetDelete()
    {
        $person = new FactoryPerson();

        $person->create()->setId(1);

        $this->assertEquals($person->create()->getId(), 1);
    }

    /**
     *
     */
    public function testHasLogin()
    {
        $person = new FactoryPerson();

        $person->create()->setId(1);

        $this->assertEquals($person->create()->getId(), 1);
    }

    /**
     *
     */
    public function testGetOne()
    {
        $person = new FactoryPerson();

        $person->create()->setId(1);

        $this->assertEquals($person->create()->getId(), 1);
    }
}
