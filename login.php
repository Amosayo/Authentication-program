
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
         <form action=" Includes/login.inc.php" method="POST">
         <?PHP
            echo components("text", "User Name", "Enter Your User Name", "loginuserName");
            echo components("password", "Your Password", "Enter Your Password", "loginpassword");
         ?>
            <div class="row">
                <div class="col">
                <?php
                    echo btnComponents("submit", "btn btn-success", "Login","Login");
                ?>
                </div>
                <div class="col">
                
                </div>
            </div>
         </form>

                    <?php
                        
                            if(isset($_GET["error"])){
                                        
                                if($_GET["error"]=="EmptyInputLogin"){

                                    echo "<p> Please fill in your login details. </p>";
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