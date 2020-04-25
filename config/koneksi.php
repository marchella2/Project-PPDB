<?php

$host="localhost";
$user='root';
$pass='';
$database='db_ppdb_wikrama';

$konek = mysqli_connect($host, $user, $pass, $database);

if (!$konek){
    echo 'Error : '.mysqli_connect_error($konek);
}
?>