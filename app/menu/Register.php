<?php


namespace menu;


use app\template\builder\PageBuilder;
use app\template\builder\PageDirector;

/**
 * Class Register
 * @package menu
 */
class Register extends PageDirector
{
    /**
     * Register constructor.
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
        $this->_builder->setTitle("Register");
        $this->_builder->setHeading("");
        $this->_builder->setText('<div class="login-form">
            <form action="Register.php" method="post">
                <h2 class="text-center">Register</h2>       
                <div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="Username" required="required">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password" required="required">
                </div>
                <div class="form-group">
                    <input type="submit" name="register" class="btn btn-primary btn-block" value="Register">
                </div>
                <div class="text-center">                  
                    <a href="Login.php" class="pull-right text-center">I already have account</a>
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