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
    <title>phd capital</title>
    
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
        
        .c_style{
            height: 40px;
            margin-right: 10px;
            margin-top: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        a{
            color: #fff;
        }
        a:hover{
            color: #fff;
        }
    </style>
    
</head>
<body class="d-flex h-100 text-center text-white bg-dark">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
      <header class="mb-auto">
        <div>
          <h3 class="float-md-start mb-0">PHD Capital</h3>
          <nav class="nav nav-masthead justify-content-center float-md-end">
            <button type="button" class="btn btn-outline-success c_style"><a class="nav-link" href="signin.php">Log in</a></button>
            <button type="button" class="btn btn-outline-success c_style" ><a class="nav-link" href="signup.php">Sign up</a></button>
            
          </nav>
        </div>
      </header>

      <main class="px-3">
        <h1>Cover page.</h1>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
        <p class="lead">
          <a href="#" class="btn btn-lg btn-secondary fw-bold border-white bg-white" style="color: green;font-family: 'Josefin Sans', sans-serif;">Learn more</a>
        </p>
      </main>

      <footer class="mt-auto text-white-50">
        <p></p>
      </footer>
    </div>


</body>
</html>