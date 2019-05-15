<?php


namespace App\Http\Model;


use Illuminate\Support\Facades\DB;

class MemberModel extends CommonModel
{
    public static function getOne()
    {
        $data = DB::select('select * from t_user limit 1');
        DB::insert('insert into ');
        return ['name'=>'liyu'];
    }
}
