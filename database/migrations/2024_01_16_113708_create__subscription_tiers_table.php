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
    Schema::create('subscription_tiers', function (Blueprint $table) {
      $table->id();
      $table->string('name');
      $table->string('description');
      $table->decimal('price', 10, 2);
      $table->text('features');
      $table->enum('status', ['active', 'inactive']);
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('_subscription_tiers');
  }
};
