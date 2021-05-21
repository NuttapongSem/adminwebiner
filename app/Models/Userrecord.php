<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class userrecord extends Sximo  {
	
	protected $table = 'user_record';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT user_record.* FROM user_record  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE user_record.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
