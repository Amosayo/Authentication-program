
<?php
    include_once 'header.php';
    
?>

<?Php
    $FullName = $_SESSION['fullName'];
?>

<div class="container-fliud">
    <div class="container">
        <div class="row">
        <div class="col-md-3">
                         
         </div>

         <div class="col-md-6">
                <p> Hello <?php echo ($FullName); ?>
         </div>

         <div class="col-md-3">
                         
         </div>
        </div>
    </div>
</div>




<?php
    include_once 'footer.php';
    
?>