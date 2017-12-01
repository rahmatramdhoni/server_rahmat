<?php
$host="localhost"; // biasanya localhost
$username="Rahmat";
$password="ramdhoni";
$db="server_rahmat"; 
 
 
mysql_connect("$host", "$username", "$password")or die("koneksi gagal");
mysql_select_db("$db")or die("database tidak bisa dipilih");
 
// mengambil data username dan password dari index.php
// bila form method nya GET maka ganti POST menjadi GET
$username=$_GET['username'];
$password=$_GET['password'];
 
// untuk keamanan
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
 
$sql="SELECT * FROM login WHERE username='$username' and password='$password'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
 
if($count==1){
echo "<script>window.location = 'ta_rahmat/application/views/apps/admin.php';</script>";
}
else {
echo "Username atau Password yang anda masukkan salah";
}
?>