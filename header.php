 
 <?PHP
    // Start new or resume existing session.
        session_start();
        
    ?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- All CSS file-->
    <link rel="stylesheet" type="text/css" href="Resources/Vendor/Css/Font_Aweson.css">
    <link rel="stylesheet" type="text/css" href="Resources/Vendor/Css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="Resources/Vendor/Css/Custom_stylesheet.css">
    <title>Week 2 Task</title>
</head>

<body>

    <!--first Navigation------->
    <nav class="navbar-expand-md navbar-light bg-light">
      <div class="container">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
        <span class="navbar-text">SideHustle Week 2 Task.</span>
      </div>
      <div class="col">
        <div class="d-flex justify-content-end">
        <ul class="navbar-nav">
        <span class="navbar-text">PHP Authentication Program, Using Session to Store Users data.</span>
        </ul>
      </div>
    </div>
      </div>
    </div>
    </div>
    </nav>

    <!---logo secetion------->
    <nav class="navbar navbar-expand-md">
      <div class="container">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                  <a class="navbar-brand" href="#"><h1><i class="fas fa-calendar-week"></i>WEEK 2 </h1></a>
                </div>
                <div class="col"></div>
            </div>
        </div>
      </div>
    </nav>

<nav class="navbar-expand-md navbar-light text-center mb-3" style="background-color: #e3f2fd;">
    <div class="container-fluid">
    <div class="container">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <?php
            if(isset($_SESSION['loginuserName'])){

              echo"<li class=\"nav-item\"><a class=\"nav-link\" href='profile.php'>Profile</a> </>";
              echo"<li class=\"nav-item\"><a class=\"nav-link\" href='Includes/logout.inc.php'>Log out</a> </>";

            }
            else{

              echo"<li class=\"nav-item\"><a class=\"nav-link active\" aria-current=\"page\" href=\"index.php\">Home</a></li>";
              echo"<li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">About Us</a> </>";
              echo"<li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">Blog</a></>";
              echo"<li class=\"nav-item\"><a class=\"nav-link\" href='signup.php'>Sign Up</a></li>";
              echo" <li class=\"nav-item\"><a class=\"nav-link\" href='login.php'>Login</a></li>";

            }
      ?>  
      </ul>
    </div>
    </div>
 </nav>

 