<?php


namespace app\user\factory;


/**
 * Class Person
 * @package app\user\factory
 */
class Person implements IPerson
{

    /**
     * @var integer $_id
     */
    /**
     * @var string $_userName
     */
    /**
     * @var string $_password
     */
    /**
     * @var string $_active
     */
    /**
     * @var string $_lastLogin
     */
    private static $_id, $_userName, $_password, $_active, $_lastLogin;
    /**
     * @var integer $_userId
     */
    /**
     * @var string $_firstName
     */
    /**
     * @var string $_lastName
     */
    /**
     * @var string $_email
     */
    /**
     * @var string $_birth
     */
    /**
     * @var string $_occupation
     */
    /**
     * @var string $_lastUpdate
     */
    private static $_userId, $_firstName, $_lastName, $_email, $_birth, $_occupation, $_lastUpdate;

    //user table

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        if(!is_numeric($id))
            throw new \InvalidArgumentException('ID can not be non-numeric');

        static::$_id = $id;
    }

    /**
     * @param string $userName
     */
    public function setUserName(string $userName): void
    {
        if(empty($userName))
            throw new \InvalidArgumentException("Username can not be empty");

        static::$_userName = $userName;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        if(empty($password))
            throw new \InvalidArgumentException("Password can not be empty");
        if(preg_match('[A-Z]', $password))
            throw new \InvalidArgumentException("Password must include at least one upper case letter");
        if(preg_match('[a-z]', $password))
            throw new \InvalidArgumentException("Password must include at least one lower case letter");
        if(preg_match('[0-9]', $password))
            throw new \InvalidArgumentException("Password must include at least one number");
        if(preg_match('[]', $password))
            throw new \InvalidArgumentException("Password must include at least one special character");
        if(strlen($password) < 8)
            throw new \UnexpectedValueException("Password must be at least 8 characters in length");

        static::$_password = $password;
        //echo $this->_password;
    }

    /**
     * @param string $active
     */
    public function setActive(string $active): void
    {
        if(empty($active))
            throw new \InvalidArgumentException("Active can not be empty");

        static ::$_active = $active;
    }

    /**
     * @param string $lastLogin
     */
    public function setLastLogin(string $lastLogin): void
    {
        if(empty($lastLogin))
            throw new \UnexpectedValueException("Something went wrong, last login should automate insert");

        static::$_lastLogin = $lastLogin;
    }

    //profile table

    /**
     * @param int $userId
     */
    public function setUserId(int $userId): void
    {
        if(!is_numeric($userId))
            throw new \InvalidArgumentException('ID can not be non-numeric');

        static::$_userId = $userId;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName(string $firstName): void
    {
        if(empty($firstName))
            throw new \InvalidArgumentException("First name can not be empty");

        static::$_firstName = $firstName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName(string $lastName): void
    {
        if(empty($lastName))
            throw new \InvalidArgumentException("Last name can not be empty");

        static::$_lastName = $lastName;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        if(empty($email))
            throw new \InvalidArgumentException("Email can not be empty");
        if (!stristr($email,"@") OR !stristr($email,"."))
            throw new \InvalidArgumentException("Your Email is not correct");

        static::$_email = $email;
    }

    /**
     * @param string $birth
     */
    public function setDateOfBirth(string $birth): void
    {
        if(empty($birth))
            throw new \InvalidArgumentException("Date of birth can not be empty");

        static::$_birth = $birth;
    }

    /**
     * @param string $occupation
     */
    public function setOccupation(string $occupation): void
    {
        if(empty($occupation))
            throw new \InvalidArgumentException("Occupation can not be empty");

        static::$_occupation = $occupation;
    }

    /**
     * @param string $lastUpdate
     */
    public function setLastUpdate(string $lastUpdate): void
    {
        static::$_lastUpdate = $lastUpdate;
    }

    //user table

    /**
     * @return int
     */
    public function getId(): int
    {
        return static::$_id;
    }

    /**
     * @return string
     */
    public function getUserName(): string
    {
        return static::$_userName;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return static::$_password;
    }

    /**
     * @return string
     */
    public function getActive(): string
    {
        return static::$_active;
    }

    /**
     * @return string
     */
    public function getLastLogin(): string
    {
        return static::$_lastLogin;
    }

    //profile table

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return static::$_userId;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return static::$_firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return static::$_lastName;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
       return static::$_email;
    }

    /**
     * @return string
     */
    public function getDateOfBirth(): string
    {
        return static::$_birth;
    }

    /**
     * @return string
     */
    public function getOccupation(): string
    {
        return static::$_occupation;
    }

    /**
     * @return string
     */
    public function getLastUpdate(): string
    {
        return static::$_lastUpdate;
    }
}