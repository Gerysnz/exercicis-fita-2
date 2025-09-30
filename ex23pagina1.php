<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: 
<?php 
        if($_POST['menu'] == 'opcion 1') 
            echo 'red';
        elseif($_POST['menu'] == 'opcion 2') 
            echo 'blue'; 
        elseif($_POST['menu'] == 'opcion 3') 
            echo 'green';
        else echo 'white';
?>;"> 
    <form action="" method="post">
        <select name="menu" id="">
            
            
            <option value="opcion 1">Rojo</option>
            <option value="opcion 2">Azul</option>
            <option value="opcion 3">Verde</option>
        </select>
            <input type="submit" value="Enviar"> </input>
    </form>
        <?php
       



        ?>    
        

    
    
</body>
</html>