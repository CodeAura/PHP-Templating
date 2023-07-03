<?php
date_default_timezone_set("Europe/Amsterdam"); 


$date= date('H');
$time = date('H:i');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <footer class="Footer">
        <h1>Mike den Hertog | <?php echo $time; ?></h1>
    </footer>
</body>
</html>
