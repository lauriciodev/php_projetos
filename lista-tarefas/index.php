
<?php
include "form.php";

?>

<html>
	<head>
   <title>Lista de tarefas</title>
	</head>
	<body>
   <form action="index.php" metod="POST">
    <h3>Lista de tarefas</h3>
		<input type="text" name="tarefa">
		 <button type="submit">Criar tarefa<button>
	 </form>
   <div>
<?php
foreach($tarefas as $itens){
?>

	<p><?=$itens?></p>

<?php
}
?>

   </div>
	</body>
</html>
