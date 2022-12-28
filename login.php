<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: main.php");
  }
?>

<?php include_once "header.php"; ?>

<body class="bodyHidden">

<div class="loginStyle">
  <div class="wrapper">
    <section class="form login">
      <header><h1>Findly</h1></header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-txt"></div>
        <div class="field input">
          <label>Email</label>
          <input type="text" name="email" placeholder="Wprowadź swój email">
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Wprowadź swoje hasło">
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Continue to Chat">
        </div>
      </form>
      <div class="link">Not yet signed up? <a href="index.php">Signup now</a></div>
    </section>
  </div>
</div>
  
  <script src="js/login.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
</body>
</html>
