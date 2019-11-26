@extends('layouts.app')

@section('content')
<div class="arty">
        <div class="row">
          <div class="col-1"></div>
          <div class="col-10">

                <div class="container">
                    <br>
                    <div class="container">
                            <div class="row">
                              <div class="col-sm">
                                  <h3>ประวัติการโพสคำคม</h3>
                              </div>
                              <div class="col-sm">
                                 
                              </div>
                              <div class="col-sm">
                                    <a class="btn btn-primary" href="home" role="button">ย้อนกลับ</a>
                              </div>
                            </div>
                          </div>
                      
                              <div class="card-body">
                                  <input type="hidden" name="id" value="{{Auth::user()->id}}">
                                
                                  <b><a>ชื่อจริง - นามสกุล : </a></b> {{Auth::user()->fullname}} 
                                  <br><br>
                                  <table class="table" >
                                    <thead>
                                      <tr>
                                        
                                        <th width="10%" scope="col">ลำดับ</th>
                                        <th width="20%" scope="col">ประเภทคำคม</th>
                                        <th width="70%" scope="col">คำคม</th>
                                        <th width="70%" scope="col"></th>
                                      </tr>
                                    </thead>
                                   
                                    <tbody>
                                        
                                            <?php $i = 0; ?>
                                            @foreach($article as $key)  
                                            <?php $i++?>
                                          <tr> 
                                            <th >{{$i}}</th>
                                            <th >{{$key->typeName}}</th>
                                            <th >{{$key->article_text}}</th>
                                            <td><a href ="editpost{{$key->article_id}}">แก้ไข</a></td>
                                            <td><a href="delArticle{{$key->article_id}}">ลบ</a></td>
                                      </tr>
                                     @endforeach
                                   </tbody>
                                     
                                  </table>
                              </div>
          </div>
          </div>
          <div class="col-1"> </div>
        </div>
        </div>

@endsection
