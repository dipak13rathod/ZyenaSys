<?php
/**
 * Created by PhpStorm.
 * User: Dipak
 * Date: 4/11/2016
 * Time: 1:34 PM
 */
include_once('Connection.php');
?>

<html>
    <head>
        <title>LogIn</title>
    </head>
    <body>
        <form method="post" action="index.php">
            Username: <input type="text" name="uname" />
            Password: <input type="text" name="pass"/>
            <input type="submit" name="submit" value="SUBMIT" />
        </form>
    </body>
</html>