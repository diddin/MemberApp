<?php


namespace menu;


use app\template\builder\PageBuilder;
use app\template\builder\PageDirector;

/**
 * Class Login
 * @package menu
 */
class Login extends PageDirector
{
    /**
     * Login constructor.
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
        $this->_builder->setTitle("Login");
        $this->_builder->setHeading("");
        $this->_builder->setText('
        <div class="login-form">
                    <form action="LoginAct.php" method="post">
                        <h2 class="text-center">Login</h2>       
                        <div class="form-group">
                            <input type="text" class="form-control" name="username" placeholder="Username" required="required">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password" required="required">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="login" class="btn btn-primary btn-block" value="Login">
                        </div>
                        <div class="clearfix">
                            <label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
                            <a href="#" class="pull-right">Forgot Password?</a>
                        </div>        
                    </form>
            <p class="text-center"><a href="Register.php">Create an Account</a></p>
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