<?php


namespace app\user\adapter;


use user\adapter\IAdapterProfile;

/**
 * Class AdapterProfile
 * @package app\user\adapter
 */
class AdapterProfile implements IAdapterProfile
{
    /**
     * @var IDaoProfile
     */
    private $_dao_profile;

    /**
     * AdapterProfile constructor.
     * @param IDaoProfile $daoProfile
     */
    public function __construct(IDaoProfile $daoProfile)
    {
        $this->_dao_profile = $daoProfile;
    }

    /**
     * @return IDaoProfile->find()
     */
    public function getOne()
    {
        return $this->_dao_profile->find();
    }

    /**
     * @return IDaoProfile->findAll()
     */
    public function getAll()
    {
        return $this->_dao_profile->findAll();
    }

    /**
     * @return IDaoProfile->insert()
     */
    public function getRegister()
    {
        return $this->_dao_profile->insert();
    }

    /**
     * @return IDaoProfile->put()
     */
    public function getUpdate()
    {
        return $this->_dao_profile->put();
    }

    /**
     * @return IDaoProfile->destroy()
     */
    public function getDelete()
    {
        return $this->_dao_profile->destroy();
    }

    /**
     * @return IDaoProfile->isLogin()
     */
    public function hasLogin()
    {
        return $this->_dao_profile->isLogin();
    }
}