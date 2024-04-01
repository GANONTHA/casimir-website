<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //index
    public function index()
    {
        return view('frontEnd.master');
    }
    //method to grab the contact form data and store in the db
    public function store(Request $request)
    {
        //validate the form data
        $request->validate([
            'name' => 'required',
            'objet' => 'required',
            'email' => 'required|email',
            'message' => 'required|max:500'
        ]);

        //store the form data in the db
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->objet = $request->objet;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save();

        //redirect to the contact page with a success message
        return redirect('/contact')->with('success', 'Message sent successfully');
    }
}
