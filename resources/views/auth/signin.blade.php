@extends('templates/default')


@section('content')
    <h2>Sign in</h2>
    <div class="row">
        <div class="col-lg-6">
            <form action="{{route('auth.signin')}}" class="form-vertical" role="form" method="post">
                <div class="form-group {{$errors->has('email') ? 'has-error':''}}">
                    <label class="control-label" for="email">Email</label>
                    <input type="text" name="email" class="form-control" id="email">
                    @if($errors->has('email'))
                        <span class="help-block">{{$errors->first('email')}}</span>
                    @endif
                </div>

                <div class="form-group {{$errors->has('password')? 'has-error':''}}">
                    <label class="control-label" for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password">
                    @if($errors->has('password'))
                        <span class="help-block">{{$errors->first('password')}}</span>
                    @endif
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember"> Remember me
                    </label>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-default">Sign in</button>
                </div>
                <input type="hidden" name="_token" value="{{Session::token()}}">
            </form>
        </div>

    </div>
@endsection