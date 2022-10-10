<?php   session_start();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="utf-8" />
  <title>Poznaj lepiej informatyke!</title>
  <meta name="description" content="Poznaj tajniki infomrtayki w 7 klasie" />
  <meta name="keywords" content="informatyka, lekcja,komputer" />
  <link rel="stylesheet" href="style21.css" type="text/css"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
</head>
  
<body>
  
  
  <div id="haha">

  <?php
   
    $PIN=$_POST['Pin'];
    
if($PIN=="1111"){
   
   
   
   
   
     
     //$sql="SELECT imie FROM Imiona where id=6";
     $sql="SELECT * FROM Imiona";
    $conni = new mysqli("censored");
    $imie = $conni->query($sql);
    
    $wiersze = $imie->fetch_all(MYSQLI_ASSOC);
    
    
    $conni->close();
    
    //print_r($wiersze);
}    
else
 {
header('Location: index.php');
 } 
    
    ?>
  
  
  <table class="center">
    <thead> 
      <tr><th colspan="4"> Łącznie rekordów: <?php $imie->num_rows; ?></th></tr>
      <tr> <th>Id</th>  <th>Imie</th> <th>Data</th> <th>Godzina</th> </tr>
    </thead>
    <tbody>
      
      <?php
  foreach ($wiersze as $wiersy){
  echo "<tr> <td>{$wiersy['id']}</td>   <td>{$wiersy['imie']}</td>   <td>{$wiersy['data']}</td>   <td>{$wiersy['godzina']}</td>   </tr>";
  }
  
      ?>
     
    </tbody>
  </table>
  
  
  
  
  </div>

  
  
</body>

</html>
