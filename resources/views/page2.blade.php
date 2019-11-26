<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>#คำคมhub</title>
    
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Sriracha&display=swap" rel="stylesheet">
        <!-- Styles -->
        <style> 
            .Ft{
            font-family: 'Sriracha', cursive;
        }
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .title {
                font-size: 84px;
            }

            a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 20px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                } 
            .textright{
                text-align: right;
            }
            .jumbotron{
                background-color: skyblue;
            }
            .arty {
                /* background-image: url("images/promote.jpg"); */
                background-color: seashell;
                /* height: 500px; */
                /* background-position: center; */
                /* background-repeat: no-repeat; */
                /* background-size: cover; */
                /* position: relative; */
            }
            /* .top-right >a{
                font-size: 30 px;
            }  */
            
            
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                {{-- <div class="top-left links">
                        <a href="{{ url('/') }}">Home</a>
                </div> --}}
                
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">จัดการ</a>
                        
                    @else
                    <a class="col-lg-4 col-md-4 col-sm-12 col-xs-12" href="{{ route('login') }}">เข้าสู่ระบบ</a>
                    <a class="col-lg-4 col-md-4 col-sm-12 col-xs-10" href="{{ route('register') }}">สมัครสมาชิก</a>
                        
                    @endauth
                </div>
            @endif

            
        </div>
        
        <br><br><br>
        
        <div class="arty Ft">
            <div class="row">
              <div class="col-1"></div>
              <div class="col-10">
                   
                    <br><br>
                    <div class="container">

                            <div class="container">
                                <div class="row">
                                      <div class="col-4"></div>
                                      <div class="col-4"> <img class="col " src="{{ asset('images/logo.png') }}"></div>
                                      <div class="col-4"></div>
                                </div>
                            </div>

                                    <br>
                            <nav class="navbar navbar-expand-lg navbar-light bg-info">
                                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                        
                                        <div class="navbar-nav">
                                                <a class="nav-item nav-link active" href="{{ asset('/') }}">#คำคม</a>
                                                <a class="nav-item nav-link" href="page1">คำคมโดนๆ<span class="sr-only">(current)</span></a>
                                                <a class="nav-item nav-link" href="page2">คำคมกวนๆ</a>
                                                <a class="nav-item nav-link" href="page3">คำคมเศร้าๆ</a>
                                                <a class="nav-item nav-link" href="page4">คำคมภาษาอังกฤษ</a>
                                            {{-- <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">คำคม</a> --}}
                                          </div>
                                    </div>
                                  </nav>
                            {{-- <h1>#คำคม</h1> --}}
                            {{-- <button type="button" class="btn btn-primary btn-lg">#คำคม</button>
                            <button type="button" class="btn btn-primary btn-lg active">#คำคม</button> --}}
                            <div class="jumbotron">
                                    <h3>คำคมกวนๆ</h3>
                                    <div class="row">
                                            @foreach($infoT2 as $key)
                                            <div class="col-sm-6">
                                              <div class="card">
                                                <div class="card-body">
                                                <h5>{{$key->article_text}}</h5>
                            <br><hr>  <div class="textright"><h6>{{$key->fullname}}</h6></div>
                                                </div>
                                              </div><br>
                                            </div>
                                            
                                            @endforeach
                                             <!-- -->
                             </div>
                                  </div>    
                            {{-- @foreach($info as $key) --}}    
              </div>
              </div>
              <div class="col-1"> </div>
            </div>
            </div>



       
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
