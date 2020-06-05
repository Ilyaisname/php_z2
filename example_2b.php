<?php
  // === 2b ===

   $num = [
    1 => [500, -200, -150, -100, 2000],
    2 => [30000, -10000, -3000, 6000, -1500],
    3 => [2000, -2000, 150, 2100, 10000]
  ];

  function sum($arr) {
    $money = array_sum($arr);
    return $money;
  }

  $person1 = sum($num[1]);
  $person2 = sum($num[2]);
  $person3 = sum($num[3]);

  $pipls = [$person1, $person2, $person3];
  arsort($pipls);
  
  foreach($pipls as $val) {
    echo $val." ";
  }
  
?>