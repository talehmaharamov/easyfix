<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->dateTime('date')->nullable();
            $table->text('address')->nullable();
            $table->text('zip')->nullable();
            $table->string('phone');
            $table->string('email');
            $table->string('type')->nullable();
            $table->integer('service_id')->nullable();
            $table->longText('description');
            $table->boolean('read_status');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('contacts');
    }
};
