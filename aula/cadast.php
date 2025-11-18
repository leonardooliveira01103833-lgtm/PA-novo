<?php
include("connect.php");

$email= $_POST['email'];
$password= $_POST['senha'];
$confirm_password= $_POST['confirmaSenha'];

echo $email, $password , $confirm_password;

$sql = "INSERT INTO usuario (email,password) VALUE ('$email','$password')";

if($conn->query($sql) === true){
     echo "usuario cadrastrado com sucesso";
}
else{
    echo "erro:" .$sql. "<br>" . $conn->error;
}

$conn->close();
