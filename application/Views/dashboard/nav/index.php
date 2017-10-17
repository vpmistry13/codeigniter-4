<nav class="navbar-default navbar-static-top" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <h1> <a class="navbar-brand" href="index.html">Minimal</a></h1>
    </div>
    <div class=" border-bottom">
        <div class="full-left">
            <section class="full-top">
                <button id="toggle"><i class="fa fa-arrows-alt"></i></button>
            </section>
            <form class=" navbar-left-right">
                <input type="text" value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search...';}">
                <input type="submit" value="" class="fa fa-search">
            </form>
            <div class="clearfix"> </div>
        </div>

        <!-- Brand and toggle get grouped for better mobile display -->

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="drop-men">
            <ul class=" nav_1">

                <li class="dropdown at-drop">
                    <a href="#" class="dropdown-toggle dropdown-at " data-toggle="dropdown"><i class="fa fa-globe"></i> <span class="number">5</span></a>
                    <ul class="dropdown-menu menu1 " role="menu">
                        <li>
                            <a href="#">

                                <div class="user-new">
                                    <p>New user registered</p>
                                    <span>40 seconds ago</span>
                                </div>
                                <div class="user-new-left">

                                    <i class="fa fa-user-plus"></i>
                                </div>
                                <div class="clearfix"> </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="user-new">
                                    <p>Someone special liked this</p>
                                    <span>3 minutes ago</span>
                                </div>
                                <div class="user-new-left">

                                    <i class="fa fa-heart"></i>
                                </div>
                                <div class="clearfix"> </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="user-new">
                                    <p>John cancelled the event</p>
                                    <span>4 hours ago</span>
                                </div>
                                <div class="user-new-left">

                                    <i class="fa fa-times"></i>
                                </div>
                                <div class="clearfix"> </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="user-new">
                                    <p>The server is status is stable</p>
                                    <span>yesterday at 08:30am</span>
                                </div>
                                <div class="user-new-left">

                                    <i class="fa fa-info"></i>
                                </div>
                                <div class="clearfix"> </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="user-new">
                                    <p>New comments waiting approval</p>
                                    <span>Last Week</span>
                                </div>
                                <div class="user-new-left">

                                    <i class="fa fa-rss"></i>
                                </div>
                                <div class="clearfix"> </div>
                            </a>
                        </li>
                        <li><a href="#" class="view">View all messages</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle dropdown-at" data-toggle="dropdown"><span class=" name-caret"><?= $first_name?><i class="caret"></i></span><img src="<?php echo base_url('images/wo.jpg'); ?>"></a>
                    <ul class="dropdown-menu " role="menu">
                        <li><a href="profile"><i class="fa fa-user"></i>Edit Profile</a></li>
                        <li><a href="inbox.html"><i class="fa fa-envelope"></i>Inbox</a></li>
                        <li><a href="calendar.html"><i class="fa fa-calendar"></i>Calender</a></li>
                        <li><a href="inbox.html"><i class="fa fa-clipboard"></i>Tasks</a></li>
                        <li><a href="logout"><i class="fa fa-sign-out"></i>Logout</a></li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- /.navbar-collapse -->
        <div class="clearfix">

        </div>

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">

                    <li>
                        <a href="../dashboard/index" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Dashboards</span> </a>
                    </li>

                    <li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-indent nav_icon"></i> <span class="nav-label">Menu Levels</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="graphs.html" class=" hvr-bounce-to-right"> <i class="fa fa-area-chart nav_icon"></i>Graphs</a>
                            </li>

                            <li><a href="maps.html" class=" hvr-bounce-to-right"><i class="fa fa-map-marker nav_icon"></i>Maps</a></li>

                            <li><a href="typography.html" class=" hvr-bounce-to-right"><i class="fa fa-file-text-o nav_icon"></i>Typography</a></li>

                        </ul>
                    </li>
                    <li>
                        <a href="inbox.html" class=" hvr-bounce-to-right"><i class="fa fa-inbox nav_icon"></i> <span class="nav-label">Inbox</span> </a>
                    </li>

                    <li>
                        <a href="gallery.html" class=" hvr-bounce-to-right"><i class="fa fa-picture-o nav_icon"></i> <span class="nav-label">Gallery</span> </a>
                    </li>
                    <li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-desktop nav_icon"></i> <span class="nav-label">Pages</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="404.html" class=" hvr-bounce-to-right"> <i class="fa fa-info-circle nav_icon"></i>Error 404</a>
                            </li>
                            <li><a href="faq.html" class=" hvr-bounce-to-right"><i class="fa fa-question-circle nav_icon"></i>FAQ</a></li>
                            <li><a href="blank.html" class=" hvr-bounce-to-right"><i class="fa fa-file-o nav_icon"></i>Blank</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="layout" class=" hvr-bounce-to-right"><i class="fa fa-th nav_icon"></i> <span class="nav-label">Grid Layout</span> </a>
                    </li>

                    <li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-list nav_icon"></i> <span class="nav-label">Forms</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="forms.html" class=" hvr-bounce-to-right"><i class="fa fa-align-left nav_icon"></i>Basic forms</a></li>
                            <li><a href="validation.html" class=" hvr-bounce-to-right"><i class="fa fa-check-square-o nav_icon"></i>Validation</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-cog nav_icon"></i> <span class="nav-label">Settings</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="signin.html" class=" hvr-bounce-to-right"><i class="fa fa-sign-in nav_icon"></i>Signin</a></li>
                            <li><a href="signup.html" class=" hvr-bounce-to-right"><i class="fa fa-sign-in nav_icon"></i>Singup</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

</nav>