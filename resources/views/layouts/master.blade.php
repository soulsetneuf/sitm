<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <!--   
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
    -->
    <!-- CSS Libs -->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/assets/css/animate.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/assets/css/bootstrap-switch.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/assets/css/checkbox3.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/assets/css/jquery.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/assets/css/dataTables.bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/assets/css/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/assets/css/datepicker.css')}}">
    <!-- CSS App -->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/css/themes/flat-blue.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/css/dropzone.css')}}">
</head>

<body class="flat-blue">
    <div class="app-container expanded">
        <div class="row content-container">
            <nav class="navbar navbar-default navbar-fixed-top navbar-top">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-expand-toggle fa-rotate-90">
                            <i class="fa fa-bars icon"></i>
                        </button>
                        <ol class="breadcrumb navbar-breadcrumb">
                            <li class="active">@yield('AdmTitle')</li>
                        </ol>
                        <button type="button" class="navbar-right-expand-toggle pull-right visible-xs">
                            <i class="fa fa-th icon"></i>
                        </button>
                    </div>
                    <ul class="nav navbar-nav navbar-right">
                        <button type="button" class="navbar-right-expand-toggle pull-right visible-xs">
                            <i class="fa fa-times icon"></i>
                        </button>

                        <li class="dropdown profile">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
					 nombre del usuario <span class="caret"></span>
			    </a>
                            <ul class="dropdown-menu animated fadeInDown">
                                <li>
                                    <div class="profile-info">
                                        <h4 class="username">
						 nombre del usuario
					</h4>
                                        <p> email del usuario </p>
                                        <div class="btn-group margin-bottom-2x" role="group">
                                            <button type="button" class="btn btn-default"><i class="fa fa-user"></i> Perfil</button>
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
                </div>
            </nav>
            <div class="side-menu sidebar-inverse">
                <nav class="navbar navbar-default" role="navigation">
                    <div class="side-menu-container">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="#">
                                <div class="icon fa fa-paper-plane"></div>
                                <div class="title">
                                    SGECC
                                </div>
                            </a>
                            <button type="button" class="navbar-expand-toggle pull-right visible-xs">
                                <i class="fa fa-times icon"></i>
                            </button>
                        </div>
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="/home">
                                    <span class="icon fa fa-tachometer"></span><span class="title">Dashboard</span>
                                </a>
                            </li>
                            @component(config("options.dropdown"))
                                @slot("id") 1 @endslot
                                @slot("menu") Personas @endslot
                                @slot("submenu") Lista @endslot
                            @endcomponent
                            @component(config("options.dropdown"))
                                @slot("id") 2 @endslot
                                @slot("menu") Pacientes @endslot
                                @slot("submenu") Lista @endslot
                            @endcomponent
                            @component(config("options.dropdown"))
                                @slot("id") 3 @endslot
                                @slot("menu") Medicos @endslot
                                @slot("submenu") Lista @endslot
                            @endcomponent
                            @component(config("options.dropdown"))
                                @slot("id") 4 @endslot
                                @slot("menu") Camas @endslot
                                @slot("submenu") Lista @endslot
                            @endcomponent
                            @component(config("options.dropdown"))
                                @slot("id") 5 @endslot
                                @slot("menu") Equipamiento @endslot
                                @slot("submenu") Lista @endslot
                            @endcomponent
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </nav>
            </div>
            <!-- Main Content -->
            <div class="container-fluid">
                <div class="side-body padding-top">
                    <div class="row">
                      <br>
    				  @yield('content')
                    </div>
                </div>
            </div>
        </div>
        <footer class="app-footer">
            <div class="wrapper">
                <span class="pull-right">2.1 <a href="#"><i class="fa fa-long-arrow-up"></i></a></span> © <?php print date("Y"); ?> Copyright.
            </div>
        </footer>
        <div>
            <!-- Javascript Libs -->
            <script type="text/javascript" src="{{URL::asset('/assets/js/jquery.min.js')}}"></script>
            <script type="text/javascript" src="{{URL::asset('/assets/js/bootstrap.min.js')}}"></script>
            <script type="text/javascript" src="{{URL::asset('/assets/js/Chart.min.js')}}"></script>
            <script type="text/javascript" src="{{URL::asset('/assets/js/bootstrap-switch.min.js')}}"></script>
            <script type="text/javascript" src="{{URL::asset('/assets/js/jquery.matchHeight-min.js')}}"></script>
            <script type="text/javascript" src="{{URL::asset('/assets/js/jquery.dataTables.min.js')}}"></script>
            <script type="text/javascript" src="{{URL::asset('/assets/js/dataTables.bootstrap.min.js')}}"></script>
            <script type="text/javascript" src="{{URL::asset('/assets/js/select2.full.min.js')}}"></script>
            <script type="text/javascript" src="{{URL::asset('/assets/js/ace/ace.js')}}"></script>
            <script type="text/javascript" src="{{URL::asset('/assets/js/ace/mode-html.js')}}"></script>
            <script type="text/javascript" src="{{URL::asset('/assets/js/ace/theme-github.js')}}"></script>
            <script type="text/javascript" src="{{URL::asset('/assets/js/bootstrap-datepicker.js')}}" charset="UTF-8"></script>
            <!-- Javascript -->
            
            <script type="text/javascript" src="{{URL::asset('/js/app.js')}}"></script>
            <script type="text/javascript" src="{{URL::asset('/js/dropzone.js')}}"></script>
            @yield('script_content')
</body>

</html>