@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Stident log in</div>
                @if ($errors->any())
                <ul class="alert alert-success">
                    @foreach ($errors->all() as $error)
                        <div >{{$error}}</div>
                    @endforeach
               </ul> 
                @endif

                <div class="card-body">
                <form method="post" action="{{route('student.store')}}">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Student name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value=""  autocomplete="name" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"> Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="" autocomplete="email">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password"autocomplete="password">
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-danger">
                                   Log in
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
