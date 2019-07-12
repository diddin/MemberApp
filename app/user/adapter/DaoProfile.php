<?php


namespace app\user\adapter;


use app\config\singleton\IDatabase;
use app\user\factory\IFactoryPerson;

/**
 * Class DaoProfile
 * @package app\user\adapter
 */
class DaoProfile implements IDaoProfile
{
    /**
     * @var
     */
    private $_db = null;
    /**
     * @var \app\user\factory\Person
     */
    private $_profile = null;
    /**
     * @var string
     */
    private $_table = "profile";

    /**
     * DaoProfile constructor.
     * @param IDatabase $db
     * @param IFactoryPerson $profile
     */
    public function __construct(IDatabase $db, IFactoryPerson $profile)
    {
        $this->_db = $db->connect();
        $this->_profile = $profile->create();
    }

    /**
     * find method
     * @return $stmt
     */
    public function find()
    {
        $sql = "SELECT * FROM `$this->_table` WHERE user_id = :id";
        $stmt = $this->_db->prepare($sql);
        $stmt->bindParam(":id", $this->_profile->getUserId(), \PDO::PARAM_INT);
        $stmt->execute();
        return $stmt;
    }

    /**
     * findAll emthod
     * @return $stmt
     */
    public function findAll()
    {
        $sql = "SELECT * FROM `$this->_table`";
        $stmt = $this->_db->prepare($sql);
        $stmt->execute();
        return $stmt;
    }

    /**
     * insert method
     * @return $stmt
     */
    public function insert()
    {
        $sql = "INSERT INTO `$this->_table` (user_id, first_name, last_name, email, birth, occupation, last_update ) 
                VALUES (:user_id, :first_name, :last_name, :email, :birth, :occupation, :last_update)";
        $stmt = $this->_db->prepare($sql);
        $stmt->bindParam(":user_id", $this->_profile->getUserId(), \PDO::PARAM_INT);
        $stmt->bindParam(":first_name", $this->_profile->getFirstName(), \PDO::PARAM_STR);
        $stmt->bindParam(":last_name", $this->_profile->getLastName(), \PDO::PARAM_STR);
        $stmt->bindParam(":email", $this->_profile->getEmail(), \PDO::PARAM_STR);
        $stmt->bindParam(":birth", $this->_profile->getDateOfBirth(), \PDO::PARAM_STR);
        $stmt->bindParam(":occupation", $this->_profile->getOccupation(), \PDO::PARAM_STR);
        $stmt->bindParam(":last_update", $this->_profile->getLastUpdate(), \PDO::PARAM_STR);
        $stmt->execute();
        return $stmt;
    }

    /**
     * put method
     * @return $header
     */
    public function put()
    {
        $sql = "UPDATE `$this->_table` SET first_name= :first_name, last_name= :last_name, email= :email, birth= :birth, occupation= :occupation, 
                last_update= :last_update WHERE user_id = :user_id";
        $stmt = $this->_db->prepare($sql);
        $stmt->bindParam(":user_id", $this->_profile->getUserId(), \PDO::PARAM_INT);
        $stmt->bindParam(":first_name", $this->_profile->getFirstName(), \PDO::PARAM_STR);
        $stmt->bindParam(":last_name", $this->_profile->getLastName(), \PDO::PARAM_STR);
        $stmt->bindParam(":email", $this->_profile->getEmail(), \PDO::PARAM_STR);
        $stmt->bindParam(":birth", $this->_profile->getDateOfBirth(), \PDO::PARAM_STR);
        $stmt->bindParam(":occupation", $this->_profile->getOccupation(), \PDO::PARAM_STR);
        $stmt->bindParam(":last_update", $this->_profile->getLastUpdate(), \PDO::PARAM_STR);
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
     * @return $header
     */
    public function destroy()
    {
        $sql = "DELETE FROM `$this->_table` WHERE user_id= :user_id";
        $stmt = $this->_db->prepare($sql);
        $stmt->bindParam(":user_id", $this->_profile->getUserId(), \PDO::PARAM_INT);
        $stmt->execute();

        $header = null;
        if($stmt->execute > 0)
        {
            $header = header('location: Member.php');
        } else {
            $header = "try again";
        }
        return $header;
    }

    /**
     * isLogin method
     * return $header
     */
    public function isLogin()
    {
        $header = null;
        if(!isset($_SESSION['id']))
        {
            $header = header('location: index.php');
        } else {
            $header = true;
        }
        return $header;
    }
}