<?php include "connect.php"?>
<?php
$stmt=$pdo->prepare("UPDATE member SET password=?, name=?, address=?, mobile=?, email=? WHERE username = ?");
$stmt->bindParam(1,$_POST["pass"]);
$stmt->bindParam(2,$_POST["name"]);
$stmt->bindParam(3,$_POST["address"]);
$stmt->bindParam(4,$_POST["mobile"]);
$stmt->bindParam(5,$_POST["email"]);
$stmt->bindParam(6,$_POST["username"]);
if($stmt->execute()):
?>
แก้ไขข้อมูล Username : <?=$_POST["username"]?> เรียบร้อยแล้ว
<?php endif; ?>