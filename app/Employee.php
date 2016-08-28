<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Employee extends Model
{
	protected $dates = ['date_of_birth', 'date_joined'];
}
