<?php
    session_start();

    include('../external_links.php');
    include('../db_file/db_conn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login || phd capital</title>
    <link rel="stylesheet" href="assets/css/index.css">
</head>
<body class="text-center">  
    <main class="form-signin">
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
        <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
        <label for="inputEmail" class="visually-hidden">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name='a_l_email' required autofocus ><br>

        <label for="inputPassword" class="visually-hidden">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name='a_l_pass' required>
        <div class="checkbox mb-3">
        <label>
            <input type="checkbox" value="remember-me" required> Remember me
        </label>
        </div>
        
        <button class="w-100 btn btn-lg btn-Success" type="submit" name="signin">Sign in</button>
        
        <label><a href="#">Forgot password?</a></label>
        
        <p class="mt-5 mb-3 text-muted">Don't have an Account?&nbsp;<a href="signup.php">Signup Here</a></p>
    </form>
    </main> 
    <?php
        if(isset($_POST['signin'])){
            if($con){
                $admin_login_email = mysqli_real_escape_string($con, $_POST['a_l_email']);
                $admin_login_pass = mysqli_real_escape_string($con, $_POST['a_l_pass']);
            
                $email_query = "select * from admin where email='$admin_login_email'";
                $query = mysqli_query($con, $email_query);
            
                $email_count = mysqli_num_rows($query);
                if($email_count){
                    $email_pass = mysqli_fetch_assoc($query);
                    $db_pass = $email_pass['pass'];
                    $pass_verify = password_verify($admin_login_pass, $db_pass);
                    
                    if($pass_verify){
                        $_SESSION['admin_name'] = $email_pass['name'];
                        $_SESSION['admin_db_id'] = $email_pass['id'];
                        $_SESSION['type'] = "admin";

                        ?>
                        <script>
                            alert('Login succesful');
                            window.location.replace('dashboard.php');
                        </script>
                        <?php
                    }
                    else{
                        ?>
                        <script>
                            alert('Incorrect information');
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