<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Личный Кабинет</title>
</head>
<body>
<h1>Личный кабинет</h1>
<div>
    <?php echo $img; ?>
    <ul>
        <li>Имя:<?php echo ' ' . $userName; ?></li>
        <li>Возраст:<?php echo ' ' . $userAge; ?></li>
    </ul>
</div>
<div>
    <h3>Информация о вас:</h3>
    <p><?php echo ' ' . $userInfo; ?></p>
</div>
<div>
    <h4>Все изображения:</h4>
    <ul>
        <li><?php echo $a; ?></li>
    </ul>
</div>
<div>
    <h3>Отправить письмо:</h3>
    <form action="" method="post">

    </form>
</div>
<div>
    <h4>Другие пользователи:</h4>
    <ul>
        <li><?php echo $a; ?></li>
    </ul>
</div>



</body>
</html>