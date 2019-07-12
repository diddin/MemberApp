<?php


namespace app\template\builder;


/**
 * Class PageBuilder
 * @package app\template\builder
 */
abstract class PageBuilder
{
    /**
     * @param $titleIn
     * @return mixed
     */
    abstract function setTitle($titleIn);

    /**
     * @param $headingIn
     * @return mixed
     */
    abstract function setHeading($headingIn);

    /**
     * @param $textIn
     * @return mixed
     */
    abstract function setText($textIn);

    /**
     * @return mixed
     */
    abstract function formatPage();

    /**
     * @return mixed
     */
    abstract function getPage();
}