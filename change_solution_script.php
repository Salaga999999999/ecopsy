<?php
  include "includes/db.php";

mysqli_query($connection, "UPDATE `solutions` SET `title` = '" . $_POST["title"] . "', `text` = '" . $_POST["text"] . "', `parant_id` = '" . $_POST["parant_id"] . "' WHERE `id` LIKE ". $_POST["id"]);
echo "предложение изменено" . $_POST["id"];

?>