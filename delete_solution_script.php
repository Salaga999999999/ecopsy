<?php
  include "includes/db.php";

mysqli_query($connection, "DELETE FROM `solutions` WHERE `id` = " . $_POST["id"]);
echo "предложение удалена" . $_POST["id"];

?>