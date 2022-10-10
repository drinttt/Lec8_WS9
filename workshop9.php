<?php include "connect.php"?>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
    <?php
    $stmt=$pdo->prepare("SELECT username,name,address,mobile,email FROM member");
    $stmt->execute();

    while($row=$stmt->fetch()):
    ?>
    ชื่อ : <?=$row["name"]?><br>
    ที่อยู่ : <?=$row["address"]?><br>
    เบอร์โทรศัพท์ : <?=$row["mobile"]?><br>
    อีเมล์ : <?=$row["email"]?><br>
    <a href="edit.php?uname=<?=$row["username"]?>">แก้ไข</a>
    <hr>
    <?php endwhile;?>
    </body>
</html>