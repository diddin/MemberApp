<?php


namespace app\user\adapter;

use app\config\singleton\IDatabase;
use app\user\factory\IFactoryPerson;

/**
 * Class DaoUser
 * @package app\user\adapter
 */
class DaoUser implements IDaoUser
{
    private $_table = "user";
    /**
     * @var
     */
    private $_db;
    /**
     * @var \app\user\factory\Person
     */
    private $_user;

    /**
     * DaoUser constructor.
     * @param IDatabase $db
     * @param IFactoryPerson $user
     */
    public function __construct(IDatabase $db, IFactoryPerson $user)
    {
        $this->_db = $db->connect();
        $this->_user = $user->create();
    }

    /**
     * find method
     * @return $stmt
     */
    public function find()
    {
        $sql = "SELECT * FROM `$this->_table` WHERE id= :id";
        $stmt = $this->_db->prepare($sql);
        $stmt->bindParam(":id", $this->_user->getId(), \PDO::PARAM_INT);
        $stmt->execute();
        return $stmt;
    }

    /**
     * findAll method
     * @return  $stmt
     */
    public function findAll()
    {
        $sql = "SELECT * FROM `$this->_table`";
        $stmt = $this->_db->prepare($sql);
        $stmt->execute();
        return $stmt;
    }

    /**
     * put method
     * @return $header
     */
    public function put()
    {
        $sql = "UPDATE `$this->_table` SET username= :username, password= :password , active= :active, last_login= :lastLogin WHERE id= :id";
        $stmt = $this->_db->prepare($sql);
        $stmt->bindParam(":id", $this->_user->getId(), \PDO::PARAM_INT);
        $stmt->bindParam(":username", $this->_user->getUserName(), \PDO::PARAM_STR);
        $stmt->bindParam(":password", $this->_user->getPassword(), \PDO::PARAM_STR);
        $stmt->bindParam(":active", $this->_user->getActive(), \PDO::PARAM_STR);
        $stmt->bindParam(":lastLogin", $this->_user->getLastLogin(), \PDO::PARAM_STR);
        $stmt->execute();

        $header = null;
        if($stmt->execute() > 0){
            $header = header('location: Profile.php');
        } else {
            $header = "<script>alert('Update Failed');</script>";
        }
        return $header;
    }

    /**
     * destroy method
     * @return $stmt
     */
    public function destroy()
    {
        $sql = "DELETE FROM `$this->_table` WHERE id= :id";
        $stmt = $this->_db->prepare($sql);
        $stmt->bindParam(":id", $this->_user->getId(), \PDO::PARAM_INT);
        $stmt->execute();
        return $stmt;
    }

    /**
     * login method
     * @return $session
     */
    public function login()
    {
        $sql = "SELECT * FROM `$this->_table` WHERE username =:username";
        $stmt = $this->_db->prepare($sql);
        $stmt->bindParam(":username", $this->_user->getUserName(), \PDO::PARAM_STR);
        $stmt->execute();

        $session = null;
        if($stmt->rowCount() > 0 ) {
            foreach ($stmt as $index => $data)
                if(password_verify($this->_user->getPassword(), $data['password'])) {
                    session_start();
                    $_SESSION['id'] = $data['id'];
                    header('location: Home.php');
                }
        }

        return $session;
    }

    /**
     * insert method
     * @return $stmt
     */
    public function insert()
    {
        $sql = "INSERT INTO `$this->_table` (username, password, active, last_login) VALUES (:username, :password, :active, :lastLogin)";
        $stmt = $this->_db->prepare($sql);
        //$stmt->bindParam(":id", $this->_user->getId(), \PDO::PARAM_NULL);
        $stmt->bindParam(":username", $this->_user->getUserName(), \PDO::PARAM_STR);
        $stmt->bindParam(":password", $this->_user->getPassword(), \PDO::PARAM_STR);
        $stmt->bindParam(":active", $this->_user->getActive(), \PDO::PARAM_STR);
        $stmt->bindParam(":lastLogin", $this->_user->getLastLogin(), \PDO::PARAM_STR);
        $stmt->execute();
        return $stmt;
    }

    /**
     *
     */
    public function test()
    {
        echo "testing <br>";
    }

    /**
     *  logout method
     *  @return $header
     */
    public function logout()
    {
        session_start();

        $sql = "UPDATE `$this->_table` SET last_login= :lastLogin WHERE id= :id";
        $stmt = $this->_db->prepare($sql);
        $stmt->bindParam(":id", $this->_user->getId(), \PDO::PARAM_INT);
        $stmt->bindParam(":lastLogin", $this->_user->getLastLogin(), \PDO::PARAM_STR);
        $stmt->execute();

        $header = null;
        if(session_destroy() > 0 ) {
            $header = header('location: index.php');
        } else {
            $header = "try again";
        }
        return $header;
    }
}