
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Page Title</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
  <!-- Import Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
      crossorigin="anonymous">
      <link rel="stylesheet" href="../CSS/animations.css">
    <link rel="stylesheet" href="../CSS/imgEffectCommon.css" type="text/css">
    <link rel="stylesheet" href="../CSS/imgeffect2.css" type="text/css">
    <link rel="stylesheet" href="../CSS/imgEffect.css" type="text/css">
    <link type="text/css" rel="stylesheet" href="../CSS/materialize.min.css" media="screen,projection" />
    <link rel="stylesheet" href="../includes_css/postform.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    
</head>
<body>
<?php 
 include 'connectDB.php'; 

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $user_name =  $_POST['name'];
      $date = date('d-m-y');
      $content = $_POST['content'];
      if ($_POST['image']) {
        # code...
        $user_image = $_FILES['image']['name'];
        $user_image_temp = $_FILES['image']['tmp_name'];
        move_uploaded_file($user_image_temp, "../uploaded_image/$user_image");
  
      }else{
        $user_image = "default.png";
      }
      $appr = "unapprove";

      $query = "INSERT INTO post(user_name,user_content,user_date,user_picture,user_status) ";
      $query .= "VALUES('{$user_name}','{$content}',now(),'{$user_image}','{$appr}')";

      $insert_query = mysqli_query($con,$query);
  }
?>


  <div class="container center">
    <a class="cyan-text btn-floating pulse check cyan"><i class="material-icons">check_circle</i></a>
    <h1 class="cyan-text">Hello, <?php echo $user_name ?></h1>
    <h3 class="cyan-text">Your Comment has been submitted</h3>
    <h3 class="cyan-text">and now being reviewed</h3>
    <a class="cyan-text lighten-1 home tooltipped" data-position="bottom" data-tooltip="Return to Homepage" href="../index.php"><i class="fas fa-home"></i></a>
  </div>


  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
  <script src="../JS/materialize.min.js"></script>
  <script src="../includes_js/postform.js"></script>
  <script>
    $(document).ready(function() {
      $(".tooltipped").tooltip();
    });
  </script>
</body>
</html>