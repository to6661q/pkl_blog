<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilpostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profilposts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('profiljudul');
            $table->integer('profilcategory_id');
            $table->text('profilcontent');
            $table->string('profilgambar');
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
        Schema::dropIfExists('profilposts');
    }
}
