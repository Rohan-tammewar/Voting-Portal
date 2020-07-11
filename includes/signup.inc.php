<?php
if(isset($_POST['signup-submit'])) {
    
    require 'dbh.inc.php';
    
    $username = $_POST['uid'];
    $email = $_POST['mail'];
    $password = $_POST['pwd'];
    $passwordRepeat = $_POST['pwd-repeat'];
    
    if(empty($username) || empty($email) || empty($password) || empty($passwordRepeat)) {
        header("Location: ../header.php?error=emptyfields&uid=".$username."&mail".$email);
        exit();
    }
    else if (!preg_match("/^[a-zA-Z\\s_]*$/", $username)) {
        header("Location: ../index.php?error=invalidusername&mail=".$email);
        exit();
    }
    else if($password !== $passwordRepeat){
        header("Location: ../index.php?error=checkpassword&uid&mail=".$username."&mail".$email);
        exit();    
    }
    
    else {
        $sql = "SELECT emailUsers FROM users WHERE emailUsers = ?";
        $stmt = mysqli_stmt_init($conn);
        
        if(!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../index.php?error=sqlerror");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
             mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if($resultCheck > 0) {
                header("Location: ../index.php?error=emailidtaken&uid=".$username);
                exit();
            }
            else {
            $sql = "INSERT INTO  users (uidUsers, emailUsers, pwdUsers) VALUES (?, ?, ?)";
            $stmt = mysqli_stmt_init($conn);
        
        if(!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../index.php?error=sqlerror");
            exit();
        }
        else {
            $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
            mysqli_stmt_bind_param($stmt, "sss",$username, $email, $hashedPwd);
            mysqli_stmt_execute($stmt);
            header("Location: ../index.php?signup=success");
            echo("Signed up Successfully");
            exit();
            }
        }
    }
    }
mysqli_stmt_close($stmt);
mysli_close($conn);
}
else {
    header("Location: ../index.php");
    exit();
}