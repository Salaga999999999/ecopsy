<?php
  include "includes/db.php";

mysqli_query($connection, "UPDATE `articles` SET `title` = '" . $_POST["title"] . "', `text` = '" . $_POST["text"] . "' WHERE `id` LIKE ". $_POST["id"]);
echo "статья добавлена" . $_POST["id"];

?>