<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class events extends Sximo  {
	
	protected $table = 'events';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return " SELECT events.* FROM events ";
	}	

	public static function queryWhere(  ){
		
		return " WHERE events.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
