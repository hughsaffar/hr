<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table
                ->foreignId('user_id')
                ->references('id')
                ->on('users');
            $table->string('first_name');
            $table->string('last_name');
            $table->text('sin_number');
            $table->enum('access', ['employee', 'manager', 'admin']);
            $table->unsignedBigInteger('reports_to')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
};
