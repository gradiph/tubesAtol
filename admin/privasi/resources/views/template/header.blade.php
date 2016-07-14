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
                    <li><a href="{{ URL('pemilik-usaha') }}">Data Pemilik Usaha</a></li>
                    <li><a href="{{ URL('wilayah') }}">Data Wilayah</a></li>
                    <li><a href="{{ URL('sektor-usaha') }}">Data Sektor Usaha</a></li>
                    <li><a href="{{ URL('data-usaha') }}">Data Usaha</a></li>
                    <li><a href="{{ URL('laporan') }}">Laporan</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ URL('user/'.Auth::user()->id) }}"><span class="glyphicon glyphicon-user"></span> {{ Auth::user()->name }}</a></li>
                    <li><a href="{{ URL('logout') }}"><span class="glyphicon glyphicon-log-out"></span> Keluar</a></li>
                </ul>
            </div>
        </div>
    </nav>
@endif