<?php 

require "libs/func.php";


$id = $_GET["id"];

deleteMovie($id);

header("Location: admin.php");

?>