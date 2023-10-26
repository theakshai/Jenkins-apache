<?php

$pass = rtrim(file_get_contents("/run/secrets/secret"));

$conn = new mysqli("db", "root", $pass);

if($conn->connect_error) {

    echo "Unable to connect";

} else {

    echo "Connected to php successfully"

}

?>
