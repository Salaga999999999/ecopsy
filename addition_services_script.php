<?php
  include "includes/db.php";
  copy ("services-template.php", "services-" . $_POST["ENG"] . ".php");

  $str = htmlentities(file_get_contents("services-" . $_POST["ENG"] . ".php"));
  $search = htmlspecialchars('<h2 id="service-title">Оглавление');
  $replace = htmlspecialchars('<h2 id="service-title">'. $_POST["RUS"], ENT_QUOTES);
  $str = str_replace($search, $replace, $str);
$fd = fopen("services-" . $_POST["ENG"] . ".php", 'w') or die("не удалось создать файл");
fwrite($fd, htmlspecialchars_decode($str));
fclose($fd);


if ($_POST["parant_id"] == 0)
{
	mysqli_query($connection, "INSERT INTO `menu__lists` (`RUS`, `ENG`, `parant_id`, `html_class`) VALUES ('" . $_POST["RUS"] . "', 'services-" . $_POST["ENG"] . "', '" . $_POST["parant_id"] . "', 'menu__list-title')");
}
else
{
	mysqli_query($connection, "INSERT INTO `menu__lists` (`RUS`, `ENG`, `parant_id`) VALUES ('" . $_POST["RUS"] . "', 'services-" . $_POST["ENG"] . "', '" . $_POST["parant_id"] . "')");
}

echo "услуга добавлена";

?>