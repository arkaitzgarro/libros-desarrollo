<?php
    if (!empty($_POST)) {
        echo '<pre>'.print_r($_POST, true).'</pre>';
    } elseif (!empty($_GET)) {
        echo '<pre>'.print_r($_GET, true).'</pre>';
    } else {
        die("No se han recibido datos.");
    }

    $uploaddir = './uploads/';
    $uploadfile = $uploaddir . basename($_FILES['foto']['name']);

    if (move_uploaded_file($_FILES['foto']['tmp_name'], $uploadfile)) {
        echo "<img src='".$uploadfile."'>";
    } else {
        echo "No se ha podido cargar la imagen\n";
    }
?>