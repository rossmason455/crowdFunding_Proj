<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Support\Facades\Config;

abstract class TestCase extends BaseTestCase
{
    public function setUp(): void
    {
     parent::setUp();
 
 
     Config::set('database.connections.mysql.database', 'testing_db');
    }
    
}
