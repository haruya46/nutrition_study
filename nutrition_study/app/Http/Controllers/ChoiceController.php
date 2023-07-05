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
        $choicesId=array(
            '1'=>'choices1',
            '2'=>'choices2',
            '3'=>'choices3',
            '4'=>'choices4',
            '5'=>'choices5');
        foreach($choicesId as $key=>$choicesId){
            $choice=new Choice;
            $choice->note = $request->$choicesId;
            if($request->$key =="on"){
                $choice->answer_flag=1;
            }else{
                $choice->answer_flag=0;
            }
            $choice->quiz_id = $quiz_id;
            $choice->save();
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
        $checkId=6;
        foreach($quiz->choices as $choice){
            $choice->note = $request->$choicesId;
            if($request->$checkId=="on"){
                $choice->answer_flag=1;
            }else{
                $choice->answer_flag=0;
            }
            $choice->quiz_id = $quiz_id;
            $choice->save();
            $choicesId+=1;
            $checkId+=1;
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
