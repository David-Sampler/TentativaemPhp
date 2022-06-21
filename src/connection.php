<php

$host = "http://localhost/sistemar";
$db_name = "sistemar";
$db_host = localhost;
$db_user = "root";
$db_pass = "12345"

try{
    $conn = mssqli_connect($db_host,$db_pass,$db_user,$db_name);
}catch(){
    
}