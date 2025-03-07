 <?php
 $servername = "localhost";
$username = "root";
$password = "";
$database = "arsip";

// Create connection
$db = mysqli_connect($servername, $username, $password, $database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
 
?>