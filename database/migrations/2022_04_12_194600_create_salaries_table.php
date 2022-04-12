<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('salaries', function (Blueprint $table) {
            $table->id();
            $table
                ->foreignId('employee_id')
                ->references('id')
                ->on('employees');
            $table->double('amount');
            $table->date('effective_at');
            $table->timestamps();
            $table->softDeletes();
        });
    }
};
