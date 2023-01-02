<!doctype html>
<html lang="en">
  <head>
  	<title>Sidebar 02</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="{{asset('css/style.css')}}">
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
		  		<h1><a href="index.html" class="logo"><img src="{{asset('img/mariño.png')}}" alt="" style="width: 80%;height: auto; border-radius:35%"></a></h1>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
                <a href="#">Home</a>
	          </li>
	          <li>
	          <li>
              <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Ventas</a>
              <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                    <a href="#">Registrar venta</a>
                </li>
                <li>
                    <a href="#">Listar venta</a>
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

	        <div class="mb-5">
						<h3 class="h6">Subscribe for newsletter</h3>
						<form action="#" class="colorlib-subscribe-form">
	            <div class="form-group d-flex">
	            	<div class="icon"><span class="icon-paper-plane"></span></div>
	              <input type="text" class="form-control" placeholder="Enter Email Address">
	            </div>
	          </form>
					</div>

	        <div class="footer">
                <p>&copy; EL MARIÑO</p>
	        </div>

	      </div>
    	</nav>
        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
      </div>
		</div>

    <script src="{{asset('js/document/jquery.min.js')}}"></script>
    <script src="{{asset('js/document/popper.js')}}"></script>
    <script src="{{asset('js/document/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/document/main.js')}}"></script>
  </body>
</html>