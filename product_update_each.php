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
            <li class="active"><a href="dashboard.php">Dashboard</a></li>
            <li><a href="help.php">Help</a></li>
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
            <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Shoeland | Dashboard <small>Manage your app here</small></h1>
          </div>
        </div>
      </div>
    </header>

    <section id="breadcrumb">
      <div class="container">
          <ol class="breadcrumb">
            <li class="active">You may add or update products</li>
          </ol>
      </div>
    </section>

    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
              <a href="dashboard.php" class="list-group-item">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
              </a>
              <a href="home.php" class="list-group-item"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a>
              <a href="products.php" class="list-group-item active main-color-bg"><span class="glyphicon glyphicon-tags" aria-hidden="true"></span> Products</a>
              <a href="brands.php" class="list-group-item"><span class="glyphicon glyphicon-inbox" aria-hidden="true"></span> Brands</a>
              <a href="youtube.php" class="list-group-item"><span class="glyphicon glyphicon-facetime-video" aria-hidden="true"></span> Youtube Link</a>
              <a href="notification.php" class="list-group-item"><span class="glyphicon glyphicon-list" aria-hidden="true"></span> Notifications</a>
              <a href="users.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Users</a>
              <a href="social.php" class="list-group-item"><span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span> Social Feeds</a>
            </div>


        </div>
        <div class="col-md-9">
          <div class="panel panel-default">
            <div class="panel-heading main-color-bg">
              <h3 class="panel-title">Products Overview</h3>
            </div>
            <div class="panel-body">

              <?php
              require_once("dbConnect.php");
              $productid=$_POST['productid'];
              $query="SELECT * FROM SHOELANDPRODUCTS WHERE pid=$productid;";
              $result=mysqli_query($con,$query);
              while($row = mysqli_fetch_array($result))
                {
                $productid=$row['pid'];
                $pname=$row['pname'];
                $mrp=$row['mrp'];
                $classification=$row['classification'];
                $size=$row['size'];
                $colour=$row['colour'];
                $imgpath=$row['image_link'];
                }
                $size=trim($size,"Size:");
                $mrp=trim($mrp,"MRP:");

                ?>

                <form enctype="multipart/form-data" method="post" action="product_update_upload.php">
                  <div class="form-group">
                    <label for="Product Name">Product Name</label>
                      <select id="element_1" name="element_1" class="form-control" required>
                        <option value="<?php echo $pname ?>" selected="selected"><?php echo $pname ?></option>

                            <?php
                            $conn = new mysqli('127.0.0.1', 'root', 'tiger', 'novexele_shoeland')
                            or die ('Cannot connect to db');
                            $result = $conn->query("select hid,productname from home");
                                while ($row = $result->fetch_assoc()) {

                                              unset($hid, $productname);
                                              $id = $row['hid'];
                                              $productname = $row['productname'];
                                            echo '<option value="'.$productname.'">'.$productname.'</option>';

                                            }

                              echo "</select>";

                              ?>


                      </select>


                  </div>
                  <div class="form-group">
                    <label for="Classification">Classification</label>
                    <select id="element_2" name="element_2" class="form-control" required>
                      <option value="<?php echo $classification ?>" selected="selected"><?php echo $classification ?></option>
                      <option value="Gents" >Gents</option>
                      <option value="Ladies" >Ladies</option>
                      <option value="Ladies" >Kids</option>
                      <option value="Ladies" >Unisex</option>

                    </select>

                  </div>

                  <div class="form-group">
                    <label for="Price">Price</label>
                    <input type="text" class="form-control" id="element_3" placeholder="Price" maxlength="255" value="<?php echo $mrp ?>" name="element_3"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Size</label>
                    <input type="text" class="form-control" id="element_4" placeholder="Size" value="<?php echo $size ?>"name="element_4">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Colour</label>
                    <input class="form-control" type="color" id="element_5" name="element_5" value="<?php echo $colour ?>" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Upload Image</label>
                    <input type="file" id="element_6" name="element_6" required>
                    <p class="help-block">Upload proper image of product </p>
                  </div>
                  <div>
                    <input type="hidden" name="element_7" value= <?php echo $productid ?> >
                  </div>
                  <button type="submit" class="btn btn-default main-color-bg btn-lg">Update</button>
                </form>


              <br>
              <br>
              Delete The selected product
              <br>
              <div>
              <form enctype="multipart/form-data" method="post" action="product_delete_each.php">
                <div>
                  <input type="hidden" name="pid_delete" value="<?php echo $productid ?>">
                </div>
                <div>
                  <input type="hidden" name="file_path" value="<?php echo $imgpath ?>">
                </div>
                <button type="submit" class="btn btn-danger btn-lg">Delete</button>
              </form>
            </div>
              <?php
                mysqli_close($con);
              ?>

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
