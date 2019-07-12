<?php

namespace app\user\adapter;

/**
 * Interface IDaoUser
 * @package app\user\adapter
 */
interface IDaoUser
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
    public function put();

    /**
     * @return mixed
     */
    public function destroy();

    /**
     * @return mixed
     */
    public function login();

    /**
     * @return mixed
     */
    public function logout();

    /**
     * @return mixed
     */
    public function insert();


    /**
     * @return mixed
     */
    public function test();
}