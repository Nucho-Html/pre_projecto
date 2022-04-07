<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="bootstrap/css/bootstrap.min.cs" rel="stylesheet">
<link rel="shortcut icon" href="img/logo.png" type="image/x-icon">


   

    <link rel="stylesheet" href="css/owl/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl/owl.theme.default.min.css" />
    <link rel="stylesheet" href="css/magnific-popup.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link href="signin.css" rel="stylesheet">

    <title>Portal do aluno-istm</title>
  </head>
  <body  style="background-color: #F5F5F5;" >
    <!--HEADER-->
    <div id="header">
      <div class="container">
        <nav
          class="navbar navbar-expand-lg navbar-light justify-content-between "
        >
          <a class="navbar-brand" href="#">
            <img src="img/ISTM_logotipo.png" class="img-fluid" width="150" />
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <!--Iniciando o navegador-->
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" href="areasprivada.php">Página Inicial</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Normas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Calendarização</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Documentos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Condições</a>
              </li>
              <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-red" href="#" id="navbarDropdown" 
          role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Admissão 
          </a>

          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Apresentação</a></li>
            <li><a class="dropdown-item" href="candidatar.php">Candidatar-me</a></li>
            <li><a class="dropdown-item" href="#">Perguntas frequentes</a></li>
            <li><a class="dropdown-item" href="#">Contactos</a></li>
          </ul>
        </li>
              
              &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <!--Iniciando o pesquisar -->
              <li>
              <button type="button" class="btn btn-outline-dark">Buscar</button>
              </li> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              
              <li>
              <button type="button" class="btn btn-outline-danger"> <a href="logar.php">Login</a></button>
              </li>
            </ul>

            
          </div>
        </nav>
      </div>
    </div>
    <!--//HEADER-->

    <!--SLIDER-->

    <!--//SLIDER-->

    <!--SOBRE-->
    <div id="sobre" class="block">
      <div class="container">
        <div class="row">
          <div
            class="col-md-6 align-self-center text-center order-md-1 order-2"
          >
            <img src="img/cadete3.jpg" class="img-fluid" />
          </div>
          <div
            class="col-md-6 align-self-center order-md-2 order-1 mb-md-0 mb-4"
          >
            <h2 class="title">Aspirantes do 5º ano, Curso de Engenharia Informática  </h2>
            <h4 class="subtitle">
            1ª Fase | Candidatura online
            </h4>
            <p>
            A primeira fase do processo de admissão, inicia-se com a publicação em Diário da República do aviso de abertura do concurso. 
            É durante este período que os candidatos submetem a sua candidatura. 
            A candidatura será feita online, devendo os candidatos seguir as 
            indicações que serão disponibilizadas nesta página. 
            Após a submissão da candidatura os candidatos irão receber, por e-mail/telefone, 
            a confirmação da receção da mesma e a indicação da sua aceitação ou rejeição. 
            Os candidatos cuja candidatura seja considerada válida passarão à fase seguinte.
            Aqueles cuja candidatura seja considerada inválida serão excluídos 
            do concurso e informados dos motivos que lhe deram origem.
            </p>
            <a href="cadastrar.php" class="btn btn-primary button button-primary"
              >Cadastra-se aqui...</a
            >
          </div>
        </div>
      </div>
    </div>
    <!--//SOBRE-->




    <!--SERVICOS-->
    <div id="servicos" class="block">
      <div class="container">
        <h2 class="title text-center">Aspirantes </h2>
        <h4 class="subtitle text-center mb-4">
         O futuro oficial do quadro permanente
        </h4>

        <div class="button-group">
          <button type="button" class="active" data-filter="*" id="btn-all">
            Informática
          </button>
          <button type="button" data-filter=".website">Electrotécnia</button>
          <button type="button" data-filter=".email">Cons. e fortificação</button>
          <button type="button" data-filter=".apps">Mecânica</button>
          <button type="button" data-filter=".apps">Medicina Geral</button>
          <button type="button" data-filter=".graficos">Enfermagem</button>
        </div>

        <div class="row grid">
          <div class="col-lg-4 col-6 mb-4 element-item website apps">
            <a href="img/cadete2.jpg" class="popup-link">
              <img src="img/cadete1.jpg" class="img-fluid mb-2" />
            </a>
            <h5 class="text-uppercase mb-1">Annonymous</h5>
            <p class="mb-0">
              <span class="badge bg-light text-dark">Grupo de programadores </span>
              <span class="badge bg-light text-dark">Linguagem php</span>
            </p>
          </div>
          <div class="col-lg-4 col-6 mb-4 element-item email">
            <a href="img/cadete1.jpg" class="popup-link">
              <img src="img/cadete2.jpg" class="img-fluid mb-2" />
            </a>
            <h5 class="text-downcase">Hélder Gustavo - Isaac Macosso - Osvaldo Sunguete</h5>
         
          </div>
          <div class="col-lg-4 col-6 mb-4 element-item apps">
            <a href="img/cadete0.jpg" class="popup-link">
              <img src="img/cadete.jpg" class="img-fluid mb-2" />
            </a>
            <h5 class="text">Isaac Macosso - Bartolomeu Ngola</h5>
            <p class="mb-0 tags">
              <span class="badge bg-light text-dark">Apps</span>
            </p>
          </div>
          <div class="col-lg-4 col-6 mb-4 element-item apps">
            <a href="img/cadete.jpg" class="popup-link">
              <img src="img/cadete0.jpg" class="img-fluid mb-2" />
            </a>
            <h5 class=""></h5>
            <p class="mb-0 tags">
            <h5 class="text">Kalemba Capitão - Cassesse - Ricardo Lopes - Bartolomeu Ngola</h5>
              <span class="badge bg-light text-dark">Apps</span>
            </p>
          </div>
          <div class="col-lg-4 col-6 mb-4 element-item email">
            <a href="img/cadete7.jpg" class="popup-link">
              <img src="img/cadete8.jpg" class="img-fluid mb-2" />
            </a>
            <h5 class="text">Rosa Dália - Josefina Quimino</h5>
            <p class="mb-0 tags">
              <span class="badge bg-light text-dark">Email</span>
            </p>
          </div>
    
        
          <div class="col-lg-4 col-6 mb-4 element-item apps">
            <a href="img/cadete8.jpg" class="popup-link">
              <img src="img/cadete7.jpg" class="img-fluid mb-2" />
            </a>
            <h5 class="text">Isaac Macosso</h5>
            <p class="mb-0 tags">
              <span class="badge bg-light text-dark">Apps</span>
            </p>
          </div>
        </div>
      </div>
    </div>
    <!--//SERVICOS-->

    <!--DEPOIMENTOS-->
    <div id="depoimentos" class="block">
      <div class="container">
        <h2 class="title text-center">Depoimentos</h2>
        <h4 class="subtitle text-center mb-4">
        Viver na Academia Militar
        </h4>

        <div class="owl-carousel owl-theme owl-loaded">
          <div>
            <div class="depoimento">
              <img src="img/diretor.jpg" />
              <div class="depoimento-texto pl-3">
                <p>
                De facto, devemos dizer de forma 
                aberta que há ganhos. E estes são significativos.
                Estes ganhos podemos identificá-los a partir da criação
                desta página. 
          
                </p>
                <p class="name">
                  <span>Miguel Domingos Júnior</span> / TENENTE GENERAL
                </p>
                <p class="mb-0">
                  <img src="assets/quote.svg" class="quote float-right" />
                </p>
              </div>
            </div>
          </div>
          <div>
            <div class="depoimento">
              <img src="img/falamais.jpg" />
              <div class="depoimento-texto pl-3">
                <p>
                é sentir a vivência do regime de internato
                acordar ao toque da alvorada, sabendo que 
                os dias, aparentemente rotineiros, são 
                vividos sempre de forma diferente.
                </p>
                <p class="name">
                  <span>Marcos Afonso</span> / Sub-Tenente
                </p>
                <p class="mb-0">
                  <img src="assets/quote.svg" class="quote float-right" />
                </p>
              </div>
            </div>
          </div>
          <div>
            <div class="depoimento">
              <img src="img/elafala.jpg" />
              <div class="depoimento-texto pl-3">
                <p>
                  É vestir o uniforme para um dia-a-dia constante no seu rigor
                  na sua exigência mas, acima de tudo, recompensador.
                </p>
                <p class="name">
                  <span>Maria da Glória</span> / Sub-Tenente
                </p>
                <p class="mb-0">
                  <img src="assets/quote.svg" class="quote float-right" />
                </p>
              </div>
            </div>
          </div>
          <div>
            <div class="depoimento">
              <img src="img/falaso.jpg" />
              <div class="depoimento-texto pl-3">
                <p>   
                  Viver na Academia Militar é a competição desportiva, a
                  estética da formatura, é a camaradagem divertida, 
                  é todo um convívio diversificado dos futuros Oficiais.
                  
                  
                </p>
                <p class="name">
                  <span>Dongala Manuel</span> / Cadete
                </p>
                <p class="mb-0">
                  <img src="assets/quote.svg" class="quote float-right" />
                </p>
              </div>
            </div>
          </div>
         
         
        </div>
      </div>
    </div>
    <!--//DEPOIMENTOS-->

    <!--FOOTER-->
    <footer id="contato">
      <div class="container">
        <div class="email">
          <img src="assets/paperplane.svg" />
          <h2 class="title text-center">Fique por dentro das novidades</h2>
          <h4 class="subtitle text-center mb-4">
          Ser Cadete é ser determinado como Soldado
          </h4>
          <form>
            <div class="flex-md-grow-1 pr-md-3 pb-md-0 pb-3">
              <label for="email" class="sr-only">Password</label>
              <input
                type="email"
                class="form-control w-100"
                id="email_input"
                placeholder="seu email"
              />
            </div>
            <div class="flex-grow-1 flex-md-grow-0">
              <button
                type="submit"
                class="btn btn-light button mb-3 d-md-inline d-block w-100"
              >
                cadastre-se
              </button>
            </div>
          </form>
        </div>
        <div class="logo py-4">
          <div class="row">
            <div class="col-md-6 align-self-center text-md-left text-center">
              <img src="img/angola.jpg" class="img-fluid" />
            </div>
            <div class="col-md-6 align-self-center text-right">
              <ul>
                <li>
                  <a href="#"><img src="assets/facebook.svg" /></a>
                </li>
                <li>
                  <a href="#"><img src="assets/twitter.svg" /></a>
                </li>
                <li>
                  <a href="#"><img src="assets/instagram.svg" /></a>
                </li>
                <li>
                  <a href="#"><img src="assets/linkedin.svg" /></a>
                </li>
                <li>
                  <a href="#"><img src="assets/youtube.svg" /></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!--//FOOTER-->

    <!--JS-->
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/magnify/jquery.magnific-popup.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
