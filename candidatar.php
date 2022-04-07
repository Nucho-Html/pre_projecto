<!doctype html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Candidatura</title>
      <!-- Bootstrap CSS -->
   <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/checkout/">

    

    <!-- Bootstrap core CSS -->


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
    <link href="form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light " 
  style="background-image: url(img/fundo6.jpg);
    background-size: cover;
     background-repeat: no-repeat;
    background-position:top;
  ">
    
<div class="container">
  <main>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="img/ISTM_logotipo.png" alt="" width="100" height="57">
      <h2>Faça a sua candidatura</h2>
      <p class="lead">Seja bem-vindo.
      Esperamos que disponha de todas as informações que necessita para se candidatar a um dos cursos que o ISTM ministra nas áreas das Engenharias e das Medicinas.</p>
    </div>

    <div class="row g-5">
      <div class="col-md-5 col-lg-4 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-primary">Pagamento</span>
          <img class="d-block mx-auto mb-4" src="img/angola.jpg" alt="" width="150" height="100">
        </h4>
        <ul class="list-group mb-3">
        
          <li class="list-group-item d-flex justify-content-between bg-light">
            <div class="text-success">
              <h6 class="my-0">Sistema Promo</h6>
              <small>istm</small>
            </div>
            <span class="text-success">−5KZ</span>
          </li>
       
        </ul>

        <form class="card p-2">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Artigos">
            <button type="submit" class="btn btn-secondary">Redeem</button>
          </div>
        </form>
      </div>
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Dados Pessoas</h4>
        <form class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Primeiro Nome</label>
              <input type="text" class="form-control" id="firstName" placeholder="Isaac" value="" required>
              <div class="invalid-feedback">
                O primeiro nome é obrigatório.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Último nome</label>
              <input type="text" class="form-control" id="lastName" placeholder="Pressman" value="" required>
              <div class="invalid-feedback">
                 campo obrigatório.
              </div>
            </div>

            <div class="col-md-5">
              <label for="year" class="form-label">Idade</label>
              <select class="form-select" id="idade" required>
                <option>18</option>
                <option>19</option>
                <option>20</option>
                <option>21</option>
                <option>Outra...</option>
              </select>
            </div>

             <div class="col-md-5">
              <label for="status" class="form-label">Estado</label>
              <select class="form-select" id="estatuto" required>
                <option>Militar</option>
                <option>Civil</option>
              </select>
            </div>

              <div class="col-md-5">
              <label for="school" class="form-label">Ensino médio</label>
              <select class="form-select" id="ensino-medio" required>
                <option>Ciêcias Exatas</option>
                <option>Ciências Médicas</option>
                <option>Outra...</option>
              </select>
            </div>

             <div class="col-md-5">
              <label for="course" class="form-label">Cursar em</label>
              <select class="form-select" id="cursos" required>
                <option>Engenharia Informática</option>
                <option>Engenharia Electrónica</option>
                <option>Engenharia Const. e Fortificações</option>
                <option>Engenharia Mecânica</option>
                <option>Medicina Geral</option>
                <option>Enfermagem</option>
              </select>
            </div>

              <div class="col-md-5">
              <label for="country" class="form-label">Província</label>
              <select class="form-select" id="country" required>
                <option value="">Escolher...</option>
                <option>Cabinda</option>
                <option>Huambo</option>
                <option>Benguela</option>
                <option>Cuanza-Norte</option>
                <option>Luanda</option>
                <option>Uíge</option>
                <option>Zaire</option>
              </select>
            </div>

                <div class="col-md-5">
              <label for="document" class="form-label">Documento em posse</label>
              <div class="my-3">
         <div class="form-check">
          <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
          <label class="form-check-label" for="credit">B.I</label>
            </div>
            <div class="form-check">
              <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
              <label class="form-check-label" for="debit">Passporte</label>
            </div>
         
          </div>
            </div>

          <div class="row gy-3">
            <div class="col-md-6">
              <label for="cc-name" class="form-label">Número B.I/Passaporte</label>
              <input type="text" class="form-control" id="cc-name" placeholder="" >            
            </div>

            <div class="col-md-3">
              <label for="cc-expiration" class="form-label">Ficheiro</label>
              <input type="text" class="form-control" id="cc-expiration" placeholder="" >
            </div>
          </div>


            <div class="col-12">
              <label for="username" class="form-label">Email <span class="text-muted">(Opcional)</span></label>
              <div class="input-group has-validation">
                <span class="input-group-text">@</span>
              <input type="email" class="form-control" id="username" placeholder="eu@exemplo.gmail" required>
              <div class="invalid-feedback">
                  Digite um email válido.
                </div>
              </div>
            </div>
          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" type="submit">Enviar</button>
        </form>
      </div>
    </div>
  </main>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2021–2022 Instituto Superior Técnico Militar-Angola</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Termos de Privacidade</a></li>
      <li class="list-inline-item"><a href="#">FAA</a></li>
    </ul>
  </footer>
</div>


    <script src="bootstrp/js/bootstrap.bundle.min.js"></script>

      <script src="form-validation.js"></script>
  </body>
</html>
