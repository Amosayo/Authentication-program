<?php 

    // Function to check if the input box is empty 

    function EmptyInputSignup($FullName, $UserName, $UsersEmail, $Password, $ConfirmPassword){

        $result;

        if(empty ($FullName) || empty ($UserName) || empty ($UsersEmail) || empty ($Password) || empty ($ConfirmPassword)){

            $result = true;
            
        }else{
            
            $result = false;
            
        }
        return $result;
        
    }

    //Function to check for vaild User Name.
    
    function InvalidUserName($UserName){
            
        $result;
        
        if(!preg_match("/^[a-zA-Z0-9]*$/", $UserName)){
            
            $result = true;
        }
        
        else{
            
            $result = false;
        }
        
        return $result;
    }
    
    // Function to check for vaild Email.
    function InvalidEmail($UsersEmail){
            
        $result;
        
        if(!filter_var($UsersEmail, FILTER_VALIDATE_EMAIL)){
            
            $result = true;
        }
            else{
                
                $result = false;
            }
                return $result;
    }

    // Function to check if the two Password match. 
    function PasswordMatch($Password, $ConfirmPassword){
            
        $result;
        
        if($Password !== $ConfirmPassword){
            
            $result = true;
        }
            else{
                
                $result = false;
                
            }
        
                return $result;
    }


     // Login Function 

     function EmptyInputLogin($LoginUserName, $LoginPassword){
                
        $result;
        
        if(empty($LoginUserName) || empty($LoginPassword)){
            
            $result = true;
        }else
        {
            $result = false;
        }
        
            return $result;
    }

    function loginuser($UserName, $Password, $LoginUserName, $LoginPassword){

        if(($LoginUserName === $UserName) && ($LoginPassword === $Password)){

            session_start();
                    
            $_SESSION["loginuserName"] = $LoginUserName["loginuserName"];
                    
            $_SESSION["loginpassword"] = $LoginPassword["loginpassword"];
                    
            header("location: ../profile.php");
            exit();

        }else

        {
            echo "<p> User Name or Password not correct. </p>";
        }

    }