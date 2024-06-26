<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactSendmail;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactForm;


class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('portfolio.index');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function confirm(ContactFormRequest $request)
    {
        $contact = $request->all();
        return view('portfolio.confirm',compact('contact'));
    }
    public function store(Request $request)
    {
        $contact = $request->all();
        Mail::to('info@lce.tokyo')->send(new ContactSendmail($contact));
        $request->session()->regenerateToken();
        return view('portfolio.thanks');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
