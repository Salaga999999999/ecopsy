<?php
  include "includes/db.php";

mysqli_query($connection, "DELETE FROM `articles` WHERE `id` = " . $_POST["id"]);
echo "статья удалена" . $_POST["id"];

?>