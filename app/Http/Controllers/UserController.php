<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article as Arti;
use Illuminate\Support\Facades\Auth;
use DB;

class UserController extends Controller
{
    

    public function  getArticle()
    {
        $user = Arti::getArticle();
        $data = array('info'=>$user);
        //dd($data);
        return view('welcome',$data);
    }

    public function  getType1()
    {
        $user = Arti::getType1();
        $data = array('infoT1'=>$user);
        // dd($data);
        return view('page1',$data);
    }
    public function  getType2()
    {
        $user = Arti::getType2();
        $data = array('infoT2'=>$user);
        // dd($data);
        return view('page2',$data);
    }
    public function  getType3()
    {
        $user = Arti::getType3();
        $data = array('infoT3'=>$user);
        // dd($data);
        return view('page3',$data);
    }
    public function  getType4()
    {
        $user = Arti::getType4();
        $data = array('infoT4'=>$user);
        // dd($data);
        return view('page4',$data);
    }

    public function  addPost()
    {

        $type = Arti::getType();
        $data = array('type'=>$type);
        //  dd($data);
        return view('addpost',$data);
    }
    
    public function  showpost()
    {
          $idu= Auth::user()->id;
        $getArtiuser =Arti::artiUser($idu);
        $data = array('article'=>$getArtiuser);
        // dd($data);
        return view('showpost',$data);
        
    }
    
    public function AddPostToDB(Request $req){
        $id= Auth::user()->id;
        $typeid=  $req->input('T_ID');
        $articletext=  $req->input('article_text');
        
      $data = array(
        'id' => $id,
        'type_id' => $typeid,
        'article_text' => $articletext,
      );
      $insert = Arti::insertArticle($data);
    //   dd("สำเร็จ");
    return redirect('showpost');
    // return redirect('showpost');
// dd($data);
    }
    //ลบ คำคม
    public function delArticle($id){
        $del = Arti::del($id);
        return redirect('showpost');
      }
      //แก้ไขข้อมูล คำคม
      public function editArti($article_id)
    {
        $type = Arti::gettype();
        $post = Arti::editPost($article_id);
        $data = array('edit' => $post,'type' => $type);
        return view('editpost',$data);
          // dd($data);
        }

         //สร้างข้อมูล คำคมใหม่
          public function addnewdata(Request $req){
            $id=  $req->input('id');
            $typeid=  $req->input('T_ID');
            $articletext=  $req->input('article_text');

            $data = array(
                'type_id' => $typeid,
                'article_text' => $articletext,
              );
              
            $insert = Arti::updatetoDB($data,$id);
            return redirect('showpost');
      
          }
    
}
