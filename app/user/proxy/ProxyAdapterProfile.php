<?php


namespace app\user\proxy;


use user\adapter\IAdapterProfile;

/**
 * Class ProxyAdapterProfile
 * @package app\user\proxy
 */
class ProxyAdapterProfile implements IAdapterProfile
{
    /**
     * @var null
     */
    private $_proxy = null;
    /**
     * @var IAdapterProfile
     */
    private $_adapter_profile;

    /**
     * ProxyAdapterProfile constructor.
     * @param IAdapterProfile $adapterProfile
     */
    public function __construct(IAdapterProfile $adapterProfile)
    {
        $this->_adapter_profile = $adapterProfile;
    }

    /**
     * @return $proxy
     */
    private function proxy()
    {
        $proxy = "Proxy Included";
        return $proxy;
    }

    /**
     * @return mixed
     */
    public function getOne()
    {
        if($this->_proxy === null)
        {
            $this->_proxy = $this->_adapter_profile;
        }

        $this->proxy();
        return $this->_proxy->getOne();
    }

    /**
     * @return mixed
     */
    public function getAll()
    {
        if($this->_proxy === null)
        {
            $this->_proxy = $this->_adapter_profile;
        }
        $this->proxy();
        return $this->_proxy->getAll();
    }

    /**
     * @return mixed
     */
    public function getRegister()
    {
        if($this->_proxy === null)
        {
            $this->_proxy = $this->_adapter_profile;
        }
        $this->proxy();
        return $this->_proxy->getRegister();
    }

    /**
     * @return mixed
     */
    public function getUpdate()
    {
        if($this->_proxy === null)
        {
            $this->_proxy = $this->_adapter_profile;
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
            $this->_proxy = $this->_adapter_profile;
        }
        $this->proxy();
        return $this->_proxy->getDelete();
    }

    /**
     * @return bool|mixed
     */
    public function hasLogin()
    {
        if($this->_proxy === null)
        {
            $this->_proxy = $this->_adapter_profile;
        }

        if($this->_proxy->hasLogin() < 1) {
            return true;
        } else {
            $this->proxy();
            return true;
        }
    }
}