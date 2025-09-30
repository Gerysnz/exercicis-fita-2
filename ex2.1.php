<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h1>User Form</h1>
    <form action="" method="post">
        <label for="usuario">Username:</label><br>
        <input type="text" id="usuario" name="usuario"><br> 
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br>
        <input type="submit" value="Submit">
    </form>
    

    <?php 
    
    $usuaris = array(
        "admin" => "1234",
        "user1" => "password",
        "maria" => "holahola"
    );
    
    if ($_POST) {
        $usuario = $_POST['usuario'];
        $password = $_POST['password'];
        
        $login_valid = false;
        
       
        foreach ($usuaris as $user => $pass) {
            if ($usuario == $user && $password == $pass) {
                $login_valid = true;
                echo "Benvingut $usuario!";
                break; 
            }
        }
            if (!$login_valid) {
            echo "Error: usuari o contrasenya incorrectes";
            }
    }
    ?>

</body>
</html>