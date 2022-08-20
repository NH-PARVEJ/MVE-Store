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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('store_name')->nullable();
            $table->string('phone')->unique()->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('primary_address')->nullable();
            $table->string('address')->nullable();
            $table->string('password');
            $table->string('zip_code')->nullable();
            $table->string('e_tin')->nullable();
            $table->string('division')->nullable();
            $table->string('district')->nullable();
            $table->text('store_logo')->nullable();
            $table->text('nid_copy')->nullable();
            $table->string('trade_license_copy')->nullable();
            $table->text('description')->nullable();
            $table->integer('status')->default(1)->comment('0=Inactive 1=Active');
            $table->integer('role')->default(3)->comment('1=Admin 2=Vendor 3=Customer');
            $table->string('store_slug')->nullable();
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
        Schema::dropIfExists('users');
    }
};
