<?php
// $hostname = 'localhost';
// $username = 'sibb8757';
// $password = 'M41hpwg4TZTi82';
// $database = 'sibb8757_keuangan';

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'db_keuangan';


$koneksi= mysqli_connect($hostname,$username,$password,$database);
if(!$koneksi){
    // echo "gagal";
}
?>