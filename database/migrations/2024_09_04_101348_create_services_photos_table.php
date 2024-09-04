<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('service_photos', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId('parent_id')->unsigned();
            $table->longText('photo');
            $table->foreign('parent_id')
                ->references('id')
                ->on('service')
                ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('service_photos');
    }
};
