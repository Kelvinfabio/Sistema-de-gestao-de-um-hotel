<?php
include("../Controller/Links.php");

$Admin = new AdminController();
$categoria = $_POST["categoria"];
$preco = $_POST["preco"];
$Admin->AddCategoria($categoria,$preco);

