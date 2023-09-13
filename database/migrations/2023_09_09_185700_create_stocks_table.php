<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->string("ticket",6)->nullable(false);
            $table->decimal("price")->nullable(false);
            $table->integer("number")->nullable(false);
            $table->date("date")->nullable(false);
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('stocks');
    }
};
