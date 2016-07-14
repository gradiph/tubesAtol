@if(Auth::user())
    <nav class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ URL('/') }}">Website</a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="glyphicon glyphicon-menu-hamburger"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                        <li><a href="{{ URL('/') }}">Home</a></li>
                        <li><a href="{{ URL('data-usaha') }}">Data Usaha</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href=""><span class="glyphicon glyphicon-user"></span> {{ Auth::user()->username }}</a></li>
                    <li><a href="{{ URL('logout') }}"><span class="glyphicon glyphicon-log-out"></span> Keluar</a></li>
                </ul>
            </div>
        </div>
    </nav>
@endif