<?php 
require "header.php";
?>

<main>
    <?php
        if(isset($_SESSION['usersId'])) {
            echo'<h1>You are logged in!</h1>';
            header("Location:form.php?sucess=login");
        }
        
    ?>
</main>

<?php
    require "footer.php";
?>