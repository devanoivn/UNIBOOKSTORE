<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    public function up()
{
    Schema::create('books', function (Blueprint $table) {
        $table->id();
        $table->string(column: 'idbuku');
        $table->string('kategori');
        $table->string('judul');
        $table->string('harga');
        $table->integer('stok')->default(0);
        $table->foreignId('penerbit_id')->constrained('publishers')->onDelete('cascade');
        $table->timestamps();
    });
}

    public function down()
    {
        Schema::dropIfExists('books');
    }
}
