<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<?php 
  $isimBir = "Serkan";
  $isimIki = "Sinan";
  $isimUc = "İlkay";
  $isimDort = "Bekir";

  $dizi = [
    "Abdullah",
    "Sinan",
    "İlkay",
    "Bekir"
  ];

  $students = [
    0 => [
      "name" => "Abdullah",
      "age" => 36,
      "dep" => "Bilişim Teknolojileri"
    ],
    1 => [
      "name" => "Sinan",
      "age" => 17,
      "dep" => "Uzay Teknolojileri"
    ],
    2 => [
      "name" => "İlkay",
      "age" => 17,
      "dep" => "Metal Teknolojileri"
    ],
    3=> [
      "name" => "Bekir",
      "age" => 17,
      "dep" => "Ahşap Teknolojileri"
    ]
  ]

?>

<div class="container">
  <h1>Sınıf Listesi</h1>

  <div class="row">
    <div class="col-3">
      <div class="card">
        <div class="card-header">
          Liste
        </div>
        <div class="card-body">
          <ul class="list-group">
            <?php 
              for($i=0; $i<count($dizi); $i++){
                if($dizi[$i] == 'Sinan')
                  echo "<li class='list-group-item active'>" . $dizi[$i] . "</li>";
                else  
                  echo "<li class='list-group-item'>" . $dizi[$i] . "</li>";

              }
            ?>
          </ul>
        </div>
      </div>
    </div>

    <div class="col-9">
      <div class="row">
          <?php
            for($i=0; $i<count($dizi);$i++){
          ?>
            <div class="col-6 mb-2">
              <div class="card bg-danger text-white">
                <div class="card-header">
                  <?php echo $students[$i]["name"] ?>
                </div>
                <div class="card-body">
                  <?php echo $students[$i]["dep"] ?> 
                  <br>
                  Yaş: <?php echo $students[$i]["age"] ?>
                </div>
              </div>
            </div>
          <?php
            }
          ?>

         
      </div>
    </div>
  </div>
  

</div>

</body>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.bundle.js"></script>
</html>
