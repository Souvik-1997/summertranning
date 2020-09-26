<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exam panel</title>
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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>


    <script>
        $(function() {
            $("#stime").datetimepicker();
        });

    </script>

</head>

<body style=" background-image: linear-gradient(rgb(255, 255, 255rgb(255, 255, 255)4));">
    <header>
        <nav class="navbar fixed-top navbar-expand-lg navbar-primary bg-primary">
            <a class="navbar-brand" href="#" style="color: aliceblue ;">
                <h2>Exam panel</h2>
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
            <h1 style="color: rgb(255, 255, 255)">Exam</h1>
        </div>

        <div class="card shadow p-3 mb-5 bg-white rounded">
            <div class="card shadow-sm p-1 mb-2 bg-white rounded">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <h3>Time : 30 minutes</h3>
                        </div>
                        <div class="col">
                            <div class="text-right">
                                <h3 class="fas fa-user-clock" style="padding-top: 5px;">  <span class="js-timeout">30:00</span></h3>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                @endif
            </div>
            {{-- @php
            $i = 1;
            @endphp --}}
            <form method="POST" action="{{route('attempt.store')}}">
                @csrf
                <div class="card-body">
                    @foreach ($exam as $key => $set)
                        <div class="row">
                            <div class="col-sm-12">
                                <p>
                                <h5>{{ $key+1}}.{{ $set->qname }}</h5>
                                </p>
                                <input type="hidden" name="qname" value="{{ $set->qname }}">
                                <ul class="question-options">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" id="op1"
                                                name="answer{{ $key+1}}">{{ $set->op1 }}
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" id="op2"
                                                name="answer{{ $key+1}}">{{ $set->op2 }}
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" id="op3"
                                                name="answer{{ $key+1}}">{{ $set->op3 }}
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" id="op4"
                                                name="answer{{ $key+1}}">{{ $set->op4 }}
                                        </label>
                                    {{-- <h5>{{$set}}</h5> --}}
                                    </div>
                                </ul>

                            </div>
                        </div>
                    @endforeach
                    <button type="submit" class="btn btn-danger float-right" >Submit</button>

                </div>
                <br>
            </form>
        </div>
    </div>
    <script type="text/javascript">
        var interval;

        function countdown() {
            clearInterval(interval);
            interval = setInterval(function() {
                var timer = $('.js-timeout').html();
                timer = timer.split(':');
                var minutes = timer[0];
                var seconds = timer[1];
                seconds -= 1;
                if (minutes < 0) return;
                else if (seconds < 0 && minutes != 0) {
                    minutes -= 1;
                    seconds = 59;
                } else if (seconds < 10 && length.seconds != 2) seconds = '0' + seconds;

                $('.js-timeout').html(minutes + ':' + seconds);

                if (minutes == 0 && seconds == 0) {
                    clearInterval(interval);
                    alert('time UP');
                }
            }, 1000);
        }
        $('.js-timeout').text("30:00");
        countdown();
    </script>

</body>

</html>
