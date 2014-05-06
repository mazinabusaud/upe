<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Chico UPE - Home</title>

    <!-- Stylesheets -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/nav.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
      
      <?php include 'inc/banner.php'?>

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
              <?php include 'inc/navlinks.php'; ?>
            </ul>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-8">
          <div class="jumbotron">
            <h2>Welcome to the California State University Chico Chapter of Upsilon Pi Epsilon!</h2>
              <p>On our site, you'll find information about our members and membership, our tutoring 
              schedule, some helpful resources, and information on UPE projects.</p>
          </div>
        </div>
        <div class="col-md-4">
          <img src="assets/img/upelogo.jpg" class="home-logo">
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
        <div class="page-header">
          <h3>News</h3>
        </div>
        </div>
        <div class="col-md-6 offset*">
        <div class="page-header">
          <h3>Announcements</h3>
        </div>
        </div>
      </div>

      <div class="row">
      <div class="col-md-6">
      </div>
      <div class="col-md-6">
      <?php include 'inc/announce.php'; ?>
      </div>
      </div>

    </div> 
  </body>
</html>
