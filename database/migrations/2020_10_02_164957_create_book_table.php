<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book', function (Blueprint $table) {
            $table->id();
            $table->string('book_name');
            $table->string('author_name');
            $table->string('category');
            $table->string('sub_category')->nullable();
            $table->longText('description')->nullable();
            $table->string('image')->nullable();
            $table->integer('stock')->default(0);
            $table->string('tag');
            $table->string('is_active')->default('y');
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
        Schema::dropIfExists('book');
    }
}
