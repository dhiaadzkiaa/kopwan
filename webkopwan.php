<?php
// Web PHP paling sederhana
$name = "Dhia Adzkia";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Halo dari PHP</title>
    <style>
        body {
            font-family: Arial;
            background: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .box {
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            text-align: center;
        }
        h1 { margin-bottom: 10px; }
    </style>
</head>
<body>
    <div class="box">
        <h1>Halo! 👋</h1>
        <p>Ini web PHP sederhana buatan <b><?php echo $name; ?></b></p>
        <p>Salam kenal!</p>
    </div>
</body>
</html>
