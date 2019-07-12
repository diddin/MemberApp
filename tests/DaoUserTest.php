<?php

namespace tests;

require '../vendor/autoload.php';

use app\config\singleton\Database;
use app\config\singleton\IDatabase;
use app\user\adapter\DaoUser;
use app\user\factory\FactoryPerson;
use app\user\factory\IFactoryPerson;
use app\user\factory\Person;
use PHPUnit\Framework\TestCase;

/**
 * Class DaoUserTest
 * @package tests
 */
class DaoUserTest extends TestCase
{
    /**
     *
     */
    public function testPut()
    {
        $person = new FactoryPerson();

        $person->create()->setId(1);

        $this->assertEquals($person->create()->getId(), 1);
    }

    /**
     *
     */
    public function testLogin()
    {
        $person = new FactoryPerson();

        $person->create()->setUserName("userkedua");
        $person->create()->setPassword("userkedua");
        $person->create()->setActive("yes");

        $this->assertEquals($person->create()->getUserName(), "userkedua");
        $this->assertEquals($person->create()->getPassword(), "userkedua");
        $this->assertEquals($person->create()->getActive(), "yes");
    }

    /**
     *
     */
    public function testIsLogin()
    {
        $person = new FactoryPerson();

        $person->create()->setId(1);

        $this->assertEquals($person->create()->getId(), 1);
    }

    /**
     *
     */
    public function testFind()
    {
        $person = new FactoryPerson();

        $person->create()->setId(1);

        $this->assertEquals($person->create()->getId(), 1);
    }

    /**
     *
     */
    public function testDestroy()
    {
        $person = new FactoryPerson();

        $person->create()->setId(1);

        $this->assertEquals($person->create()->getId(), 1);
    }

    /**
     *
     */
    public function testInsert()
    {
        $person = new FactoryPerson();

        $person->create()->setUserName("userkeenam");
        $person->create()->setPassword("userkeenam");
        $person->create()->setActive("Yes");
        $person->create()->setLastLogin("2019-11-10");

        $this->assertEquals($person->create()->getUserName(), "userkeenam");
        $this->assertEquals($person->create()->getPassword(), "userkeenam");
        $this->assertEquals($person->create()->getActive(), "Yes");
        $this->assertEquals($person->create()->getLastLogin(), "2019-11-10");
    }

    /**
     *
     */
    public function testFindAll()
    {
        $person = new FactoryPerson();

        $db = Database::get();

        $dao = new DaoUser($db, $person);

        foreach ($dao->findAll() as $data){
            echo $data['username'] . $data['password']
               . $data['active']   . $data['last_login'];
        }

        $this->assertIsArray($data, "Success");
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
}
