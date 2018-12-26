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
        Schema::create('accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('surname')
                ->nullable(false);
            $table->string('givenname')
                ->nullable(false);
            $table->string('email')
                ->unique()
                ->nullable(false);
            $table->text('bio')
                ->nullable(true);
            $table->string('username')
                ->unique()
                ->nullable(false);
            $table->boolean('disabled')
                ->default(false)
                ->nullable(false);
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
        Schema::dropIfExists('accounts');
    }
}
