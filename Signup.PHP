<?php
//set up mysql connection
mysql_connect("localhost", "root", "") or die(mysql_error());
//select database
mysql_select_db("simple_login") or die(mysql_error()); 
$fName     = $_POST['fName'];
$lName     = $_POST['lName'];
$username   = $_POST['username'];
$password  = sha1($_POST['pass']);
$gender    = $_POST['optionsRadios'];
$query = "INSERT INTO member(id, fName, lName, username, pass, gender)
VALUES (NULL, '{$fName}', '{$lName}', '{$username}', '{$pass}', '{$gender}')"; 
if (mysql_query($query)) {
echo "<script type=\"text/javascript\">
alert(\"New member added successfully.\");
window.location = \"Signups.php\"
</script>";
} else
die("Failed: " . mysql_error());
?>