<!DOCTYPE html>
<html lang="en">
<head>
    <title>ATIVIDADE 3</title>
</head>
<body>
    <?php
    $t = date("H");
    if ($t < "20") {
        echo $t;
        echo "</br> Tenha um ótimo dia! ";
        if ($t < "20") {
            echo $t;
            echo "</br> Tenha uma ótima noite! ";
    }
} ?>
</body>
</html>