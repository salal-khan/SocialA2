@extends('templates/default')


@section('content')

    <div class="row">
        <div class="col-lg-6">
            <h3>Your Friends</h3>
            @if(!$friends->count())
                <p>You have no Friends</p>
            @else
                @foreach($friends as $user)
                    @include('user.partials.userblock')
                @endforeach
            @endif
        </div>
        <div class="col-lg-6">
            <h4>Friends Requests</h4>

            @if(!$request->count())
                <p>You have no any Friend Request</p>
            @else
                @foreach($request as $user)
                    @include('user.partials.userblock')
                @endforeach
            @endif
        </div>
    </div>
@endsection