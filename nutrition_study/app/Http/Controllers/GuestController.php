<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $guests=Quiz::all();
        return view("guest.index",compact("guests"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Quiz $quiz ,Request $request)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Quiz $quiz)
    {
        return view("guest.show",compact('quiz'));
    }
    public function show_answer(Quiz $quiz,Request $request)
    {
        $guest_answers=[];
        $true_answers=[];
        foreach($request->query as $key=>$answer){
            if($key != "_token"){
                $guest_answers[]=$key;
            }
        }

        foreach($quiz->choices as $choice){
            if($choice->answer_flag==1){
                $true_answers[]=$choice->id;
            }

        }
        if($guest_answers==$true_answers){
            $correct_flag=1;
        }else{
            $correct_flag=2;
        }
    //    $note= $quiz->commentary;
    return view("guest.show",compact("quiz","correct_flag"));
    //    return back($correct_flag);
        // return back()->with("message",$correct_flag);
        // return back()->with(["message",$correct_flag],["note",$note]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Quiz $quiz)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Quiz $quiz)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */


    public function destroy(Quiz $quiz)

    {
        //
    }
}
