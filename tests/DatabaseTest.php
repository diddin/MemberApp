<?php

namespace tests;

require '../vendor/autoload.php';

use app\config\singleton\Database;
use PHPUnit\Framework\TestCase;

/**
 * Class DatabaseTest
 * @package tests
 */
class DatabaseTest extends TestCase
{

    /**
     *
     */
    public function testGet()
    {
        $this->assertSame(Database::get(), Database::get());
    }
}
