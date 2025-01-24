<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;



class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // id field
            $table->string('barcode')->unique(); // barcode field (unique)
            $table->string('img')->nullable(); // image field (nullable in case the image is not uploaded)
            $table->string('name'); // name of the product
            $table->decimal('price', 8, 2); // price of the product
            $table->timestamps(); // created_at and updated_at fields
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}

 

