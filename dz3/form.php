<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Регистрация</title>
</head>
<body>
<?php
//require_once '../Faker/src/autoload.php';
//$faker = Faker\Factory::create('ru_RU');
//echo $faker->firstName();
//?>
<form action="" method="post">
    <table>
        <tr>
            <td>Введите логин:</td>
            <td>
                <label>
                    <input type="text" autofocus/>
                </label>
            </td>
        </tr>
        <tr>
            <td>Введите пароль:</td>
            <td>
                <label >
                    <input type="password"/>
                </label>
            </td>
        </tr>
        <tr>
            <td>Введите имя:</td>
            <td>
                <label>
                    <input class="text" type="text" autofocus/>
                </label>
            </td>
        </tr>
        <tr>
            <td>Введите возраст:</td>
            <td>
                <label>
                    <input class="text" type="text"/>
                </label>
            </td>
        </tr>
        <tr>
            <td>Добавьте фотографию:</td>
            <td>
                <input type="file"/>
            </td>
        </tr>
        <tr>
            <td>Расскажите о себе:</td>
            <td>
                <label>
                    <textarea cols="40" rows="10"></textarea>
                </label>
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="Зарегистрироваться"/>
            </td>
            <td>
                <input type="reset" value="Очистить форму"/>
            </td>
        </tr>
    </table>
</form>
<a href="index.php">Вернуться на главную</a>
</body>
</html>