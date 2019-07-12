<?php


namespace app\user\factory;


/**
 * Interface IFactoryPerson
 * @package app\user\factory
 */
interface IFactoryPerson
{
    /**
     * @return Person
     */
    public function create(): Person;
}