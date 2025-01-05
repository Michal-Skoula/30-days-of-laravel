<?php

use App\Models\Blog;
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
Route::get('/contacts', function () {
	$contacts = Contact::simplePaginate(3);

	return view('app.contact', ['contacts' => $contacts]);
});


// Jobs
Route::get('/jobs', function () {
	$jobs = Job::with('employer')->get();

	return view('app.jobs.all_jobs', ['jobs' => $jobs]);
});
Route::get('/jobs/{id}', function ($id) {
	return view('app.jobs.single_job', ['job' => Job::find($id)]);
});


// Blog
Route::get('/blog', function () {
	$posts = Blog::with(['author','tags'])->get();

	return view('app.blog.all_blogs', ['posts' => $posts]);
});
Route::get('/blog/{id}', function ($id) {
	return view('app.blog.single_blog', ['post' => Blog::find($id)]);
});