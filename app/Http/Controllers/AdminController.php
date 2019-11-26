<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin as Ad;

use DB;

class AdminController extends Controller
{
  public function getUser(){   
    $user = Ad::getAll();
    $data = array('user'=>$user);
    return view('admin',$data);
    //  dd($data);
        }

  public function delUser($id){
    $del = DB::table('users')->where('id',$id)->delete();
    return redirect('admin');
      }

      public function  getArti()
      {
          $arti = Ad::getArti();
          $data = array('art'=>$arti);
          //dd($data);
          return view('admin_article',$data);
      }


      
      public function delArticle($article_id){
        $del = DB::table('article')->where('article_id',$article_id)->delete();
        return redirect('admin_article');
      }
   
  
}
