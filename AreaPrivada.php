<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Fixed top navbar example · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/navbar-fixed/">

    

    <!-- Bootstrap core CSS -->
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="shortcut icon" href="img/logo.png" type="image/x-icon">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="navbar-top-fixed.css" rel="stylesheet">
  </head>
  <body>
    
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-success"
      style=" font-family: 'Times New Roman', Times, serif;"

>
  <div class="container-fluid">
    <a class="navbar-brand" href="#"> </a> <img src="img/ISTM_logotipo.png" width="120"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item ">
          <a class="nav-link active" aria-current="page" href="#">Normas</a> 
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Condições</a> 
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Documentos</a> 
        </li>
        
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Candidato(eu)
          </a>

          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="candidatar.php">Candidatar-me</a></li>
            <li><a class="dropdown-item" href="#">Ver resultado</a></li>
            <li><a class="dropdown-item" href="#">Reclamar</a></li>
          </ul>
        </li>
        

        
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="pesquisar" aria-label="Search">
        <button class="btn btn-outline-success" type="submit" style="background-color: chartreuse; color: black;">Buscar</button>
      </form>
    </div>
  </div>
</nav>
<div class="d-flex flex-column flex-shrink-0 p-3 text-white" style="width: 260px; height: 555px; background-color: #33CC66;">
  <hr>
<nav class="nav flex-column" >
  <a class="nav-link active" aria-current="page" href="#">Perfil</a>
  <a class="nav-link" href="#">Mensagem</a>
  <a class="nav-link" href="#">Contacto</a>
  <a class="nav-link disabled">Sobre nós</a>
</nav>

</div>
<main class="container">
  <div class="bg-light p-5 rounded">
    <h1>Navbar example</h1>
    <p class="lead">This example is a quick exercise to illustrate how fixed to top navbar works. As you scroll, it will remain fixed to the top of your browser’s viewport.</p>
    <a class="btn btn-lg btn-primary" href="../components/navbar/" role="button">View navbar docs &raquo;</a>
  </div>
</main>


    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
