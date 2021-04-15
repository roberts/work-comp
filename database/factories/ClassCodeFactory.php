<?php

declare(strict_types=1);

namespace Roberts\WorkComp\Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;
use Roberts\WorkComp\Models\ClassCode;

class ClassCodeFactory extends Factory
{
    protected $model = ClassCode::class;

    public function definition()
    {
        $code = $this->faker->numberBetween(1000, 9999);

        return [
            'name'          => $code,
            'slug'          => Str::slug($code),
            'phraseology'   => $this->faker->sentences(1, true),
            'creator_id'    => randomOrCreate(app('user')),
            'updater_id'    => randomOrCreate(app('user')),
        ];
    }
}
