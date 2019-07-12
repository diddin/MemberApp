<?php


namespace app\template\builder;


/**
 * Class PageDirector
 * @package app\template\builder
 */
abstract class PageDirector
{
    /**
     * @var PageBuilder
     */
    public $_builder;

    /**
     * PageDirector constructor.
     * @param PageBuilder $builderIn
     */
    public function __construct(PageBuilder $builderIn)
    {
        $this->_builder = $builderIn;
    }

    /**
     * @return mixed
     */
    abstract function buildPage();

    /**
     * @return mixed
     */
    abstract function getPage();
}