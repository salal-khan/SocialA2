@extends('templates/default')


@section('content')
    <h2>Sign up</h2>
    <div class="row">
        <div class="col-lg-6">
            <form action="{{route('auth.signup')}}" role="form" method="post" class="form-vertical">
                <div class="form-group {{ $errors->has('email') ?'has-error': ''}}">
                    <label class="control-label" for="email">Your Email Address</label>
                    <input type="text" name="email" class="form-control" id="email" value="{{Request::old('email')?:''}}">
                    @if($errors->has('email'))
                        <span class="help-block">{{$errors->first('email')}}</span>
                    @endif
                </div>
                <div class="form-group {{ $errors->has('username') ?'has-error': ''}}">
                    <label class="control-label" for="username">Choose a Username</label>
                    <input type="text" name="username" class="form-control" id="username" value="{{Request::old('username')?:''}}">
                    @if($errors->has('username'))
                        <span class="help-block">{{$errors->first('username')}}</span>
                    @endif
                </div>
                <div class="form-group {{ $errors->has('password') ?'has-error': ''}}">
                    <label class="control-label" for="password">Choose a Passwird</label>
                    <input type="password" name="password" class="form-control" id="password" value="">
                    @if($errors->has('password'))
                        <span class="help-block">{{$errors->first('password')}}</span>
                    @endif
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-default" value="Sign up">
                </div>
                <input type="hidden" name="_token" value="{{Session::token()}}">
            </form>
        </div>
    </div>

@endsection