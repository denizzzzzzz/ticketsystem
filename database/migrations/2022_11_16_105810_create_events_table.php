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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('photo');
            $table->dateTime('event_start');
            $table->dateTime('event_end');
            $table->unsignedBigInteger('available_tickets');
            $table->string('location');
            $table->decimal('price', 20, 2);
            $table->text('description');
            $table->timestamps();

        });
    }
                                                                            //Events
                                                                            //- id
                                                                            //- name (string)
                                                                            //- photo (string)
                                                                            //- event_start (datetime)
                                                                            //- event_end (datetime)
                                                                            //- available_tickets (unsignedInteger)
                                                                            //- location (string)
                                                                            //- price (decimal - precision 20, decimal 2)
                                                                            //- description (text)
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
};
