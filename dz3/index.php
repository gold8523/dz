<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" action="action1.php">
    <table>
        <tr>
            <td>Логин:</td>
            <td>
                <label>
                    <input type="text" name="log">
                </label>
            </td>
        </tr>
        <tr>
            <td>Пароль:</td>
            <td>
                <label>
                    <input type="text" name="password">
                </label>
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="action" value="Войти"/>
            </td>
        </tr>
    </table>
</form>
<p>
    <a href="form.php">Зарегистрироваться</a>
</p>
</body>
</html>