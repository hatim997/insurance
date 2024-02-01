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
    Schema::create('insurance_documents_for_verification', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('shipper_id');
      $table->unsignedBigInteger('trucker_id');
      $table->unsignedBigInteger('agency_id');
      $table->string('document_type');
      $table->string('file_path');
      $table->enum('status', ['active', 'inactive']);
      $table->timestamps();

      $table
        ->foreign('shipper_id')
        ->references('id')
        ->on('users');
      $table
        ->foreign('trucker_id')
        ->references('id')
        ->on('users');
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
    Schema::dropIfExists('_insurance_document_for_verification');
  }
};
