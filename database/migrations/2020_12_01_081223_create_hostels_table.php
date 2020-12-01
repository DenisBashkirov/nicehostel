<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHostelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('hostels')) {
            Schema::create('hostels', function (Blueprint $table) {
                $table->id();
                $table->string('city');
                $table->string('address');
                $table->string('phone')->nullable();
                $table->string('email')->nullable();
                $table->string('route');
                $table->text('about')->nullable();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hostel');
    }
}
