<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::defaultStringLength(191);
        Schema::create('accounts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->decimal('balance', 15, 2)->default(0);
            $table->integer('user_id')->unsigned();
            $table->string('private_key');
            $table->string('account_type')->default('personal');
            $table->string('account_name')->default('personal');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accounts');
    }
}
