<?php
ob_start();
    include('conn.php');
    
    $select = "select * from tbl_reg JOIN country ON tbl_reg.country = country.cid";
    $ex=mysql_query($select);
    
    //delete
    
        if(isset($_REQUEST['del_id']))
        {
            $del=$_REQUEST['del_id'];
            $delete="delete from tbl_reg where id='$del'";
            mysql_query($delete);
            header("location:view.php"); 
            
        }
        
        
        //status
        
        if(isset($_REQUEST['status_id']))
        {
            $sid=$_REQUEST['status_id'];
            $st=$_REQUEST['sta'];
            
            if($st == 'disable')
            {
                $us = "update tbl_reg set status = 'enable' where id = '$sid'";
                mysql_query($us);
                header("location:view.php");
            }
            else
            {
                $us = "update tbl_reg set status = 'disable' where id = '$sid'";
                mysql_query($us);
                header("location:view.php");
            }
            
        }
?>
<html>
    <head>
        <title>View</title>
    </head>
    <body>
        <form method="post">
            <table align="center" border="1">
                <tr>
                    <th>User Id</th>
                    <th>User Name</th>
                    <th>Password</th>
                    <th>Gender</th>
                    <th>Country</th>
                    <th>Hobbby</th>
                    <th>Status</th>
                    <th align="center" colspan="2">Action</th>
                </tr>
                
                <?php 
                    while($r=mysql_fetch_array($ex))
                    {
                 ?>       
                   <tr>
                        <td><?php echo $r['id']; ?></td>
                        <td><?php echo $r['uname']; ?></td>
                        <td><?php echo $r['pass']; ?></td>
                        <td><?php echo $r['gender']; ?></td>
                        <td><?php echo $r['name']; ?></td>
                        <td><?php echo $r['hobby']; ?></td>
                        <td><a href="view.php?status_id=<?php echo $r['id']; ?>&&sta=<?php echo $r['status']; ?>"><?php echo $r['status']; ?></a></td>
                        <td><a href="form.php?edit_id=<?php echo $r['id']; ?>">Edit</a></td>
                        <td><a href="view.php?del_id=<?php echo $r['id']; ?>">Delete</a></td>
                   </tr>
                   <?php
                    }
                    ?>
            </table>
        </form>
    </body>
</html>
<?php
    ob_flush();
?>
