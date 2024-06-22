<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->string('photo')
                ->nullable();
            $table->json('name');
            $table->json('description');
            $table->string('url')->nullable();
            $table->string('work_weekdays_from')->default('09:00');
            $table->string('work_weekdays_to')->default('18:00');
            $table->string('work_weekends_from')->default('09:00');
            $table->string('work_weekends_to')->default('18:00');
            $table->boolean('work_in_monday')->default(true);
            $table->boolean('work_in_tuesday')->default(true);
            $table->boolean('work_in_wednesday')->default(true);
            $table->boolean('work_in_thursday')->default(true);
            $table->boolean('work_in_friday')->default(true);
            $table->boolean('work_in_saturday')->default(true);
            $table->boolean('work_in_sunday')->default(true);
            $table->boolean('active')->default(true);
            $table->foreignId('country_id')
                ->nullable()
                ->constrained('countries')
                ->nullOnDelete();
            /** @var \Illuminate\Database\Eloquent\Model $userModel */
            $userModel = new (config('auth.providers.users.model'));
            $table->foreignId(\Illuminate\Support\Str::singular($userModel->getTable()) . '_id')
                ->nullable()
                ->constrained($userModel->getTable())
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('shops');
    }
};
