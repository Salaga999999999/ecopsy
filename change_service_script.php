<?php
  include "includes/db.php";

  $services = mysqli_query($connection, "SELECT * FROM `menu__lists` WHERE `id` LIKE ". $_POST["id"]);
  $service = mysqli_fetch_assoc($services);
  $str = htmlentities(file_get_contents($service["ENG"] . ".php"));
  $search = htmlspecialchars('<h2 id="service-title">'. $service["RUS"]);
  $replace = htmlspecialchars('<h2 id="service-title">'. $_POST["RUS"], ENT_QUOTES);
  $str = str_replace($search, $replace, $str);

$fd = fopen($service["ENG"] . ".php", 'w') or die("не удалось создать файл");
fwrite($fd, htmlspecialchars_decode($str));
fclose($fd);
rename($service["ENG"]. ".php","services-". $_POST["ENG"]. ".php");


if ($_POST["parant_id"] == 0)
{
	mysqli_query($connection, "UPDATE `menu__lists` SET  `RUS` = '" . $_POST["RUS"] . "', `ENG` = 'services-" . $_POST["ENG"] . "', `parant_id` = '" . $_POST["parant_id"] . "', `html_class` = 'menu__list' WHERE `id` LIKE ". $_POST["id"]);
}
else
{
	mysqli_query($connection, "UPDATE `menu__lists` SET  `RUS` = '" . $_POST["RUS"] . "', `ENG` = 'services-" . $_POST["ENG"] . "', `parant_id` = '" . $_POST["parant_id"] . "' WHERE `id` LIKE ". $_POST["id"]);
}
echo "услуга изменена";
?>