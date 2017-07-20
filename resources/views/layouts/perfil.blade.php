<ul class="nav navbar-nav navbar-right">
    <button type="button" class="navbar-right-expand-toggle pull-right visible-xs">
        <i class="fa fa-times icon"></i>
    </button>

    <li class="dropdown profile">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            {{ Auth::user()->name }} <span class="caret"></span>
        </a>
        <ul class="dropdown-menu animated fadeInDown">
            <li>
                <div class="profile-info">
                    <h4 class="username">
                        {{ Auth::user()->name }}
                    </h4>
                    <p> {{ Auth::user()->email }} </p>
                    <div class="btn-group margin-bottom-2x" role="group">
                        <!--<button type="button" class="btn btn-default"><i class="fa fa-user"></i> Perfil</button>-->
                        <a href="{{ url('/logout') }}" class="btn btn-default"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> Salir</a>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </div>
                </div>
            </li>
        </ul>
    </li>
</ul>