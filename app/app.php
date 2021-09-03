<?php 
$vardas = trim($_POST['vardas']);
$email = trim($_POST['email']);

if(!empty($vardas) && !empty($email)) {
    filter_var($email, FILTER_VALIDATE_EMAIL);             
}
include('db.php');
