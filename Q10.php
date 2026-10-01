<?php

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "admin" && $password == "12345") {
    echo "success";
}
else {
    echo "error";
}

?>