
<?php
$room_No=htmlspecialchars($_GET["room_No"]);
$room_type=htmlspecialchars($_GET["room_type"]);
$price=htmlspecialchars($_GET["price"]);
$status=htmlspecialchars($_GET["status"]);

echo"ເລກຫ້ອງ : $room_No<br>";
echo"ປະເພດຫ້ອງ : $room_type<br>";
echo"ລາຄາຫ້ອງ : ".number_format($price)." kip <br>";
echo"ສະຖານະຫ້ອງ : $status";

?>