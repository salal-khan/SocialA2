@extends('templates/default')


@section('content')

    <div class="row bg-danger"><!--cover photo-->
        @if(Auth::user()->id == $user->id)
            {{--profile Picture--}}
            <div class="col-lg-2 col-lg-offset-0">
                <div class="row">
                    <div class="col-lg-12">
                        <img src="../uploads/avatars/{{ $user->avatar }}" height="170px" width="170px">
                    </div>
                    <form enctype="multipart/form-data" action="{{route('profile.upload')}}" method="POST">
                        <div class="col-lg-6">
                            <label for="profile-file-upload" type="button"  class="btn btn-default" value="Reply"><li
                                        class="fa fa-camera"></li></label>
                            <input type="file" id="profile-file-upload" name="avatar">
                        </div>
                        <div class="col-lg-6">
                            <input type="submit" class=" btn btn-sm btn-primary">
                        </div>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </form>
                </div>
            </div>
        @endif
    </div>
    <hr>

    <div class="row">
        <div class="col-lg-6 media pull-right">
            @include('posts.index')
        </div>
        <div class="col-lg-2 pull-left">

            <!--//*******friend Request******/-->

            @if(Auth::user()->hasFriendRequestsPending($user))
                <p>
                <form action="{{route('friend.cancelfriendqequest',['username'=>$user->username])}}" method="post">
                    <input type="submit" value="Cancel friend request" class="btn btn-primary">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                </form>

                   {{--Waiting for {{ $user->getNameOrUsername() }} to accept your request.--}}
                </p>

            @elseif(Auth::user()->hasFriendRequestsReceived($user))
                <a href="{{route('friend.accept',['username'=>$user->username])}}" class="btn btn-primary">
                    Accept friend request
                </a>

            @elseif(Auth::user()->isFriendWith($user))
                <p>You and {{$user->getNameOrUsername() }} are friend</p>
                <form action="{{route('friend.unfriend',['username'=>$user->username])}}" method="post">
                    <input type="submit" value="Unfriend" class="btn btn-primary">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                </form>
            @elseif(Auth::user()->id !==$user->id)
                <a href="{{route('friend.add',['username'=>$user->username])}}" class="btn btn-primary">
                    Add Friend
                </a>

            @endif


            <h3>
                {{ $user->getFirstNameOrUsername() }}'s Friends.
            </h3>

            @if(!$user->friends()->count())
                <p>
                    {{ $user->getFirstNameOrUsername() }} has no Friends
                </p>

            @else
                @foreach($user->friends() as $user)
                    @include('user.partials.userblock')
                @endforeach

            @endif

        </div>

        <!--//*******friend Request end******/-->
    </div>

@endsection