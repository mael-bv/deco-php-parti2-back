<?php
require_once("src/back/DeleteModel.php");
$supprimer = new DeleteModel();
$id = $_GET['artId'];
$supprimer->deleteMess($id,"article");
header("Location: ajout.php");

?>