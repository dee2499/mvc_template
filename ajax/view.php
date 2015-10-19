<?php
mysql_connect('localhost','root','');
mysql_select_db('registration');  
?>
<html>
    <head>
    <script type="text/javascript" src="my.js"></script>
    </head>
    <body>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Country </td>
                    <td>
                        <select name="country" id="country" onchange="a(this.value)">
                            <option value="0">Select</option>
                            <?php 
                                $sql = mysql_query("select * from country");
                                while($row = mysql_fetch_array($sql))
                                {
                            ?>
                            <option value="<?php echo $row['country_id'];?>"><?php echo $row['countryname'];?></option>
                            <?php 
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>State</td>
                    <td>
                        <select name="state" id="state" onchange="b(this.value)">
                            <option value="0">Select</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>city</td>
                    <td>
                        <select name="city" id="city">
                            <option value="0">Select</option>
                        </select>
                    </td>
                </tr>
                
            </table>
        </form>    
    </body>
</html>