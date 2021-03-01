<?php
  include "includes/db.php";
  $services = mysqli_query($connection, "SELECT * FROM `menu__lists` WHERE `id` LIKE ". $_POST["id"]);
  $service = mysqli_fetch_assoc($services);

if ($service["parant_id"] == 0)
{
	$services_children = mysqli_query($connection, "SELECT * FROM `menu__lists` WHERE `parant_id` LIKE ". $_POST["id"]);
	while ($services_child = mysqli_fetch_assoc($services_children)) {
		unlink($services_child["ENG"].".php");
		mysqli_query($connection, "DELETE FROM `solutions` WHERE `parant_id` = " . $services_child["id"]);
		mysqli_query($connection, "DELETE FROM `menu__lists` WHERE `id` = " . $services_child["id"]);
		echo "услуга удалена";
	}


	unlink($service["ENG"].".php");
	mysqli_query($connection, "DELETE FROM `solutions` WHERE `parant_id` = " . $_POST["id"]);
	mysqli_query($connection, "DELETE FROM `menu__lists` WHERE `id` = " . $_POST["id"]);
	echo "услуга удалена";
}
else
{
	unlink($service["ENG"].".php");
	mysqli_query($connection, "DELETE FROM `solutions` WHERE `parant_id` = " . $_POST["id"]);
	mysqli_query($connection, "DELETE FROM `menu__lists` WHERE `id` = " . $_POST["id"]);
	echo "услуга удалена";
}


?>