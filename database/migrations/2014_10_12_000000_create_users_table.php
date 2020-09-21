<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            
            $table->string('password');
<<<<<<< HEAD
            $table->string('address');
            $table->date('DOB');
            $table->text('photo');
=======
            /*$table->text('address');
            $table->string('birthday');

            $table->text('photo');*/
>>>>>>> 255d676a78e059e6fdc5116729a5b2f79c5cd62b
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
