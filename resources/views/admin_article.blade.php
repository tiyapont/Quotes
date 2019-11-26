@extends('layouts.app')

@section('content')
<script>
</script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card fe">
                <br>
                    <div class="container">
                            <div class="row">
                                <div class="col-sm">
                                    <h3>จัดการโพส</h3>
                                </div>
                                <div class="col-sm">
                                   
                                </div>
                                <div class="col-sm" align="right">
                                      <a class="btn btn-primary" href="admin" role="button">รายชื่อสมาชิก</a>  
                                </div>
                              </div>
                            </div>
                <div class="card-body">
                    <table class="table" >
                      <thead>
                        <tr>
                          <th scope="10%">ลำดับ</th>
                          <th width="20%" scope="col">ประเภทคำคม</th>
                          <th width="33%" scope="col">คำคม</th>
                          <th width="33%" scope="col">ชื่อ-นามสกุล</th>
                          
                          <th width="33%" scope="col"></th>
                          <th width="33%" scope="col"></th>
                          {{-- <th scope="col">ลบ</th> --}}
                          {{-- @foreach($cis as $key)
                          @if (auth::user() != '')
                          <td><a href="delUser{{$key->id}}">ลบ</a></td> --}}
                          {{-- <th scope="col">แก้ไข</th> --}}
                          {{-- @endif --}}
                        </tr>
                      </thead>
                      <tbody>
                            <?php $i = 0; ?>
                            @foreach($art as $key)  
                            <?php $i++?>
                          <tr> 
                            <th scope="row">{{$i}}</th>
                            <td>{{$key->typeName}}</td>
                            <td>{{$key->article_text}}</td>
                            <td>{{$key->fullname}}</td>
                              @if (auth::user() != '')
                            <td><a href="delArticle{{$key->article_id}}">ลบ</a></td>
                            @endif
                          </tr> 
                           @endforeach  
                          <tbody>
                             
                         </tbody>
                     </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection