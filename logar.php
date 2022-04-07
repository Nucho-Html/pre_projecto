
<?php
require_once 'CLASSES/usuarios.php';
$u = new Usuario;
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
	<link rel="stylesheet"  href="css/estilo.css">

    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap"
      rel="stylesheet"
    />
    

    <link rel="stylesheet" href="css/owl/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl/owl.theme.default.min.css" />
    <link rel="stylesheet" href="css/magnific-popup.css" />
    <link rel="stylesheet" href="css/main.css" />
    

    <title>Login do Sistema de gestão</title>
  </head>
  <body style="background-color: #F5F5F5;">
    <!--HEADER-->
    <div id="header">
      <div class="container">
        <nav
          class="navbar navbar-expand-lg navbar-light justify-content-between"
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
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" href="areasprivada.php">Página Inicial</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Sobre nós </a>
              </li>
            
              <li class="nav-item">
                <a class="nav-link" href="#">Contacto</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
    <!--//HEADER-->
    <hr>
 


      <!--//HEADER-->      
<div id="corpo-form" class="position-absolute" 
style="display: inline-block;"  class="button btn btn-primary button-primary 
d-md-inline-block d-block mb-md-0 mb-2 mr-md-2" >

<h1>
  <div id = "logo" > 
  <img src="img/logo.png" alt="logo" ><!--  simbolo do Istm- -->
 </div>
</h1>
<form method="POST" >
  <label for="text">Email:</label> 
  <input type="email" placeholder=" Email/usuário" name="email" style="background-color: #98FB98;" >
    <label for="text">Senha</label>
  <input type="password" placeholder="senha" name="senha" style="background-color: #98FB98;">
  <a href="cadastrar.php">Se não é inscrito?<strong>Cadastre-se!</strong></a>
  <input type="submit" placeholder="ACESSAR">
  
</form>
</div>
      

    <!--//HEADER PHP-->
      
<?php
if(isset($_POST['email']))
{

	$email = addslashes($_POST['email']);
	$senha = addslashes($_POST['senha']);

	if(!empty($email) && !empty($senha))
	{
		$u->conectar("projecto_login","localhost","root","");
		if($u->msgErro == "")
		{
			if($u->logar($email,$senha))
			{
				header("location: areasprivada.php");
			}
			else
			{
				?>
				<div class="msg-erro">
					Email e/ou senha estão incorretos!
				</div>
        <hr>
				<?php
			}
		}
		else
		{
			?>
			<div class="msg-erro">
			<?php echo "Erro: ".$u->msgErro;?>
		</div>
    <hr>
		<?php
		}
	}else
	{
		?>
			<div class="msg-erro">
				Preencha todos os campos!
			</div>
      <hr>
		<?php
	}
}

?>




      <!--//HEADER-->


        <!--//HEADER-->

    <!--SLIDER-->
    <div id="slider" class="bloc" >
      <div class="container pt-5">
        <div >
          <div class="col-lg-4 col-md-6 align-self-center mb-md-0 mb-4">
            <h1>Instituto Superior Técnico Militar - Angola</h1>
        
            <a
              href="#"
              class="button btn btn-primary button-primary d-md-inline-block d-block mb-md-0 mb-2 mr-md-2"
              >Saiba mais</a
            >
            <a
              href="#"
              class="button btn btn-outline-primary button-primary-outline d-md-inline-block d-block"
              >Contato</a
            >
          </div>
          
        </div>
      </div>
    </div>
    <!--//SLIDER-->


    <!--//FOOTER-->

    <!--JS-->
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/magnify/jquery.magnific-popup.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
