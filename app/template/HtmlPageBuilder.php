<?php


namespace app\template\builder;


/**
 * Class HtmlPageBuilder
 * @package app\template\builder
 */
class HtmlPageBuilder extends PageBuilder
{
    /**
     * @var HtmlPage|null
     */
    private $_page = null;

    /**
     * HtmlPageBuilder constructor.
     */
    public function __construct()
    {
        $this->_page = new HtmlPage();
    }

    /**
     * @param $titleIn
     */
    public function setTitle($titleIn)
    {
       $this->_page->setTitle($titleIn);
    }

    /**
     * @param $headingIn
     */
    public function setHeading($headingIn)
    {
        $this->_page->setHeading($headingIn);
    }

    /**
     * @param $textIn
     */
    public function setText($textIn)
    {
        $this->_page->setText($textIn);
    }

    /**
     *
     */
    public function formatPage()
    {
        $this->_page->formatPage();
    }

    /**
     * @return HtmlPage|null
     */
    public function getPage()
    {
        return $this->_page;
    }

}