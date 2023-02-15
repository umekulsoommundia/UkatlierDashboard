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
        Schema::create('product_modes', function (Blueprint $table) {
            $table->id();
            $table->string('productName');
            $table->integer('productPrice');
            $table->string('productQuantity');
            $table->string('categoryId');
            $table->foreign("categoryId")->on("id")->references("category_modes");
            $table->string('subCategoryId');
            $table->foreign("subCategoryId")->on("id")->references("sub_category_modes");
            $table->string('productImage');
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
        Schema::dropIfExists('product_modes');
    }
};
