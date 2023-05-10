<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('unique_id')->nullable();
            $table->string('email')->nullable();
            $table->string('type');
            $table->string('password')->nullable();
            $table->string('gender')->nullable();
            $table->string('roll_number')->nullable();
            $table->string('image')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('section')->nullable();
            $table->string('class')->nullable();
            $table->string('admission_id')->nullable();
            $table->string('religion')->nullable();
            $table->date('dob')->nullable();
            $table->string('phone')->nullable();
            $table->date('joining_date')->nullable();
            $table->string('qualification')->nullable();
            $table->string('experience')->nullable();
            $table->integer('school')->nullable();
            $table->double('monthly_fee')->nullable();
            $table->string('address')->nullable();
            $table->string('state')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
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
        Schema::dropIfExists('users');
    }
}
