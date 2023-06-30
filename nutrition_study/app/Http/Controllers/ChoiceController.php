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
        $choicesId=1;
        while($choicesId<=5){
            $choice = new Choice();
            $choice->note = $request->$choicesId;
            $choice->quiz_id = $quiz_id;
            $choice->save();
            $choicesId+=1;
        }

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
     * 
     *  Choice $choice,
     */
    public function update(Request $request,$quiz_id,$quiz)
    {
        $choicesId=1;
        foreach($quiz->choices as $choice){
            $choice->note = $request->$choicesId;
            $choice->quiz_id = $quiz_id;
            $choice->save();
            $choicesId+=1;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($quiz)
    {
        
        foreach($quiz->choices as $choice){
            $choice->delete();
        }

    }
}
