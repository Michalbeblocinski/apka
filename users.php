<?php
session_start();
include_once "backend/config.php";
if(!isset($_SESSION['unique_id'])){
   header("Location: login.php");
 }
include_once "header.php"; ?>
<body>
<?php
    include './static/navbar.php';
     ?>
     <div class="all">
            <div class="cointainer">
                        <div class="wrapper">
                            <section class="users">
                            <header class="header-users">
                                <div class="content">
                                <?php 
                                    $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
                                    if(mysqli_num_rows($sql) > 0){
                                    $row = mysqli_fetch_assoc($sql);
                                    }
                                ?>
                                <img src="./img/<?php echo $row['img']; ?>" alt="avatar">
                                <div class="details">
                                    <span><?php echo $row['fname']. " " . $row['lname'] ?></span>
                                    <p><?php echo $row['status']; ?></p>
                                </div>
                                </div>
                                
                            </header>
                            <div class="search">
                                <span class="text">Wybierz użytkownika do chatu</span>
                                <input type="text" placeholder="Enter name to search...">
                                <button><i class="fas fa-search"></i></button>
                            </div>
                                <div class="users-list">
                            
                                </div>
                            </section>
                        </div>
            </div>
     </div>

   
  
    <script src="./js/users.js"></script>
    <script src="https://kit.fontawesome.com/cb0b14c6f3.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
  
  </body>
</html>