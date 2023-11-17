<?php 
	include('conexao.php');
	if(isset($_GET['id_livro'])){
		$sql = 'DELETE FROM tb_livro WHERE id_livro = '.$_GET['id_livro'];
		$executa = $GLOBALS['con']->query($sql);
			if($executa){
				echo '<script>
						alert("Livro excluido!");
						window.location="listar.php";
					  </script>';
			}else{
				echo 'Erro ao excluir livro: '.$GLOBALS['con']->error;
			}
	}
 ?>