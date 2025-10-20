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
        Schema::create('students', function (Blueprint $table) {

            $table->id();

            // Basic Student Information
            $table->string('name');
            $table->string('birth_day')->nullable();
            $table->foreignId('blood_group_id')->nullable()->constrained('blood_groups')->nullOnDelete();

            // Parent Information
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('father_profesion')->nullable();

            // Contact Information
            $table->string('parents_phone')->nullable();
            $table->string('relation')->nullable();
            $table->string('email')->nullable();

            // Address
            $table->text('current_address')->nullable();
            $table->text('permanent_address')->nullable();

            // Admission Information
            $table->date('admission_date')->nullable();
            $table->integer('form_number')->nullable();
            $table->integer('admission_number')->nullable();
            $table->decimal('coursefee', 10, 2)->nullable();

            //  জামাতের নাম
            $table->foreignId('jamat_id')->nullable()->constrained('jamats')->nullOnDelete();

            // Boarding Information
            $table->enum('bording_food', ['no', 'yes'])->nullable()->default('no');
            $table->decimal('food_bill', 10, 2)->nullable();

            // Notes
            $table->text('note')->nullable();

            // Student Type & Status
            $table->enum('status', ['active', 'inactive'])->nullable()->default('active');
            $table->enum('meal_type', ['nij_khoraki', 'half_free', 'full_free'])->nullable();
            $table->enum('residential', ['abasik', 'onabashik'])->nullable();
            $table->enum('student_type', ['notun', 'puraton'])->nullable();
            $table->enum('etim', ['no', 'yes'])->default('no');

            // Management Columns
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->string('manage_by')->nullable();
            $table->string('prepared_by')->nullable();

            // Timestamps & Soft Deletes
            $table->timestamps();
            $table->softDeletes(); // Soft delete column

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
