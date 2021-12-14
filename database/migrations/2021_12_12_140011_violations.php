<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Violations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

        public function up() 
    { 
        Schema::create('violations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('violation','75');
            $table->string('licenseplate','20');
            $table->string('state','2');
            $table->string('make', '75');
            $table->text('model')->nullable();
            $table->string('location','100');
            $table->foreignId('image_id')->constrained('images');
            $table->date('issuedate');
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
        //
    }
}
