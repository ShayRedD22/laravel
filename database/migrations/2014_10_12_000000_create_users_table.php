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
            $table->id(); //integer unsigned increment
            $table->string('name'); //varchar(255) default
            //$table->text('name'); //text(+255) default
            $table->string('email')->unique(); //unique es para prooteger el email y que no me deje guardar correos repetidos para que sean cuentas univas
            $table->timestamp('email_verified_at')->nullable(); //verificacion de correos electrocicos... nulable es para que el campo puede quedar basio
            $table->string('password'); // contraseña para los usuarios
            $table->rememberToken();// tipoo varchar de (100)
            $table->timestamps();//create_at update_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users'); //elimina la tabla users
    }
};
