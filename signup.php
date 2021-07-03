
    <?php
    
    include_once 'header.php';
    ?>

    <?php

    require_once ("./Includes/component.inc.php");

    ?>

    <div class="container-fliud">
    <div class="container">
        <div class="row">
        <div class="col-md-3">
                         
         </div>

         <div class="card col-md-6 py-3">
         <form action="Includes/signup.inc.php" method="POST">
         <?PHP
            echo components("text","Full Name", "Enter Your Full Name", "fullName");
            echo components("text", "User Name", "Enter Your User Name", "userName");
            echo components("email", "Your Email", "Enter Your Email ID", "email");
            echo components("password", "Your Password", "Enter Your Password", "password");
            echo components("password", "Confirm Password", "Confirm Your Password", "confirmPassword");
         ?>
            <div class="row">
                <div class="col">
                <?php
                    echo btnComponents("submit", "btn btn-success", "Signup","Sign Up");
                ?>
                </div>
                <div class="col">
                
                </div>
            </div>
         </form>
            <?php
                                if(isset($_GET["error"])){
                                    
                                    if($_GET["error"]=="EmptyInputSignup"){
                                        
                                        echo "<p> Please fill all the fields. </p>";
                                    }
                                    
                                    else if ($_GET["error"]=="InvalidUserName"){
                                        
                                        echo "<p> Please choose a correct Username. </p>";
                                    }
                                    
                                    else if ($_GET["error"]=="InvalidEmail"){
                                        
                                        echo "<p> Please choose a correct Email ID.</p>";
                                    }
                                    
                                    else if ($_GET["error"]=="PasswordMatch"){
                                        
                                        echo "<p> Password doesn't Match, Please check. </p>";
                                    }  

                                    else if ($_GET["error"]=="none"){
                                            
                                        echo "<p> Congration You are have been sign up. </p>";
                                    }
                                }
                                    
            ?>
         </div>

         <div class="col-md-3">
                         
         </div>
        </div>
    </div>
     </div>


<?php
    include_once 'footer.php';
?>