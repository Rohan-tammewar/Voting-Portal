<?php
    if(isset($_POST['photo-submit'])) {
     
        session_start();
        
        $file = $_FILES['file'];
    
        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $fileError = $_FILES['file']['error'];
        $fileType = $_FILES['file']['type'];
        
        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));
        
        $fileInfo = @getimagesize($_FILES["file"]['tmp_name']);
        $width =$fileInfo[0];
        $height = $fileInfo[1];
        
        $allowed = array('jpg','jpeg','png');
        if(in_array($fileActualExt, $allowed)){
            if($fileError ===0) {
                if($fileSize < 200000){
                    if(($width >= "700" || $width <= "850" ) && ($height >= "900" || $height <= "1000" )) {
                        $fileNameNew =  $_SESSION['usersId'].".".$fileActualExt;
                        $fileDestination = 'uploads/'.$fileNameNew;
                        $_SESSION['name'] = $fileDestination;
                        $_SESSION['extn'] = $fileActualExt;
                        move_uploaded_file($fileTmpName, $fileDestination);
                        echo($_SESSION['name']);
                        header("Location: form.php?sucess=uploaded");
                    }
                    else{
                        echo"Dimension should be 800 x 976";
                    }
                }
                else{
                    echo"Your file is too big!";
                }
            }
            else {
                echo"There was an error uploading this file";
            }
        }
        else{
            echo "Select a JPEG,JPG,PNG file before procceding"; 
        }
    }


?>