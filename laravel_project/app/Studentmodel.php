<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Studentmodel extends Model
{
        public static function select_all(){
	$sql = "SELECT * FROM tb_student";
	return DB::select($sql, []);
    }

	public static function select_by_id($id){
            $sql="SELECT * FROM table_student
        WHERE position select_by_id($id)";
        return DB::select($sat,[]);
    }
}
