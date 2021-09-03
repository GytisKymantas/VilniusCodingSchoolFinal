<?php
    define("DB_SERVER", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    define("DB_NAME","finalinis");

    $mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
    if($mysqli->connect_error) {
        echo "We are having some difficulties\n";
        echo 'ERROR: '.$mysqli->connect_error.'\n';
        exit();
    }
    mysqli_query($mysqli, "INSERT INTO trials (vardas, email)
    VALUES('$_POST[vardas]', '$_POST[email]')");
    //navigate back to home page 
    ('Location: ../index.php');
    