<?php
mysql_connect('localhost','root','');
mysql_select_db('registration');
 

if(isset($_REQUEST['country']))
{
    $country = intval($_REQUEST['country']);
    $sql = mysql_query("select * from state where country_id = '".$country."'");
    

?>
<option value="0"> Select </option>
<?php
    while($row = mysql_fetch_array($sql))
    {    
?>
    <option value="<?php echo $row['state_id'];?>"><?php echo $row['statename'];?></option>
<?php
    }
}
?>


<?php 
if(isset($_REQUEST['state']))
{
    $state = intval($_REQUEST['state']);
    $sql = mysql_query("select * from city where state_id = '".$state."'");
    

?>
<option value="0"> Select </option>
<?php
    while($row = mysql_fetch_array($sql))
    {    
?>
    <option value="<?php echo $row['city_id'];?>"><?php echo $row['cityname'];?></option>
<?php
    }
}
?>