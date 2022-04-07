<?php
	require_once 'CLASSES/usuarios.php';
	$u = new Usuario;
?>

<html lang="pt-br">
<head >
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="IMAGENS/logo.png" type="image/x-icon">
	<title>Portal do Aluno</title>
	<link rel="stylesheet"  href="CSS/estilo.css">
	<link href="bootstrap/css/bootstrap.min.cs" rel="stylesheet">
</head>
<body style="background-color: #F5F5F5;">
	<div>
		<a href="areasprivada.php"> <strong>MENU PRINCIPAL</strong></a>
	</div>
	 
<div id="corpo-form-cad">
	<h1>Fazer cadastramento</h1>
	<form method="POST">
		<input type="text" name="nome" placeholder="Nome Completo" maxlength="30">
		<input type="text" name="telefone" placeholder="Telefone" maxlength="30">
		<input type="email" name="email" placeholder="Usuário" maxlength="40">
		<input type="password" name="senha" placeholder="Senha" maxlength="15">
		<input type="password" name="confSenha" placeholder="Confirmar Senha" maxlength="15">
		<input type="submit" placeholder="Cadastrar">
	</form>
</div>
<?php
//verificar se clicou no botao
if(isset($_POST['nome']))
{
	$nome = addslashes($_POST['nome']);
	$telefone = addslashes($_POST['telefone']);
	$email = addslashes($_POST['email']);
	$senha = addslashes($_POST['senha']);
	$confirmarSenha = addslashes($_POST['confSenha']);
	//verificar se esta preenchido
	if(!empty($nome) && !empty($telefone) && !empty($email) && !empty($senha) && !empty($confirmarSenha))
	{
		$u->conectar("projecto_login","localhost","root","");
		if($u->msgErro == "")//se esta tudo ok
		{
			if($senha == $confirmarSenha)
			{
				if($u->cadastrar($nome, $telefone, $email, $senha))
				{
				?>
					<div id="msg-sucesso">
					Cadastrado com sucess
					</div>
					<?php
				}
					else
				{
					?>
					<div class="msg-erro">
						Email ja cadastrado!
					</div>
					<?php
				}
			}
			else
			{
				?>
					<div class="msg-erro">
					senha e confirmar senha não correspondem!
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

	}
	else
	{
		?>
			<div class="msg-erro">
				Preencha todos os campos
			</div>
		<?php
	}
}

?>

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