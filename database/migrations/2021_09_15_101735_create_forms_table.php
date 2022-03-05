<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->tinyInteger('Id', true);
            $table->string('PURF_ID',15);
            $table->string('image', 50);
            $table->string('eventname', 20);
            $table->string('age-group', 20);
            $table->string('member', 10)->nullable();
            $table->tinyInteger('membernum')->nullable();
            $table->string('groupname', 40)->nullable();
            $table->tinyInteger('amount');
            $table->string('name', 50);
            $table->string('fname', 50);
            $table->date('dob');
            $table->tinyInteger('age')->nullable();
            $table->string('payment', 10);
            $table->text('address');
            $table->string('city', 25);
            $table->string('state', 25);
            $table->string('email', 50);
            $table->string('institute', 50);
            $table->bigInteger('phone');
            $table->string('gender', 10);
            $table->text('declaration');
            $table->date('date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('forms');
    }
}
