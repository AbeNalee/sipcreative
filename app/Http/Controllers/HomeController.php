<?php

namespace App\Http\Controllers;

use App\Mail\Subscribed;
use App\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function home()
    {
        return view('guest');
    }

    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ], [
            'required' => 'psst. you forgot something.',
            'email' => 'please enter a valid email'
        ]);

        if (!Subscriber::where('email', $request->email)->exists()) {
            $subscriber = Subscriber::create([
                'email' => $request->email
            ]);

            Mail::to($subscriber->email)
                ->send(new Subscribed());
        }

        return redirect()->back()->with('success', 'you have been subscribed');
    }

    public function unsubscribe(Request $request)
    {
        //
    }

    public function sitemap()
    {
        return response()->view('sitemap');
    }
}
