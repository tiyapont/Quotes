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
                        <h3>รายชื่อสมาชิก</h3>
                    </div>
                    <div class="col-sm">
                       
                    </div>
                    <div class="col-sm" align="right">
                          <a class="btn btn-primary" href="admin_article" role="button">จัดการโพส</a>  
                    </div>
                  </div>
                </div>
                <div class="card-body">
                    <table class="table" >
                      <thead>
                        <tr>
                          <th scope="33%">ลำดับ</th>
                          <th width="33%" scope="col">ชื่อ-นามสกุล</th>
                          <th width="33%" scope="col">Username</th>
                          <th width="33%" scope="col">E-mail</th>
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
                          <tbody>
                              <?php $i = 0; ?>
                              @foreach($user as $key)  
                              <?php $i++?>
                            <tr> 
                              <th scope="row">{{$i}}</th>
                              <td>{{$key->fullname}}</td>
                              <td>{{$key->username}}</td>
                              <td>{{$key->email}}</td>
                                @if (auth::user() != '')
                              <td><a href="delUser{{$key->id}}">ลบ</a></td>
                              @endif
                            </tr> 
                             @endforeach  
                         </tbody>
                     </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection