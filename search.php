<?php 
session_start();
if(!isset($_SESSION['unique_id'])){
   header("Location: login.php");
 }
include_once "header.php"; 
$unique=$_SESSION['unique_id'];

$_SESSION['i'] = ((isset($_SESSION['i'])) ? $_SESSION['i'] : 0);
if(isset($_GET['add'])){
  $od =$_SESSION['countRows']-1;
  if($_SESSION['i'] < $od){
    $_SESSION['i']++;
  }
     
}
$znaleziono="Znajdz odpowiednia osobe!";
$information="informacje";
$aboutme="about me";
$preference="preferencje";
$fb="fb";
$twit="twitter";
$dc="dc";
$image="przy100.png";
$match="brak";

if(isset($_SESSION['rows'])){
  $sCountRows=$_SESSION['countRows'];

  if($sCountRows > 0 ){
    if($_SESSION['rows'][$_SESSION['i']][15]==1)
    {$plol="LoL";}
    else{
      $plol="";
    }
    if($_SESSION['rows'][$_SESSION['i']][16]==1)
    {$pcs="CS:GO";}
    else{
      $pcs="";
    }
    if($_SESSION['rows'][$_SESSION['i']][17]==1)
    {$pval="Valorant";}
    else{
      $pval="";
    }
    if($_SESSION['rows'][$_SESSION['i']][18]==1)
    {$pmc="Minecraft";}
    else{
      $pmc="";
    }
    if($_SESSION['rows'][$_SESSION['i']][19]==1)
    {$phor="Horror";}
    else{
      $phor="";
    }
    if($_SESSION['rows'][$_SESSION['i']][20]==1)
    {$pcom="Komedia";}
    else{
      $pcom="";
    }
    if($_SESSION['rows'][$_SESSION['i']][21]==1)
    {$pcry="Kryminalne";}
    else{
      $pcry="";
    }
    if($_SESSION['rows'][$_SESSION['i']][22]==1)
    {$pdra="Dramat";}
    else{
      $pdra="";
    }
    if($_SESSION['rows'][$_SESSION['i']][23]==1)
    {$ptra="Trap";}
    else{
      $ptra="";
    }
    if($_SESSION['rows'][$_SESSION['i']][24]==1)
    {$prap="Rap";}
    else{
      $prap="";
    }
    if($_SESSION['rows'][$_SESSION['i']][25]==1)
    {$ppop="Pop";}
    else{
      $ppop="";
    }
    if($_SESSION['rows'][$_SESSION['i']][26]==1)
    {$pcla="Klasyczna";}
    else{
      $pcla="";
    }
  $znaleziono=$_SESSION['znaleziono'];
  $information="Imie Nazwisko: "." ".$_SESSION['rows'][$_SESSION['i']][2].' '.$_SESSION['rows'][$_SESSION['i']][3];
  $aboutme="About me:"." ".$_SESSION['rows'][$_SESSION['i']][7];
   $preference="Preferencje:"." ".$plol.' '.$pcs.' '.$pval.' '.$phor.' '.$pcom.' '.$pcry.' '.$pdra.' '.$ptra.' '.$prap.' '.$ppop.' '.$pcla;
   $fb="Fb:"." ".$_SESSION['rows'][$_SESSION['i']][11];
  $twit="Twitter:"." ".$_SESSION['rows'][$_SESSION['i']][12];
  $dc="Discord:"." ".$_SESSION['rows'][$_SESSION['i']][13];
  $image=$_SESSION['rows'][$_SESSION['i']][6];
  $searchId=$_SESSION['rows'][$_SESSION['i']][1];
  $match=$_SESSION['rows'][$_SESSION['i']][1];
  

}
}



?>

<body class="bodyHiddenX">

  <?php
    include './static/navbar.php';
  ?>
     <div id="alertt" class="noshowme">
        <div style="text-align: center" class="alert   fade  show alert-success ">

        <button type="button" class="btn-close" onclick='disapear()'  aria-label="Close"></button>

        <strong>Sukces</strong> Polubiono
      </div>
    </div>
     
  <div class="cointainer text-center item-center">
    <div class="row">
      <div class="col-sm-12 col-md-4 d-flex align-items-center justify-content-center cards">
        <div class="filtrs simplecard">
          <h1>Filtry</h1>
          
          <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off" class="searchForm">
            <div class="error-txt text-center"></div>
           <div class=" simpleInformation">
              <p><?php echo $znaleziono ?></p>
            </div>
           
            <div class="form-group mb-2 mt-2">
              <label for="inputAge">Wiek min</label>
              <input
                type="number"
                class="form-control"
                id="inputAge"
                placeholder="Wiek"
                name="agemin"
              /> </div>
              <div class="form-group mb-2 mt-2">
              <label for="inputAge">Wiek max</label>
              <input
                type="number"
                class="form-control"
                id="inputAge"
                placeholder="Wiek"
                name="agemax"
              />
            </div>
            <div class="form-group mb-2 mt-2">
              <label for="inputGender">Plec</label>
              <select class="form-control" id="inputGender" name="sex">
                <option selected disabled>Plec</option>
                <option value="Mezczyzna">Mezczyzna</option>
                <option value="Kobieta">Kobieta</option>
                <option value="Inna">Inna</option>
              </select>
            </div>
            
            
            <h2 class="h4 mb-1">Gry</h2>
                  <p class="small text-muted font-italic">Wybierz gry które Cię interesują</p>
                  <ul class="list-group list-group-horizontal-xl mx-auto">
                      <li class="list-group-item rounded-0">
                          <div class="custom-control custom-checkbox">
                              <input class="custom-control-input" id="LoL" type="checkbox" name="lol" value="1">
                              <label class="cursor-pointer font-italic d-block custom-control-label" for="LoL">League of Legends</label>
                          </div>
                      </li>
                      <li class="list-group-item">
                          <div class="custom-control custom-checkbox">
                              <input class="custom-control-input" id="cS" type="checkbox" name="cs" value="1">
                              <label class="cursor-pointer font-italic d-block custom-control-label" for="cS">CS:GO</label>
                          </div>
                      </li>
                      <li class="list-group-item">
                          <div class="custom-control custom-checkbox">
                              <input class="custom-control-input" id="val" type="checkbox" name="valorant" value="1">
                              <label class="cursor-pointer font-italic d-block custom-control-label" for="val">Valorant</label>
                          </div>
                      </li>
                      <li class="list-group-item">
                          <div class="custom-control custom-checkbox">
                              <input class="custom-control-input" id="mc" type="checkbox" name="minecraft" value="1">
                              <label class="cursor-pointer font-italic d-block custom-control-label" for="mc">Minecraft</label>
                          </div>
                      </li>
                  </ul>
                  <h2 class="h4 mb-1">Filmy</h2>
                  <p class="small text-muted font-italic">Wybierz rodzaj filmu/ów który Cię interesuje/ą!</p>
                  <ul class="list-group list-group-horizontal-xl mx-auto">
                      <li class="list-group-item rounded-0">
                          <div class="custom-control custom-checkbox">
                              <input class="custom-control-input" id="horror" type="checkbox" name="horror" value="1">
                              <label class="cursor-pointer font-italic d-block custom-control-label" for="horror">Horrory</label>
                          </div>
                      </li>
                      <li class="list-group-item">
                          <div class="custom-control custom-checkbox">
                              <input class="custom-control-input" id="komedia" type="checkbox" name="komedia" value="1">
                              <label class="cursor-pointer font-italic d-block custom-control-label" for="komedia">Komedie</label>
                          </div>
                      </li>
                      <li class="list-group-item">
                          <div class="custom-control custom-checkbox">
                              <input class="custom-control-input" id="kryminal" type="checkbox" name="kryminalny" value="1">
                              <label class="cursor-pointer font-italic d-block custom-control-label" for="kryminal">Kryminalistyczne</label>
                          </div>
                      </li>
                      <li class="list-group-item">
                          <div class="custom-control custom-checkbox">
                              <input class="custom-control-input" id="dramat" type="checkbox" name="dramat" value="1">
                              <label class="cursor-pointer font-italic d-block custom-control-label" for="dramat">Dramat</label>
                          </div>
                      </li>
                  </ul>
                  <h2 class="h4 mb-1">Muzyka</h2>
                  <p class="small text-muted font-italic">Wybierz gatunek/i muzyczny który/e Cię interusje/ą!</p>
                  <ul class="list-group list-group-horizontal-xl mx-auto">
                      <li class="list-group-item rounded-0">
                          <div class="custom-control custom-checkbox">
                              <input class="custom-control-input" id="trap" type="checkbox" name="trap" value="1">
                              <label class="cursor-pointer font-italic d-block custom-control-label" for="trap">Trap</label>
                          </div>
                      </li>
                      <li class="list-group-item">
                          <div class="custom-control custom-checkbox">
                              <input class="custom-control-input" id="rap" type="checkbox" name="rap" value="1">
                              <label class="cursor-pointer font-italic d-block custom-control-label" for="rap">Rap</label>
                          </div>
                      </li>
                      <li class="list-group-item">
                          <div class="custom-control custom-checkbox">
                              <input class="custom-control-input" id="pop" type="checkbox" name="pop" value="1">
                              <label class="cursor-pointer font-italic d-block custom-control-label" for="pop">Pop/Kpop</label>
                          </div>
                      </li>
                      <li class="list-group-item">
                          <div class="custom-control custom-checkbox">
                              <input class="custom-control-input" id="klaszyczna" type="checkbox" name="klasyczna" value="1">
                              <label class="cursor-pointer font-italic d-block custom-control-label" for="klaszyczna">Klasyczna</label>
                          </div>
                      </li>
                  </ul>
            
          <div class="field button">
              <input type="submit" name="submit" value="Zapisz">
            </div>
          </form>
        </div>
      </div>
      <div class="indicador col-sm-12 col-md-8 d-flex align-items-center justify-content-center cards">
        <div class="search simplecard">
          <div class="row d-flex align-items-center justify-content-center topsearch">
            <div class="col-2 d-flex align-items-center justify-content-center cards">
              <form class="save">
                <input type="hidden" name="match" value="<?php echo $match ?>"/>
               
                <button type="submit" class="btn btn-primary like"  onclick="like()"><i class="fa-regular fa-thumbs-up"></i></button>
                
              </form>
            
            </div>
            <div class="col-8">
              <img src="./img/<?php echo $image ?>" alt="Girl in a jacket" width="100%" height="100%" class="img1"/>
            </div>
            <div class="col-2 d-flex align-items-center justify-content-center cards">
            <form action="search.php" method="get">
                <input type="submit" name="add" value="Next" />
              </form>
            </div>

            <div class="col-11 simpleInformation">
              <p><?php echo $information?></p>
            </div>
            <div class="col-5 simpleInformation half">
              <p><?php echo $aboutme ?></p>
            </div>
            <div class="col-5 simpleInformation half">
              <p><?php echo $preference ?></p>
            </div>
            <div class="col-11 simpleInformation">
              <p><?php echo $fb ?></p>
            </div>
            
            <div class="col-11 simpleInformation">
              <p><?php echo $twit ?></p>
            </div>
            <div class="col-11 simpleInformation">
              <p><?php echo $dc ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  

  <script >
    
    function disapear(){
      var list2;
    list2 = document.getElementById("alertt");
    console.log("noshow");
   list2.classList.remove('showme');
   list2.classList.add("noshowme");

    }
    
  </script>
  <script src="js/search.js"></script>
  <script src="js/save.js"></script>
  <script src="https://kit.fontawesome.com/cb0b14c6f3.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
</body>

</html>