<?php
$room_No=$_GET["room_No"] ?? "";
$room_type=$_GET["room_type"] ?? "";
$price=$_GET["price"] ?? "";
$status=$_GET["status"] ?? "";
echo"ເລກຫ້ອງ : $room_No<br>";
echo"ປະເພດຫ້ອງ : $room_type<br>";
echo"ລາຄາຫ້ອງ : $price<br>";
echo"ສະຖານະຫ້ອງ : $status";
?>