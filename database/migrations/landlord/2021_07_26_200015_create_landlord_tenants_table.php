<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLandlordTenantsTable extends Migration
{
    public function up()
    {
        Schema::create('tenants', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('domain')->unique();
            $table->string('database')->unique();
            $table->string('email')->unique();
            $table->string('mobile')->unique();
            $table->string('password');
            $table->string('subscription')->nullable();
            $table->string('subscription_type')->nullable();
            $table->string('subscription_amount')->nullable();
            $table->timestamps();
        });
    }
}
