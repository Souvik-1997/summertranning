@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">After log in</div>

                {{-- {{$student}} --}}
                <table border = 1>
                    <tr>
                       <td>Name</td>
                       <td>email</td>
                       <td>Password</td>
                    </tr>
                    {{-- @foreach ($student as $studen) --}}
                    <tr>
                       <td>{{ $student['name']}}</td>
                       <td>{{ $student['email']}}</td>
                       <td>{{ $student['password'] }}</td>
                    </tr>
                    {{-- @endforeach --}}
                 </table>
                 
            </div>
        </div>
    </div>
</div>
@endsection