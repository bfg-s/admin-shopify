<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('product_category_properties', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')
                ->constrained('product_categories')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->json('name');
            $table->string('type');
            $table->integer('order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('product_category_properties');
    }
};
