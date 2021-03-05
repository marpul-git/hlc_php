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
    <link href="/galeria/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/galeria/assets/bootstrap/css/thumbnail-gallery.css" rel="stylesheet">

    
</head>

<body>
        <?php
        
        $page = $_GET['page'];

        switch ($page) {
            case 'login':
                include "includes/login.inc.php";
                break;
        
            case 'new':
                include "includes/new.inc.php";
                break;
                
           
        }
        
        
        ?>

       
    <!-- /.container -->

    <!-- jQuery -->
    <script src="/galeria/assets/bootstrap/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/galeria/assets/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
