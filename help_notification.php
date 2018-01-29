
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="icon" href="images/icon4.png">

    <title>Shoeland | Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="starter-template.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
    <link href="css/style.css" rel="stylesheet">
    <?php
      include('session.php');
    ?>
  </head>

  <body>

    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Shoeland</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="dashboard.php">Dashboard</a></li>
            <li class="active"><a href="help.php">Help</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Welcome to Admin Panel</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span> Shoeland | Help <small>Manage your app here</small></h1>
          </div>
        </div>
      </div>
    </header>

    <section id="breadcrumb">
      <div class="container">
          <ol class="breadcrumb">
            <li class="active">Things messed up? Come here and know 'how to do it' </li>
          </ol>
      </div>
    </section>

    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
              <a href="help.php" class="list-group-item">
                <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span> Help
              </a>
              <a href="help_home.php" class="list-group-item"><span class="glyphicon glyphicon-tags" aria-hidden="true"></span> To Update Home</a>
              <a href="help_products.php" class="list-group-item "><span class="glyphicon glyphicon-tags" aria-hidden="true"></span> To Update Products</a>
              <a href="help_brands.php" class="list-group-item"><span class="glyphicon glyphicon-inbox" aria-hidden="true"></span> To Update Brands</a>
              <a href="help_youtube.php" class="list-group-item"><span class="glyphicon glyphicon-facetime-video" aria-hidden="true"></span> To Update Youtube Link</a>
              <a href="help_notification.php" class="list-group-item active main-color-bg"><span class="glyphicon glyphicon-list" aria-hidden="true"></span> To Update Notifications</a>
              <a href="help_social.php" class="list-group-item"><span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span> To Update Social Feeds</a>
            </div>


        </div>
        <div class="col-md-9">
          <div class="panel panel-default">
            <div class="panel-heading main-color-bg">
              <h3 class="panel-title">How to Update Notification in app</h3>
            </div>
            <div class="panel-body">
              <ol start="1">
                <li>Navigate to Dashboard.</li>
                <li>Click on "Notifications" on the menu given.</li>
                <li>Click the button "Add new Notification" to add new notification or "View" to update/delete existing.</li>
                <li>Fill the appropriate form given, upload proper image and click Submit.</li>
                <li>You are done !!!</li>
              </ol>
            </div>
          </div>

        </div>
        </div>
      </div>
    </section>




    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
