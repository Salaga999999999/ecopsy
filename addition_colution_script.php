<?php
  include "includes/db.php";

mysqli_query($connection, "INSERT INTO `solutions` (`title`, `text`, `parant_id`) VALUES ('" . $_POST["title"] . "', '" . $_POST["text"] . "', '" . $_POST["parant_id"] . "')");
echo "предложения добавлено";

?>