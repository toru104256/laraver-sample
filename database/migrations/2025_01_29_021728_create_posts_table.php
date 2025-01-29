<?php
        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreatePostsTable extends Migration
        {
            /**
             * Run the migrations.
             */
            public function up(): void
            {
                Schema::create('posts', function (Blueprint $table) {
                    $table->id(); // Auto-incrementing BIGINT UNSIGNED primary key (id)
                    $table->unsignedBigInteger('user_id'); // BIGINT UNSIGNED for user_id
                    $table->string('name', 255); // VARCHAR(255) for name
                    $table->text('contents'); // TEXT for contents
                    $table->timestamps(); // Adds created_at and updated_at columns
                });
            }

            /**
             * Reverse the migrations.
             */
            public function down(): void
            {
                Schema::dropIfExists('posts'); // Drop the table if the migration is rolled back
            }
        }
