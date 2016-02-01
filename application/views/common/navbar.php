 <nav class="navbar default-color">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand waves-effect waves-light" href="#">Rexon</a>
        </div>
<!--        <form class="navbar-form navbar-left" role="search">
                <div class="form-group waves-effect waves-light">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
            </form> -->
        <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-2">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#" class="waves-effect waves-light">Link <span class="sr-only">(current)</span></a></li>
                <li><a href="#" class="waves-effect waves-light">Link</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" role="button" aria-expanded="false"><?= $name?> <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><?php echo anchor('login/logout', 'Logout');?></li>
                        <!-- <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li class="divider"></li>
                        <li><a href="#">One more separated link</a></li> -->
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>