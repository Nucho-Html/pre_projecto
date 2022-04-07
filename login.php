<?php
require_once 'CLASSES/usuarios.php';
$u = new Usuario;
?>
<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="generator" content="Hugo 0.84.0">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  
    <link rel="stylesheet" type="text/css" href="css/estiloLogin.css">
    
    <title>Portal do login</title>
    

    

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
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center" style="background-color: white">
    
<main class="form-signin">
  <form>
    <img class="mb-4" src="img/logo.png" alt="" width="130" height="140">
    <h1 class="h3 mb-3 fw-normal">Faça o login
      <marquee scrollamount="3">Seja bem-vindo ao portal do aluno </marquee> 
    </h1> 

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput"name="email" placeholder="eu@examplo.gmail">
      <label for="floatingInput">Endereço de email</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" name="senha" placeholder="Password">
      <label for="floatingPassword">Senha</label>
      <input type="submit" placeholder="ACESSAR">
    </div>
    

    <button class="w-100 btn btn-lg btn-success" type="submit">Acessar</button>
    <a href="cadastrar.php">Se não é inscrito?<strong>Cadastre-se!</strong></a>
    <p class="mt-5 mb-3 text-muted">&copy; 2021–2022 istm</p>
  </form>
  <form method="POST">
		<input type="email" placeholder=" Email/usuário" name="email">
		<input type="password" placeholder="senha" name="senha">
		<input type="submit" placeholder="ACESSAR">
		 <a href="cadastrar.php">Se não é inscrito?<strong>Cadastre-se!</strong></a>
	</form>
</main>


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
				header("location: AreaPrivada.php");
			}
			else
			{
				?>
				<div class="msg-erro">
					Email e/ou senha estão incorretos!
				</div>
				<?php
			}
		}
		else
		{
			?>
			<div class="msg-erro">
			<?php echo "Erro: ".$u->msgErro;?>
		</div>
		<?php
		}
	}else
	{
		?>
			<div class="msg-erro">
				Preencha todos os campos!
			</div>
		<?php
	}
}

?>


    
  </body>
</html>
