<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFriendTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('friends', function (Blueprint $table) {
      $table->increments('id');
      $table->unsignedInteger('idAmigo1')->nullable();
      $table->foreign('idAmigo1')->references('id')->on('users');
      $table->unsignedInteger('idAmigo2')->nullable();
      $table->foreign('idAmigo2')->references('id')->on('users');
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
    Schema::dropIfExists('friends');
  }
}
