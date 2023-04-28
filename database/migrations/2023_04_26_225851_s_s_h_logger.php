<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SSHLogger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ssh_logger', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->text('command');
            $table->text('output')->nullable();
            $table->string('variables', 100)->nullable();
            $table->string('user',50)->nullable();
            $table->string('commandByIp', 40)->nullable();
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
        Schema::dropIfExists('ssh_logger');
    }
}
