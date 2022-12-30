<?php
require_once(".././src/back/DeleteModel.php");
$supprimer = new DeleteModel();
$id = $_GET['messId'];
$supprimer->deleteMess($id,"messagerie");


?>