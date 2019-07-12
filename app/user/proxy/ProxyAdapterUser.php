<?php


namespace app\user\proxy;


use app\user\adapter\IAdapterUser;


/**
 * Class ProxyAdapterUser
 * @package app\user\proxy
 */
class ProxyAdapterUser implements IAdapterUser
{
    /**
     * @var null
     */
    private $_proxy = null;
    /**
     * @var IAdapterUser
     */
    private $_adapter_user;

    /**
     * ProxyAdapterUser constructor.
     * @param IAdapterUser $adapterUser
     */
    public function __construct(IAdapterUser $adapterUser)
    {
        $this->_adapter_user = $adapterUser;
    }

    /**
     *
     */
    private function proxy()
    {
        echo "<br> Proxy Included <br>";
    }

    /**
     * @return mixed
     */
    public function testing()
    {
        if($this->_proxy === null)
        {
            $this->_proxy = $this->_adapter_user;
        }

        $this->proxy();
        return $this->_proxy->testing();
    }

    /**
     * @return mixed
     */
    public function getOne()
    {
        if($this->_proxy === null)
        {
            $this->_proxy = $this->_adapter_user;
        }
        $this->proxy();
        return $this->_proxy->getOne();
        //echo $this->endProxy();
    }

    /**
     * @return mixed
     */
    public function getAll()
    {
        if($this->_proxy === null)
        {
            $this->_proxy = $this->_adapter_user;
        }
        $this->proxy();
        return $this->_proxy->getAll();
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        if($this->_proxy === null)
        {
            $this->_proxy = $this->_adapter_user;
        }

        return $this->_proxy->getLogin();
    }

    /**
     * @return mixed
     */
    public function getUpdate()
    {
        if($this->_proxy === null)
        {
            $this->_proxy = $this->_adapter_user;
        }
        $this->proxy();
        return $this->_proxy->getUpdate();
    }

    /**
     * @return mixed
     */
    public function getDelete()
    {
        if($this->_proxy === null)
        {
            $this->_proxy = $this->_adapter_user;
        }
        $this->proxy();
        return $this->_proxy->getDelete();
    }

    /**
     * @return mixed
     */
    public function getRegister()
    {
        if($this->_proxy === null)
        {
            $this->_proxy = $this->_adapter_user;
        }
        $this->proxy();
        return $this->_proxy->getRegister();
    }

    /**
     * @return mixed
     */
    public function logout()
    {
        if($this->_proxy === null)
        {
            $this->_proxy = $this->_adapter_user;
        }
        return $this->_proxy->logout();
    }
}