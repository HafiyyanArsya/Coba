<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipesTable extends Migration
{
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID
            $table->string('title'); // Column for the recipe title
            $table->text('description'); // Column for the recipe description
            $table->string('category'); // Column for the recipe category
            $table->string('image')->nullable(); // Column for the image, nullable
            $table->timestamps(); // Created at and updated at timestamps
            $table->softDeletes(); // Soft deletes
        });
    }

    public function down()
    {
        Schema::dropIfExists('recipes'); // Drop the recipes table if it exists
    }
}