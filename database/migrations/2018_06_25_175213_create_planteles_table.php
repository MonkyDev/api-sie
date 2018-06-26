<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlantelesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_planteles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomb_plantel');
            $table->string('alias_plantel');
            $table->string('clave_plantel');
            $table->string('estado');
            $table->string('municipio');            
            $table->string('dir_plantel');
            $table->string('no_tel');
            $table->string('no_cell');
            $table->string('fech_incorp_secre');
            $table->string('no_oficio');
            $table->string('registro');
            $table->string('regimen');
            $table->string('web_site');
            $table->string('redes_sociales');
            $table->string('lema');
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
        Schema::dropIfExists('cat_planteles');
    }
}
