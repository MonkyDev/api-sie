<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConceptosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_conceptos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('clave_cpto');
            $table->string('desc_cpto');
            $table->decimal('costo',7,2);
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
        Schema::dropIfExists('cat_conceptos');
    }
}
