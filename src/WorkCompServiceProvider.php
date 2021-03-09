<?php

declare(strict_types=1);

namespace Roberts\WorkComp;

use Roberts\WorkComp\Models\ClassCode;
use Roberts\WorkComp\Models\WcRate;
use Roberts\WorkComp\Policies\ClassCodePolicy;
use Roberts\WorkComp\Policies\WcRatePolicy;
use Tipoff\Support\TipoffPackage;
use Tipoff\Support\TipoffServiceProvider;

class WorkCompApiServiceProvider extends TipoffServiceProvider
{
    public function configureTipoffPackage(TipoffPackage $package): void
    {
        $package
            ->hasPolicies([
                ClassCode::class => ClassCodePolicy::class,
                WcRate::class => WcRatePolicy::class,
            ])
            ->hasNovaResources([
                \Tipoff\Bookings\Nova\ClassCode::class,
                \Tipoff\Bookings\Nova\WcRate::class,
            ])
            ->name('work-comp')
            ->hasConfigFile();
    }
}
