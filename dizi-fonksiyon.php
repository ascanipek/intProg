<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Document</title>
</head>
<body>
    <?php
        function listeYap($liste){
            $sonuc = '<ul class="list-group">';

            
            for($i=0; $i < count($liste) ; $i++){
                $sonuc .= '<li class="list-group-item">' .  $liste[$i] . '</li>';
            }



            $sonuc .= '</ul>';
            echo $sonuc;
        }
    ?>


<h1>Merhaba</h1>

<p>
    Naber?
</p>

<div class="card">
    <?php 
        listeYap(['Elma', 'Armut', 'Portakal', 'kiraz', 'Şeftali', 'Karpuz', 'Kavun']);
    ?>
</div>
</body>
</html>