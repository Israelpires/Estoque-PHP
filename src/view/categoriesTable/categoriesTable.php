<?php include_once "style.php"?>

<div id="categories-container">
  <?php
    foreach($categories as $category) {
      echo "<a class=categories href=?class=ProductController&action=searchByCategory&id=$category[id] >";
      echo "<h1>$category[name]</h1>";
      echo "</a>";
    }
    
  ?>
</div>