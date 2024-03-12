<?php 
if(isset($_GET["id"]))
{
    $id=$_GET["id"];
$serverName = "localhost";
$userName = "root";
$password = "";
$database = "my_shop";
 
$connection = new mysqli($serverName, $userName, $password, $database);

$sql="DELETE FROM clients WHERE id=$id";
$connection->query($sql);

}
header("location:/CRUD/index.php");
            exit;
?>