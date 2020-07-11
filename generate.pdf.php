<?php
    if(isset($_POST['pdf-submit'])) {
        
        session_start();
        
        require "includes/dbh.inc.php";
        
        require('fpdf181/fpdf.php'); 
        
        $fName = $_POST['firstname'];
        $lName = $_POST['lastname'];
        $age = $_POST['age'];
        $add = $_POST['add'];
        $fadd = $_POST['address'];
        $sex = $_POST['Gender'];
        $pin = $_POST['pin'];
        $tal = $_POST['tal'];
        $dist = $_POST['dist'];
        $state = $_POST['state'];
        $id = $_SESSION['usersId'];
        $ext =$_SESSION['extn'];
        $img =$_SESSION['name'];
        
        
        
        if(empty($fName) || empty($lName) || empty($age) || empty($add)||empty($sex) || empty($fadd) || empty($pin) || empty($tal) || empty($dist) || empty($state)) {
            header("Location:form.php?error=emptyfields&firstname=".$fName."&lastname".$lName."&dob".$dob."&age".$age."&add".$add);
            exit();
        }
        else if (!preg_match("/^[a-zA-Z]*$/", $fName)) {
            header("Location:form.php?error=emptyfields&lastname".$lName."&age".$age."&add".$add);
            exit();
        }
        else if (!preg_match("/^[a-zA-Z]*$/", $lName)) {
            header("Location:form.php?error=emptyfields&firstname".$fName."&age".$age."&add".$add);
            exit();
        }
        else if (!preg_match("/^[a-zA-Z]*$/", $add)) {
            header("Location:form.php?error=emptyfields&lastname".$lName."&age".$age."&fisrtname".$fName);
            exit();
        }
        else if($age <= 18){
            header("Location:form.php?error=invalidage&lastname".$lName."&fname".$fName."&add".$add);
            exit();
        } 
        else if($sex == "Select Gender") {
            header("Location:form.php?error=selectgender");
            exit();
        }
         else {
            $sql = "INSERT INTO forms (fname, lname, age, city) VALUES(?, ?, ?, ?)";
            $stmt= mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt, $sql)) {
                header("Location:/form.php?error=sqlerror");
                exit();
            }
            else {
                mysqli_stmt_bind_param($stmt,"ssss",$fName,$lName,$age,$add);
                mysqli_stmt_execute($stmt);
            }
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        
             if(empty($img)) {
                 header("Location:../form.php?error=imagenotuploaded");
                 exit();
             }
             
           else{  
        
        $pdf=new FPDF('P','mm',array(100,150));

        $pdf->AddPage();
            
        $pdf->SetFont('Arial','B',8);
        $pdf->Image('images/pdflogo.png',45,9,-700);    
        $pdf->cell(0,30,"Election Commision Of India",0,1,'C');
        $pdf->cell(0,5,"Identity Card",0,1,'C');
        $pdf->cell(0,10,"Voter ID:$id",0,1,'L');
        $pdf->Image($img,65,45,-800);

        $pdf->cell(0,10,"First Name : $fName",0,1);
        $pdf->cell(0,5 ,"Last Name  : $lName",0,1);
        $pdf->cell(0,5 ,"Age        : $age",0,1);
        $pdf->cell(0,5 ,"Gender     : $sex",0,1);
        $pdf->cell(0,5 ,"Adress     : $fadd",0,1);
        $pdf->cell(0,5 ,"City/Town  : $add",0,1);
        $pdf->cell(0,5 ,"Taluka     : $tal",0,1);
        $pdf->cell(0,5,"District   : $dist",0,1);
        $pdf->cell(0,5,"Electoral Registration Officer",0,1,'R');
        $pdf->cell(0,5,"Assembly Constituency",0,1,'R');

        $pdf->cell(0,10,"State      : $state",0,1);
        $pdf->MultiCell(0,3,"This card may be used as an Identity Card \n different government schemes under",0,'C');
        $pdf->Output();
           }
        }
    }
?>