<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
		{
				Schema::create('loaisanpham', function (Blueprint $table) {
				$table->id();
				$table->string('tenloai');
				$table->string('tenloai_slug');
				$table->timestamps();
				$table->engine = 'InnoDB';
				});
		}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loai_san_phams');
    }
};
