<?php
/**
 * Created by PhpStorm.
 * User: Tito
 * Date: 1/28/2016
 * Time: 1:20 AM
 */

namespace models;


class FileUploader
{
    public function uploadFile($unique){

$target_dir = "../uploads/";
$target_file = $target_dir . $unique . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    $uploadOk = 0;
    return "Sorry, file already exists.";

}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    $uploadOk = 0;
    return "Sorry, your file is too large.";

}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
    $uploadOk = 0;
    return "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";

}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    return "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {

    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        return "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        return "Sorry, there was an error uploading your file.";
    }
}

    }
}