<?php
$room_number=$_GET["room_number"] ?? "";
$room_type=$_GET["room_type"] ?? "";
$price=$_GET["price"] ?? "";
$status=$_GET["status"] ?? "";
echo"ເລກຫ້ອງ : $room_number<br>";
echo"ປະເພດຫ້ອງ : $room_type<br>";
echo"ລາຄາຫ້ອງ : $price<br>";
echo"ສະຖານະຫ້ອງ : $status";
?>