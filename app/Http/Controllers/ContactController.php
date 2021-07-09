<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * @var $contact
    */
    private $contact;

    /**
     * Inject models into the constructor
     * @param Contact $contact
    */
    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contact = new $this->contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();

        redirect()->back()->with('success', 'thanks, we will be in touch');
    }
}
