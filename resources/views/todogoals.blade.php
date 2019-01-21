@extends('layouts.master')
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
               <form method = "POST" action="{{ route('todogoals.store') }}">
                     {{ csrf_field() }}
                     <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="title" placeholder="Name">
                     </div>
                     <div class="form-group">
                        <label for="date">Due Date:</label>
                        <input type="date" class="form-control" id="duedate" name="duedate" placeholder="Due date">
                     </div>
                     <div class="form-group">
                        <label for="corevalues">Core Value:</label>
                        <select id="corevalues" name="corevalues" class="form-control">
                           <option value="">Select One</option>
                           <option>Health</option>
                           <option>Family</option>
                           <option>Career</option>
                           <option>Education</option>
                           <option>Lifestyle</option>
                           <option>Spirituality</option>
                           <option>Properties</option>
                        </select>
                     </div>
                     <div class="form-group">
                        <label for="magnitude">Magnitude</label>
                        <select id="magnitude" name="magnitude" class="form-control">
                           <option value="" >Select One </option>
                           <option>Easy</option>
                           <option>Doable</option>
                           <option>Challenging</option>
                           <option>Daunting</option>
                           <option>Adacious</option>
                        </select>
                     </div>
                     <div class="form-group">
                        <label for="priority">Priority</label>
                        <select id="priority" name="priority" class="form-control">
                           <option value=""> Select One</option>
                           <option>Low</option>
                           <option>Medium</option>
                           <option>High</option>
                        </select>
                     </div>
                     <div class="form-group">
                        <label for="reason">What do you want too achieve in this goal:</label>
                        <textarea class="form-control" id="reason" name="reason" placeholder="What do you want to achieve"></textarea>
                     </div>
                     <button type="submit" class="btn btn-primary">Save</button>
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
                  @forelse($my_todos as $todo)
                     
                     <tr>

                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$todo->title}}</td>
                        <td>{{ date("M d, Y",strtotime($todo->due_date)) }}</td>
                        <td>{{$todo->core_value}}</td>
                        <td><span @if($todo->priority == "Medium") class="badge badge-info" @elseif($todo->priority == "Low") class="badge badge-danger" @elseif($todo->priority == "High") class="badge badge-success"  @endif >{{$todo->priority}}</span></td>
                        <td>{{$todo->goal_reason}}</td>
                        <td>{{ date("M d, Y",strtotime($todo->created_at)) }}</td>
                        <td><a href="" class="btn btn-primary btn-sm">Edit</a></td>
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

      
