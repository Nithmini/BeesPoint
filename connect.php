<?php 
$con= new mysqli('localhost','root', '', 'beepoint');
if($con){
    echo "succes";
}
else{
    die(mysqli_error($con));
}
