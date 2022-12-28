<?php
session_start();
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
        <div class="row">
            <div class="col-sm-12 col-md-6 co12" >
                <div class="wrapper">
                    <section class="users">
                      <header class="header-users">
                        <div class="content">
                          
                          <img src="" alt="">
                          <div class="details">
                            <span>adam malysz</span>
                            <p>dostepny</p>
                          </div>
                        </div>
                        <a href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout">Logout</a>
                      </header>
                      <div class="search">
                        <span class="text">Select an user to start chat</span>
                        <input type="text" placeholder="Enter name to search...">
                        <button><i class="fas fa-search"></i></button>
                      </div>
                      <div class="users-list">
                  
                      </div>
                    </section>
                  </div>
            
            
            </div>
            <div class="col-sm-12 col-md-6 co12" >
                <div class="wrapper">
                    <section class="chat-area">
                      <header>
                        
                        <a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
                        <img src="" alt="">
                        <div class="details">
                          <span>adam malysz</span>
                          <p>dostepny</p>
                        </div>
                      </header>
                      <div class="chat-box">
                
                      </div>
                      <form action="#" class="typing-area ">
                        <input type="text" class="incoming_id" name="incoming_id" value="adam" hidden>
                        <input type="text" name="message" class="input-field" placeholder="Napisz wiadomość..." autocomplete="off">
                        <button><i class="fa-solid fa-paper-plane"></i></button>
                      </form>
                    </section>
                  </div>


            </div>
        </div>
    </div>
    </div>

   
  
    <script src="javascript/chat.js"></script>
    <script src="https://kit.fontawesome.com/cb0b14c6f3.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
  
  </body>
</html>