<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Roberts\WorkComp\Models\ClassCode;

class CreateRelatedCodesTable extends Migration
{
    public function up()
    {
        Schema::create('related_codes', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(ClassCode::class, 'class_code_id');
            $table->foreignIdFor(ClassCode::class, 'related_code_id');
            $table->string('usage')->nullable();
            $table->unsignedTinyInteger('priority');
            $table->foreignIdFor(app('user'), 'creator_id');
            $table->foreignIdFor(app('user'), 'updater_id');
            $table->timestamps();
        });
    }
}
