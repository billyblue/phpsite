<?php
			session_start();
		

			if(!empty ($_POST)){
				if(empty ($_POST['login'])){
				 print 'Please enter your User name!</br>';
			}else{
				$login = TRUE;
			}
			if(empty ($_POST['password'])){
				print 'Please enter your password!</br>';
			}else{
				$password = TRUE;
			}
			if(empty ($_POST['cpassword'])){
				print 'Please enter your Confirm password</br>';
					}
			elseif($_POST['password'] != $_POST['cpassword']){
					print 'Passwords did not match!</br>';
		
			}else{
				$cpassword = TRUE;
			}
			if(empty($_POST['email'])){
					print 'Please enter your e-mail</br>';
			}else{
				$email = TRUE;
			}
					if(isset($login) && isset($password) && isset($cpassword) && isset($email)){
					print '';
					$db = mysql_connect('localhost', 'root', '') or die(mysql_error());
					mysql_select_db('reg');	
					$checkname = mysql_query("select * from users where login='".$_POST['login']."'") or die (mysql_error());

					$uyevar = mysql_num_rows($checkname);
					if(!empty($uyevar)){
					
						echo "Login name is exist! Please change your Login name.";
						header("Refresh: 3; url=form.php");
						return;
					}
						
					$checkmail = mysql_query("select * from users where email='".$_POST['email']."'") or die (mysql_error());
						
					$mailvar = mysql_num_rows($checkmail);
					if(!empty($mailvar)){
					
						echo "E-mail adress is exist! Please change your E-mail adress.";
						header("Refresh: 3; url=form.php");
						return;
					}
			
			
			
		
					$query=mysql_query("INSERT INTO users (login, password, email) VALUES ('{$_POST['login']}', '{$_POST['password']}' , '{$_POST['email']}')") or die(mysql_error());
					
					$email=$_POST['email'];
					if(!filter_var($email, FILTER_VALIDATE_EMAIL))
					{
					 echo("E-mail is not valid!!!");
					header("Refresh: 3; url=form.php");
					return;
					 }
					else
					 {
					 echo("");
					 }
					
			
					
			if(!isset($_SESSION['user'])) { 
				if($query) {
	
					$_SESSION['user'] = TRUE;
				
	
					header('Refresh: 3; url=admin.php');
					$message = "Registration Succesful! Please wait...";
				
					}else {
				
					echo "Doesn't Succesful!";
					}
				}		
			}
		}
			
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link href="css/style.css" rel="stylesheet" type="text/css" />
	<title>Registration page</title>
<p><a href="index.php">...Main Page &raquo;</a></p>

</head>
<body>
<h2>Registration page</h2>
<form name="form" method="post" action="form.php">	
  <table width="300" border="0">
  <tr>
    <td>Username :</td>
    <td><input type="text" name="login" /> *</td>
  </tr>
  <tr>
    <td>password :</td>
    <td><input type="password" name="password" /> *</td>
  </tr>
    <tr>
    <td>Confirm Password:</td>
    <td><input type="password" name="cpassword" /> *</td>
  </tr>
    <tr>
    <td>E-Posta:</td>
    <td><input type="text" name="email" /> *</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="submit" value="Submit" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  </table>
</form>


<?php print !empty($message) ? $message : ""; ?>


</body>

</html>