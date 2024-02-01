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
    Schema::create('payments', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('subscription_id');
      $table->decimal('billing_amount', 10, 2);
      $table->enum('payment_status', ['pending', 'success', 'failed']);
      $table->date('payment_date');
      $table->enum('status', ['active', 'inactive']);
      $table->timestamps();

      $table
        ->foreign('subscription_id')
        ->references('id')
        ->on('subscriptions');
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('payments');
  }
};
