<?php
    if(isset($_POST['login-submit'])) {  
        
        require 'dbh.inc.php';
        
        $mailuid = $_POST['mailuid'];
        $password = $_POST['pwd'];
    
       
    if (empty($password) || empty($mailuid)) {
        header("Location: ../index.php?error=emptyfield");
        exit(); 
    }
    
    else {
        $sql = "SELECT * FROM users WHERE emailUsers = ? ;";
        $stmt = mysqli_stmt_init($conn);
        
        if(!mysqli_stmt_prepare( $stmt, $sql)) {
            header("Location: ../index.php?error=sqlerror");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, "s" , $mailuid);
            mysqli_stmt_execute($stmt);
            $result =mysqli_stmt_get_result($stmt);
            
            if($row = mysqli_fetch_assoc($result)) {
                $pwdCheck = password_verify( $password , $row['pwdUsers']);
            
                if($pwdCheck == false) {
                    header("Location: ../header.php?error=incorrectpassword");
                    exit();
                    }
                else if($pwdCheck == true) {
                    session_start();
                    $_SESSION['usersId']= $row['idUsers'];
                    $_SESSION['usersuid']= $row['uidUsers'];
                
                    header("Location: ../form.php?login=success");
                    exit();
                }
                else{
                    header("Location: ../header.php?error=techerror");
                    exit();    
                }
            }
        
            else {
                header("Location: ../header.php?error=nosuchuser");
                exit();
            }
        }
    }
}
else {
    header("Location: ../header.php");
    exit();
    }