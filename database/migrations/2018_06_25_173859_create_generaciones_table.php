<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeneracionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_generaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->char('mes_ini',10)->nullable();
            $table->smallInteger('anio_ini');
            $table->char('mes_fin',10)->nullable();
            $table->smallInteger('anio_fin');

            /*General datas*/
            $table->unsignedTinyInteger('edo')->default(1);            
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();            
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cat_generaciones');
    }
}
