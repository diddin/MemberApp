<?php


namespace menu;


use app\template\builder\PageBuilder;
use app\template\builder\PageDirector;

/**
 * Class RegisterProfile
 * @package menu
 */
class RegisterProfile extends PageDirector
{
    /**
     * RegisterProfile constructor.
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
        $this->_builder->setTitle("Register Route");
        $this->_builder->setHeading("<div class='d-flex' id='wrapper'>

                                    <!-- Sidebar -->
                                    <div class='bg-light border-right' id='sidebar-wrapper'>
                                      <div class='sidebar-heading'>Admin Panel</div>
                                      <div class='list-group list-group-flush'>
                                        <a href='index.php' class='list-group-item list-group-item-action bg-light'>Dashboard</a>
                                        <a href='Home.php' class='list-group-item list-group-item-action bg-light'>Home</a>
                                        <a href='Profilee.php' class='list-group-item list-group-item-action bg-light'>Show member</a>
                                        <a href='About.php' class='list-group-item list-group-item-action bg-light'>About</a>
                                      </div>
                                    </div>
                                    <!-- /#sidebar-wrapper -->
                                    
                                    <!-- Route Content -->
                                    <div id='page-content-wrapper'>
                                
                                      <nav class='navbar navbar-expand-lg navbar-light bg-light border-bottom'>
                                        <button class='btn btn-primary' id='menu-toggle'>Side Menu</button>
                                
                                        <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                                          <span class='navbar-toggler-icon'></span>
                                        </button>
                                
                                        <div class='collapse navbar-collapse' id='navbarSupportedContent'>
                                          <ul class='navbar-nav ml-auto mt-2 mt-lg-0'>
                                            <li class='nav-item dropdown'>
                                              <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup=\"true\" aria-expanded=\"false\">
                                                More
                                              </a>
                                              <div class='dropdown-menu dropdown-menu-right' aria-labelledby='navbarDropdown'>
                                                <a class='dropdown-item' href='Profile.php'>Profile</a>
                                                <div class='dropdown-divider'></div>
                                                <a class='dropdown-item' href='Logout.php'>Logout</a>
                                              </div>
                                            </li>
                                          </ul>
                                        </div>
                                      </nav>");
        $this->_builder->setText('
                            <div class="signup-form ">
                                <form action="Register.php" method="post">
                                    <h2>Route</h2>
                                    <p class="hint-text">Completing Your Route</p>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="first_name" placeholder="First Name" required="required">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="last_name" placeholder="Last Name" required="required">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Email"required="required">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="birth" placeholder="Birth" required="required">
                                    </div> 
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="occupation" placeholder="Occupation" required="required">
                                    </div>        
                                    <div class="form-group">
                                        <label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="#" class="text-primary">Terms of Use</a> &amp; <a href="#" class="text-primary">Privacy Policy</a></label>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Insert My Route" name="register" class="btn btn-primary btn-block">
                                    </div>
                                </form>
                            </div>
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