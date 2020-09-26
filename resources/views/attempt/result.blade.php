<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Result</title>
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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    {{-- link end --}}
    <link rel="stylesheet" href="{{ asset('css/jquery.datetimepicker.css') }}">
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/jquery.datetimepicker.full.min.js') }}"></script>


    <script>
        $(function() {
            $("#stime").datetimepicker();
        });

    </script>
    <style>
        .bg-color
        {
            background-image: linear-gradient(rgb(255, 255, 255),rgb(253, 253, 253));
        }
    </style>
</head>

<body >
    <header>
        <nav class="navbar fixed-top navbar-expand-lg navbar-primary bg-primary">
            <a class="navbar-brand" href="#" style="color: aliceblue ;">
                <h2>Result </h2>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <i class="fas fa-user-circle" style="font-size:35px;color:rgb(252, 252, 252);"></i>&nbsp;
                    <h4 style="color: aliceblue;font-size:18px;padding-top:10px;"> {{ Session::get('name') }}</h5>
                        &nbsp;&nbsp;
                </form>
            </div>
        </nav>
    </header>
    <br><br><br>
    <div class="container ">
        <div class="row justify-content-center">
            <h1 style="color: rgb(245, 131, 66)">Result</h1>
        </div>
        <hr>
        <div class="card bg-color shadow p-3 mb-5 bg-white rounded">
            <div class="card-body ">
                <div class="row">
                    <a style="color: rgb(6, 35, 88);font-size:20px"> Student Name : &nbsp;<a style="padding-top: 4px">{{ Session::get('name') }}</a></a>
                </div>
                <div class="row">
                    <a style="color:  rgb(6, 35, 88);font-size:20px"> Email :&nbsp;<a style="padding-top: 4px">{{ Session::get('email') }}</a></a>
                </div>
                <div class="row">
                    <a style="color:  rgb(6, 35, 88);font-size:20px">No. of attempt question :&nbsp;<a></a></a>
                </div>
                <div class="row">
                    <a style="color:  rgb(6, 35, 88);font-size:20px"> Total obtained marks :&nbsp;<a></a></a>
                </div>
            </div>
        </div>
    </div>

    


    <br>
    <br>


</body>

</html>
