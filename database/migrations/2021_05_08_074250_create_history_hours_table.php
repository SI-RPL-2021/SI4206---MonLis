<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoryHoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history_hours', function (Blueprint $table) {
            $table->id();
            $table->foreignId('device_id')->constrained('devices')->onUpdate('cascade')->onDelete('cascade');
            $table->double('pemakaian_energi');
            $table->date('tanggal_pemakaian');
            $table->integer('jam_pemakaian');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('history_hours');
    }
}
