<?php


namespace app\controller;

use app\template\builder\HtmlPageBuilder;

class Route
{
    private static $pageGet;
    private static $pagePost;

    public static function get()
    {
        if (static::$pageGet === null) {
            static::$pageGet = new static();
        }
        return static::$pageGet;
    }

    public function login()
    {
        $pageBuilder = new HtmlPageBuilder();

        $pageDirector = new \menu\Login($pageBuilder);

        $pageDirector->buildPage();
    }

    public function dashboard()
    {
        $pageBuilder = new HtmlPageBuilder();

        $pageDirector = new \menu\Dashboard($pageBuilder);

        $pageDirector->buildPage();
    }

    public function register()
    {
        $pageBuilder = new HtmlPageBuilder();

        $pageDirector = new \menu\Register($pageBuilder);

        $pageDirector->buildPage();
    }

    public function registerProfile()
    {
        $db = \app\config\singleton\Database::get();

        $factoryPerson = new \app\user\factory\FactoryPerson();

        $person = $factoryPerson->create();

        $adapter = new \app\user\adapter\AdapterProfile(new \app\user\adapter\DaoProfile($db, $factoryPerson));

        $proxy = new \app\user\proxy\ProxyAdapterProfile($adapter);
        //$proxy->hasLogin();

        $pageBuilder = new HtmlPageBuilder();

        $pageDirector = new \menu\RegisterProfile($pageBuilder);

        $pageDirector->buildPage();
    }

    public function about()
    {
        $pageBuilder = new HtmlPageBuilder();

        $pageDirector = new \menu\About($pageBuilder);

        $pageDirector->buildPage();
    }

    public function home()
    {
        $db = \app\config\singleton\Database::get();

        $factoryPerson = new \app\user\factory\FactoryPerson();

        $person = $factoryPerson->create();

        $adapter = new \app\user\adapter\AdapterProfile(new \app\user\adapter\DaoProfile($db, $factoryPerson));

        $proxy = new \app\user\proxy\ProxyAdapterProfile($adapter);
        $proxy->hasLogin();

        $pageBuilder = new HtmlPageBuilder();

        $pageDirector = new \menu\Home($pageBuilder);

        $pageDirector->buildPage();
    }

    public function profile()
    {
        $db = \app\config\singleton\Database::get();

        $factoryPerson = new \app\user\factory\FactoryPerson();

        $person = $factoryPerson->create();

        $person->setUserId($_SESSION['id']);

        $adapter = new \app\user\adapter\AdapterProfile(new \app\user\adapter\DaoProfile($db, $factoryPerson));

        $proxy = new \app\user\proxy\ProxyAdapterProfile($adapter);
        $proxy->hasLogin();

        $pageBuilder = new HtmlPageBuilder();

        $pageDirector = new \menu\Profile($pageBuilder);

        $pageDirector->buildPage();

        echo '<div class="container table-wrapper">';
        echo '<h3 class="h3 text-center"> Profile </h3>';
        echo '<div class="table-wrapper">';
        echo '<table class="table table-striped">';

        foreach ($proxy->getOne() as $index => $data) :
            echo '<tr>
                    <th class="thead-light"> User ID</th>
                    <td>' . $data['user_id'] . '</td>
                    </tr>
                    <tr>
                    <th scope="col">First Name</th>
                    <td>' . $data['first_name'] . '</td>
                    </tr>
                    <tr>
                    <th scope="col">Last Name</th>
                    <td>' . $data['last_name'] . '</td>
                    </tr>
                    <tr>
                    <th scope="col">Email</th>
                    <td>' . $data['email'] . '</td>
                    </tr>
                    <tr>
                    <th scope="col">Birth</th>
                    <td>' . $data['birth'] . '</td>
                    </tr>
                    <tr>
                    <th scope="col">Occupation</th>
                    <td>' . $data['occupation'] . '</td>
                    </tr>
                    <tr>
                    <th scope="col"><a href="ProfileEdit.php"> Edit</a></th>
                        <th scope="col"><a href="Delete.php">Delete</a></th>
                </tr>';
            endforeach;
        echo "</table>";
        echo "</div>";
        echo "</div>";
    }

    public function profileEdit()
    {
        $db = \app\config\singleton\Database::get();

        $factoryPerson = new \app\user\factory\FactoryPerson();

        $person = $factoryPerson->create();

        $person->setUserId($_SESSION['id']);

        $adapter = new \app\user\adapter\AdapterProfile(new \app\user\adapter\DaoProfile($db, $factoryPerson));

        $proxy = new \app\user\proxy\ProxyAdapterProfile($adapter);
        $proxy->hasLogin();

        $pageBuilder = new HtmlPageBuilder();

        $pageDirector = new \menu\ProfileEdit($pageBuilder);

        $pageDirector->buildPage();

        echo '  <div class="signup-form ">';
        echo'   <form action="ProfileEditAct.php" method="post">
                <h2>Profile Edit </h2>
                <p class="hint-text">Editing Your Profile</p>';
        foreach ($proxy->getOne() as $index => $data) :
        echo '  <input type="hidden" value="'.$data['user_id'].'">
                <div class="form-group">
                <input type="text" class="form-control" name="first_name"  value ="',$data['first_name'].'" required="required">
                </div>
                <div class="form-group">
                <input type="text" class="form-control" name="last_name" value ="'. $data['last_name'].'" required="required">
                </div>
                <div class="form-group">
                <input type="email" class="form-control" name="email" value ="'. $data['email'].'" required="required">
                </div>
                <div class="form-group">
                <input type="text" class="form-control" name="birth" value ="'. $data['birth'].'"  required="required">
                </div>
                <div class="form-group">
                <input type="text" class="form-control" name="occupation"  value ="'. $data['occupation'].'" required="required">
                </div>
                <div class="form-group">
                <label class="checkbox-inline"><input type="checkbox">  I accept the <a href="#" class="text-primary">Terms of Use</a> &amp; <a href="#" class="text-primary">Privacy Policy</a></label>
                </div>';
        endforeach;
        echo'  <div class="form-group">
                <input type="submit" value="update" name="register" class="btn btn-primary btn-block">
                </div>
                </form>
                </div>
                </div>';

    }

    public function member()
    {
        $db = \app\config\singleton\Database::get();

        $factoryPerson = new \app\user\factory\FactoryPerson();

        $person = $factoryPerson->create();

        $adapter = new \app\user\adapter\AdapterProfile(new \app\user\adapter\DaoProfile($db, $factoryPerson));

        $proxy = new \app\user\proxy\ProxyAdapterProfile($adapter);
        $proxy->hasLogin();

        $pageBuilder = new HtmlPageBuilder();

        $pageDirector = new \menu\Member($pageBuilder);

        $pageDirector->buildPage();

        echo '<div class="container mb-0">';
        echo '<div class="table-wrapper">';
        echo '<table class="table table-striped">';
        echo '     <tr>
                        <th>No</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Birth</th>
                        <th>Occupation</th>
                    </tr>
                   ';
        foreach ($proxy->getAll() as $index => $data) :
        echo '     <tr>
                        <td>'. $data['user_id']. '</td>
                        <td>'. $data['first_name']. '</td>
                        <td>'. $data['last_name'] .'</td>
                        <td>'. $data['email'] .'</td>
                        <td>'. $data['birth'] .'</td>
                        <td>'. $data['occupation'] .'</td>
                        
                    </tr>';
                        endforeach;
        echo'       </table>';
        echo'       <div class="text-center">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled"><a href="#"><i class="fa fa-long-arrow-left"></i> Previous</a></li>
                        <li class="page-item"><a href="#" class="page-link">1</a></li>
                        <li class="page-item"><a href="#" class="page-link">2</a></li>
                        <li class="page-item active"><a href="#" class="page-link">3</a></li>
                        <li class="page-item"><a href="#" class="page-link">4</a></li>
                        <li class="page-item"><a href="#" class="page-link">5</a></li>
                        <li class="page-item"><a href="#" class="page-link">Next <i class="fa fa-long-arrow-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>';

    }



    public static function post()
    {
        if(static::$pagePost === null)
        {
            static::$pagePost = new static();
        }
        return static::$pagePost;
    }

    public function loginAct()
    {
        $db = \app\config\singleton\Database::get();

        $factoryPerson = new \app\user\factory\FactoryPerson();

        $person = $factoryPerson->create();

        $adapter = new \app\user\adapter\AdapterUser(new \app\user\adapter\DaoUser($db, $factoryPerson));

        $proxy = new \app\user\proxy\ProxyAdapterUser($adapter);

        if(isset($_POST['login'])) {
            $person->setUserName($_POST['username']);
            $person->setPassword($_POST['password']);
            if($proxy->getLogin() > 0){
                session_start();
            };
        }
    }


    public function RegisterAct()
    {
        $db = \app\config\singleton\Database::get();

        $factoryPerson = new \app\user\factory\FactoryPerson();

        $person = $factoryPerson->create();

        $adapter = new \app\user\adapter\AdapterUser(new \app\user\adapter\DaoUser($db, $factoryPerson));

        $proxy = new \app\user\proxy\ProxyAdapterUser($adapter);

        if(isset($_POST['register'])){
            $person->setUserName($_POST['username']);
            $person->setPassword($_POST['password']);

            $proxy->getRegister();
        }
    }

    public function registerProfileAct()
    {
        $db = \app\config\singleton\Database::get();

        $factoryPerson = new \app\user\factory\FactoryPerson();

        $person = $factoryPerson->create();

        $adapter = new \app\user\adapter\AdapterProfile(new \app\user\adapter\DaoProfile($db, $factoryPerson));

        $proxy = new \app\user\proxy\ProxyAdapterProfile($adapter);
        $proxy->hasLogin();

        if(isset($_POST['register'])) {

            $time = date("Y-m-d");
            $person->setUserId($_SESSION['id']);
            $person->setFirstName($_POST['first_name']);
            $person->setLastName($_POST['last_name']);
            $person->setEmail($_POST['email']);
            $person->setDateOfBirth($_POST['birth']);
            $person->setOccupation($_POST['occupation']);
            $person->setLastUpdate($time);

            $proxy->getRegister();
        }
    }

    public function profileEditAct()
    {
        $db = \app\config\singleton\Database::get();

        $factoryPerson = new \app\user\factory\FactoryPerson();

        $person = $factoryPerson->create();

        $adapter = new \app\user\adapter\AdapterProfile(new \app\user\adapter\DaoProfile($db, $factoryPerson));

        $proxy = new \app\user\proxy\ProxyAdapterProfile($adapter);
        $proxy->hasLogin();

        if(isset($_POST['register'])) {

            $time = date("Y-m-d");
            $person->setUserId($_SESSION['id']);
            $person->setFirstName($_POST['first_name']);
            $person->setLastName($_POST['last_name']);
            $person->setEmail($_POST['email']);
            $person->setDateOfBirth($_POST['birth']);
            $person->setOccupation($_POST['occupation']);
            $person->setLastUpdate($time);


        }
        if($proxy->getUpdate() > 0)
        {
            $header = header('location: Profile.php');
        } else {
            $header = "<script> alert('try again');</script>";
        }

        return $header;
    }

    public function logout()
    {
        $db = \app\config\singleton\Database::get();

        $factoryPerson = new \app\user\factory\FactoryPerson();

        $time = date("Y-m-d");

        $person = $factoryPerson->create();
        $person->setId($_SESSION['id']);
        $person->setLastLogin($time);

        $adapter = new \app\user\adapter\AdapterUser(new \app\user\adapter\DaoUser($db, $factoryPerson));

        $proxy = new \app\user\proxy\ProxyAdapterUser($adapter);

        $proxy->logout();
    }




}