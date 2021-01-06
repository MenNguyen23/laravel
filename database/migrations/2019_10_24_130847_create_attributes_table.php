<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttributesTable extends Migration
{
    private $_table = 'co_attributes';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create($this->_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 255)->default('');
            $table->string('column_name', 50)->default('');
            $table->string('note', 2000)->default('');
            $table->unsignedTinyInteger('status')->default(1);
            $table->unsignedInteger('sequence')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists($this->_table);
    }
}
