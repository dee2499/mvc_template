<?php
    ob_start();
    include('conn.php'); 
    
    
      //fetch
    if(isset($_REQUEST['edit_id']))
    {
        $eid = $_REQUEST['edit_id'];
        
        $select = "select * from tbl_reg where id = '$eid'";
        $qq = mysql_query($select);
        $rec = mysql_fetch_array($qq);
    }
    
    //insert
    
        if(isset($_REQUEST['submit']))
        {
            $uname=$_REQUEST['uname'];
            $pass=$_REQUEST['pass'];
            $gen=$_REQUEST['gender'];
            $country=$_REQUEST['country'];
            $temp=$_REQUEST['hby'];
            $hby=implode(" ",$temp);
            
            $ins="INSERT INTO tbl_reg (uname,pass,gender,country,hobby) VALUES ('$uname','$pass','$gen','$country','$hby')";
            $ex=mysql_query($ins);
            header("location:view.php");
        } 
        
        
     //update
     
        if(isset($_REQUEST['update']) && ($_REQUEST['edit_id']))
        {
            $edit=$_REQUEST['edit_id'];
            $uname=$_REQUEST['uname'];
            $pass=$_REQUEST['pass'];
            $gen=$_REQUEST['gender'];
            $country=$_REQUEST['country'];
            $temp=$_REQUEST['hby'];
            $hby=implode(" ",$temp);
            $up = "update tbl_reg set uname='$uname' , pass='$pass' , gender='$gen' , country='$country' , hobby='$hby' where id = '$edit'";
            mysql_query($up);
            header("location:view.php");
        }
?>
<html>
    <head>
        <title>Reg.Form</title>
    </head>
    <body>
        <form method="post">
            <table align="center" border="1">
                <tr>
                    <td>User Name</td>
                    <td><input type="text" name="uname" value="<?php echo $rec['uname']; ?>"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="pass" value="<?php echo $rec['pass']; ?>"></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>
                    <?php 
                        $g=$rec['gender'];
                        
                        if($g=="Male")
                        {
                        ?>  
                        <input type="radio" name="gender" value="Male" checked="checked">Male
                        <input type="radio" name="gender" value="Female">Female
                       <?php   
                        }
                        else if($g=="Female")
                        {
                          ?>
                           <input type="radio" name="gender" value="Male">Male
                        <input type="radio" name="gender" value="Female" checked="checked">Female
                        <?php
                        }
                         else
                         {
                        ?>
                        <input type="radio" name="gender" value="Male">Male
                        <input type="radio" name="gender" value="Female">Female     
                        <?php
                         }
                        ?>    
                   
                    </td>
                </tr>
                <tr>
                    <td>Country</td>
                    <td>
                        <?php
                            $sel="select * from country";
                            $e=mysql_query($sel);
                        ?> 
                        <select name="country">
                            <?php
                                while($f=mysql_fetch_array($e))
                                {
                                    if($rec[4] == $f[0])
                                    {
                                    ?>    
                                    <option value="<?php echo $f[0]; ?>" selected="selected"><?php echo $f[1]; ?></option>
                                    <?php
                                    }
                                    else
                                    {    
                                    ?>
                                    <option value="<?php echo $f[0]; ?>"><?php echo $f[1]; ?></option>
                                    <?php 
                                    }
                                    ?>
                               <?php
                                }
                               ?>
                            
                        </select>   
                            
                    </td>
                </tr>
                                                  <tr>
                            <td>Hobby:</td>
                            <td>
                            <?php
                                    $ex = $rec['hobby'];
                                    $h = explode(",",$ex);
                                  
                                    
                                  if(isset($_REQUEST['edit_id']))
                                    {
                                    
                                    if($h[0] == 'Game')
                                    {
                                        ?>
                                       <input type="checkbox" name="hby[]" value="Game" checked="checked"> Game  
                                        <?php
                                    }
                                    else
                                    {
                                        ?>
                                              <input type="checkbox" name="hby[]" value="Game"> Game
                                        <?php
                                    }
                                    
                                    if($h[0] == 'Internet' || $h[1] == 'Internet')
                                    {
                                        ?>
                                        <input type="checkbox" name="hby[]" value="Internet" checked="checked"> Internet
                                        <?php
                                    }
                                    else
                                    {
                                        ?>
                                         <input type="checkbox" name="hby[]" value="Internet"> Internet
                                        <?php
                                    }
                                    }
                                  else
                                  {
                            ?>
                            <input type="checkbox" name="hby[]" value="Game"> Game
                            <input type="checkbox" name="hby[]" value="Internet"> Internet
                            <?php
                                    }
?>
                            
                            
                            </td>
                        </tr>
                <tr>
                <?php
                   if(isset($_REQUEST['edit_id']))
                   { 
                       ?>
                    <td align="center" colspan="2"><input type="submit" name="update" value="update"></td>
                    <?php
                   }
                   else
                   {
                   ?>
                   <td align="center" colspan="2"><input type="submit" name="submit" value="submit"></td>
                   <?php 
                   }
                   ?>

                    
                </tr>
            </table>
        </form>
    </body>
</html>
<?php
    ob_flush();
?>