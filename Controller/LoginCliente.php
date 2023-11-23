<?php
require_once("../Controller/Links.php");
$cliente = new ClienteController();


$email = $_POST['email'];
$password = $_POST['password'];
if(isset($email)&& isset($password)){
    $cliente->login($email,$password);
}
?>