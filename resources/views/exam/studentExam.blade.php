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

<body >
    <header>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#" style="color: aliceblue ;">
                <h2>Question chaecking panel</h2>
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
        <div class="row justify-content-center">
            <h1 style="color: rgb(245, 131, 66)">Question Checking</h1>
        </div>
        <hr>
        <div>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
            @endif
        </div>
        @php
        $i = 1;
        @endphp
        <div class="card-body shadow p-10 mb-5 bg-white rounded ">
            @foreach ($exam as $set)
                <div class="row">
                    <div class="col-sm-12">
                        <p>
                        <h5>{{ $i++ }}.{{ $set->qname }}</h5>
                        </p>
                        <ul class="question-options">
                            {{-- <li style="list-style-type: none;"> {{ $set->op1 }}</li>
                            --}}
                            <li> {{ $set->op1 }}</li>
                            <li> {{ $set->op2 }}</li>
                            <li> {{ $set->op3 }}</li>
                            <li> {{ $set->op4 }}</li>
                        </ul>
                        <p style="color: blue;"> Answer : {{ $set->ans }}</p>
                    </div>
                    
                    <p>
                        <a href="{{ route('exam.edit', $set->id) }}" class="btn btn-primary">Edit</a>&nbsp;&nbsp;

                    <form action="{{ route('exam.destroy', $set->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>


                    {{-- <a href="{{ route('exam.destroy', $set) }}" class="btn btn-danger">Delete</a> --}}
                    </p>

                </div>

            @endforeach

        </div>
        {{-- <div class="pb-2">{{ $set }}</div> --}}
        {{-- @foreach ($exam as $set)
            <div class="row">
                <div class="col-sm-12">
                    <h5>{{ $set->qname }}</h5>
                </div>


            </div>

            <div class="pb-2">{{ $set }}</div>

        @endforeach --}}

    </div>

</body>

</html>
