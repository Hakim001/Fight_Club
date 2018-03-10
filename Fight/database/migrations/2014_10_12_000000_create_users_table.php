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
            $table->string('name', 110)->nullable;
            $table->string('email', 110)->unique();
            $table->string('password', 110);
            $table->string('username', 110)->unique();
			$table->binary('image')->nullable();
			$table->string('name_image')->nullable();
			$table->text('description')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->timestamp('activated_at')->nullable();
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
