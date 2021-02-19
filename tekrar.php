<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tekrar</title>
</head>
<body>

   <select name="ay" id="">
       <?php
            for($i=1; $i<=12;$i++){
                echo "<option value='$i'>" . $i . "</option>";
            }
       ?>
   </select>
   <select name="gun" id="">
       <?php
            for($i=1; $i<=31;$i++){
                echo "<option value='$i'>" . $i . "</option>";
            }
       ?>
   </select>
   <select name="sene" id="">
       <?php
            for($i=2021; $i>=1900;$i--){
                echo "<option value='$i'>" . $i . "</option>";
            }
       ?>
   </select>

            <!-- Diziler -->

            <div>
                <?php
                    // $numbers = [1, 45, 98, 26, 33];
                    // for($x=0; $x<count($numbers); $x++){
                    //     if($x == count($numbers) - 1)
                    //         echo $numbers[$x];
                    //     else if($x != count($numbers))
                    //         echo $numbers[$x] . '-';
                        
                    // }

                    // foreach($numbers as $eleman){
                    //     echo $eleman . '-';
                    // }

                    // $ogrenciler = [
                    //     268 => [
                    //         'isim' => 'Abdrrahman',
                    //         'yas' => 17,
                    //         'dYeri' => 'Eskişehir'
                    //     ],
                    //     449 => 'Yiğit',
                    //     325 => 'Yunusemre'
                    // ];

                    // // echo $ogrenciler[268]['dYeri'];

                    // foreach($ogrenciler[268] as $bilgi){
                    //     echo $bilgi . '<br>';
                    // }

                    
                    // Fonksiyonlar
                    function topla($a, $b){
                        return $a + $b;
                    }

                    function tablo($satir, $sutun){
                        $html = '';
                        $html .= '<table border="1">';
                        for($i=1; $i <= $satir; $i++){
                            $html .= '<tr>';
                            for($j=1; $j <= $sutun; $j++){
                                $html .= '<td>' . $i . '/' . $j . '</td>';
                            }
                            $html .= '</tr>';
                        }
                        $html .= '</table>';
                        echo $html;
                    }
                    
                    tablo(100,100);

                ?>
            </div>

  



</body>
</html>