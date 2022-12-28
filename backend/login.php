<?php 

session_start();
    include_once "config.php";

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, $_POST['password']);
    
    if(!empty($email) && !empty($pass)){
        //l email is correct
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
        if(mysqli_num_rows($sql) > 0 ) {
            $row = mysqli_fetch_assoc($sql);
            $user_pass = md5($pass);
            $enc_pass = $row['password'];
            if($user_pass === $enc_pass) {
                
                $status = "Active now";  
                $sql = mysqli_query($conn, "UPDATE users SET status='{$status}' WHERE unique_id = {$row['unique_id']}");
                if($sql) {
                    $_SESSION['unique_id'] = $row['unique_id'];
                    echo "success"; // user id for another php files
                }
                
            }
        } else {
            echo "Niepoprawny email lub haslo";
        }
    } 
    else {
        echo "Wymagane wszystkie pola wypelnione";
    }
?>