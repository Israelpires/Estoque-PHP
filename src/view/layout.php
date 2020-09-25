<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <?php include_once "style.php"?>
  <title>Estoque</title>
</head>
<body>
  <div id="container">
    <?php 
      include_once 'header/header.php';
      include_once 'controller/ProductController.php';
      include_once 'controller/CategoryController.php';

      if(isset($_GET["class"])){
        $class = $_GET["class"];
        $classController = new $class();
        if(isset($_GET["action"])){
            $action = $_GET['action'];
            $classController->$action();
        }elseif(isset($_POST["action"])){
            $action = $_POST['action'];
            $classController->$action();
        }
      } else {
        include_once 'menu/menu.php';
      }
    ?>
  </div>
  
</body>
</html>