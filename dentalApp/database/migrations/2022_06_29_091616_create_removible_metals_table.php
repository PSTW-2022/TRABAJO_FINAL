<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRemovibleMetalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('removible_metals', function (Blueprint $table) {
            $table->id();
            $table->enum('dientes',['31,32','33,34','35,36','37,38','41,42','43,44','45,46','47,48']);
            $table->string('color');
            $table->string('ganchos');
            $table->foreignId('id_trabajo')
            ->nullable()
            ->constrained('trabajos')
            ->cascadeOnUpdate()
            ->nullOnDelete();
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
        Schema::dropIfExists('removible_metals');
    }
}
