<?php

namespace Chep6915\ISocial\Tests;

use Chep6915\ISocial\Facades\ISocial;
use Chep6915\ISocial\ISocialServiceProvider;
use Chep6915\ISocial\RouteServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            ISocialServiceProvider::class,
            RouteServiceProvider::class
        ];

    }

    protected function getPackageAliases($app)
    {
        return [
            'ISocial' => ISocial::class,
        ];
    }
}