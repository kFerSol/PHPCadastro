<!DOCTYPE html>
<html>
<head>
	<title>Livros</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<style> 
		body{ 
			background-color: #c2fcff;
		} 
		form{
			background-color: #edfffc;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg bg-primary">
	  <div class="container-fluid">
	    <a class="navbar-brand text-white" href="#">Livro</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarNav">
	      <ul class="navbar-nav">
	        <li class="nav-item">
	          <a class="nav-link active text-white" aria-current="page" href="cadastrar.php">Cadastrar</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link text-white" href="listar.php">Lista de Cadastros</a>
	        </li>
	      </ul>
	    </div>
	  </div>
	</nav>
	<div class="container-fluid pb-5">
		<div class="row justify-content-center pt-5">
			<div class="col-4 text-center">
				<h2 class="display-5 py-4">Cadastre o livro!</h2>
				<form method="post" class="row g-3 border justify-content-center">
					<div class="col-12">
					    <label for="inputNome" class="form-label">Nome do Livro</label>
						<input type="text" class="form-control" name="nome" id="inputNome">
					</div>
					<div class="col-md-6">
					    <label for="inputAno" class="form-label">Data do livro</label>
						<input type="date" class="form-control" name="ano" id="inputAno">
					</div>
					<div class="col-md-6">
					    <label for="inputExemplares" class="form-label">Quantidade de Exemplares</label>
						<input type="number" class="form-control" name="exemplares" id="inputExemplares">
					</div>
					<button class="btn btn-primary col-5 mb-4">Cadastrar</button>
				</form>
				<?php 
				include('conexao.php');
				//Adicionando o arquivo que contem a conexão
				if($_POST){
					$nome = $_POST['nome'];
					$ano = $_POST['ano'];
					$exemplares = $_POST['exemplares'];
					date_default_timezone_set('America/Sao_Paulo');
					$hoje = date('Y/m/d');
					$sql = 'INSERT INTO tb_livro VALUES (null,"'.$nome.'","'.$ano.'","'.$hoje.'",'.$exemplares.')';
					$executa = $GLOBALS['con']->query($sql);

					if($executa){
						echo '<h3 class="display-6">Cadastrado com sucesso!</h3>';
					}else{
						echo "Erro ao cadastrar".$GLOBALS['con']->error;
					}
				}
				 ?>
			</div>
		</div>
	</div>
</body>
</html>