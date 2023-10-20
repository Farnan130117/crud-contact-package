<?php

namespace farnan\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use farnan\Contact\Models\Contact;



class ContactController extends Controller
{
    public function index()
    {
        $contacts= Contact::all();
        //dd($contacts);
        return view('contact::contact', ['contacts' => $contacts]);
    }

    public function send(Request $request)
    {
       // dd("test");
       // Validate the input
       $request->validate([
        'name' => 'required',
        'email' => 'required|email',
       ]);
        
        Contact::create($request->all());
        return redirect(route('contact'));
    }

    public function edit($id)
    {
        //dd($id);
        $contact = Contact::find($id);
        
        return view('contact::editcontact', ['contact' => $contact]);
    }

    public function update(Request $request, $id)
    {
        // Validate the input
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        // Find the contact by ID
        $contact = Contact::find($id);

        // Update the contact properties
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->save();

       
        return redirect(route('contact'));
    }

    public function destroy($id)
    {
        $contact = Contact::find($id);
        $contact->delete();
    
        return redirect(route('contact'));
    
    }
}
