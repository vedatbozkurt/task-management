<?php
/*
 * @Author: @vedatbozkurt
 * @Email: info@wedat.org
 * @Date: 2020-12-12 16:48:32
 * @LastEditors: @vedatbozkurt
 * @LastEditTime: 2020-12-12 16:48:32
 */

namespace VedatBozkurt\TaskManagement\Tests;

use Orchestra\Testbench\TestCase;
use Vedatbozkurt\TaskManagement\TaskManagementServiceProvider;

class ExampleTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [TaskManagementServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
