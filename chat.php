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
                            <section class="chat-area">
                                <header>
                                    <?php 
                                    $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
                                    $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$user_id}");
                                    if(mysqli_num_rows($sql) > 0){
                                        $row = mysqli_fetch_assoc($sql);
                                    }else{
                                        header("location: users.php");
                                    }
                                    ?>
                                <a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
                                <img src="./img/<?php echo $row['img']; ?>" alt="avatar">
                                <div class="details">
                                <span><?php echo $row['fname']. " " . $row['lname'] ?></span>
                                <p><?php echo $row['status']; ?></p>
                                </div>
                            </header>
                            <div class="chat-box">
                        
                            </div>
                            <form action="#" class="typing-area ">
                                <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
                                <input type="text" name="message" class="input-field" placeholder="Napisz wiadomość..." autocomplete="off">
                                <button><i class="fa-solid fa-paper-plane"></i></button>
                            </form>
                            </section>
                        </div>

            </div>
    </div>

   
  
    <script src="js/chat.js"></script>
    <script src="https://kit.fontawesome.com/cb0b14c6f3.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
  
  </body>
</html>