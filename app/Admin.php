<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use App\ShowUser as User;
use DB;

class Admin extends Model
{
    public static function getAll(){
        return DB::table('users')
        ->get();
    }
    // public static function artiAdmin($id){
    //     return DB::table('article')
    //     ->join('type','type.type_id','article.type_id')
    //     ->get();
        
    // }
    public static function getArti(){
        return DB::table('article')
        ->join('users','article.id','users.id')
        ->join('type', 'article.type_id', 'type.type_id')
        ->get();
        
    }
}
