<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <div class="container">
        <h1>String Fonksiyonları</h1>
        <?php
            $text = " İnternet Programcılığı PHP ";
            echo $text . '<br>';
            echo strtolower($text) . '<br>';
            $tarih = '2020-12-30 19:30:12 GMT+2';
            // echo strlen($text);
            $full = explode(' ', $tarih);
            $takvim = explode('-', $full[0]);
            $saat = explode(':', $full[1]);

            $yeniTarih = [];

            $yeniTarih[0] = $takvim[2] . '/' . $takvim[1] . '/' . $takvim[0];
            $yeniTarih[1] = $saat[0] . '.' . $saat[1];

            echo 'Tarih: ' . $yeniTarih[0] . '<br>'; // Tarih: 20/12/2020
            echo 'Saat: ' . $yeniTarih[1] . '<br>'; // Saat: 19.30

            $meyveler = ['Elma', 'Portakal', 'Kiraz'];

            $meyvelerText = implode('-', $meyveler);
            echo $meyvelerText;
            
            echo md5('123456');

            

        ?>



    </div>
    
</body>
</html>