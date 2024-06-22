<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->float('total_price');
            $table->float('discount');
            $table->float('shipping');
            $table->string('payment_currency');
            $table->string('payment_commission');
            $table->json('details');
            $table->string('status');
            /** @var \Illuminate\Database\Eloquent\Model $userModel */
            $userModel = new (config('auth.providers.users.model'));
            $table->foreignId(\Illuminate\Support\Str::singular($userModel->getTable()) . '_id')
                ->nullable()
                ->constrained($userModel->getTable())
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->foreignId('payment_method_id')
                ->constrained('payment_methods')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->foreignId('country_id')
                ->constrained('countries')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->foreignId('currency_id')
                ->constrained('currencies')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->foreignId('delivery_id')
                ->constrained('deliveries')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
