@extends('templates/default')

@section('content')
    @if(!$users->count())
        <p>No Result Fount Sorry</p>
    @else
        <div class="row">
            <div class="col-lg-12">
                @foreach($users as $user)
                    @include('user/partials/userblock')
                @endforeach
            </div>
        </div>
    @endif
@endsection