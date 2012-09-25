<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<title>MainPaige</title>

</head>

<body>



<?php
include('index.php');
  
echo '<p>Go to <a href="index.php">homepaige...&raquo;</a></p>';
					
$ornekyazi= '<p>'."Here is administration page all is in here. Son örneğimizde ise gösterilecek karakter sayısı 20 den fazla olduğu zaman tabloda ve tasarımda bozukluk oluşturacak bir kodu engellemek için 20 karakterden fazlasını gösterirken ilk 17 karakteri alan ve son 3 karakter yerine nokta koyan yani sonuç olarak tablo içinde 20 karakter gösteren bir kod uygulamasını inceleyelim.".'</p>';
$ornekyazi_yeni = strlen($ornekyazi);
if ($ornekyazi_yeni > 35) {
$yeni_yazi = substr($ornekyazi, 0, 28); 
$yeni_yazi = $yeni_yazi . '... ' . '<a href="uzun.php?zz=yeniyazi">Read more &raquo;</a>'."</p>";
echo $yeni_yazi; 
}

?>

</body>
</html>

