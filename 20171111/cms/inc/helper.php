<?php
function printR($record) {
    echo '<pre>';
    print_r($record);
    echo '</pre>';
}

/**
 * Reference: https://www.w3schools.com/php/php_file_upload.asp
 */
function uploadFile($source_name, $destination) {
    $destination = BASE_PATH. DIRECTORY_SEPARATOR . $destination;
    if (isset($_FILES[$source_name])) {
        // check if there is no error while uploading.
        if ($_FILES[$source_name]['error'] == 0) {
            // Moves file from temporary location to place of programmer choice.
            if(move_uploaded_file($_FILES[$source_name]['tmp_name'], $destination)) {
                return true;
            }
        }
    }
    return false;
}

function redirect($location) {
     header("Location:$location");
}

function requireLogin() {
    if(!isset($_SESSION['id'])) {
        redirect('signin.php');
    }
}