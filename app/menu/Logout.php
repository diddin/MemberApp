<?php


namespace menu;


use app\template\builder\PageBuilder;
use app\template\builder\PageDirector;

class Logout extends PageDirector
{
    /**
     * Logout constructor.
     * @param PageBuilder $builderIn
     */
    public function __construct(PageBuilder $builderIn)
    {
        parent::__construct($builderIn);
    }

    /**
     *
     */
    public function buildPage()
    {
        $this->_builder->setTitle("Logout");
        $this->_builder->setHeading("");
        $this->_builder->setText("");
        $this->_builder->formatPage();
    }

    /**
     * @return mixed
     */
    public function getPage()
    {
        return $this->_builder->getPage();
    }

}