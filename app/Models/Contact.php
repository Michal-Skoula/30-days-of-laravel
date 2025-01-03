<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
	protected $fillable = ['name', 'job_title', 'phone', 'email'];
}
