<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->string('name' , 100)->nullable();
            $table->string('email' , 100)->nullable();
            $table->string('phone' , 13)->nullable();
            $table->text('address')->nullable();
            $table->string('username_id' , 100)->nullable();
            $table->string('utm_campaign' , 100)->nullable();
            $table->string('utm_source' , 100)->nullable();
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
        Schema::dropIfExists('leads');
    }
}
