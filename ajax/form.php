<?php
include "../includes/db.php";


  mysqli_query($connection, "INSERT INTO `feedback` (`email`, `tel`, `name`, `surname`, `message`) VALUES ('" . $_GET["email"] . "', '" . $_GET["tel"] . "', '" . $_GET["name"] . "', '" . $_GET["surname"] . "', '" . $_GET["message"] . "')");
  echo "Наши специалисты свяжутся с вами при первой возможности ";

?>
{
    "success": true,
    "title": "Спасибо!",
    "text": "Наши специалисты свяжутся с вами при первой возможности"

}


