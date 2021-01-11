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
    <?php
    // echo $_SESSION['user_name'];
    // echo $_SESSION['user_db_id'];
    $id = $_SESSION['user_db_id'];

    $q = "SELECT * FROM `user_balance` WHERE user_id='$id'";
    $r = mysqli_query($con, $q);
    $d = mysqli_fetch_assoc($r);


    ?>




    <div class="container center-container mt-3">
        <div class="row top-row">
            <div class="col-lg-3 col-12 bg-primary top-row-div">
                <div class="card" style="width: 18rem;">
                    <div class="card-parent-div">
                        <img src="assets/img/a.jpg" class="card-img-top img-card" alt="...">
                        <div class="centered">Monthly P/L</div>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            <span class="badge bg-success"><?php echo $d['m_pl']; ?></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-12 bg-success top-row-div">
                <div class="card" style="width: 18rem;">
                    <div class="card-parent-div">
                        <img src="assets/img/a.jpg" class="card-img-top img-card" alt="...">
                        <div class="centered">Today P/L</div>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            <span class="badge bg-success"><?php echo $d['t_pl']; ?></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-12 bg-warning top-row-div">
                <div class="card" style="width: 18rem;">
                    <div class="card-parent-div">
                        <img src="assets/img/a.jpg" class="card-img-top img-card" alt="...">
                        <div class="centered">E-Wallet</div>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            <span class="badge bg-success"><?php echo $d['e_w']; ?></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-12 bg-success top-row-div">
                <div class="card" style="width: 18rem;">
                    <div class="card-parent-div">
                        <img src="assets/img/a.jpg" class="card-img-top img-card" alt="...">
                        <div class="centered">Brokerage</div>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            <span class="badge bg-success"><?php echo $d['b_k']; ?></span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-12 bg-danger second-row-div">
                <a href="stock_data.php">
                    <div class="card second-row-card">
                        <img src="assets/img/a.jpg" class="card-img-top img-card" alt="...">
                        <div class="card-body">
                            <p class="card-text"></p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

</body>

</html>