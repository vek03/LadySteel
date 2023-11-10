<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('denuncias', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_victim');
            $table->foreign('id_victim')->references('id')->on('users');

            $table->unsignedBigInteger('id_attendant')->nullable();
            $table->foreign('id_attendant')->references('id')->on('users');

            $table->decimal('latitude', 11, 8);
            $table->decimal('longitude', 11, 8);

            $table->boolean('status')->default(false);

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('denuncias');
    }
};
