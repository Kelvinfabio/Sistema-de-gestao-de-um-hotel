<?php
include("../Controller/Links.php");

$funcionario = new AdminController();

$username = $_POST['username'];
$password = $_POST['password'];
if(isset($username)&& isset($password)){
$funcionario->LoginAdmin($username,$password);
}