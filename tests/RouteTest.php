<?php

namespace tests;

require '../vendor/autoload.php';

use app\controller\Route;
use app\user\factory\FactoryPerson;
use PHPUnit\Framework\TestCase;

class RouteTest extends TestCase
{

    public function testMember()
    {
        $this->assertEquals(Route::get()->member(), Route::get()->member());
    }

    public function testProfileEditAct()
    {
        $this->assertEquals(Route::post()->profileEditAct(), Route::post()->profileEditAct());
    }

    public function testRegisterAct()
    {
        $this->assertEquals(Route::post()->registerAct(), Route::post()->registerAct());
    }

    public function testPost()
    {
        $this->assertEquals(Route::post(), Route::post());
    }

    public function testLogin()
    {
        $this->assertEquals(Route::get()->login(), Route::get()->login());
    }

    public function testDashboard()
    {
        $this->assertEquals(Route::get()->dashboard(), Route::get()->dashboard());
    }

    public function testHome()
    {
        $this->assertEquals(Route::get()->home(), Route::get()->home());
    }

    public function testRegisterProfile()
    {
        $this->assertEquals(Route::get()->registerProfile(), Route::get()->registerProfile());
    }

    public function testLogout()
    {
        $this->assertEquals(Route::post()->logout(), Route::post()->logout());
    }

    public function testRegister()
    {
        $this->assertEquals(Route::get()->register(), Route::get()->register());
    }

    public function testProfile()
    {
        $this->assertEquals(Route::get()->profile(), Route::get()->profile());
    }

    public function testLoginAct()
    {
        $this->assertEquals(Route::post()->loginAct(), Route::post()->loginAct());
    }

    public function testGet()
    {
        $this->assertEquals(Route::get(), Route::get());
    }

    public function testAbout()
    {
        $this->assertEquals(Route::get()->about(), Route::get()->about());
    }

    public function testProfileEdit()
    {
        $this->assertEquals(Route::get()->profileEdit(), Route::get()->profileEdit());
    }

    public function testRegisterProfileAct()
    {
        $this->assertEquals(Route::post()->registerProfileAct(), Route::post()->registerProfileAct());
    }

}
