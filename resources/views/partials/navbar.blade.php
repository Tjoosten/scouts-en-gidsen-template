<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Sint-Joris</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            @if(! Auth::check())
                <ul class="nav navbar-nav">
                    <li @if($active === 1) class="active" @endif>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            Takken
                        </a>

                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{URL::to('/')}}/takken/kapoenen">
                                    <span class="fa fa-asterisk"></span>
                                    Kapoenen
                                </a>
                            </li>
                            <li>
                                <a href="{{URL::to('/')}}/takken/welpen">
                                    <span class="fa fa-asterisk"></span>
                                    Welpen
                                </a>
                            </li>
                            <li>
                                <a href="{{URL::to('/')}}/takken/jong-givers">
                                    <span class="fa fa-asterisk"></span>
                                    Jong-givers
                                </a>
                            </li>
                            <li>
                                <a href="{{URL::to('/')}}/takken/givers">
                                    <span class="fa fa-asterisk"></span>
                                    Givers
                                </a>
                            </li>
                            <li>
                                <a href="{{URL::to('/')}}/takken/jins">
                                    <span class="fa fa-asterisk"></span>
                                    Jins
                                </a>
                            </li>
                            <li>
                                <a href="{{URL::to('/')}}/takken/leiding">
                                    <span class="fa fa-asterisk"></span>
                                    Leiding
                                </a>
                            <li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{URL::to('/')}}">
                            <span class="fa fa-home"></span>
                            Verhuur
                        </a>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="{{ URL::to('/login') }}"> Login </a>
                    </li>
                </ul>
            @elseif(Auth::check())
                <ul class="nav navbar-nav navbar">
                    <li>
                        <a href="{{ Url::to('/backend/takken/update') }}">
                            <span class=""></span>
                            Takken
                        </a>
                    </li>
                    <li>
                        <a href="{{URL::to('/backend/rental')}}">
                            <span class=""></span>
                            Verhuur
                        </a>
                    </li>
                    <li>
                        <a href="{{ Url::to('/cloud/index') }}">
                            <span class=""> Cloud </span>
                        </a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            {{ Auth::user()->name }}
                        </a>

                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{URL::to('/')}}">
                                    Account configuratie
                                </a>
                            </li>

                            {{-- User management --}}
                            @if(Auth::user()->role === 2 || Auth::user()->name === 'Tim Joosten')
                                <li>
                                    <a href="{{ URL::to('/backend/acl') }}">
                                        Login beheer.
                                    </a>
                                </li>
                            @endif
                            {{-- end user management --}}
                            <li class="divider">
                            <li>
                                <a href="{{ URL::to('/logout') }}">
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            @endif
        </div> {{-- /.nav-collapse --}}
    </div>
</nav>