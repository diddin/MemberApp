<?php


namespace app\user\adapter;


/**
 * Class AdapterUser
 * @package app\user\adapter
 */
class AdapterUser implements IAdapterUser
{
    /**
     * @var IDaoUser
     */
    private $_dao_user;

    /**
     * AdapterUser constructor.
     * @param IDaoUser $daoUser
     */
    public function __construct(IDaoUser $daoUser)
    {
        $this->_dao_user = $daoUser;
    }

    /**
     * @return IDaoUser->test
     */
    public function testing()
    {
        return $this->_dao_user->test();
    }

    /**
     * @return IDaoUser->find()
     */
    public function getOne()
    {
        return $this->_dao_user->find();
    }

    /**
     * @return IDaoUser->findAll()
     */
    public function getAll()
    {
        return $this->_dao_user->findAll();
    }

    /**
     * @return IDaoUser->put()
     */
    public function getUpdate()
    {
        return $this->_dao_user->put();
    }

    /**
     * @return IDaoUser->destroy()
     */
    public function getDelete()
    {
        return $this->_dao_user->destroy();
    }

    /**
     * @return IDaoUser->login()
     */
    public function getLogin()
    {
        return $this->_dao_user->login();
    }

    /**
     * @return IDaoUser->insert()
     */
    public function getRegister()
    {
        return $this->_dao_user->insert();
    }

    /**
     * @return IDaoUser->logout()
     */
    public function logout()
    {
        return $this->_dao_user->logout();
    }
}