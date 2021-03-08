<?php

declare(strict_types=1);

namespace Tipoff\Checkout\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Roberts\WorkComp\Models\ClassCode;
use Roberts\WorkComp\Models\Rate;

class RateFactory extends Factory
{
    protected $model = Rate::class;

    public function definition()
    {
        return [
            'class_code_id'     => randomOrCreate(ClassCode::class),
            'year'              => $this->faker->numberBetween(1980, 2022),
            'amount'            => $this->faker->numberBetween(30, 3000),
            'creator_id'        => randomOrCreate(app('user')),
            'updater_id'        => randomOrCreate(app('user')),
        ];
    }
}
