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
         //$my_todos = TodoGoal::where('user_id', auth()->user()->id)->get();
        $my_todos = TodoGoal::find($id);
        // return response()->json(['data' => $single_todo]);

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
    public function update(Request $request)
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


            $my_todos = TodoGoal::find($request->goal_id);
            //return $my_todos;
            //$all_todos = TodoGoal::where('user_id', auth()->user()->id)->get();
            $my_todos->title =$request->title;
            $my_todos->due_date =$request->duedate;
            $my_todos->core_value =$request->corevalues;
            //$my_todos->magnitude=$request->get('magnitude');
            $my_todos->priority =$request->priority;
            $my_todos->goal_reason =$request->reason;
            
            if($my_todos->update()){
                return redirect()->back()->with('success','Biodata Updated');
            }


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
