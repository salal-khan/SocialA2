
<nav class="navbar navbar-default navbar-fixed-top navbar-principal">

    <div class="container">

        <div class="navbar-header">

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

                <span class="sr-only">Toggle navigation</span>

                <span class="icon-bar"></span>

                <span class="icon-bar"></span>

                <span class="icon-bar"></span>

            </button>

            <a class="navbar-brand" href="{{route('home')}}">

                <b>FriendBook</b>

            </a>

        </div>

        <div id="navbar" class="collapse navbar-collapse">

            <div class="col-md-5 col-sm-4"><div class="col-md-22 hidden" style="border:12px solid red;width:500px;height:400px;"><div class="row"><div class="row">


                        </div></div></div>
                @if(Auth::check())
                <form class="navbar-form" role="search" action="{{ route('search.results') }}">

                    <div class="form-group" style="display:inline;">

                        <div class="input-group" style="display:table;">

                            <input class="form-control" name="query" placeholder="Search..." autocomplete="off" type="text">

                            <span class="input-group-addon" style="width:1%;">

			          <label style="display: inline; " for="search-query-submit"><span class="glyphicon glyphicon-search "></span></label>

			        </span>

                        </div>

                    </div>
                    <button type="submit" id="search-query-submit" class="btn btn-default hidden">Search</button>
                </form>
                @endif

            </div>

            <ul class="nav navbar-nav navbar-right">
                <li class="active">
                    @if (Auth::check())
                    <a href="{{route('profile.index',['username'=>Auth::User()->username])}}">
                        <img src="{{url('uploads/avatars/')}}/{{ Auth::user()->avatar }}" class="img-nav ">
                        {{Auth::User()->getNameOrUsername()}}
                    </a>

                </li>

                <li><a href="{{route('home')}}"><i class=""></i>Home</a></li>
                <li><a href="{{route('home')}}"><i class="fa fa-users"></i>&nbsp;</a></li>
                <li><a href="messages.html"><i class="fa fa-comments"></i></a></li>
                <li><a href="{{route('home')}}"><i class="fa fa-bell-o"></i>&nbsp;</a></li>


                <li class="dropdown">

                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">	Pages

                        <span class="caret"></span>

                    </a>

                    <ul class="dropdown-menu" style="background: white;">

                        <li role="presentation" >
                            <a role="menuitem" tabindex="-1" class="status_privecy_btn" href="#">
                                <i class="fa fa-wrench " aria-hidden="true"></i>  &nbsp; &nbsp; &nbsp;<b >Settings</b>

                            </a>
                        </li>

                        <li role="presentation" >
                            <a role="menuitem" tabindex="-1" class="status_privecy_btn" href="#">
                                <i class="fa fa-sign-out" aria-hidden="true"></i>  &nbsp; &nbsp; &nbsp;<b >Signout</b>

                            </a>
                        </li>

                    </ul>

                </li>

                <li><a href="#" class="nav-controller"><i class="fa fa-bars"></i></a></li>
                @else
                    <li><a href="{{route('auth.signup')}}">Sign Up</a></li>
                    <li><a href="{{route('auth.signin')}}">Sign In</a></li>
                @endif
            </ul>

        </div>

    </div>

</nav>



{{--<nav class="navbar navbar-default" role="navigation">--}}
    {{--<div class="container">--}}
        {{--<div class="navbar-header">--}}
            {{--<a class="navbar-brand" href="{{ route('home' )}}">SOcialAPp</a>--}}
        {{--</div>--}}
        {{--<div class="collapse navbar-collapse">--}}
            {{--@if(Auth::check())--}}
                {{--<ul class="nav navbar-nav">--}}
                    {{--<li><a href="{{route('home')}}">Timeline</a></li>--}}
                    {{--<li><a href="{{route('friend.index')}}">Friends</a></li>--}}
                {{--</ul>--}}
                {{--<form class="navbar-form navbar-left" role="search" action="{{ route('search.results') }}">--}}
                    {{--<div class="form-group">--}}
                        {{--<input type="text" name="query" class="form-control" placeholder="Find People">--}}
                    {{--</div>--}}
                    {{--<button type="submit" class="btn btn-default">Search</button>--}}
                {{--</form>--}}
            {{--@endif--}}
            {{--<ul class="nav navbar-nav navbar-right">--}}
                {{--@if (Auth::check())--}}
                    {{--<li><a href="{{route('profile.index',['username'=>Auth::User()->username])}}"><img src="{{url('uploads/avatars/')}}/{{ Auth::user()->avatar }}" style="width:32px; height:32px; position:absolute; top:10px; left:10px; border-radius:50%"></a></li>--}}
                    {{--<li><a href="{{route('profile.index',['username'=>Auth::User()->username])}}">{{Auth::User()->getNameOrUsername()}} </a></li>--}}

                    {{--<li><a href="{{route('profile.edit')}}">Update Profile</a></li>--}}
                    {{--<li><a href="{{route('auth.logout')}}">Sign Out</a></li>--}}
                {{--@else--}}
                    {{--<li><a href="{{route('auth.signup')}}">Sign Up</a></li>--}}
                    {{--<li><a href="{{route('auth.signin')}}">Sign In</a></li>--}}
                {{--@endif--}}
            {{--</ul>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</nav>--}}