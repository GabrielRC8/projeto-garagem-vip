
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Garagem Vip</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/navbar-static/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/4.5/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/4.5/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/4.5/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon.ico">
<meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
<<<<<<< HEAD
=======

 
>>>>>>> develop
    </style>
    <!-- Custom styles for this template -->
    <link href="navbar-top.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
  <span class="navbar-brand" href="#">Garagem Vip</span>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
<<<<<<< HEAD
      <li class="nav-item active">
        <a class="nav-link" href="">Clientes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">Cadastro</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="" tabindex="-1" aria-disabled="true">Ordens</a>
=======
      <li class="nav-item {{route::current()->getName() === 'customers' ? 'active' : '' }}"><a class="nav-link" href="{{route('customers')}}">Clientes</a></li>
      

      <li class="nav-item {{route::current()->getName() === 'register' ? 'active' : '' }}"><a class="nav-link" href="{{route('register')}}">Cadastro</a></li>
      
      <li class="nav-item {{route::current()->getName() === 'orders' ? 'active' : '' }}"><a class="nav-link" href="{{route('orders')}}">Ordens</a></li>
      
      <li class="nav-item {{route::current()->getName() === 'products' ? 'active' : '' }}"><a class="nav-link" href="{{route('products')}}">Produtos</a></li>

>>>>>>> develop
      </li>
    </ul>
<form class="form-inline mt-2 mt-md-0" action="{{route('logout')}}">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout</button>
    </form>
  </div>
</nav>

@yield('content')


<<<<<<< HEAD
=======


            












>>>>>>> develop
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</body>
</html>
