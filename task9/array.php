<html> 
<head> 
<title> Pemrograman PHP dengan Array</title> 
</head> 
<body> 
<?php 
//penulisan array dapat dibuat seperti berikut 
$nama[] = "Isabella"; 
$nama[] = "Affan"; 
$nama[] = "desty"; 
echo $nama[1] . $nama[2] . $nama[0]; 
echo "<br>"; 
//menghitung jumlah elemen array
$jum_array = count($nama);
echo "jumlah elemen array = ". $jum_array;
?> 
</body> 
</html>