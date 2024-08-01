<?php
session_start();

//iniciando o array na sessão se nao existir;
if(!isset($_SESSION['tarefas'])){
	$_SESSION['tarefas'] = [];
}

//adicionando tarefa enviada no array ;

if(isset($_POST["tarefas"]) && !empty($_POST["tarefas"])){
	array_push($_SESSION["tarefas"], $_POST["tarefas"]);
  header("Location: index.php");
  exit();
}

//deletando uma tarefa
if(isset($_GET["delete"])){
 $id_tarefa = $_GET["delete"];
  
 //verificando se existe tarefa no indice recebido.

 if(isset($_SESSION["tarefas"][$id_tarefa])){
	 unset($_SESSION["tarefas"][$id_tarefa]);
	 $_SESSION["tarefas"] = array_values($_SESSION["tarefas"]);
	 header("Location: index.php");
	 exit();
 }


}
// atualizando tarefa selecionada

if(isset($_POST["edit_tarefa"]) && isset($_POST["index"])){
	$index = intval($_POST["index"]);
	
	 var_dump($_SESSION["tarefas"][$index]);
	if(isset($_SESSION["tarefas"][$index])){
		$_SESSION["tarefas"][$index] = $_POST["edit_tarefa"];
	}

	header("Location: index.php");
	exit();
}




//recuperando valores na sessão;
$tarefas = array_reverse($_SESSION["tarefas"]);


?>

<html>
 <head>
	 <title>Lista de tarefas php</title>

<style>
 body{
background-color:#3c3c3a;
}

.btn-act{
padding:3px 6px;
background-color:#3c9a; 

}

</style>
 </head>

  <body>
   <form style="width:400px; margin:10px auto;" action="index.php" method="POST">
    <h3>Lista de tarefas php</h3>
    <input type="text" name="tarefas">
    <button type="submit">criar tarefa</button> 
	
 </form>

     <div style="display:flex; flex-direction:column; align-items:center; gap:10px; justify-content:center;">

<?php
foreach($tarefas as $index => $item){
	echo "<div style='border:1px solid black; background-color:#3c3c6b; display:flex; justify-content:space-between; padding:4px; align-items:center; width:100%; max-width:500px;'>
	
		<p>" . htmlspecialchars($item) . "</p>
  <div>
		<a class='btn-act' href=index.php?delete=" . (count($tarefas) - $index - 1) .	">Deletar</a>" . 
		"<a class='btn-act' href=index.php?edit=" . (count($tarefas) - $index - 1) .	">Editar</a>
  </div>
	</div>";
}
?>
		</div>
<?php
// renderizando formulario de ediçã;
if(isset($_GET["edit"])){
   $id_edit =  intval($_GET["edit"]);

	 if(isset($tarefas[$id_edit])){
		 $tarefa_edit = $tarefas[$id_edit];

		 echo "
       <form action='index.php' method='POST'>
         <h3>Editar tarefa</h3>
				 <input type='hidden' name='index' value=" . $id_edit . " >
				 <input type='text' name='edit_tarefa' value=". $tarefa_edit .">
         <button type='submit'>Atualizar</button>
       </form>
            ";
	 }
}

?>

</body>

</html>
