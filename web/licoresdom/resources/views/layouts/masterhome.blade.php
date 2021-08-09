<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">    <!-- spectre-->
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">


    <title>LicoresDom</title>
  </head>
  <body>
    <header class="bg-warning">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-warning">
          <div class="container-fluid">
            <a class="navbar-brand" href="{{route('home')}}">Licores DOOM</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="{{route('conectar')}}">Conectar</a>
                <a class="nav-link" href="{{route('productos')}}">Productos</a>
                <a class="nav-link" href="{{route('promociones')}}">Promociones</a>
                <a class="nav-link" href="{{route('carrito')}}">Carrito</a>
                <a class="nav-link" href="{{route('proveedores')}}">Proveedores</a>

              </div>
            </div>
          </div>
        </nav>
      </div>

    </header>

    <main>
      <body class="bg-danger">

       @yield('body')
        
      </body>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    
    <script src="{{asset('js/axios_config.js')}}"></script>

</html>