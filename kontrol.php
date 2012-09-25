<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<head>
<meta http-equiv ="Content-Language" content="tr">
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>


<body>


<?php
	$xx=$_GET ["xx"];
	include("$xx.php");
	print '<table border="1" width="18%" id="table1">

		<tr>
			<td><b>'.ANASAYFA.'</b></td>
		</tr>
		<tr>
			<td><b>'.HABERLER.'</b></td>
		</tr>		
		<tr>
			<td><b>'.DERSLER.'</b></td>
		</tr>		
		<tr>
			<td><b>'.DOKUMANLAR.'</b></td>
		</tr>		
		<tr>
			<td><b>'.VIDEOLAR.'</b></td>
		</tr>
		
	</table>';
 


?>
</body>