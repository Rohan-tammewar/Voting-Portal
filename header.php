<?php
    require "includes/dbh.inc.php";
?>

<!DOCTYPE html>
    <html>
        <head>
            <link rel="stylesheet" href="main.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        </head>
        <body>
            <div class="topnav">
                <a href="#" class="active" > NATIONAL VOTER'S SERVICE PORTAL</a>
                <a href = "#home" >Home</a>
                <a href = "#signup">Sign up</a>
                <a href = "#about">About us</a>
                <a href = "#contact">Contact us</a>
                
                <div class="search-container">
                    <form action ="includes/search.inc.php" method="POST">
                        <input type ='text' name ='search' placeholder="search by name"> 
                        <button type="submit" name="search-submit"><i class="fa fa-search"></i>
                        </button>
                    </form>
                </div>
            </div>
    
            <div>
                <div class="container">
                    <div class="row">
                        <form action = "includes/login.inc.php" method="post">
                            <h2 style="text-align:center">Login</h2>
                            
                            <?php
                                if(isset($_GET['error'])){
                                    if($_GET['error'] == "emptyfield"){
                                        echo'<p id="error">Make sure that you have filled details properly</p>';
                                    }
                                    else if($_GET['error'] == "nosuchuser"){
                                        echo'<p id="error">No such user</p>';
                                    }
                                    else if($_GET['error'] == "incorrectpassword"){
                                        echo'<p id="error">Make sure that you have entered password correctly</p>';
                                    }
                                    else if($_GET['error'] == "emptyfields"){
                                        echo'<p id="error">Make sure that you have filled details correctly</p>';
                                    }
                                    else if($_GET['error'] == "invalidusername"){
                                        echo'<p id="error">Use of special characters or numbers not allowed</p>';
                                    }
                                    else if($_GET['error'] == "checkpassword"){
                                        echo'<p id="error">Make sure that you have filled password correctly</p>';
                                    }
                                    else if($_GET['error'] == "emailidtaken"){
                                        echo'<p id="error">Email Id Already taken </p>';
                                    }

                                }
                            ?>
                            
                            <input type = "text" name = "mailuid" placeholder="Emial_id" id="lin" >
                            <input type = "password" name = "pwd" placeholder="Password" id="lin">
                            <button type = "submit" name="login-submit" id="btn" id="error">Login</button>
                        </form>
                    </div>
                </div>
            </div>
                        
            <div>

                <div class="container" id="signup">
                    <form action = "includes/signup.inc.php" method="post">
                        <div class="row">
                            <h2 style="text-align:center">SignUp</h2>
                            <input type="text" name="uid" placeholder="Username" id="lin">
                            <input type = "email" name = "mail" placeholder="Email" id="lin">
                            <input type = "password" name = "pwd" placeholder="Password" id="lin">
                            <input type = "password" name = "pwd-repeat" placeholder="Confirm Password" id="lin">
                            <button type = "submit" name = "signup-submit" id="btn">Sign up</button>
                        </div>
                    </form>
                </div>
                
                <div>
                    <div class ="about-area" id="about"><p>
                        <div class="text-part">
                            <h1 align:center;>ABOUT US</h1>
                        </div>
                        <p>
                            India is a Socialist, Secular, Democratic Republic and the largest democracy in the World. The modern Indian nation state came into existence on 15th of August 1947. Since then free and fair elections have been held at regular intervals as per the principles enshrined in the Constitution, Electoral Laws and System.
                        </p>
                        
                        <p>
                            The Constitution of India has vested in the Election Commission of India the superintendence, direction and control of the entire process for conduct of elections to Parliament and Legislature of every State and to the offices of President and Vice-President of India.
                        </p>
                        
                        <p>
                            Election Commission of India is a permanent Constitutional Body. The Election Commission was established in accordance with the Constitution on 25th January 1950. The Commission celebrated its Golden Jubilee in 2001.
                        </p>
            
                        <p>
                        Originally the commission had only a Chief Election Commissioner. It currently consists of Chief Election Commissioner and two Election Commissioners .
                        For the first time two additional Commissioners were appointed on 16th October 1989 but they had a very short tenure till 1st January 1990. Later, on 1st October 1993 two additional Election Commissioners were appointed. The concept of multi-member Commission has been in operation since then, with decision making power by majority vote.
                        </p>
                        
                        <p>
                        The Commission has a separate Secretariat at New Delhi, consisting of about 300 officials, in a hierarchical set up.
                        </p>
                    </div>
                
                    <div class ="contact-area" id="contact">
                        <div class="text-part">
                            <h1>CONTACT US</h1>
                        </div>
            
                        <p>
                            For details of eligibility criteria or any other additional information related to electoral forms, kindly visit <a href="https://eci.gov.in">https://eci.gov.in</a>
                        </p>
                        
                        <p>
                            For any other technical feedback or issues on the portal kindly send your feedback to ECI Technical Support
                            Toll free Number :1800111950
                            Other Links
                        </p>
            
                        <p>
                            Election Commission of India
                            Chief Electoral Officer
                        </p>
                        
                        <p>
                            National Voters Service Portal © Copyright 2019. All Rights Reserved.
                        </p>
                    </div>
                </div>
            </div>
        </body>
    </html>
    
    <?php
        require "footer.php"
    ?>
        