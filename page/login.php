<?php
session_start();
include "../config/db_config.php";
if (isset($_POST['submit']) == 'LOGIN') {
   $username = $_POST['username'];
   $password = $_POST['password'];

   if (empty($username) || empty($password)) {
      echo "kosong";
   } else {
      $sql = mysqli_query($connection, "SELECT * FROM user WHERE nama='$username' and password = '$password'");
      $result = mysqli_fetch_array($sql);
      if ($result[1]) {
         $_SESSION['login'] = $username;
         header('location:../admin/index.php?page=admin');
      } else {
         echo "gagal";
      }
   }
}

if (isset($_GET['action']) == 'logout') {
   session_destroy();
}

?>

<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Perpusatakaan Login</title>
   <link href="../css/bootstrap.min.css" rel="stylesheet">
   <link href="../css/datepicker3.css" rel="stylesheet">
   <link href="css/styles.css" rel="stylesheet">
   <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
   <div class="row">
      <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
         <br>
         <br>
         <br>
         <br>
         <br>
         <div class="login-panel panel panel-default">
            <div class="panel-heading">Log in</div>
            <div class="panel-body">
               <form role="form" method="post" name="loginform">
                  <fieldset>
                     <div class="form-group">
                        <input class="form-control" type="text" name="username" placeholder="Username" autofocus="">
                     </div>
                     <div class="form-group">
                        <input class="form-control" placeholder="Password" name="password" type="password" value="">
                     </div>
                     <input type="submit" name="submit" value="LOGIN" class="btn btn-primary">
                  </fieldset>
               </form>
            </div>
         </div>
      </div><!-- /.col-->
   </div><!-- /.row -->


   <script src="../js/jquery-1.11.1.min.js"></script>
   <script src="../js/bootstrap.min.js"></script>
</body>

</html>