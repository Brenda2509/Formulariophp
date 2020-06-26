<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    echo "Se enviaron por GET";
}else {
    echo "Se enviaron por POST";
}

//if (isset($_POST['submit-formularios2'])) {
//    echo "Se han enviado los datos correctamente";
//    print_r($_POST['submit']);
//}

?>