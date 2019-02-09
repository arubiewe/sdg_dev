<?php

namespace App\Http\Controllers;

use App\TodoGoal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TodoGoalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $my_todos = TodoGoal::where('user_id', auth()->user()->id)->get();
        return view('todogoals', compact('my_todos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $validator = Validator::make($request->all(), [
                'title' => 'required|required',
                'duedate' => 'required',
                'corevalues' => 'required',
                'magnitude' => 'required',
                'priority' => 'required',
                'reason' =>'required'
            ]);
            TodoGoal::create([
                'title' => $request->title,
                'due_date' => $request->duedate,
                'core_value' => $request->corevalues,
                'priority' => $request->priority,
                'goal_reason' => $request->reason,
                'user_id' => auth()->user()->id
            ]);
            return back()->with('success', 'Todo created successfully!');
        }catch (\Exception $ex){
            return back()->with('error', $ex->getMessage())->withInput();
        }
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
    public function edit(Request $request, TodoGoal $todoGoal, $id)
     //public function edit($id)
    {
        dd($request->all());
         //$my_todos = TodoGoal::where('user_id', auth()->user()->id)->get();
        $my_todos = TodoGoal::find($id);

        $all_todos = TodoGoal::where('user_id', auth()->user()->id)->get();
       // return view('editgoal', compact('my_todos'));
        //dd($my_todos);
        return view('editgoal', compact('my_todos', 'all_todos'));
         //return view('editgoal');

         
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TodoGoal  $todoGoal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TodoGoal $todoGoal, $id)
    {

        try{
            $validator = Validator::make($request->all(), [
               // $request->validate([
                'title' => 'required|required',
                'duedate' => 'required',
                'corevalues' => 'required',
               // 'magnitude' => 'required',
                'priority' => 'required',
                'reason' =>'required'
            ]);

            //$my_todos = TodoGoal::find($id);
            $all_todos = TodoGoal::where('user_id', auth()->user()->id)->get();
            $all_todos->title=$request->get('title');
            $all_todos->duedate=$request->get('duedate');
            $all_todos->corevalues=$request->get('corevalues');
            //$my_todos->magnitude=$request->get('magnitude');
            $all_todos->priority=$request->get('priority');
            $all_todos->reason=$request->get('reason');
            dd($all_todos);
           // $all_todos->save();
            return redirect()->route('/todogoals')->with('Success','Biodata Updated');



        }catch (\Exception $ex){
            return back()->with('error', $ex->getMessage())->withInput();
        }




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
