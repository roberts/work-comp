<?php

declare(strict_types=1);

namespace Roberts\WorkComp;

use Roberts\WorkComp\Models\ClassCode;
use Roberts\WorkComp\Models\WcRate;
use Roberts\WorkComp\Policies\ClassCodePolicy;
use Roberts\WorkComp\Policies\WcRatePolicy;
use Tipoff\Support\TipoffPackage;
use Tipoff\Support\TipoffServiceProvider;

class WorkCompServiceProvider extends TipoffServiceProvider
{
    public function configureTipoffPackage(TipoffPackage $package): void
    {
        $package
            ->hasPolicies([
                ClassCode::class => ClassCodePolicy::class,
                WcRate::class => WcRatePolicy::class,
            ])
            ->hasNovaResources([
                \Roberts\WorkComp\Nova\ClassCode::class,
                \Roberts\WorkComp\Nova\WcRate::class,
            ])
            ->name('work-comp')
            ->hasConfigFile();
    }
}
