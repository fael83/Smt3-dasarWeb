<?php
if (isset($_FILES['images'])) {
    $errors = array();
    $extensions = array("jpg", "jpeg", "png", "gif");

    if (!file_exists("images/")) {
        mkdir("images/", 0777, true);
    }

    for ($i = 0; $i < count($_FILES['images']['name']); $i++) {
        $file_name = $_FILES['images']['name'][$i];
        $file_size = $_FILES['images']['size'][$i];
        $file_tmp  = $_FILES['images']['tmp_name'][$i];

        $temp = explode('.', $file_name);
        $file_ext = strtolower(end($temp));

        if (!in_array($file_ext, $extensions)) {
            $errors[] = "File $file_name memiliki ekstensi tidak diizinkan.";
            continue;
        }

        if ($file_size > 2097152) {
            $errors[] = "File $file_name melebihi ukuran 2 MB.";
            continue;
        }

        if (move_uploaded_file($file_tmp, "images/" . $file_name)) {
            echo "Gambar $file_name berhasil diunggah.<br>";
        } else {
            $errors[] = "Gagal mengunggah $file_name.";
        }
    }

    if (!empty($errors)) {
        echo implode("<br>", $errors);
    }
}
?>
