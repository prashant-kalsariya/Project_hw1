<?php
// Database connection
// include "config.php";
if (isset($_POST["submit"])) {
    // Set image placement folder
    $target_dir = "../images/";
    // Get file path
    $target_file = $target_dir . basename($_FILES["fileUpload"]["name"]);
    // Get file extension
    $imageExt = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    // Allowed file types
    $allowd_file_ext = array("jpg", "jpeg", "png");

    if (!file_exists($_FILES["fileUpload"]["tmp_name"])) {
        $resMessage = array(
            "message" => "Select image to upload.",
        );
    } else if (!in_array($imageExt, $allowd_file_ext)) {
        $resMessage = array(
            "message" => "Allowed file formats .jpg, .jpeg and .png.",
        );
    }
    else {
        if (move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_file)) {
            //Done workd
        } else {
            $resMessage = array(
                "message" => "Image coudn't be uploaded.",
            );
        }
    }
}
