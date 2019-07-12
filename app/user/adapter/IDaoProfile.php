<?php


namespace app\user\adapter;


/**
 * Interface IDaoProfile
 * @package app\user\adapter
 */
interface IDaoProfile
{
    /**
     * @return mixed
     */
    public function find();

    /**
     * @return mixed
     */
    public function findAll();

    /**
     * @return mixed
     */
    public function insert();

    /**
     * @return mixed
     */
    public function put();

    /**
     * @return mixed
     */
    public function destroy();

    /**
     * @return mixed
     */
    public function isLogin();

}