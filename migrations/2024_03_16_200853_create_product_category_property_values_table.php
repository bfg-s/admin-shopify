<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('product_category_property_values', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_property_id')
                ->constrained('product_category_properties')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->foreignId('category_id')
                ->constrained('product_categories')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->json('value');
            $table->integer('order')->default(0);
            $table->timestamps();
        });

        Schema::create('product_property_values', function (Blueprint $table) {
            $table->foreignId('product_id')
                ->constrained('products')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->foreignId('property_value_id')
                ->constrained('product_category_property_values')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
        });
    }

    public function down(): void
    {
        Schema::table('product_category_property_values', function (Blueprint $table) {
            $table->dropForeign('product_category_property_values_category_id_foreign');
            $table->dropForeign('product_category_property_values_category_property_id_foreign');
        });
        Schema::table('product_property_values', function (Blueprint $table) {
            $table->dropForeign('product_property_values_product_id_foreign');
            $table->dropForeign('product_property_values_property_value_id_foreign');
        });
        Schema::dropIfExists('product_category_property_values');
        Schema::dropIfExists('product_property_values');
    }
};
