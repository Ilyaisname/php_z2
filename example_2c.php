<?php
  $num = range(1, 50);
      
  function find_num($arr) {

  for($i = $arr[0]; $i <= count($arr); $i++) {
    $bul = true;
    
    for($j = 2; $j <= Sqrt($i); $j++) {
      if($i % $j == 0) {
        $bul = false;
        if($i <= 9) continue;
        $numbers[] = $i;
      }
    }

    if ($bul) $ar[] = $i;
  }

    foreach($ar as $val) {
      echo $val.", ";
    }

    echo "<br/>";
    $sostNum = array_unique($numbers);
    foreach($sostNum as $val) {
      echo $val.", ";
    }
  }

  find_num($num);
?>