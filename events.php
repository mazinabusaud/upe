<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Chico UPE - Events</title>

    <!-- Stylesheets -->
    <link href="./assets/css/bootstrap.css" rel="stylesheet">
    <link href="./assets/css/nav.css" rel="stylesheet">
    <link href="./assets/css/style.css" rel="stylesheet">

    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
      <?php include './include/new_banner.php' ?>

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
        <div class="col-md-12 text-center">
        <iframe src="https://www.google.com/calendar/embed?showPrint=0&amp;showCalendars=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=fg76j9mgh7fvrvc6u7efsbfeq4%40group.calendar.google.com&amp;color=%235229A3&amp;ctz=America%2FLos_Angeles" style=" border-width:0 " width="800" height="600" frameborder="0" scrolling="yes"></iframe>
        </div>
      </div>

    </div> 
  </body>
</html>
