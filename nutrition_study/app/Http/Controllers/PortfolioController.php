<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactSendmail;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactForm;
use App\Models\ProfileAbout;


class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profile_About=profileAbout::all();
        return view('portfolio.index', compact('profile_About'));
    }

    // admin
    public function portfoliostore(Request $request)
    {
        $profile_About=new profileAbout();
        $profile_About->name=$request->name;
        $profile_About->body=$request->body;
        if (request('image')){
            $name = request()->file('image')->getClientOriginalName();
            request()->file('image')->move('storage/images', $name);
            $profile_About->image = $name;
        }
        $profile_About->save();
        return redirect()->route('portfolio.create');
    }
    public function admin()
    {
        $profile_About=profileAbout::all();
        return view('portfolio.admin', compact('profile_About'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('portfolio.create');
    }
    public function store(Request $request)
    {

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
