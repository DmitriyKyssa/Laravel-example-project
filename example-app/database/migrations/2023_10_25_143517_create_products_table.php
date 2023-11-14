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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('title');
            $table->text('description');
            $table->integer('price');
            $table->boolean('is_published')->default(1);
            $table->timestamps();

            $table->softDeletes();

            $table->unsignedBigInteger('brand_id')->nullable();

            $table->index('brand_id', 'product_brand_idx');

            $table->foreign('brand_id', 'product_brand_fk')->on('brands')->references('id');
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
};
