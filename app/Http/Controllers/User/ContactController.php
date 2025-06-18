<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Models\SupportTicket;
use App\Events\SupportTicketCreated;
use App\Http\Controllers\Controller;
use App\Models\ContactInfo;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function contactPage() {
        $data['contact'] = ContactInfo::first();
        return view('frontend.pages.contactPage', $data);
    }


    public function contactForm(Request $request)
    {
        $request->validate([
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
            'name' => 'required_without:user|string|max:255',
            'email' => 'required_without:user|email|max:255',
        ]);

        $ticket = SupportTicket::create([
            'user_id' => Auth::check() ? Auth::user()->id : null,
            'name' => Auth::check() ? Auth::user()->name : $request->name,
            'email' => Auth::check() ? Auth::user()->email : $request->email,
            'phone' => Auth::check() ? Auth::user()->phone : $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        event(new SupportTicketCreated($ticket));

        return back()->with('success', 'Your message has been sent!');
    }

}
