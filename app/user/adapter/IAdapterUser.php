<?php


namespace app\user\adapter;


/**
 * Interface IAdapterUser
 * @package app\user\adapter
 */
interface IAdapterUser
{
    /**
     * @return IDaoUser->find()
     */
    public function getOne();

    /**
     * @return IDaoUser->findAll()
     */
    public function getAll();

    /**
     * @return IDaoUser->put()
     */
    public function getUpdate();

    /**
     * @return IDaoUser->destroy()
     */
    public function getDelete();

    /**
     * @return IDaoUser->login()
     */
    public function getLogin();

    /**
     * @return IDaoUser->logout()
     */
    public function logout();

    /**
     * @return IDaoUser->insert()
     */
    public function getRegister();

    /**
     * @return IDaoUser->test()
     */
    public function testing();
}