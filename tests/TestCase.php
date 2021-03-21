<?php

declare(strict_types=1);

namespace Roberts\WorkComp\Tests;

use Laravel\Nova\NovaCoreServiceProvider;
use Roberts\WorkComp\WorkCompServiceProvider;
use Tipoff\Support\SupportServiceProvider;
use Tipoff\TestSupport\BaseTestCase;

class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app)
    {
        return [
            NovaCoreServiceProvider::class,
            NovaTestbenchServiceProvider::class,
            WorkCompServiceProvider::class,
            SupportServiceProvider::class,
        ];
    }
}
