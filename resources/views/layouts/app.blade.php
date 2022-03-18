<!DOCTYPE html>

<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Bolsa V1</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
        <link rel="canonical" href="https://icons.getbootstrap.com/">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.10.1/bootstrap-table.min.js"></script>
    </head>
    <body>
      <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
          <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <i class="bi-bootstrap-fill" style="font-size: 2rem;width=40"></i>
            <span class="fs-4">Bolsa V1</span>
          </a>
    
          @include('inc.navbar')
        </header>
      </div>  
      
      <div class="container">

        <div class="row">
          <div class="col-md-10 col-lg-10">
            @yield('content')
          </div>
        </div>
        

        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
          <div class="col-md-4 d-flex align-items-center">
            <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
              <i class="bi-bootstrap-fill" style="font-size: 1.5rem;"></i>
            </a>
            <span class="text-muted">&copy; 2022 Javi Clavero</span>
          </div>
      
          <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-3"><i class="bi-twitter text-muted" style="font-size: 1.5rem;"></i></li>
            <a href="https://www.instagram.com/javi.clavero">
            <li class="ms-3"><i class="bi-instagram text-muted" style="font-size: 1.5rem;"></i></li>
          </a>
            <li class="ms-3"><i class="bi-facebook text-muted" style="font-size: 1.5rem;"></i></li>
          </ul>
        </footer>
      </div>
    </body>
</html>
