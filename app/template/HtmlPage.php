<?php


namespace app\template\builder;


/**
 * Class HtmlPage
 * @package app\template\builder
 */
class HtmlPage
{
    /**
     * @var null
     */
    private $_page = null;
    /**
     * @var null
     */
    private $_page_title = null;
    /**
     * @var null
     */
    private $_page_heading = null;
    /**
     * @var null
     */
    private $_page_text = null;

    /**
     * HtmlPage constructor.
     */
    public function __construct() {}

    /**
     * @return null
     */
    public function showPage()
    {
        return $this->_page;
    }

    /**
     * @param $titleIn
     */
    public function setTitle($titleIn)
    {
        $this->_page_title = $titleIn;
    }

    /**
     * @param $headingIn
     */
    public function setHeading($headingIn)
    {
        $this->_page_heading = $headingIn;
    }

    /**
     * @param $textIn
     */
    public function setText($textIn)
    {
        $this->_page_text = $textIn;
    }

    /**
     *
     */
    public function formatPage()
    {
        echo  $this->_page = '<lang !html>';
        echo  $this->_page = '<head><title>'.$this->_page_title. '</title>
                              <meta charset="utf-8">
                              <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                              <meta name="description" content="">
                              <meta name="author" content="">
                              <!-- Bootstrap core CSS -->
                              <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
                            
                              <!-- Custom styles for this template -->
                              <link href="../assets/css/simple-sidebar.css" rel="stylesheet">
                              <!-- Bootstrap core JavaScript -->
                              <script src="../assets/vendor/jquery/jquery.min.js"></script>
                              <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
                              <script src="../assets/js/script.js"></script>
                              </head>';
        echo  $this->_page = '<body>';
        echo  $this->_page = $this->_page_heading;
        echo  $this->_page = $this->_page_text;
        echo  $this->_page = '<!-- Menu Toggle Script -->
                              <script>
                                $("#menu-toggle").click(function(e) {
                                  e.preventDefault();
                                  $("#wrapper").toggleClass("toggled");
                                });
                              </script></body>';
        echo  $this->_page = '</html>';
    }
}