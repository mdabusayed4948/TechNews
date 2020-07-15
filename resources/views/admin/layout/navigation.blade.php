<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="{{ url('/back') }}"><img src="{{ asset('public/admin/images/logo.png') }}"></a>
            <a class="navbar-brand hidden" href="{{ url('/back') }}"><img src="{{ asset('public/admin/images/logo2.png') }}"></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="{{ url('/back') }}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                </li>
                @permission(['Permission Update','All','Permission'])
                <li class="active">
                    <a href="{{ url('/back/permission') }}"> <i class="menu-icon fa fa-laptop"></i>Permissions </a>
                </li>
                @endpermission

                @permission(['Permission Update','All'])
                <li class="active">
                    <a href="{{ url('/back/roles') }}"> <i class="menu-icon fa fa-laptop"></i>Roles </a>
                </li>
                @endpermission

                @permission(['Permission Update','All'])
                <li class="active">
                    <a href="{{ url('/back/author') }}"> <i class="menu-icon fa fa-laptop"></i>Authors </a>
                </li>
                @endpermission

                @permission(['Category List','All'])
                <li class="active">
                    <a href="{{ url('/back/categories') }}"> <i class="menu-icon fa fa-laptop"></i>Categories </a>
                </li>
                @endpermission

                @permission(['Post List','All'])
                <li class="active">
                    <a href="{{ url('/back/posts') }}"> <i class="menu-icon fa fa-laptop"></i>Posts </a>
                </li>
                @endpermission

            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->