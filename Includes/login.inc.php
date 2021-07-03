
<?php

    require_once 'function.inc.php';

    if(isset($_POST["Login"])){

        //Start new or resume existing session.
        session_start();

        $_SESSION['loginuserName'] = $_POST['loginuserName'];
        $_SESSION['loginpassword'] = $_POST['loginpassword'];


        // The Varaiable store,
        $UserName = $_SESSION['userName'];
        $Password = $_SESSION['password'];
        $LoginUserName = $_SESSION['loginuserName'];
        $LoginPassword = $_SESSION['loginpassword'];


        if(EmptyInputLogin($LoginUserName, $LoginPassword) !== false){
                
            header("location: ../login.php?error=EmptyInputLogin");
            exit();
        }  
    
        loginuser($UserName, $Password, $LoginUserName, $LoginPassword);
}
    else{
        
        header("location: ../login.php");
        exit();
    }
    