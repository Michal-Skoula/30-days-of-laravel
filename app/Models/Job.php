<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Job
{
    public static function all() : array
	{
		return [
			[
				'id' => 1,
				'title' => 'Teacher',
				'salary' => 40_000
			],
			[
				'id' => 2,
				'title' => 'Student',
				'salary' => 0
			],
			[
				'id' => 3,
				'title' => 'Doctor',
				'salary' => 100_000
			]
		];
	}

	public static function find($id): array | null
	{
		return Arr::first(static::all(), fn($job) => $job['id'] == $id); // If no job is found, returns null
	}
}
