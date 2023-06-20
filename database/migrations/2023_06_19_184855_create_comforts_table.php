<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations. DONE
     */
    public function up(): void
    {
        Schema::create('comforts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('categoryId')->references('id')->on('comfort_categories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comforts');
    }
};
