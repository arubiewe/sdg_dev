@extends('layouts.master2')

   @section('content')


<div class="container">
         <div class="row" style="margin-top:10%;">
            
            <div class="col-lg-4">
               
            </div>

            <div class="col-lg-6">
               @if(session()->has('success'))
                  <div class="alert alert-success" role="alert">
                        <strong>Success!</strong> {{ session()->get('success') }}.
                  </div>
               @elseif(session()->has('error'))
                  <div class="alert alert-danger" role="alert">
                        <strong>Oops!</strong> {{ session()->get('error') }}.
                  </div>
               @endif
               <form method = "POST" action=" {{url('/update')}} ">
                     {{ csrf_field() }}
                     <input type="hidden" name="goal_id" value="$my_todos->id">
                     <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="title" placeholder="Name" value="{{$my_todos['title']}}">
                    @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ 
$errors->first('title') }}</strong>
                                    </span>
     @endif

                     </div>
                     <div class="form-group">
                        <label for="date">Due Date: Previously selected : {{ date("M d, Y", strtotime( $my_todos['due_date'] )) }}</label>
                        <input type="date" value="{{ $my_todos['due_date'] }}" class="form-control" id="duedate" name="duedate" placeholder="Due date">
                     </div>
                     <div class="form-group">
                        <label for="corevalues">Core Value:</label>
                        <select id="corevalues" name="corevalues" class="form-control">
                           <option value="">Select One</option>
                           <option @if($my_todos['core_value'] == "Health") selected @endif value="Health">Health</option>
                           <option @if($my_todos['core_value'] == "Family") selected @endif value="Family">Family</option>
                           <option @if($my_todos['core_value'] == "Career") selected @endif value="Career">Career</option>
                           <option @if($my_todos['core_value'] == "Education") selected @endif value="Education">Education</option>
                           <option @if($my_todos['core_value'] == "Lifestyle") selected @endif value="Lifestyle">Lifestyle</option>
                           <option @if($my_todos['core_value'] == "Spirituality") selected @endif value="Spirituality">Spirituality</option>
                           <option @if($my_todos['core_value'] == "Properties") selected @endif  value="Properties">Properties</option>
                        </select>
                     </div>
                     <!-- <div class="form-group">
                        <label for="magnitude">Magnitude</label>
                        <select id="magnitude" name="magnitude" class="form-control">
                           <option value="" >Select One </option>
                           <option>Easy</option>
                           <option>Doable</option>
                           <option>Challenging</option>
                           <option>Daunting</option>
                           <option>Adacious</option>
                        </select>
                     </div> -->
                     <div class="form-group">
                        <label for="priority">Priority</label>
                        <select id="priority" name="priority" class="form-control">
                           <option value=""> Select One</option>
                           <option @if($my_todos['priority'] == "Low") selected @endif value="Low">Low</option>
                           <option  @if($my_todos['priority'] == "Medium") selected @endif value="Medium">Medium</option>
                           <option  @if($my_todos['priority'] == "High") selected @endif value="High">High</option>
                        </select>
                     </div>
                     <div class="form-group">
                        <label for="reason">What do you want too achieve in this goal:</label>
                        <textarea  class="form-control" id="reason" name="reason" placeholder="What do you want to achieve"> {{$my_todos->goal_reason}}</textarea>
     @if ($errors->has('goal_reason'))
                                    <span class="help-block">
                                        <strong>{{ 
$errors->first('goal_reason') }}</strong>
                                    </span>
     @endif
                     </div>
                     <button type="submit" class="btn btn-primary">Update</button>
                  </form>
            </div>
         </div>
         <br> <br> <br> <br>
         <div class="row" id="my_todos">
            <div class="col-lg-2">

            </div>

            <div class="col-lg-8">
            
            <table class="table table-bordered table-hover table responsive">
               <thead>
                  <tr>
                     <th scope="col">S/N</th>
                     <th scope="col">Title</th>
                     <th scope="col">Due Date</th>
                     <th scope="col">Core Value</th>
                     <th scope="col">Priority</th>
                     <th scope="col">Reason</th>
                     <th scope="col">Created</th>
                     <th scope="col">Action</th>
                  </tr>
               </thead>
               <tbody>
                  @forelse($all_todos as $todo)
                     
                     <tr>

                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$todo->title}}</td>
                        <td>{{ date("M d, Y",strtotime($todo->due_date)) }}</td>
                        <td>{{$todo->core_value}}</td>
                        <td><span @if($todo->priority == "Medium") class="badge badge-info" @elseif($todo->priority == "Low") class="badge badge-danger" @elseif($todo->priority == "High") class="badge badge-success"  @endif >{{$todo->priority}}</span></td>
                        <td>{{$todo->goal_reason}}</td>
                        <td>{{ date("M d, Y",strtotime($todo->created_at)) }}</td>
                        <td><a href="{{ url('/editgoal', $todo->id) }}"  class="btn btn-primary btn-sm">Edit</a></td>
                     </tr>
                  @empty
                     <tr>
                        <center>
                           You currently dont have any todo goal. Please create one.
                        </center>
                     </tr>
                  @endforelse
                  
               </tbody>
            </table>
            </div>
         </div>
   </div>




   @endsection

      
