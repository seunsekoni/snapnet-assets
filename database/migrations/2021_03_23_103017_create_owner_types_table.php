<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOwnerTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('owner_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        // create foreign key relationship
        Schema::table('assets', function (Blueprint $table) {
            $table->foreign('owner_type_id')->references('id')->on('owner_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // drop foreign key relationship 
        Schema::table('assets', function (Blueprint $table) {
            $table->dropForeign(['owner_type_id']);
        });
        
        Schema::dropIfExists('owner_types');
    }
}
