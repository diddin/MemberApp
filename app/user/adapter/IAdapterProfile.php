<?php


namespace user\adapter;


use app\user\adapter\IDaoProfile;

/**
 * Interface IAdapterProfile
 * @package user\adapter
 */
interface IAdapterProfile
{
    /**
     * @return IDaoProfile->find()
     */
    public function getOne();

    /**
     * @return IDaoProfile->findAll()
     */
    public function getAll();

    /**
     * @return IDaoProfile->put()
     */
    public function getUpdate();

    /**
     * @return IDaoProfile->insert()
     */
    public function getRegister();

    /**
     * @return IDaoProfile->destroy()
     */
    public function getDelete();

    /**
     * @return IDaoProfile->isLogin()
     */
    public function hasLogin();
}