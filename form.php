<?php
    session_start();
?>

<?php
    if(isset($_SESSION['usersId'])) {
        echo'<form action = "includes/logout.inc.php" method="post">
        <button type = "submit" name="logout-submit" id="lbtn">logout</button>
        </form>';
    }
?>

<!DOCTYPE html>
    <html>
        <head>
            <link rel="stylesheet" href="main.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        </head>
        
        <body>
            <h2 style="text-align:center" >VOTER ID FORM</h2>
            
            <?php
                if(isset($_GET['error'])){
                    if($_GET['error'] == "emptyfields"){
                        echo'<p id="error">Make sure that you have filled details properly</p>';
                    }
                    else if($_GET['error'] == "invalidage"){
                        echo'<p id="error">Age should be greater than 18</p>';
                    }
                    else if($_GET['error'] == "incorrectpassword"){
                        echo'<p id="error">Make sure that you have entered password correctly</p>';
                    }
                    else if($_GET['error'] == "imagenotuploaded"){
                        echo'<p id="error">Upload image before submitting the form</p>';
                    }
                    else if($_GET['error'] == "selectgender"){
                        echo'<p id="error">gender not selected</p>';
                    }
                }
            ?>
            
        <h3 style="text-align:center">Upload image</h3>

        <form action = "upload.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="file" id="lin">
            <button type="submit" name="photo-submit" id="gbtn">UPLOAD IMAGE</button>
        </form>
    
        <div>
            <div class="container">
                <div class="row">
                    <form action = "generate.pdf.php" method="POST">
                        <input type="text" name="firstname" placeholder="First name" id="lin">
                        <input type = "text" name = "lastname" placeholder="Last name" id="lin">
                        <input type = "number" name = "age" placeholder="Age" id="lin">
                        <input type = "text" name = "add" placeholder="City" id="lin">
                        <Select name ="Gender" id="lin">
                            <option>Select Gender</option>
                            <option value = "Male">Male</option>
                            <option value = "female">Female</option>
                            <option value = "others">others</option>
                        </Select>
                        <br>
                            <br>
                                <br>
                                    <br>
                                        <br>
                                            
                                            <h3 style="text-align:center">Address</h3>

                                            <textarea rows ="1" cols="70" name="address" placeholder="Address" id="lin"> </textarea>
                                            <input type="text" name="state" placeholder="State" id="lin">
                                            <input tpye="text" name="dist" placeholder="District" id="lin">
                                            <input type="text" name="tal" placeholder="Taluka" id="lin">
                                            <input type="number" name="pin" placeholder="Pincode" id="lin">
                                            <button type = 'submit' name ='pdf-submit' id="gbtn"> Submit Application </button></form>
                </div>
            </div>
        </div>
    </body>
</html>

<?php
    require "footer.php";
?>


