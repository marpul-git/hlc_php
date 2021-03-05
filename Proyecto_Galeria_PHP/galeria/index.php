<?php

  include "common/utils.php";
  include "common/config.php";
  include "common/mysql.php";

 


  # conectamos con la base de datos
  $connection = Connect( $config['database']);

  $sql  = "select * from images where enabled = 1 order by id desc";

  $rows = ExecuteQuery( $sql, $connection);

  Close( $connection);


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Galeria de imagenes</title>

    <!-- Bootstrap Core CSS -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/bootstrap/css/thumbnail-gallery.css" rel="stylesheet">

   

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">GALERÍA DE IMÁGENES</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    
                    <li>
                        <a href="admin/index.php?page=login">Accede ó Regístrate</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    
      <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-12">
            <h1 class="page-header">Galería de miniaturas</h1>
        </div>

        <?php

          foreach ( $rows as $row) 
          {
            echo '<div class="col-lg-3 col-md-4 col-xs-6 thumb">
                  <a class="thumbnail" href="#">
                      <img class="img-responsive css_img" src="images/'.$row['file'].'" alt="">
                      
                  </a>'.$row['name'].'
              </div>';
          }

        ?>

      </div>

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p> @migaleriadefotos</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="assets/bootstrap/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
