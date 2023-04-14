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
            $table->string('first_name');
            $table->string('last_name');
            $table->string('username')->nullable();
            $table->string('email')->unique();
            $table->string('number')->nullable()->default(null);
            $table->timestamp('birth_date');
            $table->enum('gender', ['male','female']);
            $table->string('bio')->nullable()->default(null);
            $table->string('profile_picture')->default('default_profile/user-placeholder.png');
            $table->string('cover')->nullable()->default(null);
            $table->string('location')->nullable()->default(null);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
