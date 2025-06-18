<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Models\SupportTicket;
use App\Events\SupportTicketCreated;
use App\Http\Controllers\Controller;
use App\Models\ContactInfo;
use Illuminate\Support\Facades\Auth;

class SupportTicketController extends Controller
{
    public function supportTicketPage() {
        $data['supportData'] = [
            'title' => 'Support Ticket',
            'description' => 'Create a support ticket for assistance.',
            'keywords' => 'support, ticket, help, assistance',
        ];
        $data['contact'] = ContactInfo::first();
        return view('frontend.pages.supportPage', $data);
    }


    public function store(Request $request)
    {
        $request->validate([
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
            'name' => 'required_without:user|string|max:255',
            'email' => 'required_without:user|email|max:255',
            'phone' => 'required_without:user|string|max:20',
        ]);

        $ticket = SupportTicket::create([
            'user_id' => Auth::check() ? Auth::user()->id : null,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        event(new SupportTicketCreated($ticket));

        return back()->with('success', 'Your message has been sent!');
    }

}
