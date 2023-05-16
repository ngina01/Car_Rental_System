<?php
$connect = mysqli_connect('127.0.0.1','root','', 'cars');
if($connect){
    $select = "SELECT client.client_id,client.fname,client.phone,cars.car_name,cars.hire_cost,client.status FROM client JOIN cars ON client.car_id=cars.car_id";
    $sql = mysqli_query($connect, $select);
    if ($sql){
      while($rows = mysqli_fetch_assoc($sql)){
        echo $rows["client_id"]." ".$rows["fname"]." ".$rows["phone"]." ".$rows["car_name"];
        echo "</br>";
      }
    }
}

















?>
