<?php   
    //Importando o arquivo de conexão com o BD(connect)//
    include 'config.php';
 
    //Obtendo os valores dos campos//
	$Username = $_POST['C_Username'];
    $New_Username = $_POST['New_Username'];
 
    //Salvando a SQL em uma variavel
	$sql = "UPDATE `username` SET `username`='$New_Username' WHERE `username` = '$Username'";	
 
    //executando a SQL que esta na variavel
	$conn = mysqli_query($conn, $sql, $conexao);
 
    echo "username alterado com sucesso";      
?>

