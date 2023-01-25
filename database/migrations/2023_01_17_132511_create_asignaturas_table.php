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
        Schema::create('asignaturas', function (Blueprint $table) {
            // $table->string('codAs');
            // $table->primary('codAs');

            // $table->string('nombreAs');
            // $table->integer('nombreCortoAs');
            // $table->string('profesorAs');
            // $table->string('colorAs');
            // $table->bigInteger('id');
            // $table->timestamps();


            // $table->foreign('id')->references('id')->on('users')->onDelete('cascade');
            
            /**/
            $table->id("codAs")->autoIncrement();
            $table->unsignedBigInteger("user_id");
            $table->string("nombreAs");
            $table->string("nombreCortoAs");
            $table->string("profesorAs");
            $table->string("colorAs");
            $table->timestamps();
            $table->foreign("user_id")->references("id")->on("users")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asignaturas');
    }
};
