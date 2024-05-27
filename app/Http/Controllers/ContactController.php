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
        /* ` = new Contact();` is creating a new instance of the `Contact` model. This line of
        code initializes a new object of the `Contact` class, which represents a contact record in
        the database. This object will be used to store the form data entered by the user before
        saving it to the database. */
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
