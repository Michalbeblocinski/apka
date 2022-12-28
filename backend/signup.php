<?php 
    session_start();
    include_once "config.php";

    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, $_POST['pass']);
    

    if(!empty($email) && !empty($pass) && !empty($fname)){
        //email valid
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            //if email is valid
            $sql = mysqli_query($conn, "SELECT email FROM users WHERE email = '{$email}'");
            if(mysqli_num_rows($sql) > 0){
                echo "$email - Taki email juz istnieje";
            } 
            else {
                $status = "Active now";  
                $tmp = true;
                while ($tmp) {
                    $random_id =rand(time(),10000000);
                    $sql3 = mysqli_query($conn, "SELECT unique_id FROM users WHERE unique_id = '{$random_id}'");
                    if(mysqli_num_rows($sql3) > 0){
                        
                    } else{
                        $tmp=false;
                    }
                            }

                $encrypt_pass = md5($pass);           
                $sql2 = mysqli_query($conn, "INSERT INTO users (unique_id, fname, email, password,  status) VALUES ({$random_id}, '{$fname}', '{$email}', '{$encrypt_pass}', '{$status}')");
                if($sql2){
                    // if data inserted
                    $sql3 = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
                    if(mysqli_num_rows($sql3) > 0) {
                        $row = mysqli_fetch_assoc($sql3);
                        $_SESSION['unique_id'] = $row['unique_id'];
                        echo "success"; // user id for another php files
                    }
                }
            }
        }   else {
            echo "Email $email jest nieprawidłowy";
        }

    } else {
        echo "Wymagane wszystkie pola wypelnione";
    }
    
?>