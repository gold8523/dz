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
    <h3>Информация о вас:</h3>
    <form enctype="multipart/form-data" action="addImg.php" method="post">
        <table>
            <tr>
                <td>Добавьте фотографию:</td>
                <td>
                    <input type="hidden" name="MAX_FILE_SIZE" value="3145728" />
                    <input type="file" name="newPic"/>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="action" value="Добавить"/>
                </td>
                <td>
                    <input type="reset" value="Очистить форму"/>
                </td>
            </tr>
        </table>
    </form>
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