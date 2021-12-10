Q18.
<html>
<head>
<title> switch case drop down list </title>
<style>
body{
             border-color: yellow;  
             border-width: 20px;  
             border-style: inset;
             background-color:orange;
             margin:0px;
}
			
</style>

</head>
<body><center><h1>
<p><b>Welcome Message</b></p>
<form action="practical2.php".php method = "POST">
<select name = "dropdown" , value = "select">
<option value = "select"> select </option>
<option value = "Telugu"> Telugu </option>
<option value = "Hindi"> Hindi </option>
<option value = "English"> English </option>
</select>
<input type = "submit", name = "submit" , value = "submit">
</form>
<?php
if ($_POST)
{
$x = $_POST["dropdown"];
switch($x)
{
case "Telugu": echo "Namsthe";
break;
case "Hindi": echo "Namshkar";
break;
case "English": echo "Hello";
break;
default: echo "Input did not match with any case";
}
}
?>
</h1> </center>
</body>
</html>