<?php

include '../PDOConnection/PDO.php';

$stmt = $db->prepare("select * from address where client_id = ?");
$clientID=array(1,2,3);

foreach ($clientID as $client) {
    $stmt->bindParam(1, $client);
    $stmt->execute();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $id1 = htmlentities($row['id']);
        $client_id1 = htmlentities($row['client_id']);
        $address_type1 = htmlentities($row['type_id']);
        $street1 = htmlentities($row['street']);
        $city1 = htmlentities($row['city']);
        $state1 = htmlentities($row['state']);
        $zipcode1 = htmlentities($row['zipcode']);
  
        echo($id1)." ".($client_id1)." ".($address_type1)
  ." ".($street1)." ".($city1)." ".($state1)." ".($zipcode1)."</br>";
    }
}
?>