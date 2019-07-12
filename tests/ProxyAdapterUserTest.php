<?php

namespace tests;

require '../vendor/autoload.php';

use app\user\proxy\ProxyAdapterUser;
use PHPUnit\Framework\TestCase;

class ProxyAdapterUserTest extends TestCase
{
    public function testAll()
    {
        $expected = ProxyAdapterUser::class;
        $actual = AdapterUser::class;

        $this->assertNotEquals($expected, $actual);
    }
}
