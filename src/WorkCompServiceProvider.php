<?php

declare(strict_types=1);

namespace Roberts\WorkComp;

use Tipoff\Support\TipoffPackage;
use Tipoff\Support\TipoffServiceProvider;

class WorkCompApiServiceProvider extends TipoffServiceProvider
{
    public function configureTipoffPackage(TipoffPackage $package): void
    {
        $package
            ->name('work-comp')
            ->hasConfigFile();
    }
}
