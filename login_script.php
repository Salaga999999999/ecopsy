<?php session_start();
  include "includes/db.php";
    $users = mysqli_query($connection, "SELECT * FROM `users` WHERE `login` LIKE '" . $_POST["login"] . "'");
    $user = mysqli_fetch_assoc($users);
    if (isset($user))
    {

        if (($user["password"] == $_POST["password"]) && ($user["login"] == "admin"))
        {
            echo "вы вошли как " . $user["login"];


            $_SESSION["admin"] = "1";
            echo "вы вошли как " . $user["login"];
        }
    }

?>