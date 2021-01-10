<?php
    session_start();

    include('external_links.php');
    include('db_file/db_conn.php');
    include('commonFILES/user_navbar.php');
include('commonFILES/user_acc_modal.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="assets/home.css">
    <style>
       
        
    </style>
</head>
<body>
    
   
    

    <div class="container center-container">
        <div class="row top-row">
            <div class="col-lg-3 col-12 bg-primary top-row-div">
                <div class="card card_radius" style="width: 18rem;">
                    <div class="card-parent-div">
                        <img src="assets/img/a.jpg" class="card-img-top img-card" alt="...">
                        <div class="centered">Monthly P/L</div>
                    </div>                  
                    <div class="card-body">
                        <p class="card-text">
                            <span class="badge bg-success">900000</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-12 bg-success top-row-div">
                <div class="card card_radius" style="width: 18rem;">
                    <div class="card-parent-div">
                        <img src="assets/img/a.jpg" class="card-img-top img-card" alt="...">
                        <div class="centered">Today P/L</div>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            <span class="badge bg-success">900000</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-12 bg-warning top-row-div">
                <div class="card card_radius" style="width: 18rem;">
                    <div class="card-parent-div">
                        <img src="assets/img/a.jpg" class="card-img-top img-card" alt="...">
                        <div class="centered">E-Wallet</div>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            <span class="badge bg-success">900000</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-12 bg-success top-row-div">
                <div class="card card_radius" style="width: 18rem;">
                    <div class="card-parent-div">
                        <img src="assets/img/a.jpg" class="card-img-top img-card" alt="...">
                        <div class="centered">Brokerage</div>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            <span class="badge bg-success">900000</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-12 bg-danger second-row-div">
                <a href="stock_data.php">
                    <div class="card card_radius second-row-card" >
                        <img src="assets/img/a.jpg" class="card-img-top img-card" alt="...">
                        <div class="card-body">
                            <p class="card-text"></p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    
    
    <?php
    if(isset($_POST['check'])){
        check_pass();
    }
    
    function check_pass(){
        ?>
            <script>
                alert('aaaa');
            </script>
        <?php
        $h_current_pass = mysqli_real_escape_string($con, $_POST['h_c_pass']);
        
        $encryp_h_current_pass = password_hash($h_current_pass, PASSWORD_BCRYPT);
        if($encryp_h_current_pass == $home_pass){
            ?>
            <script>
                document.getElementById("current_pass").style.display = 'none';
                document.getElementById("inputNPass").style.display = 'block';
            </script>
            <?php
        }
        
    }
                           
    


?>
    
</body>
</html>