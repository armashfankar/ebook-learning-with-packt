<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->mediumText('isbn13');
            $table->string('title')->default('Hello World');
            $table->timestamp('publication_date');
            $table->mediumText('authors')->nullable();
            $table->mediumText('categories')->nullable();
            $table->string('concept')->nullable();
            $table->string('language')->nullable();
            $table->string('tool')->nullable();
            $table->string('vendor')->nullable();
            $table->float('price');
            $table->unsignedBigInteger('subject_matter_expert_id');
            $table->foreign('subject_matter_expert_id')->references('id')->on('subject_matter_experts');
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
        Schema::dropIfExists('products');
    }
}
