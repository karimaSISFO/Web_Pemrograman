<?php
include "home.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <title>Latihan PHP</title>
</head>
<body>
    <table cellspacing="11" align="center">
        <caption>Silahkan Login Terlebih Dahulu</caption>
        <form action="process.php" method="post">
            <tr>
                <td><label for="username">Username</label></td>
                <td><input type="text" placeholder="Username" name="username" id="username"></td>

            </tr>
            <tr>
                <td><label for="password">Password: </label></td>
                 <td><input type="passwordo" placeholder="password" name="password" id="password"></td>
            </tr>
            <tr>
                <td><button type="submit" name="login">Login</button></td>
            </tr>
        </form>
    </table>
</body>
</html>