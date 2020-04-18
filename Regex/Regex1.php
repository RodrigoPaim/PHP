<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    $string="My name is Rodrigo, Rodrigo is my name";
    
    // if(preg_match("/Rodrigo/", $string, $array)) {
    //   echo "It is a match!";
    //   print_r($array);
    // }
    
    // if(preg_match_all("/Rodrigo/", $string, $array)) {
    //   print_r($array);
    // }

    // if(preg_match_all("/Ro(dri)go/", $string, $array)) {
    //   print_r($array);
    // }
    
    // if(preg_match_all("/Ro(dri)go/", $string, $array)) {
    //   print_r($array[0][1]);
    // }

    $string2 = preg_replace("/Ro(dri)go/", "Paim", $string);
      print_r($string2);


?>
</body>
</html>