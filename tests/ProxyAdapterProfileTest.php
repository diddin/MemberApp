<?php

namespace tests;

use app\user\adapter\AdapterProfile;
use app\user\proxy\ProxyAdapterProfile;
use app\user\proxy\ProxyAdapterUser;
use PHPUnit\Framework\TestCase;

class ProxyAdapterProfileTest extends TestCase
{

    public function testAll()
    {
        $expected = ProxyAdapterProfile::class;
        $actual = AdapterProfile::class;

        $this->assertNotEquals($expected, $actual);
    }
}
