<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('mobile_phones', function (Blueprint $table) {
            $table->id();
            $table->string('model', 100);
            $table->string('cpu', 100);
            $table->integer('ram');
            $table->foreignId('brand_id')->constrained('brands')->onDelete('cascade');
            $table->foreignId('os_id')->constrained('operating_systems')->onDelete('cascade');
            $table->decimal('launch_price', 10, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mobile_phones');
    }
};
