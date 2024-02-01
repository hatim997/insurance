<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create('users', function (Blueprint $table) {
      $table->id();
      $table->string('username');
      $table->string('email')->unique();
      $table->text('password');
      $table->unsignedBigInteger('role_id');
      $table->unsignedBigInteger('status');
      $table->timestamps();

      // $table
      //   ->foreign('role_id')
      //   ->references('id')
      //   ->on('roles');
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
