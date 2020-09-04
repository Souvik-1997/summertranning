<!DOCTYPE html>
<html lang="en">

<head>
    <title>Student Login</title>
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
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="/css/style3A.css">
</head>

<body class="model">
    <div class="login-box">
        <img src="../images/Stu.png" class="icon">
        <!-- <img src="c.png" alt ="close" class ="close"> -->
        <h1>Student Login</h1>
        <hr style="border: 1px solid;">
        @if ($errors->any())
            <ul class="alert alert-success">
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </ul>
        @endif
        <form method="post" action="{{ route('student.store') }}">
            @csrf
            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right" style="font-weight: bold;font-size: 15px;"><i class="fas fa-user"></i> Student
                    name:</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control" name="name" value="" autocomplete="name"
                        placeholder="enter name">
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right" style="font-weight: bold;font-size: 15px;"><i class="fas fa-envelope"></i> Email:</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control" name="email" value="" autocomplete="email"
                        placeholder="enter email">
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right" style="font-weight: bold;font-size: 15px;"><i class="fas fa-lock"></i> Password:</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control" name="password" autocomplete="password"
                        placeholder="enter passsword">
                </div>
            </div>
            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" {{--href="{{ route('student.create') }}"
                        --}} class="btn btn-primary">
                        Log in
                    </button>
                </div>
            </div>
        </form>
    </div>

</body>

</html>
