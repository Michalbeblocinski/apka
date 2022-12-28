<?php 
    session_start();
    include_once "config.php";
    
    $agemin = $_POST['agemin'];
    $agemax = $_POST['agemax'];
    $unique=$_SESSION['unique_id'];
    $lol =0;
    $cs = 0;
    $val =0;
    $mine = 0;
    $hor =0;
    $comedia = 0;
    $det =0;
    $dram = 0;
    $trap =0;
    $rap = 0;
    $pop =0;
    $classic = 0;
    if(isset($_POST['lol'])){
        $lol = 1;
    }
    if(isset($_POST['cs'])){
        $cs = 1;
    }
    if(isset($_POST['valorant'])){
        $val = 1;
    }
    if(isset($_POST['minecraft'])){
        $mine = 1;
    }
    if(isset($_POST['horror'])){
        $hor = 1;
    }
   
    if(isset($_POST['komedia'])){
        $comedia = 1;
    }
    if(isset($_POST['kryminalny'])){
        $det = 1;
    }  
    if(isset($_POST['dramat'])){
        $dram = 1;
    }
    if(isset($_POST['trap'])){
        $trap = 1;
    }  
    if(isset($_POST['rap'])){
        $rap = 1;
    }
    if(isset($_POST['pop'])){
        $pop = 1;
    }
    if(isset($_POST['klasyczna'])){
        $classic = 1;
    }
   
   
    if(isset($_POST['sex'])){
        $sex = $_POST['sex'];
    }
   
    $_SESSION['i']=0;
    
    $INTELIGENCJA=0;
   
    
    if(!empty($agemin) && !empty($agemax) && !empty($sex) ){
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id != '{$unique}'AND gender = '{$sex}'AND( age >= '{$agemin}' AND age<='{$agemax}')
         AND (((lol = '{$lol}'AND lol != '{$INTELIGENCJA}' )OR (cs = '{$cs}' AND cs != '{$INTELIGENCJA}' )
         OR (val = '{$val}' AND val != '{$INTELIGENCJA}' )OR (mc = '{$mine}'AND mc != '{$INTELIGENCJA}' ))OR
         ((horror = '{$hor}' AND horror != '{$INTELIGENCJA}' )OR (comedy = '{$comedia}'  AND comedy != '{$INTELIGENCJA}' )
         OR (crime = '{$det}'   AND crime != '{$INTELIGENCJA}' )OR (drama = '{$dram}'  AND drama != '{$INTELIGENCJA}' ))
         OR((trap = '{$trap}' AND trap != '{$INTELIGENCJA}' )
         OR (rap = '{$rap}' AND rap != '{$INTELIGENCJA}' )OR (pop = '{$pop}' 
         AND pop != '{$INTELIGENCJA}' )OR (classic = '{$classic}'AND classic != '{$INTELIGENCJA}' )))");
        //var_dump(mysqli_error($conn));
        if(mysqli_num_rows($sql) > 0 ) {
             $_SESSION['countRows'] =mysqli_num_rows($sql);
             $ilosc=$_SESSION['countRows']-1;
            $row = mysqli_fetch_all($sql);
            
            $_SESSION['rows'] = $row;
            $_SESSION['znaleziono'] = "Znaleziono ".$ilosc." uzytkownikow";
            
            echo "Znaleziono ".$_SESSION['countRows']." uzytkownikow";
            

        } else {
            
            echo "Nie ma takich użytkowniów";
        }
        

    } else {
       
        echo "Wymagane wszystkie pola wypelnione";
    }
?>