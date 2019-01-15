<?php

namespace App\Http\Controllers;

use App\TodoGoal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TodoGoalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $my_todos = TodoGoal::where('user_id', auth()->user()->id)->get();
        return view('todo.all', compact('my_todos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    try{
        $validator = Validator::make($request->all(), [
            'title' => 'required|required',
            'due_date' => 'required|min:4',
            'core_value' => 'required',
            'priority' => 'required',
            'goal_reason' => 'required'
        ]);
        TodoGoal::create([
            'title' => $request->title,
            'due_date' => $request->due_date,
            'core_value' => $request->core_value,
            'priority' => $request->priority,
            'goal_reason' => $request->goal_reason,
            'user_id' => auth()->user()->id
        ]);
        return back()->with('success', 'Todo created successfully!');
    }catch (\Exception $ex){
        return back()->with('error', $ex->getMessage())->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TodoGoal  $todoGoal
     * @return \Illuminate\Http\Response
     */
    public function show(TodoGoal $todoGoal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TodoGoal  $todoGoal
     * @return \Illuminate\Http\Response
     */
    public function edit(TodoGoal $todoGoal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TodoGoal  $todoGoal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TodoGoal $todoGoal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TodoGoal  $todoGoal
     * @return \Illuminate\Http\Response
     */
    public function destroy(TodoGoal $todoGoal)
    {
        //
    }
}
