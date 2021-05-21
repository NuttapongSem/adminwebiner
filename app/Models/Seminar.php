<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class seminar extends Sximo  {
	
	protected $table = 'seminar';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT seminar.* FROM seminar  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE seminar.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
