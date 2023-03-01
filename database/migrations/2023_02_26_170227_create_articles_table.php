<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('nom', 50)->unique();
            $table->text('descripcio');
            $table->float('preu_compra', 7, 2)->unsigned();
            $table->float('preu_venta', 7, 2)->unsigned();
            $table->enum('enviament_domicili',['S','N']);
            $table->integer('stock')->unsigned();
            $table->text('observacions')->nullable();
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
        Schema::dropIfExists('articles');
    }
}
