<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostprofilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postprofils', function (Blueprint $table) {
            $table->bigIncrements('idpostprofils');
            $table->string('judulpostprofils');
            $table->integer('category_idpostprofils');
            $table->text('contentpostprofils');
            $table->string('gambarpostprofils');
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
        Schema::dropIfExists('postprofils');
    }
}
