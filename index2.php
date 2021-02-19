<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php
        $isim = "Bedirhan";
        $sinifListesi = ['Bedirhan', 'İlkay', 'Sinan'];
        $sinif = [
            'isim' => 'Bedirhan',
            'no' => 20,
            'bolum' => 'Bilişim',
            'alan' => 'Web Programcılığı'
        ];
        // echo $sinif['isim'] . ' ' . $sinif['bolum'];
        $yeniSinif = [
            '20' => [
                'isim' => 'Bedirhan',
                'bolum' => 'Bilişim',
                'alan' => 'Web Programcılığı',
            ],
            '120' => [
                'isim' => 'İlkay',
                'bolum' => 'Bilişim',
                'alan' => 'Web Programcılığı'
            ],
            '130' => [
                'isim' => 'Sinan',
                'bolum' => 'Bilişim',
                'alan' => 'Web Programcılığı'
            ]
        ];
        echo $yeniSinif['120']['isim'];
    ?>
</body>
<script>
    var isim = 'Bedirhan'

    isim
</script>
</html>