<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Result </title>
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



    <style>
        .btn-bd-download {
            font-weight: 500;

            color: #fafaf9;
            border-color: #ffffff;
        }

    </style>

</head>

<body style=" background-image: linear-gradient(rgb(255, 255, 255rgb(255, 255, 255)4));">
    <header>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#" style="color: aliceblue ;">
                <h2>Result Information</h2>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <i class="fas fa-user-circle" style="font-size:35px;color:rgb(243, 234, 234);"></i>&nbsp;
                    <h4 style="color: aliceblue;font-size:18px;padding-top:10px;"> {{ Session::get('name') }}</h5>
                        <a href="{{ action('StudentController@create') }}" class="btn  btn-outline-light d-none d-lg-inline-block mb-3 mb-md-0 ml-md-3">Log out</a>
                        &nbsp;&nbsp;
                </form>
            </div>
        </nav>
    </header>
    <br><br><br>
    <div class="container ">
        <div class="row justify-content-center">
            <h1 style="color: rgb(241, 124, 70)">Result</h1>
        </div>
    </div>
    {{-- <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Result</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item active">Results</a></li>
                            <li class="breadcrumb-item"><a href="{{ action('StudentController@create') }}">Log out</a>
                            </li>

                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <section class="content ">
        <div class="container-fluid">
            <div class="row justify-content-center">
                {{-- <div class="col-sm-2"></div> --}}
                <div class="col-sm-10">
                    <div class="card shadow bg-white rounded">
                        <div class="card-body">
                            <h2 style="color: rgb(21, 163, 8);">Basic Information</h2>
                            <table class="table">

                                <tbody>
                                    <tr>
                                        <th scope="row">Name:</th>
                                        <td>{{ Session::get('name') }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Email:</th>
                                        <td>{{ Session::get('email') }}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr style="border: 1px solid" >
                            <h2 style="color: rgb(230, 95, 17);">Result Information</h2>
                            <table class="table">

                                <tbody>
                                    <tr>
                                        <th scope="row">Total attempt questions:</th>
                                        <td>{{ $result_info->yes_ans + $result_info->no_ans }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Correct answer:</th>
                                        <td>{{ $result_info->yes_ans }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Wrong answer:</th>
                                        <td>{{ $result_info->no_ans }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Total marks:</th>
                                        <td>{{ $result_info->yes_ans }}/{{ $result_info->yes_ans + $result_info->no_ans}}</td>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="text-right"><button class="btn btn-success" onclick="window.print();">Print
                                    result</button></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
