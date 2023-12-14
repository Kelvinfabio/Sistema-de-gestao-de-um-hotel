<?php
include("../Controller/Links.php");

$Admin = new AdminController();
$id_quarto = $_POST["id_quarto"];
$Admin->DeleteQuarto($id_quarto);
