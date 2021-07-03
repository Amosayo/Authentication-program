
<?php

    require_once 'function.inc.php';

    if(isset($_POST["Signup"])){
        
        // Start new or resume existing session.
        session_start();

        $_SESSION['fullName'] = $_POST['fullName'];
        $_SESSION['userName'] = $_POST['userName'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['password'] = $_POST['password'];
        $_SESSION['confirmPassword'] = $_POST['confirmPassword'];

        header("location: ../index.php");
        //echo "<p> Congration You are have been sign up. </p>";

        // The Varaiable store,
        $FullName = $_SESSION['fullName'];
        $UserName = $_SESSION['userName'];
        $UsersEmail = $_SESSION['email'];
        $Password = $_SESSION['password'];
        $ConfirmPassword = $_SESSION['confirmPassword'];

        if(EmptyInputSignup($FullName, $UserName, $UsersEmail, $Password, $ConfirmPassword) !== false){
                
            header("location: ../signup.php?error=EmptyInputSignup");
            exit();
        }   

        if(InvalidUserName($UserName) !==false){
            header("location: ../signup.php?error=InvalidUserName");
            exit();
        }
    
        if(InvalidEmail($UsersEmail) !== false){ 
            header("location: ../signup.php?error=InvalidEmail");
            exit();
        }
    
        if(PasswordMatch($Password, $ConfirmPassword) !== false){
            header("location: ../signup.php?error=PasswordMatch");
            exit();
        }

        echo "<p> Congration You are have been sign up. </p>";
        
    }

    else{
                
        header("location: ../signup.php");
        exit();
    }