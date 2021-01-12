<?php
    session_start();

    $nav_name = explode(" ", $_SESSION['user_name']);

?>
<nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
        <a class="navbar-brand userName">Hello <?php echo $nav_name[0] ?></a>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Your Account&nbsp;&nbsp;&nbsp; 
            
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Edit Account Info</a></li>
              
            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#changepass">Change Password</a></li>
              
            <li style="background-color: #dddddd"><a class="dropdown-item" href="#">Log out</a></li>
            
          </ul>
        </li>
        </div>
    </nav>