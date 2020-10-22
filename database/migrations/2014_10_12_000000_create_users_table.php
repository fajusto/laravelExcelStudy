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
            $table->string('name')->nullable();
            $table->string('cpf', 14)->nullable();
            $table->string('rg',13)->nullable();
            $table->string('born_date')->nullable();
            $table->string('work_place')->nullable();
            $table->string('hire_start')->nullable();
            $table->string('hire_end')->nullable();
            $table->string('hire_status', 20)->nullable();
            $table->string('phone')->nullable();
            $table->string('trading_name')->nullable();
            $table->string('address')->nullable();
            $table->string('bloc')->nullable();
            $table->string('city')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('cnpj')->nullable();
            $table->string('status_cnpj')->nullable();
            $table->string('rescission')->nullable();
            $table->string('no_creci')->nullable();
            $table->string('creci_exp')->nullable();
            
            /* $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken(); */
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
