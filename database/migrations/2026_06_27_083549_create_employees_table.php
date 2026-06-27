<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {

            $table->id();

            $table->string('employee_code')->unique();

            $table->foreignId('department_id')
                  ->constrained()
                  ->cascadeOnDelete();

            $table->foreignId('position_id')
                  ->constrained()
                  ->cascadeOnDelete();

            $table->string('full_name');

            $table->string('email')->unique();

            $table->string('phone')->nullable();

            $table->enum('gender',[
                'Male',
                'Female'
            ]);

            $table->date('birth_date')->nullable();

            $table->text('address')->nullable();

            $table->date('join_date');

            $table->decimal('salary',12,2);

            $table->boolean('status')->default(true);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};