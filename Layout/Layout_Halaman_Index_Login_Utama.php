<?php
    session_start();

    if (!isset($_SESSION['username'])){
        session_unset();
    }

?>

<!DOCTYPE html>
<html>
<head>
    <title>Input Output Stock</title>
    <link rel="stylesheet" type="text/css" href="../Layout.css">
</head>
<body>
    <div class="Layout">
        <div class="Layout_Header">
            <?php
                require"../Text/Text_Login/Text_Login.php";
            ?>
        </div>
        <div class="Layout_Login">
            <?php
                require "../Header/Index.php";
            ?>
        </div>
    </div>
</body>
</html>