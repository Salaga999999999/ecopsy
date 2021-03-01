<?php
require_once "../includes/db.php";
  $pagen = $_GET["PAGEN_1"] + 3;
    $solutions = mysqli_query($connection, "SELECT * FROM `solutions` WHERE `parant_id` LIKE " . $_GET["id"] . " ORDER BY `id` DESC LIMIT " . $pagen . ", 3");
?>



<div class="cards">
<?php
  while ($solution = mysqli_fetch_assoc($solutions))
  {
    ?>
    <a href="solution.php?id=<?php echo $solution["id"];?>" class="card-solution">
     <span class="card-solution__wrap-img">
         <svg class="_icon-bow"><use xlink:href="./i/sprite.svg#bow"></use></svg>

     </span>
    <h4 class="card-solution__title"><?php echo $solution["title"];?></h4>
    <span class="btn _link-arrow">Узнать больше</span>
  </a>
    <?php
  }

?>
</div>

<div class="container__show-more-cards">
  <a href="/ajax/solutions.php?PAGEN_1=<?php echo $pagen?>&id=<?php echo $_GET["id"];?>" class="btn _default _primary js-show-more-cards">Показать еще</a>
</div>
