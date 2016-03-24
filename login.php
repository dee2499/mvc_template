<?php 
session_start();
   include ("config.php");
  // error_reporting(E_ALL & ~E_NOTICE);
  $msg = '';
    if (isset($_POST['login']) && !empty($_POST['uname']) && !empty($_POST['password'])) {

         $query = 'SELECT * FROM registration WHERE deleted = 0 AND hidden = 0 AND name = "'.$_POST['uname'].'"' ;
         $data = mysql_query($query);
            if($data > 0){ 
               while($row=mysql_fetch_assoc($data)){
                  if ($_POST['uname'] == $row['name'] && 
                      $_POST['password'] == $row['password']) {
                      $_SESSION['valid'] = true;
                      $_SESSION['timeout'] = time();
                      $_SESSION['username'] = $_POST['uname'];

                      
                        header("location:view.php"); 
                      }else{
                      $msg = 'Wrong username or password';
                      }

                  
               }
            }

     
     // header("location:view.php"); 
     
   }
   ?>
<html>
   <head>
      <link rel="stylesheet" href="css/jquery-ui.css">
      <script src="js/jquery-1.12.0.min.js"></script>
      <script src="js/jquery-ui.js"></script>
      <script src="js/custom.js"></script>
      <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
      <link rel="stylesheet" type="text/css" href="css/custom.css">
   </head>
   <body style="background-color: #E4E4E4">
      <title>Login</title>
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <h1>Login</h1>
               <form name="login" method="POST">
               <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
                  <div class="box">
                     <div class="col-sm-6">
                        <input type="text" name="uname" placeholder="User name"/><br/><br/>
                        <input type="password" name="password" placeholder="Password"/><br/><br/>
                        <input class="btn btn-primary" value="Login" name="login" type="submit" />
                     </div>
                  </div>
               </form>
              
            
            </div>
         </div>
      </div>
   </body>
</html>