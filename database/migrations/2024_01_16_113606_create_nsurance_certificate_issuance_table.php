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
    Schema::create('insurance_certificate_issuances', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('insurance_policy_type_id');
      $table->unsignedBigInteger('insurance_company_id');
      $table->unsignedBigInteger('client_id');
      $table->text('insurance_policy_notes');
      $table->unsignedBigInteger('policy_cover_syb_id');
      $table->unsignedBigInteger('agency_id');
      $table->string('location');
      $table->string('policy_number');
      $table->decimal('policy_limit_amount', 10, 2);
      $table->text('policy_description');
      $table->date('policy_effective_date');
      $table->date('policy_expiry_date');
      $table->text('additional_notes')->nullable();
      $table->text('additional_remarks1')->nullable();
      $table->text('additional_remarks2')->nullable();
      $table->enum('status', ['active', 'inactive']);
      $table->timestamps();

      $table
        ->foreign('insurance_policy_type_id')
        ->references('id')
        ->on('insurance_policies_types');
      $table
        ->foreign('insurance_company_id')
        ->references('id')
        ->on('insurance_companies');
      $table
        ->foreign('client_id')
        ->references('id')
        ->on('clients');
      $table
        ->foreign('policy_cover_syb_id')
        ->references('id')
        ->on('insurance_policy_coverage_symbols');
      $table
        ->foreign('agency_id')
        ->references('id')
        ->on('users');
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('nsurance_certificate_issuance');
  }
};
