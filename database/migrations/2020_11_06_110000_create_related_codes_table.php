<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelatedCodesTable extends Migration
{
    public function up()
    {
        Schema::create('related_codes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('class_code_id')->references('id')->on('class_codes');
            $table->foreignId('related_code_id')->references('id')->on('class_codes');
            $table->string('usage')->nullable();
            $table->unsignedTinyInteger('priority');
            $table->foreignIdFor(app('user'), 'creator_id');
            $table->foreignIdFor(app('user'), 'updater_id');
            $table->timestamps();
        });
    }
}
