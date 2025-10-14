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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Judul buku
            $table->string('isbn')->unique(); // ISBN buku
            $table->text('description')->nullable(); // Deskripsi buku
            $table->date('published_date'); // Tanggal terbit
            $table->decimal('price', 10, 2); // Harga buku
            $table->integer('stock')->default(0); // Stok buku
            $table->string('genre'); // Genre buku
            $table->foreignId('author_id')->constrained('authors')->onDelete('cascade'); // Foreign key ke authors
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
