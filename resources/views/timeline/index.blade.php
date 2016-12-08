@extends('templates/default')


@section('content')

    <div class="row">
        <div class="col-lg-6">

            <form action="{{route('status.post')}}" method="post" role="form" enctype="multipart/form-data">

                <div class="panel-body">
                    <label for="post-file-upload" class="custom-upload-btn">
                        <i class="fa fa-camera"></i>
                    </label>
                    <input type="file" name="post-file-upload" id="post-file-upload"
                           value="{{Request::old('post-file-upload')}}">
                    <div class="form-group {{$errors->has('status')?'has-error':''}}">
                    <textarea placeholder="What's up {{Auth::user()->getFirstNameOrUsername()}}?" rows="3" name="status"
                              class="form-control">{{Request::old('status')}}</textarea>
                        @if($errors->has('status'))
                            <span class="help-block">{{$errors->first('status')}}</span>
                        @endif
                    </div>
                    <div class="pull-right">
                    <button type="button" class=" dropdown list-unstyled btn privacy-btn-styleing">
                        <a href="#" id="drop3" role="button"
                           class="dropdown-toggle btn-sm fa fa-firefox" style="color: #2e3436 !important;"
                           data-toggle="dropdown"> <b id="status_privecy_btn">Public</b> <b class="caret"> </b><br>
                        </a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="drop3">
                            <p class="text-center"> Who should see this?</p>

                            <li role="presentation" >
                                <a role="menuitem" tabindex="-1" class="status_privecy_btn" href="#">
                                    <i class="fa fa-firefox " aria-hidden="true"></i> &nbsp;<b >Public</b><br>
                                    <span class="text-center text-muted small">
                                        &nbsp;  &nbsp; &nbsp; &nbsp;Anyone on or off FriendBook</span>
                                </a>
                            </li>
                            <li role="presentation">
                                <a role="menuitem" tabindex="-1" class="status_privecy_btn" href="#">
                                    <i class="fa fa-users" aria-hidden="true"></i> &nbsp;<b>Friends</b><br>
                                    <span class="text-center text-muted small">&nbsp;  &nbsp; &nbsp;&nbsp; Your friends on FriendBook</span></a>
                            </li>
                            <li role="presentation">
                                <a role="menuitem" tabindex="-1" class="status_privecy_btn" href="#">
                                    <i class="fa fa-lock" aria-hidden="true">
                                    </i> &nbsp; <b>Only Me</b><br><span>
                                        <span class="text-center text-muted small">&nbsp;  &nbsp; &nbsp;&nbsp;Only Me</span></span></a>
                            </li>
                        </ul>

                    </button>
                    <button type="submit" class="btn btn-primary ">Post</button>
                    </div>
                </div>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
            </form>
        </div>
    </div>

    {{--Home Status Start--}}
    <div class="col-lg-6 media">
        @include('posts.index')
    </div>
    {{--Home Status End--}}

@endsection
