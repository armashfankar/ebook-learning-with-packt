<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectMatterExpertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject_matter_experts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->mediumText('designation');
            $table->mediumText('about');
            $table->mediumText('mentorship');
            $table->mediumText('display_picture');
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
        Schema::dropIfExists('subject_matter_experts');
    }
}
