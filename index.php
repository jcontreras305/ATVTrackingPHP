<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div>
            <h1>Welcome to ATV Traking  1.0</h1>
            <form action="index.php" method="POST">
                <table>
                    <tr>
                        <td><strong>Name</strong></td>
                        <td><input type="text" name="Nombre" id="Nombre"></td>
                    </tr>
                    <tr>
                        <td><strong>Pasword</strong></td>
                        <td><input type="password" name="Contrasenia" id="Contrasenia"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="btnSingIn" name="btnSingIn"></td>
                    </tr>

                </table>
            </form>
            
<?php
if (isset($_POST["btnSingIn"])) {
    include ('./DB/db.php');
    $userName = $_POST['Nombre'];
    $userPass = $_POST['Contrasenia'];
    //qitamos espacios 
    $userName = stripcslashes($userName);
    $userPass = stripcslashes($userPass);
    $conn = connOpen();
    $result = mysqli_query($conn, "SELECT * FROM users where name = '$userName' AND pass = '$userPass'");
    $cont= 0;
    while ($line = mysqli_fetch_array($result)){
        if (($line['name']=$userName) && ($line['pass']=$userPass)){
            $cont=$cont+1;
        }
    }
    if ($cont == 1){
        header ("Location: ./Forms/Principal.php");
    }
    connClose($conn);
}
?>
        </div>
    </body>
</html>
