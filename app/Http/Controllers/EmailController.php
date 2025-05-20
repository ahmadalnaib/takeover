<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Email;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    //


    public function index()
    {
    $userCount = Email::count();
    return Inertia::render('Welcome', [
        'userCount' => $userCount,
    ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:emails,email',
        ]);

        Email::create(['email' => $request->email]);

        return back()->with('success', 'Thank you for signing up!');
    }


}
