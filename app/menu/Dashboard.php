<?php


namespace menu;

use app\template\builder\PageBuilder;
use app\template\builder\PageDirector;

/**
 * Class Dashboard
 * @package menu
 */
class Dashboard extends PageDirector
{
    /**
     * Dashboard constructor.
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
        $this->_builder->setTitle("Dashboard");
        $this->_builder->setHeading("
                                    <div class='d-flex' id='wrapper'>

                                    <!-- Sidebar -->
                                    <div class='bg-light border-right' id='sidebar-wrapper'>
                                      <div class='sidebar-heading'>Admin Panel</div>
                                    </div>
                                    <!-- /#sidebar-wrapper -->
                                    
                                    <!-- Route Content -->
                                    <div id='page-content-wrapper'>
                                
                                      <nav class='navbar navbar-expand-lg navbar-light bg-light border-bottom'>
                                        <button class='btn btn-primary' id='menu-toggle'>Side Menu</button>
                                
                                        <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
                                          <span class='navbar-toggler-icon'></span>
                                        </button>                   
                                    </nav>");
        $this->_builder->setText('
                                <div class="login-form"> 
                                        <form>                                                                  
                                        <div class="form-group">
                                        <a href="Login.php" class="text-white btn btn-secondary btn-block">Login</a>
                                        </div>       
                                        <br>
                                        <div class="form-group">
                                        <a href="Register.php" class="text-white btn btn-secondary btn-block">Register</a>
                                        </div>
                                        </form>
                                </div>');
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
