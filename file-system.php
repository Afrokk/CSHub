<?php
session_start();
if(!empty($_FILES["fileToUpload"]["name"])) {
    $target_dir = "uploads/";
    $target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    $dir_size = 0;
    foreach(glob($target_dir.'*.*') as $file) {
        $dir_size += filesize($file);
    }
    if($dir_size > 20 * 1024 * 1024) { // 20MB Limit
        $_SESSION['message'] = "Sorry, the upload directory is full.";
        $uploadOk = 0;
        header('Location: pages/resources.php');
        exit;
    }

    if(file_exists($target_file)) {
        $_SESSION['message'] = "Sorry, file already exists.";
        $uploadOk = 0;
        header('Location: pages/resources.php');
        exit;
    }

    if($fileType != "pdf" && $fileType != "ppt" && $fileType != "doc" && $fileType != "docx") {
        $_SESSION['message'] = "Sorry, only PDF, PPT, DOC & DOCX files are allowed.";
        $uploadOk = 0;
        header('Location: pages/resources.php');
        exit;
    }

    if($uploadOk == 0) {
        $_SESSION['message'] = "Sorry, only PDF, PPT, DOC & DOCX files are allowed. Your file was not uploaded.";
    } else {
        if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            $_SESSION['message'] = "The file ".htmlspecialchars(basename($_FILES["fileToUpload"]["name"]))." has been uploaded.";
        } else {
            switch($_FILES["fileToUpload"]["error"]) {
                case UPLOAD_ERR_INI_SIZE:
                case UPLOAD_ERR_FORM_SIZE:
                    $_SESSION['message'] = "Sorry, your file is too large.";
                    break;
                case UPLOAD_ERR_PARTIAL:
                    $_SESSION['message'] = "Sorry, your file was only partially uploaded.";
                    break;
                case UPLOAD_ERR_NO_FILE:
                    $_SESSION['message'] = "Sorry, no file was uploaded.";
                    break;
                case UPLOAD_ERR_NO_TMP_DIR:
                    $_SESSION['message'] = "Sorry, missing a temporary folder.";
                    break;
                case UPLOAD_ERR_CANT_WRITE:
                    $_SESSION['message'] = "Sorry, failed to write file to disk.";
                    break;
                case UPLOAD_ERR_EXTENSION:
                    $_SESSION['message'] = "Sorry, file upload stopped by extension.";
                    break;
                default:
                    $_SESSION['message'] = "Sorry, unknown error occurred.";
            }
        }
    }
}
header('Location: pages/resources.php');
exit;
?>

