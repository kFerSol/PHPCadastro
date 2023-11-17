<!DOCTYPE html>
<html>
<head>
	<title>Livros</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<style> 
		body{ 
			background-color: #c2fcff;
		} 
		table{
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
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-5 text-center">
				<h2 class="display-5 py-4">Lista de livros!</h2>
				<table class="table">
					<thead>
						<tr>
							<td scope="col">ID</td>
							<td scope="col">Nome</td>
							<td scope="col">Ano</td>
							<td scope="col">Cadastro</td>
							<td scope="col">Exemplares</td>
							<td scope="col">Controles</td>
						</tr>
					</thead>
					<tbody>
						<?php 
							include('conexao.php');
							$sql = 'SELECT * FROM tb_livro ORDER BY nm_livro ASC';
							$executa = $GLOBALS['con']->query($sql);
							while($livro = $executa->fetch_array()){
								echo '<tr>
									  <td scope="row">'.$livro['id_livro'].'</td>';
								echo '<td>'.$livro['nm_livro'].'</td>';
								echo '<td>'.$livro['dt_ano'].'</td>';
								echo '<td>'.date('Y',strtotime($livro['dt_cadastro'])).'</td>';
								echo '<td>'.$livro['qt_exemplares'].'</td>';
								echo '<td>
										<a href="excluir.php?id_livro='.$livro['id_livro'].'">Excluir</a>
									  </td>
									  </tr>';
							}
						 ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>