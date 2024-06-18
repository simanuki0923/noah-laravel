<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
  {
    return view('index');
  }

  public function confirm(Request $request)
     {
         $contact = $request->only(['content1']);
         return view('confirm', compact('contact'));

     }



    public function thanks(Request $request)
    {
       $contact = $request->only(['content']);
             Contact::create($contact);
             return view('thanks');
    }

}
