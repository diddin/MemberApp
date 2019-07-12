<?php

namespace tests;

require '../vendor/autoload.php';

use app\user\factory\Person;
use PHPUnit\Framework\TestCase;

/**
 * Class PersonTest
 * @package tests
 */
class PersonTest extends TestCase
{

    /**
     *
     */
    public function testSetId()
    {
        $person = new Person();

        $person->setId(1);

        $this->assertEquals($person->getId(), 1);
    }

    /**
     *
     */
    public function testSetActive()
    {
        $person = new Person();

        $person->setActive("Yes");

        $this->assertEquals($person->getActive(), "Yes");
    }

    /**
     *
     */
    public function testSetFirstName()
    {
        $person = new Person();

        $person->setFirstName("John");

        $this->assertEquals($person->getFirstName(), "John");
    }

    /**
     *
     */
    public function testSetDateOfBirth()
    {
        $person = new Person();

        $person->setDateOfBirth("1991-10-08");

        $this->assertEquals($person->getDateOfBirth(), "1991-10-08");
    }

    /**
     *
     */
    public function testSetUserId()
    {
        $person = new Person();

        $person->setUserId(1);

        $this->assertEquals($person->getUserId(), 1);
    }

    /**
     *
     */
    public function testSetLastUpdate()
    {
        $person = new Person();

        $person->setLastUpdate("2019-07-01");

        $this->assertEquals($person->getLastUpdate(), "2019-07-01");
    }

    /**
     *
     */
    public function testSetLastName()
    {
        $person = new Person();

        $person->setLastName("Doe");

        $this->assertEquals($person->getLastName(), "Doe");
    }

    /**
     *
     */
    public function testSetUserName()
    {
        $person = new Person();

        $person->setUserName("johndoe");

        $this->assertEquals($person->getUserName(), "johndoe");
    }

    /**
     *
     */
    public function testSetEmail()
    {
        $person = new Person();

        $person->setEmail("trial@mail.com");

        $this->assertEquals($person->getEmail(), "trial@email.com");
    }

    /**
     *
     */
    public function testSetPassword()
    {
        $person = new Person();

        $person->setPassword("encryption");

        $this->assertEquals($person->getPassword(), "encryption");
    }

    /**
     *
     */
    public function testSetLastLogin()
    {
        $person = new Person();

        $person->setLastLogin("2019-07-01");

        $this->assertEquals($person->getLastLogin(), "2019-07-01");
    }

    /**
     *
     */
    public function testSetOccupation()
    {
        $person = new Person();

        $person->setOccupation("IT Marketing");

        $this->assertEquals($person->getOccupation(), "IT Marketing");
    }
}
