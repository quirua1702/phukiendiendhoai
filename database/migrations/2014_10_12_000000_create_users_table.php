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
		Schema::create('nguoidung', function (Blueprint $table) {
		$table->id();
		$table->string('name');
		$table->string('email')->unique();
		$table->string('username')->nullable(); // Tên đăng nhập
		$table->string('role')->default('user'); // Quyền hạn: admin, user
		$table->timestamp('email_verified_at')->nullable();
		$table->string('password');
		$table->rememberToken();
		$table->timestamps();
		$table->engine = 'InnoDB';
		});
	}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nguoidung');
    }
};
