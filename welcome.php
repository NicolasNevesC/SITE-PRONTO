<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css" />
    <title>INICIO</title>
</head>
<body>

<tbody>
<thead>
 <tr>  
     
  <Fieldset>
    
  <div class="inicio"> 
  <a href="atualizar_usuario.html"> <?php echo  "<h1> " . $_SESSION['username'] . "</h1>"; ?></a>
  

    
    </div>
   
   </Fieldset>



<center><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p>


<div class="bemvindo" > 
    BEM VINDO    
</div>

<div class="ghost">  
<img src="GHOST.jpg">




</body>
</html>