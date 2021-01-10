<?php
    session_start();

    include('external_links.php');
    include('db_file/db_conn.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user signup || phd capital</title>
    <link rel="stylesheet" href="assets/signin.css">

    
</head>
<body>
    
    <div class="container" >



<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mt-3 text-center">Log in</h4>
	
	<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
	
        
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="u_l_email" class="form-control" placeholder="Email address" type="email" required>
    </div> 
    <br>

        
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input name="u_l_pass" class="form-control" placeholder="Type password" type="password" required>
    </div> 
    <br>
                                          
    <div class="form-group">
        <button type="submit" class="w-100 btn btn-lg btn-Success" name="u_l_submit"> Log in </button>
    </div> 

    <label style="display: flex; justify-content: center"><a href="#">Forgot password?</a></label>
    <br>
    <p class="text-center">Don't Have an account? <a href="signup.php">Create Account</a> </p>                                                                 
</form>
</article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->
    <?php
        if(isset($_POST['u_l_submit'])){
            if($con){
                $user_login_email = mysqli_real_escape_string($con, $_POST['u_l_email']);
                $user_login_pass = mysqli_real_escape_string($con, $_POST['u_l_pass']);

                $email_query = "select * from userdata where email='$user_login_email'";
                $query = mysqli_query($con, $email_query);

                $email_count = mysqli_num_rows($query);
                if($email_count){
                    $userdata = mysqli_fetch_assoc($query);
                    $db_pass = $userdata['pass'];
                    $pass_verify = password_verify($user_login_pass, $db_pass);

                    if($pass_verify){
                        $_SESSION['user_name'] = $userdata['name'];
                        $_SESSION['user_db_id'] = $userdata['id'];
                        $_SESSION['type'] = "user";

                        ?>
                        <script>
                            alert('Login succesful');
                            window.location.replace('home.php');
                        </script>
                        <?php
                    }
                    else{
                        ?>
                        <script>
                            alert('Incorrect Information');
                        </script>
                        <?php
                    }
                }
                else{
                    ?>
                    <script>
                        alert('You do not have an account. Create A new Account');
                        window.location.replace('signup.php');
                    </script>
                    <?php

                }
            }
            else{
                ?>
                <script>
                    alert('Network Problem, please try again later');
                </script>
                <?php
            }
        }
            

    ?>
</body>
</html>