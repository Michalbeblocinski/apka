<?php
  if(isset($_SESSION['unique_id'])){
?>
<nav class="navbar navbar-dark navbar-expand-lg ">
  <div class="container-fluid">
    <a class="navbar-brand" href="./main.php">
      <img src="./assets/logo_transparent.png" alt="findly logo" width="85" height="80" class="d-inline-block align-text-top" />
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
         <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle btnLogin" style="margin-right:20px;"  href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Jezyk
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Polski</a></li>
            <li><a class="dropdown-item" href="#">Angielski</a></li>
          </ul>
        </li>  -->
        <li class="nav-item">
          <a class="nav-link btnLogin" id='reg' style="margin-right:20px;" href="./editProfile.php">Moje konto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link btnLogin" id='reg' style="margin-right:20px;" href="./backend/logout.php">Wyloguj się</a>
        </li>
      </ul>    
    </div>
  </div>
</nav>
<?php
  }else {
?>
<nav class="navbar navbar-dark navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
      <img src="./assets/logo_transparent.png" alt="findly logo" width="85" height="85" class="d-inline-block align-text-top" />
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <!-- <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Jezyk
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Polski</a></li>
            <li><a class="dropdown-item" href="#">Angielski</a></li>
          </ul>
        </li>  -->
        <li class="nav-item">
          <a class="nav-link btnLogin" id='reg' style="margin-right:20px;" href="login.php">Zaloguj się</a>
        </li>
      </ul>    
    </div>
  </div>
</nav>
<?php
  }
?>