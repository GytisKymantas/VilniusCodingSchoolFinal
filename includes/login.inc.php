<?php

    session_start();  // startuojam sesija
    if(isset($_POST['submit'])) {  //patikriname. kada paspaustas tada jungiames
        include_once 'db.inc.php'; 
        $uid = mysqli_real_escape_string($conn, $_POST['uid']);
        $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

        if(empty($uid) || empty($pwd)) {
            header("Location: ../index.php?=login=empty");
            exit();
        } else {
            $sql = "SELECT * FROM users WHERE user_uid = '$uid'";
            $result = mysqli_query($conn, $sql);
            $result_check = mysqli_num_rows($result); //konvertuojam i skaiciu
            if($result_check < 1) {  //jeigu lygu nuliui tada error
                header("Location: ../index.php?=login=error");
                exit();
            } else {  //jeigu praejo tada vykdome
                if($row = mysqli_fetch_assoc($result)) { 
                    // dehashing slaptazodi
                    $hashedPwdCheck = password_verify($pwd, $row['user_pwd']); //tai ka irasei ir duomenis is DB
                    if($hashedPwdCheck == false) {
                        header("Location: ../index.php?=login=error"); //jeigu nesutampa
                        exit();
                    } elseif($hashedPwdCheck == true) {
                        //login vartotoja i svetaine
                        $_SESSION['u_id'] = $row['user_id'];
                        $_SESSION['u_first'] = $row['user_first'];
                        $_SESSION['u_last'] = $row['user_last'];
                        $_SESSION['u_email'] = $row['user_email'];
                        $_SESSION['u_uid'] = $row['user_uid'];
                        header("Location: ../index.php?=login=success");
                        exit();
                        
                    }
                }
            }
        }

    } else {
        header("Location: ../index.php?=login=error");
        exit();
    }