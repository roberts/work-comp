<?php

declare(strict_types=1);

namespace Roberts\WorkComp\Tests;

use Laravel\Nova\NovaCoreServiceProvider;
use Roberts\WorkComp\WorkCompServiceProvider;
use Spatie\Permission\PermissionServiceProvider;
use Tipoff\Authorization\AuthorizationServiceProvider;
use Tipoff\Support\SupportServiceProvider;
use Tipoff\TestSupport\BaseTestCase;
use Tipoff\TestSupport\Providers\NovaPackageServiceProvider;

class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app)
    {
        return [
            NovaCoreServiceProvider::class,
            NovaPackageServiceProvider::class,
            PermissionServiceProvider::class,
            AuthorizationServiceProvider::class,
            WorkCompServiceProvider::class,
            SupportServiceProvider::class,
        ];
    }
}
