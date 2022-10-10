<?php include "connect.php"?>
<?php
$stmt=$pdo->prepare("SELECT * FROM member WHERE username=?");
$stmt->bindParam(1,$_GET["uname"]);
$stmt->execute();
$st
?>
<html>
    <head>
        <meta charset="utf-8">
        <style>
            input,textarea{
                margin-top:0.3em;
            }
        </style>
        
    </head>
    <body>
        <?php
        if($row=$stmt->fetch()):
        ?>
        <form action="update.php" method="POST">
            <input type="hidden" value="<?=$row["username"]?>" name="username">
            Password : <input type="password" name="pass" value="<?=$row["password"]?>"><br>
            ชื่อ : <input type="text" name="name" value="<?=$row["name"]?>"><br>
            ที่อยู่ : <textarea name="address"><?=$row["address"]?></textarea><br>
            เบอร์โทรศัพท์ : <input type="text" pattern="0[0-9]-[0-9]{4}-[0-9]{4}" placeholder="08-1234-5678" name="mobile" value="<?=$row["mobile"]?>"><br>
            อีเมล์ : <input type="email" placeholder="someone@example.com" name="email" value="<?=$row["email"]?>"><br>
            <input type="submit" value="แก้ไข">
        </form>
        <?php endif;?>
    </body>
</html>