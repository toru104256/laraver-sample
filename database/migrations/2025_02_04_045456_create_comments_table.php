<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
	public function up()
	{
		Schema::create('comments', function (Blueprint $table) {
			$table->id();
			$table->unsignedBigInteger('post_id');
			$table->unsignedBigInteger('commenter_name');
			$table->text('content');
			$table->timestamps();

			$table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
			$table->foreign('commenter_name')->references('id')->on('users')->onDelete('cascade');
		});
	}
};
