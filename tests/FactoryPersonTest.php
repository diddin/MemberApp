<?php

namespace tests;

require '../vendor/autoload.php';
use app\user\factory\FactoryPerson;
use app\user\factory\Person;
use PHPUnit\Framework\TestCase;

/**
 * Class FactoryPersonTest
 * @package tests
 */
class FactoryPersonTest extends TestCase
{

    /**
     *
     */
    public function testCreate()
    {
        $person = new Person();

        $factory = new FactoryPerson();

        $this->assertEquals($person, $factory->create());
    }
}
