<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
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
            $table->string('fname');
            $table->string('lname');
            $table->string('tech_id')->nullable($value = true);
            $table->string('address');
            $table->string('city',20);
            $table->char('zip');
            $table->string('state',2);
            $table->string('phone',18);
            $table->date('DOB');
            $table->string('security_level')->nullable($value = true);
            $table->char('role')->default(1);
            $table->boolean('confirmed')->default(0);
            $table->string('status',30)->default('active');
            $table->string('picture')->nullable($value = true);
            $table->string('email')->unique();
            $table->string('password');
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
        Schema::dropIfExists('users');
    }
}
