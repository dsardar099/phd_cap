<?php
    session_start();

?>
<nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
        <a class="navbar-brand">Hello <?php echo $_SESSION['user_name'] ?></a>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown link
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Account settings</a></li>
            <li style="background-color: #dddddd"><a class="dropdown-item" href="#">Log out</a></li>
            
          </ul>
        </li>
        </div>
    </nav>