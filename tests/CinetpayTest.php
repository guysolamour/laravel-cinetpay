<?php

namespace Guysolamour\Cinetpay\Tests;

use Guysolamour\Cinetpay\Facades\Cinetpay;
use Guysolamour\Cinetpay\ServiceProvider;
use Orchestra\Testbench\TestCase;

class CinetpayTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [ServiceProvider::class];
    }

    protected function getPackageAliases($app)
    {
        return [
            'cinetpay' => Cinetpay::class,
        ];
    }

    public function testExample()
    {
        $this->assertEquals(1, 1);
    }
}
