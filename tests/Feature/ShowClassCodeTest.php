<?php

namespace Roberts\WorkComp\Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Roberts\WorkComp\Models\ClassCode;
use Roberts\WorkComp\Tests\TestCase;

class ShowClassCodeTest extends TestCase
{
    use RefreshDatabase;

    /** @test **/
    public function a_user_can_see_a_class_code()
    {
        $classCode = ClassCode::factory()->create();

        $this->get("/insurance/class-codes/{$classCode->getRouteKey()}")
            ->assertOk()
            ->assertViewIs('work-comp::class_codes.show')
            ->assertViewHas(['classCode' => $classCode])
            ->assertSee($classCode->title);
    }
}
