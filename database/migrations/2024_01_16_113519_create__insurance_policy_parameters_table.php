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
    Schema::create('insurance_policy_parameters', function (Blueprint $table) {
      $table->id();
      $table->string('name');
      $table->unsignedBigInteger('insur_policy_type_id');
      $table->enum('status', ['active', 'inactive']);
      $table->timestamps();

      $table
        ->foreign('insur_policy_type_id')
        ->references('id')
        ->on('insurance_policies_types');
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('_insurance_policy_parameters');
  }
};
