<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(Request $request){
        $keyword = $request->input('keyword');
        $contact = Contact::query();

        if (!empty($keyword)) {
            $contact->where('title', 'like', "%$keyword%");
        }
        $contactData = $contact->paginate(5);

        return view('contact.index',compact('contactData'));
    }

    public function create(){

        return view('contact.create');
    }

    public function store(ContactRequest $request){
//        dd($request);

        $contact=Contact::create($request->all());
        Mail::to($contact->email)->send(new ContactMail($contact));

        return redirect()->route('thankyou')->with('success', 'Contact  created successfully.');
    }

    public function edit(Contact $contact){

        return view('contact.edit',compact('contact'));
    }

    public function update(Contact $contact , ContactRequest $request){
        $contactData = $request->all();

//        if ($request->hasFile('image')) {
//            $imagePath = $request->file('image')->store('public/contact');
//            $contactData['image'] = str_replace('public/', '', $imagePath);
//        }

        $contact->update($contactData);

        return redirect()->route('thankyou')->with('success', 'contact item successfully updated');
    }


    public function delete(Contact $contact){
        $contact->delete();
        return redirect()->route('contact.index')->with('error','Successfully  contact items deleted');

    }
    public function duplicate(Contact $contact){
        $productDuplicate=$contact->replicate();
        $productDuplicate->save();
        return redirect()->back();
    }
}
