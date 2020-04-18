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
    $specialCharString="^My name is Rodrigo, Rodrigo is my name";
    
    // echo '01='.preg_match("/Rodrigo/", $string).'<br>'; //true
    // echo '02='.preg_match("/./", $string).'<br>'; //true (.=any character)
    // echo '03='.preg_match("/r|i/", $string).'<br>'; //true
    // echo '04='.preg_match("/r|z/", $string).'<br>'; //true
    // echo '05='.preg_match("/x|z/", $string).'<br>'; //false
    // echo '06='.preg_match("/[ˆabc]/", $string).'<br>'; //true
    // echo '07='.preg_match("/[^My name is Rodrigo, Rodrigo is my name]/", $string).'<br>'; //false
    // echo '08='.preg_match("/[a-z]/", $string).'<br>'; //true
    // echo '09='.preg_match("/[N-O]/", $string).'<br>'; //false
    // echo '10='.preg_match("/[n-o]/", $string).'<br>'; //true
    // echo '11='.preg_match("/[a-zA-Z]/", $string).'<br>'; //true
    // echo '12='.preg_match("/[a-zA-Z]/", $string).'<br>'; //true
    // echo '13='.preg_match("/[0-9]/", $string).'<br>'; //false
    // echo '14='.preg_match("/[R*]/", $string).'<br>'; //true
    echo '15='.preg_match("/^M/", $string).'<br>'; //true
    echo '16='.preg_match("/^R/", $string).'<br>'; //false
    echo '17='.preg_match("/e$/", $string).'<br>'; //true
    echo '18='.preg_match("/r$/", $string).'<br>'; //false
    echo '19='.preg_match("/^M.*e$/", $string).'<br>'; //true
    echo '20='.preg_match("/^M.*e$/", $specialCharString).'<br>'; //false
    echo '21='.preg_match("/\^M.*e$/", $specialCharString).'<br>'; //true

    // preg_match_all("/R*/", $string, $array);
    // preg_match_all("/R.*/", $string, $array);
    // preg_match_all("/R.*is/", $string, $array);
    // preg_match_all("/R.+/", $string, $array);

    // $string="My 1name2 is Rodrigo, 1Rodrigo2 is my name";
    // preg_match_all("/1.*2/", $string, $array);
    // preg_match_all("/1.*?2/", $string, $array);
    // preg_match_all("/R{1}/", $string, $array);
    // echo preg_match("/R{1}/", $string, $array); //true
    // echo preg_match("/R{2}/", $string, $array); //false

    // $string="My 1name2 is RRodrigo, 1Rodrigo2 is my name";
    // echo preg_match("/R{2}/", $string, $array); //true

    // $string="My 1name2 is Rodrigo, 1Rodrigo2 is mmy name";
    // echo preg_match("/R{1,3}/", $string, $array); //true
    // echo preg_match("/R{1,}/", $string, $array); //true
    // echo preg_match("/R{2,3}/", $string, $array); //false
    // echo preg_match("/m{2,3}/", $string, $array); //true

    // $string="My name is &#xa9 Rodrigo / Rodrigo is my name";
    // echo '<br>'.preg_match_all("/\w{4}/", $string, $array).'<br>'; //true
    // print_r($array);
    // echo '<br>'.preg_match_all("/\W{2}/", $string, $array).'<br>'; //true
    // print_r($array);
    // echo '<br>'.preg_match_all("/\d{1}/", $string, $array).'<br>'; //true
    // print_r($array);
    // echo '<br>'.preg_match_all("/\D{10}/", $string, $array).'<br>'; //true
    // print_r($array);
    // echo '<br>'.preg_match_all("/\s{1}/", $string, $array).'<br>'; //true
    // print_r($array);
    // echo '<br>'.preg_match_all("/\S{7}/", $string, $array).'<br>'; //true
    // print_r($array);

    // echo $string;
?>
</body>
</html>