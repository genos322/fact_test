<!doctype html>
<html lang="en">

<head>
    <title>Sidebar 02</title>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/styleVenta.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
 
</head>

<body>

    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="custom-menu">
                <button type="button" id="sidebarCollapse" class="btn btn-primary">
                    <i class="fa fa-bars"></i>
                    <span class="sr-only">Toggle Menu</span>
                </button>
            </div>
            <div class="p-4 pt-5">
                <h1><a href="index.html" class="logo"><img src="{{ asset('img/mariño.png') }}" alt=""
                            style="width: 80%;height: auto; border-radius:35%"></a></h1>
                <ul class="list-unstyled components mb-5">
                    <li class="{{ request()->routeIs('user.home') ? 'active' : '' }}">
                        <a href="{{ '/home' }}">Home</a>
                    </li>
                    <li>
                        <a href="#pageSubmenu" data-toggle="collapse">Ventas</a>
                        {{-- <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="{{request()->routeIs('user.registrarVenta') ? 'true' : 'false'}}"
                                class="{{request()->routeIs('user.registrarVenta')? 'dropdown-toggle': 'dropdown-toggle collapse'}}">Ventas</a> --}}
                        <ul class="{{ request()->routeIs('user.registrarVenta') || request()->routeIs('user.listarVentas')? 'list-unstyled collapse show' : 'list-unstyled collapse' }}"
                            id="pageSubmenu">
                            <li class="{{ request()->routeIs('user.registrarVenta') ? 'active' : '' }}">
                                <a href="{{ url('user/registrarVenta') }}">Registrar venta</a>
                            </li>
                            <li class="{{ request()->routeIs('user.listarVentas')?'active':''}}">
                                <a href="{{url('user/listarVentas')}}">Listar venta</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"></a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
                <div class="footer">
                    <p>&copy; EL MARIÑO</p>
                </div>

            </div>
        </nav>
        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">
            @yield('user')
        </div>
        <script src="{{ asset('js/document/jquery.min.js') }}"></script>
        <script src="{{ asset('js/document/popper.js') }}"></script>
        <script src="{{ asset('js/document/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/document/main.js') }}"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
