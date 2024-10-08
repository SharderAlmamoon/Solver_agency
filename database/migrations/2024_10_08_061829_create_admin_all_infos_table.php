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
        Schema::create('admin_all_infos', function (Blueprint $table) {
            $table->id();
            $table ->string('name',40);
            $table ->string('email',50);
            $table ->string('phone',20);
            $table ->text('address')->nullable();
            $table ->date('dateofbirth')->nullable();
            $table ->String('promocode')->nullable();
            $table->string('password');
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
        Schema::dropIfExists('admin_all_infos');
    }
};
