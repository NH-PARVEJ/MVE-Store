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
            $table->increments('id');
            $table->string('title');
            $table->string('slug');
            $table->string('long_description')->nullable();
            $table->string('short_description')->nullable();
            $table->integer('regular_price');
            $table->unsignedInteger('sell_price')->nullable();
            $table->unsignedInteger('quantity')->default(1);
            $table->integer('brand-id');
            $table->integer('category_id');
            $table->text('meta_tags')->nullable();
            $table->text('vendor_id')->nullable();
            $table->text('featured_product')->default(1)->comment('0=Disabled, 1=Enabled');
            $table->text('status')->default(1)->comment('1=Active, 0=Inactive');
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
};
