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
            $table->string('father_mob')->unique();
            $table->timestamp('father_email_verified_at')->nullable();
            $table->string('father_mother_tongue');
            $table->string('father_residential_address');
            $table->string('father_area');
            $table->string('father_district');
            $table->string('father_state');
            $table->string('father_country');
            $table->string('father_pincode');
            $table->string('father_residential_no');
            $table->string('father_designation');
            $table->string('father_company');
            $table->string('father_company_address');
            $table->string('father_office_nnumber');
            $table->string('father_annual_income');
            $table->string('mother_name');
            $table->string('mother_mob')->unique();
            $table->timestamp('mother_email_verified_at')->nullable();
            $table->string('mother_mother_tongue');
            $table->string('mother_residential_address');
            $table->string('mother_area');
            $table->string('mother_district');
            $table->string('mother_state');
            $table->string('mother_country');
            $table->string('mother_pincode');
            $table->string('mother_residential_no');
            $table->string('mother_designation');
            $table->string('mother_company');
            $table->string('mother_company_address');
            $table->string('mother_office_number');
            $table->string('mother_annual_income');
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
