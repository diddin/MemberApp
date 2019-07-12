<?php


namespace app\user\factory;


/**
 * Class FactoryPerson
 * @package app\user\factory
 */
class FactoryPerson implements IFactoryPerson
{
    /**
     * @return Person
     */
    public function create(): Person
    {
       return new Person();
    }
}