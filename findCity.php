<? 
$stateId=$_GET['state'];
include("config.php");
$query9="SELECT DISTINCT(city_name) FROM location WHERE state_name='$stateId' ORDER BY city_name ASC";
$result9=mysql_query($query9);
$team1 = mysql_num_rows($result9); 
?>
<?if ($team1==1){
echo "Please Enter Your City Name<br><input id='city' name='city'><br>";
}
else{
?>
<select id="city" name="city">
<option>Select City</option>
<?
 while($row9=mysql_fetch_array($result9)) { ?>
<option value="<?=$row9['city_name']?>"><?=$row9['city_name']?></option>
<? } ?>

</select>

<?} ?>