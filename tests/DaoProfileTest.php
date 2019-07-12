<?php

require '../vendor/autoload.php';

use \app\user\factory\FactoryPerson;
use app\config\singleton\Database;
use app\user\adapter\DaoProfile;
use PHPUnit\Framework\TestCase;

/**
 * Class DaoProfileTest
 */
class DaoProfileTest extends TestCase
{

    /**
     *
     */
    public function testFindAll()
    {
    }

    /**
     *
     */
    public function testDestroy()
    {
        $person = new FactoryPerson();

        $person->create()->setUserId(3);

        $this->assertEquals($person->create()->getUserId(), 3);
    }

    /**
     *
     */
    public function testFind()
    {
        $person = new FactoryPerson();

        $person->create()->setUserId(3);

        $this->assertEquals($person->create()->getUserId(), 3);
    }

    /**
     *
     */
    public function testPut()
    {

    }

    /**
     *
     */
    public function test__construct()
    {

    }

    /**
     *
     */
    public function testInsert()
    {

    }

    /**
     *
     */
    public function testIsLogin()
    {

    }
}
