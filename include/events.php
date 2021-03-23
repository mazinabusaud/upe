<?php
  // Grabbing all the files out of the events directory
  $files = scandir('events/');
  foreach ($files as $file) {
    if ($file != "." && $file != ".." && $file != "README.md") {
      $curfile = file("events/$file");

      // Title
      echo "<div class='col-md-12'>
            <div class='list-group'>
            <h4 class='list-group-item-heading'>";
      echo $curfile[0]."<small>".$curfile[1]."</small></h4>";

      // Body
      echo "<p class='list-group-item-text'>".$curfile[2]."</p>";

      echo "</div>";
      echo "</div>";
    }
  }
?>
