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
    Schema::create('insurance_policy_coverage_symbols', function (Blueprint $table) {
      $table->id();
      $table->string('name');
      $table->enum('status', ['active', 'inactive']);
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('_insurance_policy_coverage_symbol');
  }
};
