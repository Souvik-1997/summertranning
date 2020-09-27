<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Question</title>
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

</head>

<body>
    <header>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#" style="color: aliceblue ;">
                <h2>You are in Question setup</h2>
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
    <div class="container  ">
        <div class="row justify-content-center ">
            <h1 style="color: rgb(245, 131, 66)">Question setup</h1>
        </div>
        <hr style="border: 1px solid" >

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>

        @endif
        <form method="POST" action="{{ route('exam.store') }}" onsubmit="onalert()" >
            @csrf
            <div class="form-group row">
                <label for="pname" class="col-sm-10 col-form-label" style="font-weight: bold" >Question Name:</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" id="qname" name="qname" placeholder="enter question" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="pcode" class="col-sm-2 col-form-label">Option1:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="op1" name="op1" placeholder="Option1" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="tqn" class="col-sm-2 col-form-label">Option2:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="op2" name="op2" placeholder="Option2" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="ttime" class="col-sm-2 col-form-label">Option3:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="op3" name="op3" placeholder="Option3" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="stime" class="col-sm-2 col-form-label">Option4:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="op4" name="op4" placeholder="Option4" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="stime" class="col-sm-2 col-form-label">Answer:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="ans" name="ans" placeholder="enter the right answer" required>
                </div>
            </div>

            <button type="submit" class="btn btn-primary float-right" onclick="">Add question</button>
        </form>

        <br>
        <br>
        <a href="{{ action('ExamController@index') }}" class="btn btn-warning float-right">Check all</a>


    </div>
    <script>
        function onalert() {
            alert("Question is added successfully");
        }

    </script>
</body>

</html>
