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
<form action="" method="post">
    <table>
        <tr>
            <td>Введите имя:</td>
            <td>
                <input class="text" type="text" autofocus/>
            </td>
        </tr>
        <tr>
            <td>Введите логин:</td>
            <td>
                <input class="text" type="text" autofocus/>
            </td>
        </tr>
        <tr>
            <td>Введите пароль:</td>
            <td>
                <input id="pass" type="password"/>
            </td>
        </tr>
        <tr>
            <td>Введите возраст:</td>
            <td>
                <input class="text" type="text"/>
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
                <textarea cols="40" rows="10"></textarea>
            </td>
        </tr>
        <tr>
            <td>
                <input class="sub" type="submit" value="Зарегистрироваться"/>
            </td>
            <td>
                <input class="res" type="reset" value="Очистить форму"/>
            </td>
        </tr>
    </table>
</form>
<a href="index.php">Вернуться на главную</a>
</body>
</html>