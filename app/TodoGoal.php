<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TodoGoal extends Model
{

	protected $table = 'todogoals';
	protected $fillable = ['title','due_date','core_value','priority','goal_reason','user_id'];
    //
}


