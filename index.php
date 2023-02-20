<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header class="header">
        <img class="logo" src="img/Logo_Polytech_rus_main.jpg" alt="">
        <p class="text">Домашная работа "Hello World!"</p>
    </header>

    <main>
        <?php echo "<p class='text'>Hello World!</p>" ?>
    </main>

    <footer>
        <?php 
        $data = date(DATE_RSS);
        echo "<p class='text'>$data</p>" ;
        ?>
    </footer>
</body>
</html>