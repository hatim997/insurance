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
    Schema::create('subscriptions', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('user_id');
      $table->unsignedBigInteger('tier_id');
      $table->date('start_date');
      $table->date('end_date');
      $table->decimal('billing_amount', 10, 2);
      $table->enum('status', ['active', 'inactive', 'pending']);
      $table->timestamps();

      $table
        ->foreign('user_id')
        ->references('id')
        ->on('users');
      $table
        ->foreign('tier_id')
        ->references('id')
        ->on('subscription_tiers');
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('_subscriptions');
  }
};
