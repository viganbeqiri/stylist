<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = \App\Models\Contact::orderBy('id', 'desc')->paginate(10);
        return view('backend.contact.index', compact('contacts'));
    }

    public function show($id)
    {
        $contact = \App\Models\Contact::find($id);
        return view('backend.contact.show', compact('contact'));
    }
    public function contact()
    {
        return view('frontend.contact');
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        \App\Models\Contact::create($data);
        $data['send_message'] = 'Message send successfully';
        return view('frontend.contact', $data);
    }
}
