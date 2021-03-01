<?php
  include "includes/db.php";
  $file = $_FILES['path']['name'];
  move_uploaded_file($_FILES['path']['tmp_name'], "i\c\\".$file);

mysqli_query($connection, "INSERT INTO `articles` (`title`, `text`, `img`) VALUES ('" . $_POST["title"] . "', '" . $_POST["text"] . "', '" . "i/c/".$file . "')");
echo "статья добавлена";

?>