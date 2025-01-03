<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

$jobs = [
	'jobs' => [
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
	]
];

Route::get('/', function () {
	return view('app.home', [
		'greeting' => 'Hello'
	]);
});

Route::get('/about', function () {
	return view('app.about');
});

Route::get('/contact', function () {
	return view('app.contact');
});

Route::get('/jobs', function () use ($jobs) {
	return view('app.jobs', $jobs);
});

Route::get('/jobs/job/{id}', function ($id) use ($jobs) {

	$job = Arr::first($jobs['jobs'], fn($job) => $job['id'] == $id);
	isset($job) ?? $job = null; // If a job is not found, return null.

	return view('app.job', [
		'job' => $job
	]);



});