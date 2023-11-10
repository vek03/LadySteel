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
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_type')->default(1);
            $table->foreign('id_type')->references('id')->on('tipos');

            $table->unsignedBigInteger('id_supervisor')->nullable();
            $table->foreign('id_supervisor')->references('id')->on('users');

            $table->unsignedBigInteger('id_device')->nullable();
            $table->foreign('id_device')->references('id')->on('dispositivos');

            $table->string('name');
            $table->string('lastname');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('message')->nullable();
            $table->date('birthday');
            $table->string('img')->default('img/avatares/avatar-one.png');
            
            $table->rememberToken();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
