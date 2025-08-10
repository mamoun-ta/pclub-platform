<?php

namespace App\Http\Controllers;

use App\Models\SupportTicket;
use Illuminate\Http\Request;

class SupportTicketController extends Controller
{
    public function create()
    {
        return view('support.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        SupportTicket::create($request->all());

        return redirect()->route('support.thankyou')->with('success', 'تم إرسال رسالتك بنجاح!');
    }

    public function thankYou()
    {
        return view('support.thankyou');
    }
}

