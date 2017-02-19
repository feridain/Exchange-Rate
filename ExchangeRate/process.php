<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="process.php">

<title>Calculation Of Foreign Exchange Rate</title>
</head>

<body>

<div class="box2" style="border-radius: 1em; background-color:#FFF" align="center">
   
   <h2>Calculation Of Foreign Exchange Rate</h2>

  <?php
  $money=$_POST['money'];
  $coin=$_POST['coin'];
 
 
  switch ($coin) {
   case 1:
    $coin_m=0.029;
    $sum=$money*$coin_m;
    echo "1 Thai Baht = ".$coin_m." US Dollar (USD)"."<br><br>";
    echo "Amount of Money ".number_format($money,2)." Baht  =  ".number_format($sum,2)." US Dollar (USD)";
    break;
   case 2:
    $coin_m=32.86;
    $sum=$money*$coin_m;
    echo "1 Thai Baht = ".$coin_m." Korean Won (KRW)"."<br><br>";
    echo "Amount of Money ".number_format($money,2)." Baht  =  ".number_format($sum,2)." Korean Won (KRW)";
    break;    
   case 3:
    $coin_m=3.22;
    $sum=$money*$coin_m;
    echo "1 Thai Baht = ".$coin_m." Japanese Yen (JPY)"."<br><br>";
    echo "Amount of Money ".number_format($money,2)." Baht  =  ".number_format($sum,2)." Japanese Yen (JPY)";
    break;    
  }
 
  ?>
  
   <a href="exchang.html"><div align="center"><input class="button" type="submit" value="Back" /></div></a>
  </div>

</body>
</html>

