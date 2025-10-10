<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->id('id_produk'); 
            $table->string('nama_produk', 100); 
            $table->string('kategori', 50); 
            $table->decimal('harga_satuan', 12); 
            $table->integer('stok')->default(0); 
            $table->string('satuan', 20); 
            $table->timestamps();

            $table->unique('nama_produk', 'uq_produk_nama');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produk');
    }
};
