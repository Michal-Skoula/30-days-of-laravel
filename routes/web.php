<?php

use App\Http\Controllers\ContactController;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
	return view('app.home', [
		'greeting' => 'Hello'
	]);
});
Route::get('/about', function () {
	return view('app.about');
});

// Contacts
Route::get('/contacts', [ContactController::class, 'index']);
Route::get('/contacts/add', [ContactController::class, 'add']);

Route::post('/contacts/create', [ContactController::class, 'create']);


// Jobs
Route::get('/jobs', function () {
	$jobs = Job::with('employer')
		->orderBy('created_at', 'desc')
		->get();

	return view('app.jobs.index', ['jobs' => $jobs]);
});
Route::get('/jobs/{id}', function ($id) {
	return view('app.jobs.single', ['job' => Job::find($id)]);
});


// Blog
Route::get('/blog', function () {
	$posts = Blog::with(['author','tags'])->get();

	return view('app.blog.all_blogs', ['posts' => $posts]);
});
Route::get('/blog/{id}', function ($id) {
	return view('app.blog.single_blog', ['post' => Blog::find($id)]);
});