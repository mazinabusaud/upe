<?php
  //variable for tracking the row we're on
  $counter = 0;
  // Grabbing all the files out of the members directory
  // NOTE: Resize all photos on Members page. Looks horrible on small screens.
  $files = scandir('members/');
  foreach ($files as $file) {
    if ($file != "." && $file != ".." && $file != "README.md") {
      $curfile = file("members/$file");

      if ($counter%2==0){
              echo "<div class='row'>";
      }
      //Add Photo
      if($file != "3_Secretary"){
              echo "<div class='col-md-2'>
                      <img src='assets/img/$file.jpg' class='img-responsive'>
                    </div>";
      }
      else{
              echo "<div class='col-md-2'>
                      <img src='assets/img/404.jpg' class='img-responsive'>
                    </div>";
      }
      // Member Name
      echo "<div class='col-md-4'>
            <div class='list-group'>
            <a href='$curfile[3]' class='list-group-item'>
            <h4 class='list-group-item-heading'>";
      echo $curfile[0];
      echo "<small>".$curfile[1]."</small>
            </h4>";

      // Join date
      echo "<p class='list-group-item-text'>
              Member since: ".$curfile[2]."</p>";

      // Github
      echo "<p class='list-group-item-text'>
              Github: ".$curfile[3]."</p>";

      // Email 
      echo "<p class='list-group-item-text'>
              Email: ".$curfile[4]."</p>";

      // Skills
      echo "<p class='list-group-item-text'>
              Can Help With: ".$curfile[5]."</p>";

      echo "</a>";
      echo "</div>";
      echo "</div>";
      $counter += 1;
      if ($counter%2==0){
              echo "</div></br>";
      }
    }
  }
?>
