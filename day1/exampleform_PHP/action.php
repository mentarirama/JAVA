<?php
 $nama = $_POST['name'];
 $hp = $_POST['hp'];
 $jk = $_POST['jk'];
 $dob = $_POST['dob'];
 $workaddress = $_POST['workaddress'];
 $company = $_POST['company'];
 $companyPhone = $_POST['companyPhone'];
 $posiiton = $_POST['position'];
 $npwp = $_POST['npwp'];

echo "Selamat $nama, Anda sebagai PEKERJA telah berhasil membuat form<br>";
echo "Berikut data diri Anda : <br><br>";

echo "Nama 				= $nama <br>";
echo "Handphone 		= $hp <br>";
echo "Gender 			= $jk <br>";
echo "Date of Birth 	= $dob <br>";
echo "Work Address 		= $workaddress<br>";
echo "Company 			= $company<br>";
echo "Company Phone 	= $companyPhone<br>";
echo "Position 			= $posiiton<br>";
echo "NPWP 				= $npwp<br>";

?>
