<?php include ("materi/referensi.php");
$tbh = new DataSantri();

// Get file extension
$imageExt = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Allowed file types
$allowd_file_ext = array("jpg", "jpeg", "png");

if (!file_exists($_FILES["image"]["tmp_name"])) {
    $resMessage = array(
        "status" => "alert-danger",
        "message" => "Select image to upload."
    );
}elseif (!in_array($imageExt, $allowd_file_ext)) {
    $resMessage = array(
        "status" => "alert-danger",
        "message" => "Allowed file formats .jpg, .jpeg and .png."
    );
}else if ($_FILES["image"]["size"] > 2097152) {
    $resMessage=array("status"=> "alert-danger",
        "message"=> "File is too large. File size should be less than 2 megabytes."
    );
}else if (file_exists($target_file)) {
    $resMessage = array(
        "status" => "alert-danger",
        "message" => "File already exists."
    );
}




?>