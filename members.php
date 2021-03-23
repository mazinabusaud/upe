<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Chico UPE - Members</title>

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
        <div class="col-md-12">
          <div class="page-header">
            <h4>Faculty Advisor</h4>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <img src="assets/img/tyson.jpg" class="img-responsive">
        </div>
        <div class="col-md-8">
          <div class='list-group'>
            <a href='#' class='list-group-item'>
              <h4 class='list-group-item-heading'>Dr. Tyson Henry   
              <small>Professor</small></h4>
            </a>
            <a href="http://www.ecst.csuchico.edu/~tyson/" class="list-group-item">
              Website: http://www.ecst.csuchico.edu/~tyson/
            </a>
            <a class="list-group-item">
              Email: trhenry@csuchico.edu
            </a>
            <a class="list-group-item">
            <br>
            <br>
            </a>
          </div>
        </div>
        <div class="col-md-2">
            <img src="assets/img/upelogo.jpg" class="img-responsive">
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="page-header">
            <h4>Officers</h4>
          </div>
        </div>
     </div>

      <div class="row">
        <?php include './include/curmembers.php'; ?>
      </div>


     <div class="row">
        <div class="col-md-6">
          <div class="page-header">
            <h4>Alumni and Graduates</h4>
          </div>
        </div>
      </div>

    </div> 
  </body>
</html>
