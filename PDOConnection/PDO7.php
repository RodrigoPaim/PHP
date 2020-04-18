<?php

include '../PDOConnection/PDO.php';

// $stmt = $db->prepare("insert into address (id, client_id, type_id, street, city, state, zipcode) values (?,?,?,?,?,?,?)");
// $stmt->bindValue(1, 17);
// $stmt->bindValue(2, 6);
// $stmt->bindValue(3, 2);
// $stmt->bindValue(4, 'Test13');
// $stmt->bindValue(5, 'Test13');
// $stmt->bindValue(6, 'Test13');
// $stmt->bindValue(7, 'Test13');

// $stmt = $db->prepare("insert into address (client_id, type_id, street, city, state, zipcode) values (?,?,?,?,?,?)");
// $stmt->bindValue(1, 6);
// $stmt->bindValue(2, 2);
// $stmt->bindValue(3, 'Test13');
// $stmt->bindValue(4, 'Test13');
// $stmt->bindValue(5, 'Test13');
// $stmt->bindValue(6, 'Test13');

// $stmt = $db->prepare("insert into address (client_id, type_id, street, city, state, zipcode) values (:client_id, :type_id, :street, :city, :state, :zipcode)");
// $stmt->bindValue(':client_id', 6);
// $stmt->bindValue('type_id', 2);
// $stmt->bindValue('street', 'Test13');
// $stmt->bindValue('city', 'Test13');
// $stmt->bindValue('state', 'Test13');
// $stmt->bindValue('zipcode', 'Test13');

// $stmt = $db->prepare("update address set client_id=:client_id, type_id=:type_id, street=:street, city=:city, state=:state, zipcode=:zipcode where id=:id");
// $stmt->bindValue(':id', 6);
// $stmt->bindValue(':client_id', 1);
// $stmt->bindValue('type_id', 2);
// $stmt->bindValue('street', 'RodrigoTest');
// $stmt->bindValue('city', 'RodrigoTest');
// $stmt->bindValue('state', 'RodrigoTest');
// $stmt->bindValue('zipcode', 'RodrigoTest');

$stmt = $db->prepare("delete from address where id=:id");
$stmt->bindValue(':id', 30);

try {
    $stmt->execute();
} catch(Exception $e) {
  echo $e;
}
?>