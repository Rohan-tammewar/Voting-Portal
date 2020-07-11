<?php
    if(isset($_POST['search-submit'])) {
        
        
        require 'dbh.inc.php';
        
        $item = strtolower($_POST['search']);
        
        if(empty($item)) {
            header("Location: ../header.php");
        }
        $sql = "SELECT * FROM forms WHERE fname = ?";
        $stmt = mysqli_stmt_init($conn);
        
        if(!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../header.php?error=sqlerror");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, "s", $item);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if($resultCheck > 0) {
                echo'<p>User Exist! <a href="../index.php">Login</a>To generate your pdf</p>';
                exit();
            }
            else {
                echo'<p>User doesnt Exist! <a href="../header.php">Go back</a>to sign up</p>';
                exit();

            }
        }
    }
else {
    header("Location:../header.php");
}
