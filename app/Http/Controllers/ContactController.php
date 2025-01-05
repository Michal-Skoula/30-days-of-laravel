<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
	{
		$contacts = Contact::orderBy('created_at', 'desc')->simplePaginate(5);

		return view('app.contacts.index', ['contacts' => $contacts]);
	}

	public function add()
	{
		return view('app.contacts.create');
	}

	public function create()
	{
		Contact::create([
			'name' 		=> request()->name,
			'job_title' => request()->job_title,
			'email' 	=> request()->email,
			'phone' 	=> request()->tel ?? null,
		]);
		return redirect('/contacts');
	}
}
