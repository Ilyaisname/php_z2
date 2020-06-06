<?php
   // === 1(a) ===
   $arr = ['a', 'b', 'c'];
   echo var_dump($arr);



   // === 1(b) ===
   echo "<br/>".$arr[0]." ".$arr[1]." ".$arr[2];

   // === 1(c) ===
   $arr = ['a', 'b', 'c', 'd'];
   $str = $arr[0]."+".$arr[1].", ".$arr[2]."+".$arr[3];

   echo "<br/>".$str;



   // === 1(d) ===
   $arr = [2, 5, 3, 9];

   $ab = $arr[0] * $arr[1];
   $cd = $arr[2] * $arr[3];
   $result = $ab + $cd;

   echo "<br/> $result <br/>";



   // === 1(e) ===
   $arr1[] = 1;
   $arr1[] = 2;
   $arr1[] = 3;
   $arr1[] = 4;
   $arr1[] = 5;
   // $arr1 = range(1, 5);



// === 1(f) ===
   $arr = ['a' => 1, 'b' => 2, 'c' => 3];
  
   print_r($arr['c']);
   echo "<br/>";



   // === 1(g) ===
   $arr = ['a' => 1, 'b' => 2, 'c' => 3,];

   echo "сумма значений массива = ".array_sum($arr)."<br/>";

   // === 1(h) ===
   $arr = ['Коля' => '1000$', 'Вася' => '500$', 'Петя' => '200$'];

   echo  $arr['Петя']." ".$arr['Коля'] ."<br/>";



   // === 1(i) ===
   $daysOfWeek = [
     1 => 'Понедельник',
     2 => 'Вторник',
     3 => 'Среда',
     4 => 'Четверг',
     5 => 'Пятница',
     6 => 'Суббота',
     7 => 'Воскресенье'
   ];

   echo $daysOfWeek[5]."<br/>";



   // === 1(j) ===
   $day = 3;

   echo $daysOfWeek[$day]."<br/>";



   // === 1(k) ===
   $arr = [
     'cms'=>['joomla', 'wordpress', 'drupal'],
     'colors'=>['blue'=>'голубой', 'red'=>'красный', 'green'=>'зеленый']
   ];

   echo $arr['cms'][0].", ".$arr['cms'][2].", ".$arr['colors']['green'].", ".$arr['colors']['red']."<br/>";
     


   // === 1(l) ===
   $week = [
     'ru' => [
      1 => 'Понедельник', 
      2 => 'Вторник', 
      3 => 'Среда', 
      4 => 'Четверг', 
      5 => 'Пятница', 
      6 => 'Суббота', 
      7 => 'Воскресенье'
     ],

     'en' => [
      1 => 'Mondey',
      2 => 'Tuesday',
      3 => 'Wednesday',
      4 => 'Thursday',
      5 => 'Friday',
      6 => 'Saturday',
      7 => 'Sunday'
     ]
   ];

   echo $week['ru'][1]." ".$week['en'][3]."<br/>";



   // ===1(m) ===
   $lang = 'ru';
   $days = 3;

   echo $week[$lang][$days]."<br/>";



   // === 1(n) ===
  $password = "999999999999999999999999999999999999999999999999999999";
  
  function guesPassword($password) {
    $passArr = str_split($password);

    $newPass = [];
    for ($j = 0; $j < count($passArr); $j++) {
      for ($k = 0; $k <= 9; $k++) {
        if ($k == $passArr[$j]) $newPass[] = $k;
      } 
    }
    
    return $newPass;
  }

  $passMy = implode(guesPassword($password));

  echo "Заданный пароль   : $password<br/>";
  echo "Подобранный пароль: $passMy<br/>";
 // аля рекурсия работает только до 11 цифр
  $passStr = '000080811';
    
      function search($n, $arr) {
        if ($n == $arr) return $n;
        else return search($n + 1, $arr);    
      }

      $a = search(0, $passStr);

      if (strlen($a) < strlen($passStr)) {    
        $z = strlen($passStr) - strlen($a);   
        for ($j = 0; $j < $z; $j++) {     
          $a = 0 . $a; 
        }   
      }    

  
    print($a);
?>