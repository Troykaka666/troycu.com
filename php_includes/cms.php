
<!DOCTYPE html>
<?php include 'connectDB.php'; ?>
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
    <link rel="stylesheet" href="../includes_css/cms.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    
</head>
<body>
  <div class="navbar-fixed">
    <nav id="tab-nav">
      <div class="nav-wrapper cyan" >
        <a href="../index.php" class="brand-logo">Home</a>
        <ul id="nav-mobile" class="right">
          <li><a href="sass.html"><span class="icon_notif"><i class="material-icons">filter_<?php echo $unapprove_count; ?></i></span></a></li>
          
        </ul>
      </div>
    </nav>
  </div>


  <div class="container">
    <h1 class="cyan-text cms-title">Welcome</h1>
  </div>
  <div class="row" id="table">
    <div class="col l1 m1"></div>
    <div class="col s12 m10 l10">
      <table class="highlight responsive-table tb">
        <thead>
          <tr class="cyan-text">
              <th>User Name</th>
              <th>User Comment</th>
              <th>Post Date</th>
              <th>User Image</th>
              <th>User Status</th>
              <th>Delete Comment</th>
              <th>Edit Comment</th>
          </tr>
        </thead>

        <tbody class="">
        <?php 
      $query = "SELECT * FROM post";
      $all_commonts = mysqli_query($con,$query);

      while ($row = mysqli_fetch_array($all_commonts)) {
        # code...
        $user_name = $row['user_name'];
        $user_content = $row['user_content'];
        $user_date = $row['user_date'];
        $user_image = $row['user_picture'];
        $user_status = $row['user_status'];
        $user_id = $row['user_id'];

        echo "<tr>";
        echo "<td>{$user_name}</td>";
        echo "<td>{$user_content}</td>";
        echo "<td>{$user_date}</td>";
        echo "<td><img width='100' src='../uploaded_image/$user_image'></td>";
        echo "<td>{$user_status}</td>";
        echo "<td><a href='cms.php?delete={$user_id}'>Delete</a></td>";
        echo "<td><a href='cms.php?approve={$user_id}'>Approve</a>/<a href='cms.php?unapprove={$user_id}'>Unapprove</a></td>";
        echo "</tr>";
      }
      ?>
        </tbody>
      </table>
    </div>
    <div class="col l1 m1"></div>
    </div>


    <!-- Delete Function -->
    <?php 
    if(isset($_GET['delete'])){
        $the_delete_id  = $_GET['delete'];
        $query = "DELETE FROM post WHERE user_id = {$the_delete_id}";
        $delete_query = mysqli_query($con, $query);
        header("Location: cms.php");
    }

    if(isset($_GET['approve'])){
      $the_approve_id  = $_GET['approve'];
      $query = "UPDATE post SET user_status = 'approve' WHERE user_id={$the_approve_id}";
      $approve_query = mysqli_query($con, $query);
      header("Location: cms.php");
    }

    if(isset($_GET['unapprove'])){
      $the_unapprove_id  = $_GET['unapprove'];
      $query = "UPDATE post SET user_status = 'unapprove' WHERE user_id={$the_unapprove_id}";
      $approve_query = mysqli_query($con, $query);
      header("Location: cms.php");
    }
    ?>


  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
  <script src="../JS/materialize.min.js"></script>
  <script src="../includes_js/cms.js"></script>

</body>
</html>