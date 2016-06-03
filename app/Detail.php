<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model {

	public $table = "details";

	protected $fillable = ['first_name', 'last_name', 'email', 'mobile_no'];

}
