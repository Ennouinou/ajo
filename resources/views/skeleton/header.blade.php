<!-- Fixed navbar -->
<div class="navbar navbar-inverse navbar-fixed-top headroom " >
    <div class="container">
        <div class="navbar-header">
            <!-- Button for smallest screens -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <a class="navbar-brand" href="/"><img src="{{URL::to('/')}}/assets/images/mini-logo.png" alt="AJO"></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav pull-right">
                <li class="active"><a href="/">Home</a></li>
                <li><a href="/events">Events</a></li>
                <li><a href="/posts">News</a></li>
                <li><a href="/about">About</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">More Pages <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="sidebar-left.blade.php">Left Sidebar</a></li>
                        <li class="active"><a href="sidebar-right.blade.php">Right Sidebar</a></li>
                    </ul>
                </li>
                <li><a href="/contact">Contact</a></li>
                <li><a class="btn" href="signin.blade.php">SIGN IN / SIGN UP</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>
<header id="head" class="secondary"></header>
<!-- /.navbar -->
