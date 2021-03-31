<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chico UPE - Home</title>

    <!-- Stylesheets -->
    <link href="./assets/css/bootstrap.css" rel="stylesheet">
    <link href="./assets/css/nav.css" rel="stylesheet">
    <link href="./assets/css/style.css" rel="stylesheet">

    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
      
      <?php include './include/banner.php'?>

      <div class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">CSU Chico Upsilon Pi Epsilon</a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <?php include './include/navlinks.php'; ?>
            </ul>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-8">
          <div class="jumbotron">
            <h2>Welcome to the California State University Chico Chapter of Upsilon Pi Epsilon!</h2>
            <p>The mission of Upsilon Pi Epsilon (UPE) is to recognize academic excellence at both 
            the undergraduate and graduate levels in the Computing and Information Disciplines.</p>
            <p> UPE is a member of the&nbsp;<a href="https://www.achsnatl.org/">Association of 
            College Honor Societies</a>&nbsp;(ACHS) and has chapters in over 300 colleges and 
            universities across the globe.</p>
          </div>
        </div>
        <div class="col-md-4">
          <img src="./assets/img/upelogo.jpg" class="home-logo">
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-sm-4">
        <div class="page-header">
          <h3>Announcements</h3>
        </div>
        <div class="visible-sm visible-xs">
            <?php include './include/announce.php'; ?>
        </div>
        </div>
        <div class="col-md-6 offset* col-sm-4">
        <div class="page-header">
          <h3>Upcoming Events</h3>
        </div>
        </div>
      </div>

      <div class="row">
      <div class="visible-md visible-lg col-md-6">
      <?php include './include/announce.php'; ?>
      </div>
      <div class="col-md-6">
      <?php include './include/events.php'; ?>
      </div>
      </div>

    </div> 
  </body>
</html>
