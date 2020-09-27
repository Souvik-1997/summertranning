<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
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
    <link rel="stylesheet" href="/css/style.css">


    <style>
        .page-breadcrumb {
            padding: 250px 0 150px;
            background: url(../images/bg10.jpg) no-repeat;
            background-attachment: fixed;
            background-size: cover;
            background-position: 0 0;
            position: relative;
        }

        .all-page-title .container {
            position: relative;
            z-index: 2;
        }

        .all-page-title::before {
            background: #010101;
            content: "";
            height: 100%;
            left: 0;
            position: absolute;
            top: 0;
            width: 100%;
            z-index: 1;
            opacity: 0.5;
        }

        .all-page-title h1 {
            font-size: 38px;
            color: #ffffff;
            font-family: 'Arbutus Slab', serif;
            padding: 0px;
        }

    </style>



</head>

<body>
    {{-- header section --}}
    <header>
        <nav class="navbar fixed-top navbar-expand-lg navbar-inner">
            <nav class="navbar ">
                <a class="navbar-brand " href="#" style="color: #fff">
                    <img src="./images/l1-crop.png" width="400">
                </a>
            </nav>
            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon "><a style="color: #fff;">||||</a></span>
            </button>

            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item  nulli active" id="na">
                        <a class="nullia" id="na" style="color: antiquewhite;"> Home </a>
                    </li>
                    <li class="nav-item nulli ">
                        <a href="{{ action('SiteDetailsController@about') }}" class="nullia"
                            style="color: antiquewhite;"> About </a>
                    </li>
                    <li class="nav-item nulli ">
                        <a class="nullia" style="color: antiquewhite;"> Contact us </a>
                    </li>
                </ul>
            </div>

            </div>
        </nav>
    </header>
    {{-- header section end --}}

    <!-- Start All Pages -->
    <div class="all-page-title page-breadcrumb">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Contact us.</h1>
                </div>
            </div>
        </div>
    </div>
    <br>
    
    <!-- End All Pages -->

    <div class="card shadow bg-white rounded">
        <div class="card-body">
            <div class="card shadow bg-white rounded">
                <div class="card-body">
                    <div class="row justify-content-center">
                        <h2 style="color: rgb(224, 110, 75)">Contact us</h2>
                    </div>
                </div>
            </div>
            @if (count($errors)>0)
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">x</button>
            <ul class="alert alert-success">
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </ul>
        </div>
        @endif
        @if (($message = Session::get('success')))
        <div class="alert alert-block">
            <button type="button" class="close" data-dismiss="alert">x</button>
        <strong>{{$message}}</strong>
        </div>
        @endif
        <form method="POST" action="{{ url('sendemail/send') }}">
            @csrf
    
            <div class="form-group">
                <label for="exampleFormControlInput1">Name</label>
                <input type="text" class="form-control" name="name" placeholder="enter  name here">
            </div>
    
            <div class="form-group">
                <label for="exampleInputEmail2">Email address</label>
                <input type="email" class="form-control" name="email" aria-describedby="emailHelp"
                    placeholder="enter email here">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
    
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Enter your Query</label>
                <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
    
            <button type="submit" class="btn btn-primary" name="send" value="Send">Send</button>
    
        </form>
        </div>
    </div>
   <br>


    <div class="footer-copyright text-center py-3 bg-black " style="color: #fff;">All Rights Reserved. &copy; 2020 <a
            href="{{ action('SiteDetailsController@online') }}" style="color: #fff;">Online Exam System</a>
    </div>


</body>

</html>
