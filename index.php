<?include('config.php');?>
<html>
<head>
<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<select name="country" onChange="getState(this.value)" id="country">
<option value="">Select Country</option>
<?$result1 = mysql_query("Select DISTINCT(country_name) FROM location");
while($row=mysql_fetch_array($result1)) { ?>
<option value="<?=$row['country_name']?>"><?=$row['country_name']?></option>
<? } ?>
</select>
<br>
<br>
<div id="statediv"><select name="state" id="state" >
<option value="">Select State</option>
</select></div>
<br>
<div id="citydiv"><select name="city" id="city" >
<option value="">Select City</option>
</select>
</div>
</div>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/location.js"></script>
</body>
</html>