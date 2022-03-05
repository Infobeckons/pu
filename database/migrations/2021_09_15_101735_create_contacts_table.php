<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('contact1', 15)->nullable();
            $table->string('contact2', 15)->nullable();
            $table->string('contact3', 15)->nullable();
            $table->text('address')->nullable();
            $table->text('social')->nullable();
            $table->string('email', 200)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
