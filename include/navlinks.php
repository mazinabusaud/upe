<?php
  $nav = array("Home", "Joining UPE", "Members", "Tutoring", "Events", "Contact");
  $links = array("/", "/join.php", "/members.php", "/tutoring.php", "/events.php", "/contact.php");
  $num = count($links);
  $cur = $_SERVER['REQUEST_URI'];
  for ($i = 0; $i < $num; $i++) {
    if ($cur == $links[$i])
      echo "<li class='active'><a href='$links[$i]'>$nav[$i]</a></li>";
    else
      echo "<li><a href='$links[$i]'>$nav[$i]</a></li>";
  }
?>
