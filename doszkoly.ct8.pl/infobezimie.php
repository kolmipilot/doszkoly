<?php  session_start();
?>
<!DOCTYPE>

<html lang="pl">
<head>
<meta charset="utf-8" />
  <title>Poznaj lepiej informatyke!</title>
  <meta name="description" content="Poznaj tajniki infomrtayki w 7 klasie" />
  <meta name="keywords" content="informatyka, lekcja,komputer" />
  <link rel="stylesheet" href="style1.css" type="text/css"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <script src="timer.js"></script>
</head>

<body onload="odliczanie();">
<div id="container">
  
  <div id="tytul">

    <h1> Informatyka </h1>
    <h2> Witaj   <?php     echo $_SESSION['user'];    ?>    &nbsp;  &nbsp;           </h2>
    
    </div>
  
  <div class="zegar1">
    
    <div id="zegar"></div>
    
      
    </div>
    
    
    
  
  
    <nav>
      <ul class="menu">
        
        <li><a href="infobezimie.php">informatyka</a></li>
        <li><a href="podstawa-programowa">podstawa</a></li>
        <li><a href="lekcje-online">lekcje</a></li>
     
      </ul>
    </nav>
  
  <div class="text">
  
    Informatyka  nauka ścisła oraz techniczna zajmująca się przetwarzaniem informacji, w tym również technologiami przetwarzania informacji oraz technologiami wytwarzania systemów przetwarzających informacje. Zajmuje się rozwiązywaniem problemów obliczeniowych, opisem procesów algorytmicznych oraz tworzeniem programów komputerowych i częściowo sprzętu komputerowego (z wyłączeniem zagadnień materialnych i energetycznych). Informatyka początkowo stanowiła część matematyki, z czasem wyodrębniła się do oddzielnej dyscypliny. W języku polskim termin „informatyka” zaproponował w październiku 1968 r. Romuald Marczyński (w Zakopanem, na ogólnopolskiej konferencji podczas wykładu zatytułowanego „Informatyka, czyli maszyny matematyczne i przetwarzanie informacji”), na wzór francuskiego informatique i niemieckiego Informatik.
    </br>  
        
    
              
          
          </br>
    <img src="image/image1.png" alt="Informatyka" width="450" height="300">
  
  
  </div> 
  <div class="footer">
    <footer>
    2021 &copy;<a href="email.php" class="mailik"> Mateusz Kuzio</a>, strona jako projekt do szkoły
    </footer>
  </div>
</div>
</body>

</html>