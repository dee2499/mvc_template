<?php
ob_start();
  session_start();
  
  if(isset($_REQUEST['submit']))
  {
      if($_REQUEST['uname'] == 'pratik' && $_REQUEST['pass'] == 'pratik')
      {
          $_SESSION['user'] = $_REQUEST['uname'];
          header("location:welcome.php");
      }
      else
      {
          echo "invalid username & password........";
      }
  }
?>
<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <form method="post">
            <table align="center" border="1">
                <tr>
                    <td>User Name</td>
                    <td><input type="text" name="uname"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="pass"></td>
                </tr>
                <tr>
                    <td align="center" colspan="2"><input type="submit" name="submit" value="submit"></td>
                </tr>
            </table>
        </form>
    </body>
</html>
<?php
ob_flush();
?>