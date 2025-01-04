<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Blog extends Model
{
    use HasFactory;

	public function tags() : hasMany {
		return $this->hasMany(Tag::class);
	}
	public function author() : belongsTo {
		return $this->belongsTo(Author::class);
	}

}
