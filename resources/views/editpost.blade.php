@extends('layouts.app')

@section('content')
<div class="arty">
        <div class="row">
          <div class="col-1"></div>
          <div class="col-10">
            <form class="" method="post" action="AddPostToDB">
              <input type="hidden" value="{{$edit->article_id}} " name = "id">
                @csrf
                <div class="container">
                    <br>
                    
                        <div class="card-header"><b>แก้ไขโพส</b></div>

                <div class="card-body">
                    <div class="form-group row">
                        <label for="article_text" class="col-sm-4 col-form-label text-md-right">{{ __('คำคม :') }}</label>
                          <div class="col-md-6">
                            <textarea name ="article_text" rows="3" cols="70">{{$edit->article_text}} </textarea>
                          </div>
                    </div>

            

                    <div class="form-group row">
                        <label for="T_ID" class="col-sm-4 col-form-label text-md-right">{{ __('ประเภทคำคม :') }}</label>
                        <div class="col-md-6">
                          <select class="form-control" name="T_ID" >
                            {{-- <option value="{{$edit->type_id}}">{{$edit->article_text}}</option> --}}
                              @foreach ($type as $type)
                          <option value="{{$type->type_id}}">{{$type->typeName}}</option>
                              @endforeach
                            
                
                          </select>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row text-md-center">
                        <div class="col-lg-12">
                          <button type="submit" class="btn btn-success"name="button">ส่งข้อมูล</button>
                  
                            <a class="btn btn-danger" href="home" role="button">ยกเลิก</a>
                          </div>
                          
                      </div>
                    <br>

                  </div>
                </form>
              </div>
          </div>
          </div>
          <div class="col-1"> </div>
        </div>
        </div>

@endsection
