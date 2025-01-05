<?php

use App\Models\Author;
use App\Models\Blog;
use App\Models\Tag;
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
		Schema::create('blogs', function (Blueprint $table) {
			$table->id();
			$table->foreignIdFor(Author::class);
			$table->string('title');
			$table->text('excerpt');
			$table->text('content');
			$table->timestamps();
		});

		// Pivot table
		Schema::create('blog_tag', function (Blueprint $table) {
			$table->id();
			$table->foreignIdFor(Blog::class)->constrained()->cascadeOnDelete();
			$table->foreignIdFor(Tag::class)->constrained()->cascadeOnDelete();
		});

		/**
		 * Reverse the migrations.
		 */
	}
	public function down(): void
	{
		Schema::dropIfExists('blogs');
		Schema::dropIfExists('blog_tag');
	}
};
