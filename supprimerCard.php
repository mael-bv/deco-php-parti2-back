<?php
require_once("src/back/DeleteModel.php");
$supprimer = new DeleteModel();
$id = $_GET['cardId'];
$supprimer->deleteMess($id,"cards");
header("Location: ajoutCard.php");
?>