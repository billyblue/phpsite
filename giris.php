<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<title>giris</title>
</head>


<body>
<?php
session_start();

mysql_connect("localhost","root","") or die(mysql_error()); 

mysql_select_db("reg") or die(mysql_error());

$login = strip_tags(mysql_real_escape_string($_POST['login'])); 

$password = strip_tags(mysql_real_escape_string($_POST['password']));

if($login == "" || $password == "") {
echo "Please enter your Username and Password"; 
header("Refresh: 2; url=index.php");
} else { 



$query = mysql_query("select login from users where login='$login' and password='$password'"); 

$uyevarmi = mysql_num_rows($query); 


if($uyevarmi == 0) { 

echo "we couldn't find your user information. Please try again."; 
header("Refresh: 2; url=index.php");
return;
} else { 

$uyebilgi = mysql_fetch_assoc($query); 

$_SESSION['user'] = $uyebilgi['login']; 

echo "You move directly to administration page ";
header("Refresh: 2; url=index.php");
echo "<script>location.href='admin.php';</script>"; 

} 

} 
?>



</body>

</html>