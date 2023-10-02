@extends('app')
@section('content')
<div class="row">
    <div class="col-md-6">
        @if(session('success'))
        <p class="alert alert-success">{{session('success')}}</p>
        @endif
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{$err}}</p>
        @endforeach
        @endif
        <form method="POST" action="{{ route('login.action') }}">
            @csrf
            <div class="mb-3">
                <label for="">Nim <span class="text-danger"></span></label>
                <input class="form-control" type="text" value="{{ Session::get('nim')}}" name="nim" value="{{ old('nim') }}"/>
            </div>
            <div class="mb-3">
                <label for="">Password <span class="text-danger"></span></label>
                <input class="form-control" type="password" name="password"/>
            </div>
            <div class="mb-3">
                <button class="btn btn-primary">Login</button>
                <a class="btn btn-danger" href="{{route('register')}}">Register</a>
            </div>
    </div>
    </div>
</div>
@endsection