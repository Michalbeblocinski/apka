<?php
 session_start();
 if(!isset($_SESSION['unique_id'])){
    header("Location: login.php");
  }
 include_once "header.php"; 
 include_once "./backend/config.php"; 
 
 ?>
<?php
    include './static/navbar.php';
     ?>
      
<body class="bodyHidden">
<?php         
         $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
          if(mysqli_num_rows($sql) > 0){
             $row = mysqli_fetch_assoc($sql);
     }  ?>

    <div class="cointainer ">
    
        <div class="row">
        <div class="content_main">
    <h2>Witaj, <?php echo $row["fname"]; ?>!</h2>
    <h2>Witaj, <?php echo $row["fname"]; ?>!</h2>
  </div>
            <div class="col-sm-12 col-md-3  smalldiv" ></div>
            <div class="col-sm-12 col-md-3  smalldiv"></div>
            <div class="col-sm-12 col-md-3  smalldiv"></div>
            <div class="col-sm-12 col-md-3  smalldiv"></div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-3 middle"></div>
            <div class="col-sm-12 col-md-3 middle buttondiv d-flex justify-content-center align-items-center">
            <div class="mainButt">
            <a class="buttonReg" href="./search.php" role="button"><span>Wyszukaj dopasowania</span>
        <div class="wave"></div>
        </a>
            </div>    
        </div>
            <div class="col-sm-12 col-md-3 middle buttondiv d-flex justify-content-center align-items-center">
            <div class="mainButt">
            <a class="buttonReg" href="./users.php" role="button"><span>Wiadomości</span>
        <div class="wave"></div>
        </a>
            </div>          </div>
            <div class="col-sm-12 col-md-3 middle"></div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-3 smalldiv "></div>
            <div class="col-sm-12 col-md-3 smalldiv "></div>
            <div class="col-sm-12 col-md-3 smalldiv "></div>
            <div class="col-sm-12 col-md-3 smalldiv "></div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
</body>

</html>