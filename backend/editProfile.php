<?php 

session_start();
    include_once "config.php";

    $unique_id = $_SESSION['unique_id'];

    // img 

    if(isset($_FILES['file']) && is_uploaded_file($_FILES['file']['tmp_name'])){
        //if file is uploaded
        $img_name = $_FILES['file']['name']; //getting uploaded img name
        $img_type = $_FILES['file']['type']; // getting uploaded img type
        $tmp_name = $_FILES['file']['tmp_name']; //temp name for save/move file to folder
        //getting img extension
        $img_explode = explode('.', $img_name);
        $img_ext = end($img_explode); //extension of uploaded img
        $extensions = ['png', 'jpg', 'jpeg']; 
        
        if(in_array($img_ext, $extensions) === true){
            //if uploaded img is valid 
            $time=time();
            $new_img_name = $time.$img_name;
            move_uploaded_file($tmp_name, "../img/".$new_img_name);
            $sql = mysqli_query($conn, "UPDATE users SET img='{$new_img_name}' WHERE unique_id = '{$unique_id}'");
            echo "success";
            
        } else {  
            echo "Zly format pliku! Prawidlowe to png/ipg/jpeg";
        }
  
    } 
    
    // img

    // About me

    $sql3 = mysqli_query ($conn, "SELECT about FROM users WHERE unique_id = '{$unique_id}'");
    $aboutDB = mysqli_fetch_assoc($sql3);
    $aboutMe = mysqli_real_escape_string($conn, $_POST['aboutMe']);
    if($aboutMe != array_values($aboutDB)[0]){
            //echo $aboutMe;
            //echo array_values($aboutDB)[0];
            $sql2 = mysqli_query($conn, "UPDATE users SET about='{$aboutMe}' WHERE unique_id = '{$unique_id}'");
            echo "success";
        } 
    
    // About me

    // Email
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $emailDB_sql = mysqli_query($conn, "SELECT email FROM users WHERE unique_id = '{$unique_id}'");
    $emailDB =  mysqli_fetch_assoc($emailDB_sql);
    if($email != $emailDB['email']){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            //if email is valid
            $isEmailInBase = mysqli_query($conn, "SELECT email FROM users WHERE email = '{$email}'");
            if(mysqli_num_rows($isEmailInBase) > 0 ) {
                echo "$email - Taki email juz istnieje";
            } else {
                    $sql_email_up = mysqli_query($conn,"UPDATE users SET email='{$email}' WHERE unique_id = '{$unique_id}'");
                    echo "success";
            }
        } else {
            echo "Email $email jest nieprawidlowy";
        }
        
    }

    //First Name
    $fname = mysqli_real_escape_string($conn, $_POST['inputName']);
    $fnameDB_sql = mysqli_query($conn, "SELECT fname FROM users WHERE unique_id = '{$unique_id}'");
    $fnameDB =  mysqli_fetch_assoc($fnameDB_sql);
    if ($fname != $fnameDB['fname'])
    {
        $sql_fname_up = mysqli_query($conn, "UPDATE users SET fname='{$fname}' WHERE unique_id ='{$unique_id}'");
        echo "success";
    }
    //Last Name
    $lname = mysqli_real_escape_string($conn, $_POST['inputLastName']);
    $lnameDB_sql = mysqli_query($conn, "SELECT lname FROM users WHERE unique_id = '{$unique_id}'");
    $lnameDB =  mysqli_fetch_assoc($lnameDB_sql);
    if ($lname != $lnameDB['lname'])
    {
        $sql_lname_up = mysqli_query($conn, "UPDATE users SET lname='{$lname}' WHERE unique_id ='{$unique_id}'");
        echo "success";
    }
    //Age
    $age = mysqli_real_escape_string($conn, $_POST['inputAge']);
    $ageDB_sql = mysqli_query($conn, "SELECT age FROM users WHERE unique_id = '{$unique_id}'");
    $ageDB =  mysqli_fetch_assoc($ageDB_sql);
    if ($age != $ageDB['age'])
    {
        $sql_age_up = mysqli_query($conn, "UPDATE users SET age='{$age}' WHERE unique_id ='{$unique_id}'");
        echo "success";
    }
    //Age
    $gender = mysqli_real_escape_string($conn, $_POST['inputGender']);
    $genderDB_sql = mysqli_query($conn, "SELECT gender FROM users WHERE unique_id = '{$unique_id}'");
    $genderDB =  mysqli_fetch_assoc($genderDB_sql);
    if ($gender != $genderDB['gender'])
    {
        $sql_gender_up = mysqli_query($conn, "UPDATE users SET gender='{$gender}' WHERE unique_id ='{$unique_id}'");
        echo "success";
    }

    //City
    $city = mysqli_real_escape_string($conn, $_POST['inputCity']);
    $cityDB_sql = mysqli_query($conn, "SELECT city FROM users WHERE unique_id = '{$unique_id}'");
    $cityDB =  mysqli_fetch_assoc($cityDB_sql);
    if ($city != $cityDB['city'])
    {
        $sql_city_up = mysqli_query($conn, "UPDATE users SET city='{$city}' WHERE unique_id ='{$unique_id}'");
        echo "success";
    }

    //fb
    $fb = mysqli_real_escape_string($conn, $_POST['inputFb']);
    $fbDB_sql = mysqli_query($conn, "SELECT fb FROM users WHERE unique_id = '{$unique_id}'");
    $fbDB =  mysqli_fetch_assoc($fbDB_sql);
    if ($fb != $fbDB['fb'])
    {
        $fbUrlCheck = '/^(https?:\/\/)?(www\.)?facebook.com\/[a-zA-Z0-9(\.\?)?]/';
	    $secondCheck = '/home((\/)?\.[a-zA-Z0-9])?/';
	
	    $validUrl = $fb;
	
	    if(preg_match($fbUrlCheck, $validUrl) == 1 && preg_match($secondCheck, $validUrl) == 0) {

            $sql_fb_up = mysqli_query($conn, "UPDATE users SET fb='{$fb}' WHERE unique_id ='{$unique_id}'");
            echo "success";

	    } else {
		    echo 'Link do facebooka jest nieprawidlowy';
	    }   
    }

    //Dc
    $dc = mysqli_real_escape_string($conn, $_POST['inputDc']);
    $dcDB_sql = mysqli_query($conn, "SELECT dc FROM users WHERE unique_id = '{$unique_id}'");
    $dcDB =  mysqli_fetch_assoc($dcDB_sql);
    if ($dc != $dcDB['dc'])
    {
        $sql_dc_up = mysqli_query($conn, "UPDATE users SET dc='{$dc}' WHERE unique_id ='{$unique_id}'");
        echo "success";
    }
    //fb
    $twitter = mysqli_real_escape_string($conn, $_POST['inputTt']);
    $twitterDB_sql = mysqli_query($conn, "SELECT twitter FROM users WHERE unique_id = '{$unique_id}'");
    $twitterDB =  mysqli_fetch_assoc($twitterDB_sql);
    if ($twitter != $twitterDB['twitter'])
    {
        $ttUrlCheck = '/^(https?:\/\/)?(www\.)?twitter.com\/[a-zA-Z0-9(\.\?)?]/';
	    $secondCheck = '/home((\/)?\.[a-zA-Z0-9])?/';
	
	    $validUrl = $twitter;
	
	    if(preg_match($ttUrlCheck, $validUrl) == 1 && preg_match($secondCheck, $validUrl) == 0) {

            $sql_twitter_up = mysqli_query($conn, "UPDATE users SET twitter='{$twitter}' WHERE unique_id ='{$unique_id}'");
            echo "success";

	    } else {
		    echo 'Link do twittera jest nieprawidlowy';
	    }   
    }
    // Checkboxy
    $checkboxy_zmiana = 0; 

    if(isset($_POST['checkLOL'])){
        $lol = 1;
        $sqlLOL = mysqli_query($conn, "UPDATE users SET lol='{$lol}' WHERE unique_id ='{$unique_id}'");
        $checkboxy_zmiana = 1 ;
    } else {
        $lol = 0;
        $sqlLOL = mysqli_query($conn, "UPDATE users SET lol='{$lol}' WHERE unique_id ='{$unique_id}'");
    }

    if(isset($_POST['checkCS'])){
        $cs = 1;
        $sqlcs = mysqli_query($conn, "UPDATE users SET cs='{$cs}' WHERE unique_id ='{$unique_id}'");
        $checkboxy_zmiana = 1 ;
    } else {
        $cs = 0;
        $sqlcs = mysqli_query($conn, "UPDATE users SET cs='{$cs}' WHERE unique_id ='{$unique_id}'");
    }

    if(isset($_POST['checkVAL'])){
        $val = 1;
        $sqlval = mysqli_query($conn, "UPDATE users SET val='{$val}' WHERE unique_id ='{$unique_id}'");
        $checkboxy_zmiana = 1 ;
    } else {
        $val = 0;
        $sqlval = mysqli_query($conn, "UPDATE users SET val='{$val}' WHERE unique_id ='{$unique_id}'");
    }


    if(isset($_POST['checkMC'])){
        $mc = 1;
        $sqlmc = mysqli_query($conn, "UPDATE users SET mc='{$mc}' WHERE unique_id ='{$unique_id}'");
        $checkboxy_zmiana = 1 ;
    } else {
        $mc = 0;
        $sqlmc = mysqli_query($conn, "UPDATE users SET mc='{$mc}' WHERE unique_id ='{$unique_id}'");
    }


    if(isset($_POST['checkHorror'])){
        $horror = 1;
        $sqlhorror = mysqli_query($conn, "UPDATE users SET horror='{$horror}' WHERE unique_id ='{$unique_id}'");
        $checkboxy_zmiana = 1 ;
    } else {
        $horror = 0;
        $sqlhorror = mysqli_query($conn, "UPDATE users SET horror='{$horror}' WHERE unique_id ='{$unique_id}'");
        
    }


    if(isset($_POST['checkComedy'])){
        $comedy = 1;
        $sqlcomedy = mysqli_query($conn, "UPDATE users SET comedy='{$comedy}' WHERE unique_id ='{$unique_id}'");
        $checkboxy_zmiana = 1 ;
    } else {
        $comedy = 0;
        $sqlcomedy = mysqli_query($conn, "UPDATE users SET comedy='{$comedy}' WHERE unique_id ='{$unique_id}'");
    }



    if(isset($_POST['checkCrime'])){
        $crime = 1;
        $sqcrimeL = mysqli_query($conn, "UPDATE users SET crime='{$crime}' WHERE unique_id ='{$unique_id}'");
        $checkboxy_zmiana = 1 ;
    } else {
        $crime = 0;
        $sqcrimeL = mysqli_query($conn, "UPDATE users SET crime='{$crime}' WHERE unique_id ='{$unique_id}'");
    }
    if(isset($_POST['checkDrama'])){
        $drama = 1;
        $sqldrama = mysqli_query($conn, "UPDATE users SET drama='{$drama}' WHERE unique_id ='{$unique_id}'");
        $checkboxy_zmiana = 1 ;
    } else {
        $drama = 0;
        $sqldrama = mysqli_query($conn, "UPDATE users SET drama='{$drama}' WHERE unique_id ='{$unique_id}'");
    }
    
    if(isset($_POST['checkTrap'])){
        $trap = 1;
        $sqltrap = mysqli_query($conn, "UPDATE users SET trap='{$trap}' WHERE unique_id ='{$unique_id}'");
        $checkboxy_zmiana = 1 ;
    } else {
        $trap = 0;
        $sqltrap = mysqli_query($conn, "UPDATE users SET trap='{$trap}' WHERE unique_id ='{$unique_id}'");
    }

    if(isset($_POST['checkRap'])){
        $rap = 1;
        $sqlrap = mysqli_query($conn, "UPDATE users SET rap='{$rap}' WHERE unique_id ='{$unique_id}'");
        $checkboxy_zmiana = 1 ;
    } else {
        $rap =0;
        $sqlrap = mysqli_query($conn, "UPDATE users SET rap='{$rap}' WHERE unique_id ='{$unique_id}'");
    }
    if(isset($_POST['checkPop'])){
        $pop = 1;
        $sqlpop = mysqli_query($conn, "UPDATE users SET pop='{$pop}' WHERE unique_id ='{$unique_id}'");
        $checkboxy_zmiana = 1 ;
    } else {
        $pop = 0;
        $sqlpop = mysqli_query($conn, "UPDATE users SET pop='{$pop}' WHERE unique_id ='{$unique_id}'");
    }
    if(isset($_POST['checkClassic'])){
        $classic = 1;
        $sqlclassic = mysqli_query($conn, "UPDATE users SET classic='{$classic}' WHERE unique_id ='{$unique_id}'");
        $checkboxy_zmiana = 1 ;
    } else {
        $classic = 0;
        $sqlclassic = mysqli_query($conn, "UPDATE users SET classic='{$classic}' WHERE unique_id ='{$unique_id}'");
    }

    if ($checkboxy_zmiana === 1){
        //echo " Preferencje zaaktualizowane";
    }
?>