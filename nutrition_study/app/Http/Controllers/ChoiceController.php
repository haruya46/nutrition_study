<?php

namespace App\Http\Controllers;

use App\Models\Choice;
use Illuminate\Http\Request;

class ChoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request,$quiz_id)
    {
        $quiz=new Choice();
        $quiz->note=$request->choice1;
        $quiz->quiz_id=$quiz_id;
        $quiz->save();
        return back()->with('message', '投稿を作成しました');
    }

    /**
     * Display the specified resource.
     */
    public function show(Choice $choice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Choice $choice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Choice $choice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Choice $choice)
    {
        //
    }
}
