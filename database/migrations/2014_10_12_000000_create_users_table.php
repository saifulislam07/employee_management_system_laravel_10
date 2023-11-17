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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('name_bn')->nullable();
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->date('dob')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('address')->nullable();
            $table->string('mobile_number')->nullable();
            $table->string('emergency_number')->nullable();
            $table->string('relationship_number')->nullable();
            $table->string('driving_license')->nullable();
            $table->string('bcs_batch')->nullable();
            $table->date('join_date')->nullable();
            $table->date('permanent_date')->nullable();
            $table->longText('permanent_doc')->nullable();
            $table->integer('department_id')->nullable();
            $table->integer('role_id')->nullable();
            $table->string('designation')->nullable();
            $table->date('start_from')->nullable();
            $table->string('image')->nullable();
            $table->enum('status',['active','inactive','block'])->default('inactive');
            $table->enum('freedom_fighter',['yes','no'])->default('no');
             $table->string('gradation_no')->nullable();
             $table->decimal('basic_salary',10,2)->nullable();
             $table->integer('country_id')->nullable();
             $table->integer('district_id')->nullable();
             $table->string('birth_no')->nullable();
             $table->integer('blood_id')->nullable();
             $table->enum('gender',['Male','Female','Other'])->nullable();
             $table->integer('marital_status_id')->nullable();
             $table->integer('religion_id')->nullable();
            $table->rememberToken();
            $table->timestamps();
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
