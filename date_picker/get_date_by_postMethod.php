<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Print the POST array
    print_r($_POST);
    echo "<br> Not Echo Array data";
    echo ($_POST);

}
?>