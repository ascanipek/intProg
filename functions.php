<?php
    function yaz($yazi){
        echo $yazi . '<br>';
    }

    function topla($sayi1, $sayi2, $sayi3){
        $toplam = $sayi1 + $sayi2 + $sayi3;
        return $toplam;
    }

    $a  = topla(32, 45, 1900);
    
   function tabloYap($x, $y){
       // x satır, y sütun
       $tablo = "<table border='1' width='300' height='300'>";
       for($i=1;$i<=$x;$i++){
           $tablo = $tablo . "<tr>";
           for($j=1;$j<=$y;$j++){
               $tablo = $tablo . "<td> $i. satır $j. sütun</td>";
           }
           $tablo = $tablo . "</tr>";
       }
       $tablo = $tablo . "</table>";
       echo $tablo;
   }

//    tabloYap(100,100);

   $numbers = [100, 300, 43, 26, 34, 90];
   array_push($numbers, 3000);
   if(in_array(3000, $numbers)){
        $indis = array_search(3000, $numbers);
        echo 'var, indisi-> ' . $indis . '<br>';
   }
   else
    echo 'yok';

    $sayilar = [
        'cift' => 2,
        'tek' => 3,
        'yuz' =>100
    ];

//    for($i=0; $i<count($sayilar);$i++){
//        echo $sayilar[$i] . ' - ';;
//    }
//    echo '<br>';

    foreach($sayilar as $item){
        echo $item . ' - ';
    }
    echo '<br>';
    $sayi = 3.789645;
    echo rand(1,300);

?>