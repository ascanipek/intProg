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
</body>
</html>