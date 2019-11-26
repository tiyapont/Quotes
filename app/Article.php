<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use DB;

class Article extends Model
{
    //function ดึง คำคมทั้งหมด
    public static function getArticle(){
        return DB::table('article')
        ->join('users','article.id','users.id')
        ->join('type', 'article.type_id', 'type.type_id')
        ->get();
        
    }
    //function ดึง คำคมโดนๆ
    public static function getType1(){
        return DB::table('article')
        ->join('users','article.id','users.id')
        ->join('type', 'article.type_id', 'type.type_id')
        ->where('type.type_id',"1")
        ->get();
    }
    //function ดึง คำคมกวนๆ
    public static function getType2(){
        return DB::table('article')
        ->join('users','article.id','users.id')
        ->join('type', 'article.type_id', 'type.type_id')
        ->where('type.type_id',"2")
        ->get();
    }
    //function ดึง คำคมเศร็าๆ
    public static function getType3(){
        return DB::table('article')
        ->join('users','article.id','users.id')
        ->join('type', 'article.type_id', 'type.type_id')
        ->where('type.type_id',"3")
        ->get();
    }
    //function ดึง คำคมภาษาอังกฤษ
    public static function getType4(){
        return DB::table('article')
        ->join('users','article.id','users.id')
        ->join('type', 'article.type_id', 'type.type_id')
        ->where('type.type_id',"4")
        ->get();
    }
    //function ดึง type
    public static function getType(){
        return DB::table('type')
        ->get();
    }

    //เพิ่ม article โดยส่ง $t ไปเป็นตัว insert
    public static function insertArticle($t){

        return DB::table('article')
        ->insert($t);
    }

    public static function showPost(){
        return DB::table('article')
        ->join('users','article.id','users.id')
        ->join('type', 'article.type_id', '=', 'type.type_id')
        ->where('type.type_id',"1")
        ->get();
    }

    //เรียก id ใน type id
    public static function artiUser($id){
        return DB::table('article')
        ->where('id',$id)
        ->join('type','type.type_id','article.type_id')
        ->get();
        
    }
    
    // ลบ คำคม
    public static function del($aid){
        $del = DB::table('article')
        ->where('article_id',$aid)
        ->delete();
    }

    public static function editPost($article_id){
        return DB::table('article')
        ->where('article_id',$article_id)
        // ->join('type','type.type_id','article.type_id')
        ->first();
      }

      
    public static function updatetoDB($data,$id){
        return DB::table('article')
        ->where('article_id',$id)
        // ->join('type','type.type_id','article.type_id')
        ->update($data);
      }
   
}
