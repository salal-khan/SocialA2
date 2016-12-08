<div class="row">
    @if(!$statuses->count())
        <p>No Any Status</p>
    @else
        @foreach($statuses as $status)
            <div class="panel panel-default profile-header-show">
                <div class="panel-heading profile-header-shows" data-statusid="{{$status->id}}">
                    <div class="row">
                        <div class="col-sm-12">

                            {{--Drop Down Post Update list--}}
                            @if(Auth::user()->id ==$status->user->id)
                                <li id="fat-menu" class="dropdown pull-right list-unstyled">
                                    <a href="#" id="drop3" role="button"
                                       class="dropdown-toggle   btn-sm  text-muted" data-toggle="dropdown"><b
                                                class="fa fa-chevron-down text-muted"></b></a>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="drop3">
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                                   href="#" id="editpost">Edit Post</a>
                                        </li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                                   href="http://twitter.com/fat">Share Post</a>
                                        </li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1"
                                                                   href="http://twitter.com/fat">Clear
                                                Comments</a>
                                        </li>
                                        <li role="presentation" class="divider"></li>
                                        <li role="presentation">
                                            <a role="menuitem" tabindex="-1"
                                               href="{{route('status.delete',['statusId'=>$status->id])}}">Delete
                                                Post</a>
                                        </li>
                                    </ul>
                                </li>
                            @endif

                            <a href="{{route('profile.index',['username'=>$status->user->username])}}"
                               class="pull-left">
                                <img src="{{url('uploads/avatars/')}}/{{ $status->user->avatar }}" height="55px"
                                     width="55px"
                                     alt="{{$status->user->getNameOrUsername()}}"
                                >
                            </a>
                            <div class="col-sm-9">
                                <a class="h4"
                                   href="{{route('profile.index',['username'=>$status->user->username])}}">{{$status->user->getNameOrUsername()}}</a>
                            </div>

                            <div class="col-sm-9">

                                <span class="text-muted small">{{$status->created_at->diffForHumans()}} </span>
                                <span id="fat-menu" class="dropdown list-unstyled">
                                            @if(Auth::user()->id ==$status->user->id)
                                        <a href="#" id="drop3" role="button"
                                           class="dropdown-toggle btn-sm  text-muted fa fa-firefox"
                                           data-toggle="dropdown">  <b class="caret"> </b>
                                                </a>
                                        <ul class="dropdown-menu" role="menu" aria-labelledby="drop3">
                                                <p class="text-center"> Who should see this?</p>

                                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><i
                                                                    class="fa fa-firefox" aria-hidden="true"></i> &nbsp;<b>Public</b><br>
                                                                <span class="text-center text-muted small">&nbsp;  &nbsp; &nbsp; &nbsp;Anyone on or off FriendBook</span></a>
                                                    </li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><i
                                                                class="fa fa-users"
                                                                aria-hidden="true"></i> &nbsp;<b>Friends</b><br>
                                                            <span class="text-center text-muted small">&nbsp;  &nbsp; &nbsp;&nbsp; Your friends on FriendBook</span></a>
                                                </li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><i
                                                                class="fa fa-lock" aria-hidden="true">
                                                        </i> &nbsp; <b>Only Me</b><br><span><span
                                                                    class="text-center text-muted small">&nbsp;  &nbsp; &nbsp;&nbsp;Only Me</span></span></a>
                                                </li>
                                            </ul>
                                    @else
                                        <li class=" btn-sm  text-muted fa fa-firefox hover-point-hand"></li>
                                    @endif
                                        </span>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="panel-body">
                    <div class="container">
                        <div class="col-lg-12 comments_area_size_control" id="post-text-body">
                            <span>{{$status->body}}</span>
                            @if($status->image_url !=null)
                                <p><img class="img-responsive" src="{{url('uploads/posts/')}}/{{ $status->image_url }}">
                                </p>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="panel-footer">
                    {{--if Privecy Only Friends--}}
                    @if(Auth::user()->isFriendWith($status->user) || Auth::user()->id == $status->user->id)
                        <div class="col-lg-12">
                            <ul class="list-inline list-unstyled">
                                @if(!$status->user->id !== Auth::user()->id)
                                    <li data-statusid="{{$status->id}}">
                                        {{--{{route('status.like',['statusId'=>$status->id])}}--}}
                                        <a href="#"
                                           style="text-decoration: none;">{{--class="btn btn-xs btn-info"--}}
                                            @if(Auth::user()->hasLikedStatus($status))
                                                <i class="fa fa-thumbs-up text-primary" aria-hidden="true"></i>
                                                <span class="text-primary like">Liked</span>
                                            @else
                                                <i class="fa fa-thumbs-up text-muted" aria-hidden="true"></i>
                                                <span class="text-muted like">Like</span>
                                            @endif
                                        </a>
                                    </li>
                                    <li class=" text-muted">{{$status->likes->count()}} {{str_plural('Like',$status->likes->count())}}</li>
                                    <li class="pull-right text-muted">{{$status->replies->count()}} {{str_plural('Comment',$status->replies->count())}}</li>
                                    <li class="pull-right">
                                        <a class="hover-point-hand text-muted" data-toggle="collapse"
                                           data-target="#view-comments-{{$status->id}}"
                                           aria-expanded="false"
                                           aria-controls="view-comments-{{$status->id}}">
                                            <i class="fa fa-comments-o" aria-hidden="true"> Show Comments</i>
                                        </a>
                                    </li>
                                @endif
                            </ul>
                        </div>

                        <form enctype="multipart/form-data" method="post" action="{{route('status.reply',['statusId'=>$status->id])}}"
                              role="form">
                            <div class="form-group {{$errors->has("reply-{$status->id}") ? 'has-error':''}}">
                                <div class="input-group">
                                        <span class="input-group-btn">

                                            <img src="{{url('uploads/avatars/')}}/{{ Auth::user()->avatar }}"
                                                 height="33" width="33" style="margin-right: 7px;">
                                            </span>
                                    <input type="text" class="form-control" name="reply-{{$status->id}}"
                                           placeholder="Reply to this ">

                                    <span class="input-group-btn">
                                    <label for="reply-file-upload-{{$status->id}}" type="button"  class="btn btn-default" value="Reply"><li
                                                class="fa fa-camera"></li></label>
                                    <input type="file"  name="reply-file-upload-{{$status->id}}" class="reply-file-upload" id="reply-file-upload-{{$status->id}}" value="{{Request::old('post-file-upload')}}">
                                    <Button type="submit" class="btn btn-default" value="Reply"><li
                                                class="fa fa-send"></li></Button>
                                </span>

                                </div>
                            </div>
                            <input type="hidden" name="_token" value="{{Session::token()}}">
                        </form>

                    @endif

                    <div class="collapse" id="view-comments-{{$status->id}}">
                        {{--Replies Area--}}
                        @foreach($status->replies as $reply)
                            <div class="row">
                                @if( Auth::user()->id == $reply->user->id)
                                    <li id="fat-menu" class="dropdown pull-right list-unstyled">
                                        <a href="#" id="drop3" role="button"
                                           class="dropdown-toggle   btn-sm  text-muted"
                                           data-toggle="dropdown"><b
                                                    class="fa fa-chevron-down text-muted"></b></a>
                                        <ul class="dropdown-menu" role="menu" aria-labelledby="drop3">
                                            <li role="presentation"><a role="menuitem" tabindex="-1"
                                                                       href="http://twitter.com/fat">
                                                    <i class="fa fa-edit" aria-hidden="true"></i> Edit
                                                    Comment</a>
                                            </li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1"
                                                                       href="{{route('status.delete',['statusId'=>$reply->id])}}">
                                                    <i class="fa fa-remove" aria-hidden="true"></i> Delete
                                                    Comment</a>
                                            </li>
                                        </ul>
                                    </li>
                                @endif
                                <div class="col-sm-1">
                                    <a href="{{route('profile.index',['username'=>$reply->user->username])}}"
                                       class="pull-left">
                                        <img src="{{url('uploads/avatars/')}}/{{ $reply->user->avatar }}" height="60px"
                                             width="60px"
                                             alt="{{$reply->user->getNameOrUsername()}}" class="media-object">
                                    </a>
                                </div>

                                <div class="col-sm-10 pull-right" style="margin-right: 25px;margin-top: 0px;">
                                    <p>
                                    <li class="reply_comments_area_size_control">
                                        <a class="h4 text-primary"
                                           href="{{route('profile.index',['username'=>$reply->user->username])}}">{{$reply->user->getNameOrUsername()}}</a>
                                        <span>{{$reply->body}}</span></li>
                                    @if($reply->image_url !=null)
                                        <img class="img-responsive img-thumbnail"
                                             src="{{url('uploads/comments/')}}/{{ $reply->image_url }}">
                                        @endif
                                        </p>
                                        <ul class="list-inline list-unstyled">
                                            @if(!$reply->user->id !== Auth::user()->id)
                                                <li data-statusid="{{$reply->id}}">
                                                    {{--{{route('status.like',['statusId'=>$status->id])}}--}}
                                                    <a href="#"
                                                       style="text-decoration: none;">{{--class="btn btn-xs btn-info"--}}
                                                        @if(Auth::user()->hasLikedStatus($reply))
                                                            <i class="fa fa-thumbs-up text-primary"
                                                               aria-hidden="true"></i>
                                                            <span class="text-primary like">Liked</span>
                                                        @else
                                                            <i class="fa fa-thumbs-up text-muted"
                                                               aria-hidden="true"></i>
                                                            <span class="text-muted like">Like</span>
                                                        @endif
                                                    </a>
                                                </li>
                                                <li class=" text-muted">{{$reply->likes->count()}} {{str_plural('Like',$reply->likes->count())}}</li>
                                                <span class="text-muted small">{{$reply->created_at->diffForHumans()}} </span>
                                            @endif
                                        </ul>
                                </div>
                            </div>


                        @endforeach
                    </div>
                </div>
            </div>

        @endforeach
        {!! $statuses->render() !!}
    @endif
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="edit-modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Post</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="post-body">Edit The Post</label>
                        <textarea name="post-body" id="post-body" class="form-control" rows="5"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="modal-save">Save changes</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script>
    var token = '{{Session::token()}}';
    var urlEdit = '{{route('status.edit')}}';
    var urlLike = '{{route('status.like')}}';
</script>