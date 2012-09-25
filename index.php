<?php
	session_start();
	if(!isset($_SESSION['user'])) { 	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Welcome</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
	<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<table width="300" border="1" cellpadding="1" cellspacing="1">
<tr>
<td colspan="2" align="center">
<table width="300" border="0">
	<tr>
		<td colspan="2" align="center"><p><a href="http://validator.w3.org/check?uri=referer"><img src="http://www.w3.org/Icons/valid-xhtml11" alt="Valid XHTML 1.1" height="31" width="88" /></a></p>
		<p><a href="kontrol.php?xx=turkce">TÜRKÇE</a> - <a href="kontrol.php?xx=ingilizce">ENGLISH</a></p>
		</td>
	</tr>
</table>
  <form action="giris.php" method="post">
  <table width="300" border="0" cellpadding="1" cellspacing="1">

  <tr>
    <td align="center"></td>
    <td>&nbsp;</td>
	<td><strong>Please Login!</strong></td>
  </tr>
  <tr>
    <td>Username:</td>
	  <td align="center"></td>
    <td><input type="text" name="login" id="login"/> *</td>
  </tr>
  <tr>
    <td>Password:</td>
	  <td align="center"></td>
    <td><input type="password" name="password" id="password"/> *</td>
  </tr>  
  <tr>
    <td>&nbsp;</td>
	  <td align="center"></td>
    <td><input type="submit" id="giris" value="Login" /> or <a href="form.php">sign in &raquo;</a></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
	  <td align="center"></td>
    <td>Go to <a href="admin.php">Admin page &raquo;</a></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  </table>
</form>
</td>
</tr>
</table>
</body>
</html>

<?php
	exit();
	} else {
	
	echo "<p>"."Welcome " . $_SESSION['user'].' For Login out <a href="cikis.php">Click</a>'."</p>";
	
	
		}
		
?>
