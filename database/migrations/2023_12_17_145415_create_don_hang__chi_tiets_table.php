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
        Schema::create('donhangchitiet', function (Blueprint $table) {
            $table->id();
            $table->foreignId('donhang_id')->constrained('donhang');
            $table->foreignId('sanpham_id')->constrained('sanpham');
            $table->integer('soluongban');
            $table->double('dongiaban');
            
            $table->timestamps();
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donhangchitiet');
    }
};
