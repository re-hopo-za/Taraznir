<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->mediumText('summary')->nullable();
            $table->longText('content')->nullable();
            $table->text('cover')->nullable();
            $table->text('thumbnail')->nullable();
            $table->enum('status', ['publish', 'draft'])->default('publish');
            $table->integer('chosen')->nullable()->default(0);
            $table->timestamps();
            $table->softDeletes();
        });

        DB::statement(
            'ALTER TABLE blogs ADD FULLTEXT fulltext_index(title, summary, content)'
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
};
