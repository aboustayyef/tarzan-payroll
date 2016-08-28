<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tarzan_id')->unique();
            $table->string('name');
            $table->datetime('date_of_birth')->nullable();
            $table->string('location');
            $table->string('designation');
            $table->datetime('date_joined')->nullable();
            $table->decimal('basic_pay');
            $table->decimal('element_car');
            $table->decimal('element_rent');
            $table->decimal('element_other');
            $table->boolean('union');
            $table->boolean('married');
            $table->tinyInteger('children');
            $table->boolean('contributes_to_ssf');
            $table->boolean('disabled');
            $table->boolean('soap');
            $table->string('mode_of_payment');
            $table->string('bank_account');
            $table->string('kind_of_cheque');
            $table->decimal('advance')->nullable();
            $table->tinyInteger('days_absent')->nullable();
            $table->string('home_address')->nullable();
            $table->string('house_number')->nullable();
            $table->string('contact_number')->nullable();
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
        Schema::drop('employees');
    }
}
