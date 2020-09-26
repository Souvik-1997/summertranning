<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>After Login</title>
    {{-- link --}}

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    {{-- link end --}}
<link rel="stylesheet" href="{{asset('css/jquery.datetimepicker.css')}}">
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/jquery.datetimepicker.full.min.js')}}"></script>


<script>  
    $(function(){
        $("#stime").datetimepicker();
    });
    </script>

</head>

<body >
    <header>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#" style="color: aliceblue ;"><h2>Admin is logged</h2> </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <i class="fas fa-user-circle" style="font-size:35px;color:rgb(252, 252, 252);" ></i>&nbsp;
                <h4 style="color: aliceblue;font-size:18px;padding-top:10px;">  {{Session::get('name')}}</h5> &nbsp;&nbsp;
              </form>
            </div>
          </nav>
    </header>
<br><br><br>
    <div class="container ">
        <div class="row justify-content-center"> 
            <h1 style="color: rgb(245, 131, 66)">Examination Setup</h1>
        </div>
        <hr style="border: 1px solid" >

        <div class="row">
            <a style="color: rgb(18, 79, 194)"><i class="fas fa-user"></i> Admin Name : &nbsp;<a >{{ Session::get('name') }}</a></a>
        </div>
        <div class="row">
            <a style="color: rgb(18, 79, 194)"><i class="fas fa-house-user"></i> Department : &nbsp;<a >{{ Session::get('dept') }}</a></a>
        </div>
        <div class="row">
            <a style="color: rgb(18, 79, 194)"> <i class="fas fa-envelope"></i> Email :&nbsp;<a >{{ Session::get('email') }}</a></a>
        </div>

        <hr >
        @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li><div >{{$error}}</div></li>
            @endforeach
       </ul> 
        @endif

        <form method="POST" +>
            @csrf
              <div class="form-group row">
                <label for="pname" class="col-sm-2 col-form-label">Paper Name:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="pname" name="pname" placeholder="enter paper name" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="pcode" class="col-sm-2 col-form-label">Paper code:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="pcode" name="pcode" placeholder="enter paper code" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="tqn" class="col-sm-2 col-form-label">Total Question</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="tqn" name="tqn" placeholder="enter paper question" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="ttime" class="col-sm-2 col-form-label">Total time:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="ttime" name="ttime" placeholder="enter total time" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="stime" class="col-sm-2 col-form-label">Date and Starting time:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="stime" name="stime" placeholder="enter starting time" required>
                </div>
              </div>
            {{-- <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                <label class="form-check-label" for="exampleCheck1" style="color: rgb(255, 0, 0)">Agree and Continue </label>
            </div> --}}
          <a href="{{action('ExamController@create')}}" type="submit" class="btn btn-primary float-right">Proceed</a>
        </form>
        <br>
        <br>
    </div>
 
</body>

</html>
