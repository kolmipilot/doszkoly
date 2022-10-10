<?php  session_start();
?>
<!DOCTYPE>

<html lang="pl">
<head>
<meta charset="utf-8" />
  <title>Poznaj lepiej informatyke!</title>
  <meta name="description" content="Poznaj tajniki infomrtayki w 7 klasie" />
  <meta name="keywords" content="informatyka, lekcja,komputer" />
  <link rel="stylesheet" href="style1.css" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <script src="timer.js"></script>
</head>

<body onload="odliczanie();">
<?php
  $imie=$_SESSION['user']; ?>


<div id="container">
  
  <div id="tytul">

    <h1> Informatyka </h1>

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
  
    Jeżeli <?php echo $_SESSION['user']; ?> nie zapamiętałeś/aś czegoś z lekcji polecam takie filmy na yt.
    </br></br>
    
    <iframe width="853" height="480" src="https://www.youtube.com/embed/WxH9YNAfAao?list=PLOYHgt8dIdoz2fyn0gv4fs2t4tayalsh3" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>
  <div class="footer">
    <footer>
    2021 &copy;<a href="email.php" class="mailik"> Mateusz Kuzio</a>, strona jako projekt do szkoły
    </footer>
  </div>
</div>
</body>

</html>