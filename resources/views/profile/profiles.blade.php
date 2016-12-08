
@extends('templates/default')

@section('content')
<!-- Begin page content -->
<div class="row page-content">
    <div class="col-md-10">
        <!--profile and Cover -->
        <div class="row">
            <div class="col-md-12">
                <div class="cover profile">
                    <div class="wrapper">
                        <div class="image">
                            <img src="{{ URL::to('template_assets/profile-cover.jpg')}}" class="show-in-modal" alt="people">
                        </div>
                        <ul class="friends">
                            <li>
                                <a href="http://demos.bootdey.com/dayday/profile.html#">
                                    <img src="{{ URL::to('template_assets/guy-6.jpg')}}" alt="people" class="img-responsive">
                                </a>
                            </li>
                            <li>
                                <a href="http://demos.bootdey.com/dayday/profile.html#">
                                    <img src="{{ URL::to('template_assets/woman-3.jpg')}}" alt="people" class="img-responsive">
                                </a>
                            </li>
                            <li>
                                <a href="http://demos.bootdey.com/dayday/profile.html#">
                                    <img src="{{ URL::to('template_assets/guy-2.jpg')}}" alt="people" class="img-responsive">
                                </a>
                            </li>
                            <li>
                                <a href="http://demos.bootdey.com/dayday/profile.html#">
                                    <img src="{{ URL::to('template_assets/guy-9.jpg')}}" alt="people" class="img-responsive">
                                </a>
                            </li>
                            <li>
                                <a href="http://demos.bootdey.com/dayday/profile.html#">
                                    <img src="{{ URL::to('template_assets/woman-9.jpg')}}" alt="people" class="img-responsive">
                                </a>
                            </li>
                            <li>
                                <a href="http://demos.bootdey.com/dayday/profile.html#">
                                    <img src="{{ URL::to('template_assets/guy-4.jpg')}}"alt="people" class="img-responsive">
                                </a>
                            </li>
                            <li>
                                <a href="http://demos.bootdey.com/dayday/profile.html#">
                                    <img src="{{ URL::to('template_assets/guy-1.jpg')}}"alt="people" class="img-responsive">
                                </a>
                            </li>
                            <li>
                                <a href="http://demos.bootdey.com/dayday/profile.html#">
                                    <img src="{{ URL::to('template_assets/woman-4.jpg')}}"alt="people" class="img-responsive">
                                </a>
                            </li>
                            <li><a href="http://demos.bootdey.com/dayday/profile.html#" class="group"><i class="fa fa-group"></i></a></li>
                        </ul>
                    </div>
                    <div class="cover-info">
                        <div class="avatar">
                            <img src="{{ URL::to('template_assets/guy-3.jpg')}}"alt="people">
                        </div>
                        <div class="name"><a href="http://demos.bootdey.com/dayday/profile.html#">John Breakgrow jr.</a></div>
                        <ul class="cover-nav">
                            <li class="active"><a href="http://demos.bootdey.com/dayday/profile.html"><i class="fa fa-fw fa-bars"></i> Timeline</a></li>
                            <li><a href="http://demos.bootdey.com/dayday/about.html"><i class="fa fa-fw fa-user"></i> About</a></li>
                            <li><a href="http://demos.bootdey.com/dayday/friends.html"><i class="fa fa-fw fa-users"></i> Friends</a></li>
                            <li><a href="http://demos.bootdey.com/dayday/photos1.html"><i class="fa fa-fw fa-image"></i> Photos</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--profile and Cover end-->
        <div class="row">

            <div class="col-md-5">
                <div class="widget">
                    <div class="widget-header">
                        <h3 class="widget-caption">About</h3>
                    </div>
                    <div class="widget-body bordered-top bordered-sky">
                        <ul class="list-unstyled profile-about margin-none">
                            <li class="padding-v-5">
                                <div class="row">
                                    <div class="col-sm-4"><span class="text-muted">Date of Birth</span></div>
                                    <div class="col-sm-8">12 January 1990</div>
                                </div>
                            </li>
                            <li class="padding-v-5">
                                <div class="row">
                                    <div class="col-sm-4"><span class="text-muted">Job</span></div>
                                    <div class="col-sm-8">Ninja developer</div>
                                </div>
                            </li>
                            <li class="padding-v-5">
                                <div class="row">
                                    <div class="col-sm-4"><span class="text-muted">Gender</span></div>
                                    <div class="col-sm-8">Male</div>
                                </div>
                            </li>
                            <li class="padding-v-5">
                                <div class="row">
                                    <div class="col-sm-4"><span class="text-muted">Lives in</span></div>
                                    <div class="col-sm-8">Miami, FL, USA</div>
                                </div>
                            </li>
                            <li class="padding-v-5">
                                <div class="row">
                                    <div class="col-sm-4"><span class="text-muted">Credits</span></div>
                                    <div class="col-sm-8">249</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="widget widget-friends">
                    <div class="widget-header">
                        <h3 class="widget-caption">Friends</h3>
                    </div>
                    <div class="widget-body bordered-top  bordered-sky">
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="img-grid" style="margin: 0 auto;">
                                    <li>
                                        <a href="http://demos.bootdey.com/dayday/profile.html#">
                                            <img src="{{ URL::to('template_assets/guy-6.jpg')}}"alt="image">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://demos.bootdey.com/dayday/profile.html#">
                                            <img src="{{ URL::to('template_assets/woman-3.jpg')}}"alt="image">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://demos.bootdey.com/dayday/profile.html#">
                                            <img src="{{ URL::to('template_assets/guy-2.jpg')}}"alt="image">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://demos.bootdey.com/dayday/profile.html#">
                                            <img src="{{ URL::to('template_assets/guy-9.jpg')}}"alt="image">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://demos.bootdey.com/dayday/profile.html#">
                                            <img src="{{ URL::to('template_assets/woman-9.jpg')}}"alt="image">
                                        </a>
                                    </li>
                                    <li class="clearfix">
                                        <a href="http://demos.bootdey.com/dayday/profile.html#">
                                            <img src="{{ URL::to('template_assets/guy-4.jpg')}}"alt="image">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://demos.bootdey.com/dayday/profile.html#">
                                            <img src="{{ URL::to('template_assets/guy-1.jpg')}}"alt="image">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://demos.bootdey.com/dayday/profile.html#">
                                            <img src="{{ URL::to('template_assets/woman-4.jpg')}}"alt="image">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://demos.bootdey.com/dayday/profile.html#">
                                            <img src="{{ URL::to('template_assets/guy-6.jpg')}}"alt="image">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="widget">
                    <div class="widget-header">
                        <h3 class="widget-caption">Groups</h3>
                    </div>
                    <div class="widget-body bordered-top bordered-sky">
                        <div class="card">
                            <div class="content">
                                <ul class="list-unstyled team-members">
                                    <li>
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <div class="avatar">
                                                    <img src="{{ URL::to('template_assets/likes-1.png')}}" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                Github
                                            </div>

                                            <div class="col-xs-3 text-right">
                                                <btn class="btn btn-sm btn-azure btn-icon"><i class="fa fa-user"></i></btn>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <div class="avatar">
                                                    <img src="{{ URL::to('template_assets/likes-3.png')}}" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                Css snippets
                                            </div>

                                            <div class="col-xs-3 text-right">
                                                <btn class="btn btn-sm btn-azure btn-icon"><i class="fa fa-user"></i></btn>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <div class="avatar">
                                                    <img src="{{ URL::to('template_assets/likes-2.png')}}" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                Html Action
                                            </div>

                                            <div class="col-xs-3 text-right">
                                                <btn class="btn btn-sm btn-azure btn-icon"><i class="fa fa-user"></i></btn>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>






            <!--============= timeline posts-->
            <div class="col-md-7">
                <!-- left posts-->
                <div class="row">
                    <div class="col-md-12">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-22 hidden">
                                    <div class="row">
                                        <div class="row">


                                        </div>
                                    </div>
                                </div>

                                <!-- post state form -->
                                <div class="box profile-info n-border-top">
                                    <form>
                                        <textarea class="form-control input-lg p-text-area" rows="2" placeholder="Whats in your mind today?"></textarea>
                                    </form>
                                    <div class="box-footer box-form">
                                        <button type="button" class="btn btn-azure pull-right">Post</button>
                                        <ul class="nav nav-pills">
                                            <li><a href="http://demos.bootdey.com/dayday/profile.html#"><i class="fa fa-map-marker"></i></a></li>
                                            <li><a href="http://demos.bootdey.com/dayday/profile.html#"><i class="fa fa-camera"></i></a></li>
                                            <li><a href="http://demos.bootdey.com/dayday/profile.html#"><i class=" fa fa-film"></i></a></li>
                                            <li><a href="http://demos.bootdey.com/dayday/profile.html#"><i class="fa fa-microphone"></i></a></li>
                                        </ul>
                                    </div>
                                </div><!-- end post state form -->

                                <!--   posts -->
                                <div class="box box-widget">
                                    <div class="box-header with-border">
                                        <div class="user-block">
                                            <img class="img-circle" src="{{ URL::to('template_assets/guy-3.jpg')}}"alt="User Image">
                                            <span class="username"><a href="http://demos.bootdey.com/dayday/profile.html#">John Breakgrow jr.</a></span>
                                            <span class="description">Shared publicly - 7:30 PM Today</span>
                                        </div>
                                    </div>

                                    <div class="box-body" style="display: block;">
                                        <img class="img-responsive show-in-modal" src="{{ URL::to('template_assets/young-couple-in-love.jpg')}}"alt="Photo">
                                        <p>I took this photo this morning. What do you guys think?</p>
                                        <button type="button" class="btn btn-default btn-xs"><i class="fa fa-share"></i> Share</button>
                                        <button type="button" class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> Like</button>
                                        <span class="pull-right text-muted">127 likes - 3 comments</span>
                                    </div>
                                    <div class="box-footer box-comments" style="display: block;">
                                        <div class="box-comment">
                                            <img class="img-circle img-sm" src="{{ URL::to('template_assets/guy-2.jpg')}}"alt="User Image">
                                            <div class="comment-text">
                          <span class="username">
                          Maria Gonzales
                          <span class="text-muted pull-right">8:03 PM Today</span>
                          </span>
                                                It is a long established fact that a reader will be distracted
                                                by the readable content of a page when looking at its layout.
                                            </div>
                                        </div>

                                        <div class="box-comment">
                                            <img class="img-circle img-sm" src="{{ URL::to('template_assets/guy-3.jpg')}}"alt="User Image">
                                            <div class="comment-text">
                          <span class="username">
                          Luna Stark
                          <span class="text-muted pull-right">8:03 PM Today</span>
                          </span>
                                                It is a long established fact that a reader will be distracted
                                                by the readable content of a page when looking at its layout.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box-footer" style="display: block;">
                                        <form action="http://demos.bootdey.com/dayday/profile.html#" method="post">
                                            <img class="img-responsive img-circle img-sm" src="{{ URL::to('template_assets/guy-3.jpg')}}" alt="Alt Text">
                                            <div class="img-push">
                                                <input type="text" class="form-control input-sm" placeholder="Press enter to post comment">
                                            </div>
                                        </form>
                                    </div>
                                </div><!--  end posts-->


                                <!-- post -->
                                <div class="box box-widget">
                                    <div class="box-header with-border">
                                        <div class="user-block">
                                            <img class="img-circle" src="{{ URL::to('template_assets/guy-3.jpg')}}" alt="User Image">
                                            <span class="username"><a href="http://demos.bootdey.com/dayday/profile.html#">Jonathan Burke Jr.</a></span>
                                            <span class="description">Shared publicly - 7:30 PM Today</span>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <p>Far far away, behind the word mountains, far from the
                                            countries Vokalia and Consonantia, there live the blind
                                            texts. Separated they live in Bookmarksgrove right at</p>

                                        <p>the coast of the Semantics, a large language ocean.
                                            A small river named Duden flows by their place and supplies
                                            it with the necessary regelialia. It is a paradisematic
                                            country, in which roasted parts of sentences fly into
                                            your mouth.</p>

                                        <div class="attachment-block clearfix">
                                            <img class="attachment-img show-in-modal" src="{{ URL::to('template_assets/2.jpg')}}" alt="Attachment Image">
                                            <div class="attachment-pushed">
                                                <h4 class="attachment-heading"><a href="http://www.bootdey.com/">Lorem ipsum text generator</a></h4>
                                                <div class="attachment-text">
                                                    Description about the attachment can be placed here.
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry... <a href="#">more</a>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-default btn-xs"><i class="fa fa-share"></i> Share</button>
                                        <button type="button" class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> Like</button>
                                        <span class="pull-right text-muted">45 likes - 2 comments</span>
                                    </div>

                                    <!--comment Area-->
                                    <div class="box-footer box-comments">
                                        <div class="box-comment">
                                            <img class="img-circle img-sm" src="{{ URL::to('template_assets/guy-5.jpg')}}" alt="User Image">
                                            <div class="comment-text">
                          <span class="username">
                          Maria Gonzales
                          <span class="text-muted pull-right">8:03 PM Today</span>
                          </span>
                                                It is a long established fact that a reader will be distracted
                                                by the readable content of a page when looking at its layout.
                                            </div>
                                        </div>
                                        <!--comment Area end-->

                                    </div>
                                    <div class="box-footer">
                                        <form action="http://demos.bootdey.com/dayday/profile.html#" method="post">
                                            <img class="img-responsive img-circle img-sm" src="{{ URL::to('template_assets/guy-3.jpg')}}" alt="Alt Text">
                                            <div class="img-push">
                                                <input type="text" class="form-control input-sm" placeholder="Press enter to post comment">
                                            </div>
                                        </form>
                                    </div>
                                </div><!-- end post -->



                            </div>
                        </div>
                    </div>
                </div><!-- end left posts-->
            </div><!-- end timeline posts-->
        </div>
    </div>
</div>







<!-- Online users sidebar content-->
<div class="chat-sidebar focus">
    <div class="list-group text-left">
        <p class="text-center visible-xs"><a href="http://demos.bootdey.com/dayday/profile.html#" class="hide-chat btn btn-success">Hide</a></p>
        <p class="text-center chat-title">Online users</p>
        <a href="http://demos.bootdey.com/dayday/messages1.html" class="list-group-item">
            <i class="fa fa-check-circle connected-status"></i>
            <img src="{{ URL::to('template_assets/guy-2.jpg')}}" class="img-chat img-thumbnail">
            <span class="chat-user-name">Jeferh Smith</span>
        </a>
        <a href="http://demos.bootdey.com/dayday/messages1.html" class="list-group-item">
            <i class="fa fa-times-circle absent-status"></i>
            <img src="{{ URL::to('template_assets/woman-1.jpg')}}" class="img-chat img-thumbnail">
            <span class="chat-user-name">Dapibus acatar</span>
        </a>
        <a href="http://demos.bootdey.com/dayday/messages1.html" class="list-group-item">
            <i class="fa fa-check-circle connected-status"></i>
            <img src="{{ URL::to('template_assets/guy-3.jpg')}}" class="img-chat img-thumbnail">
            <span class="chat-user-name">Antony andrew lobghi</span>
        </a>
        <a href="http://demos.bootdey.com/dayday/messages1.html" class="list-group-item">
            <i class="fa fa-check-circle connected-status"></i>
            <img src="{{ URL::to('template_assets/woman-2.jpg')}}" class="img-chat img-thumbnail">
            <span class="chat-user-name">Maria fernanda coronel</span>
        </a>
        <a href="http://demos.bootdey.com/dayday/messages1.html" class="list-group-item">
            <i class="fa fa-check-circle connected-status"></i>
            <img src="{{ URL::to('template_assets/guy-4.jpg')}}" class="img-chat img-thumbnail">
            <span class="chat-user-name">Markton contz</span>
        </a>
        <a href="http://demos.bootdey.com/dayday/messages1.html" class="list-group-item">
            <i class="fa fa-times-circle absent-status"></i>
            <img src="{{ URL::to('template_assets/woman-3.jpg')}}" class="img-chat img-thumbnail">
            <span class="chat-user-name">Martha creaw</span>
        </a>
        <a href="http://demos.bootdey.com/dayday/messages1.html" class="list-group-item">
            <i class="fa fa-times-circle absent-status"></i>
            <img src="{{ URL::to('template_assets/woman-8.jpg')}}" class="img-chat img-thumbnail">
            <span class="chat-user-name">Yira Cartmen</span>
        </a>
        <a href="http://demos.bootdey.com/dayday/messages1.html" class="list-group-item">
            <i class="fa fa-check-circle connected-status"></i>
            <img src="{{ URL::to('template_assets/woman-4.jpg')}}" class="img-chat img-thumbnail">
            <span class="chat-user-name">Jhoanath matew</span>
        </a>
        <a href="http://demos.bootdey.com/dayday/messages1.html" class="list-group-item">
            <i class="fa fa-check-circle connected-status"></i>
            <img src="{{ URL::to('template_assets/woman-5.jpg')}}" class="img-chat img-thumbnail">
            <span class="chat-user-name">Ryanah Haywofd</span>
        </a>
        <a href="http://demos.bootdey.com/dayday/messages1.html" class="list-group-item">
            <i class="fa fa-check-circle connected-status"></i>
            <img src="{{ URL::to('template_assets/woman-9.jpg')}}" class="img-chat img-thumbnail">
            <span class="chat-user-name">Linda palma</span>
        </a>
        <a href="http://demos.bootdey.com/dayday/messages1.html" class="list-group-item">
            <i class="fa fa-check-circle connected-status"></i>
            <img src="{{ URL::to('template_assets/woman-10.jpg')}}" class="img-chat img-thumbnail">
            <span class="chat-user-name">Andrea ramos</span>
        </a>
        <a href="http://demos.bootdey.com/dayday/messages1.html" class="list-group-item">
            <i class="fa fa-check-circle connected-status"></i>
            <img src="{{ URL::to('template_assets/child-1.jpg')}}"class="img-chat img-thumbnail">
            <span class="chat-user-name">Dora ty bluekl</span>
        </a>
    </div>
</div><!-- Online users sidebar content-->

<!-- Modal -->
<div class="modal fade" id="modalShow" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <div class="modal-body text-centers">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="text-muted"> Copyright © Company - All rights reserved </p>
    </div>
</footer>
<script type="text/javascript">
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-49755460-1', 'auto', {'allowLinker': true});
    ga('require', 'linker');
    ga('linker:autoLink', ['bootdey.com','www.bootdey.com','demos.bootdey.com'] );
    ga('send', 'pageview');
</script>

@endsection