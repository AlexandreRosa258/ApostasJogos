<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/app-css/nav.css">

</head>

<body>

    @guest
    @else

    <div class="fixed-action-btn">
        <a data-target="slide-out" class="sidenav-trigger btn-floating btn-medium tooltipped red darken-2" data-tooltip="Profile"
            data-position="left"><i class=" medium material-icons">menu</i></a>
    </div>
    <ul id="slide-out" class="sidenav">
        <li><a href=""><span class="name">Nome: {{ Auth::user()->name }} </span></a></li>
        <li><a href=""><span class="email">Email: {{ Auth::user()->email }} </span></a></li>
        <li><a class="modal-trigger" href="#modal1"><i class="material-icons">person</i>Perfil / Profile</a></li>
        <li>
            <div class="divider"></div>
        </li>
        <li><a class="waves-effect" href="{{route('logout')}}" onclick="event.preventDefault();
                                                           document.getElementById('logout-form').submit();">
                <i class="material-icons">power_settings_new</i>Sair</a></li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </ul>


    <div id="modal1" class="modal">

        <div class="container">
            <div class="row">
                <h4>
                    <p>Tem certeza da mudança de dados ?</p>
                </h4>
                {{-- <div class="col s12">
                    <a href="{{route('dashboard.index')}}" class="modal-close waves-effect waves-green  red btn-flat"><i
                            class="material-icons left">cancel</i>No</a>
                    <a href="{{route('auth.profile',Auth::user()->id)}}"
                        class="modal-close waves-effect green waves-green  btn-flat"><i
                            class="material-icons left">check</i>Ok</a>
                </div> --}}
            </div>
        </div>

    </div>

    @endguest
    <nav>
        <div class="nav-wrapper red darken-2">
            {{-- <a href="{{route('dashboard.index')}}" class="brand-logo">Kings - English School</a> --}}

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <!-- Authentication Links -->
                    @guest
                    <li class="nav-item">
                        <a class="tooltipped" data-tooltip="Log-in" data-position="bottom"
                            href="{{ route('login') }}"><i
                                class="material-icons right">assignment_ind</i>{{ __('Login') }}</a>
                    </li>

                    @else
                    {{-- <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <span class="caret"></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('test.index')}}"><i class="material-icons right">description</i>Test Level</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('student.index')}}"><i class="material-icons right">school</i>Students</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('proof.index')}}"><i class="material-icons right">description</i>Test</a>
                    </li> --}}

                    @endguest
                </ul>
            </div>

    </nav>

</body>

</html>
