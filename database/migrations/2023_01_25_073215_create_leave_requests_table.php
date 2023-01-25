<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leave_requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('created_by')->on('employees');
            $table->foreignId('employee_id')->on('employees');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->boolean('is_include_weekend')->default(0);
            $table->boolean('is_full_day')->default(1);
            $table->foreignId('approver_id')->on('employees');
            $table->string('state')->default('draft');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leave_requests');
    }
};
