<?php
require_once("src/back/DeleteModel.php");
$supprimer = new DeleteModel();
$urlFile = $_GET['urlFile'];
if(substr($urlFile,0,4) === "file"){
    $supprimer->deleteFile("filesimages",$urlFile);
}else{
    $supprimer->deleteFile("carousselfile",$urlFile);
}
header("Location: ajoutImage.php");





?>