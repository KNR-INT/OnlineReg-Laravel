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
        Schema::create('parents_details', function (Blueprint $table) {
            $table->id();
            $table->string('father_name');
            $table->bigint('father_mob')->unique();
            $table->timestamp('father_email_verified_at')->nullable();
            $table->string('father_mother_tongue');
            $table->string('residential_address');
            $table->string('area');
            $table->string('district');
            $table->string('state');
            $table->string('country');
            $table->bigint('pincode');
            $table->string('residential_no');
            $table->string('mother_name');
            $table->bigint('mother_mob')->unique();
            $table->timestamp('mother_email_verified_at')->nullable();
            $table->string('mother_mother_tongue');
            $table->rememberToken();
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
        Schema::dropIfExists('parents_details');
    }
};
