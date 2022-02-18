<?php

namespace App\Http\Controllers;

use App\Services\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function __invoke(Request $request,Newsletter  $newsletter)
    {
        $request->validate(['email'=> 'required|email']);

    try {
        $newsletter->subscribe($request->email);
    } catch (\Exception $e) {
        return redirect('/')->with('error','This email could not be subscribed in our newsletter!');
    }   
    
    return redirect('/')->with('success','You are now signed up for our newsletter.');
    }
}
