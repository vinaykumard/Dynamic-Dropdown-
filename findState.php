
<? $country=$_GET['country'];
include("config.php");
$query6="SELECT DISTINCT(state_name)  FROM location where country_name='$country' ORDER BY state_name ASC";
$result6=mysql_query($query6);

?>
<?if (!isset($result6)){
echo "<input>";}
else{
?>
<select  name="state" id="UpdateSite" onchange="getCity(this.value)">
<? while($row6=mysql_fetch_array($result6)) { ?>
<option value="<?=$row6['state_name']?>"><?=$row6['state_name']?></option>
<? } ?>
</select>
<? } ?>

