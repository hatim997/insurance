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
    Schema::create('insurance_company_details', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('insurance_company_id');
      $table->string('insurance_company_address');
      $table->string('insurance_company_city');
      $table->string('insurance_company_state');
      $table->string('insurance_company_zip');
      $table->string('insurance_company_cellphone');
      $table->string('insurance_company_email');
      $table->string('insurance_company_naic');
      $table->string('insurance_company_rating');
      $table->string('insurance_company_coverage_amount');
      $table->enum('status', ['active', 'inactive']);
      $table->timestamps();

      $table
        ->foreign('insurance_company_id')
        ->references('id')
        ->on('insurance_companies');
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('_insurance_company_detai');
  }
};
