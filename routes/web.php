<?php

use App\Models\Contact;
use App\Models\Job;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

	return view('app.home', [
		'greeting' => 'Hello'
	]);
});

Route::get('/about', function () {
	return view('app.about');
});

Route::get('/contact', function () {
	return view('app.contact', ['contacts' => Contact::all()]);
});

Route::get('/jobs', function () {
	return view('app.jobs', ['jobs' => Job::all()]);
});

Route::get('/jobs/{id}', function ($id) {
	return view('app.job', ['job' => Job::find($id)]);
});