<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Суперглобальні змінні РНР</title>
</head>
<body>
    <h2 align="center">Характеристика суперглобальних змінних</h2>
    <table border="1" cellpadding="8" cellspacing="0" align="center">
        <tr bgcolor="#f2f2f2">
            <th>Позначення змінної</th>
            <th>Характеристика</th>
            <th>Отримане значення</th>
        </tr>
        <tr>
            <td>$_SERVER['SERVER_PROTOCOL']</td>
            <td>Ім'я і версія інформаційного протоколу</td>
            <td><?php echo $_SERVER['SERVER_PROTOCOL']; ?></td>
        </tr>
        <tr>
            <td>$_SERVER['SERVER_SOFTWARE']</td>
            <td>Програмне забезпечення сервера</td>
            <td><?php echo $_SERVER['SERVER_SOFTWARE']; ?></td>
        </tr>
        <tr>
            <td>$_SERVER['HTTP_USER_AGENT']</td>
            <td>Інформація про браузер клієнта</td>
            <td><?php echo $_SERVER['HTTP_USER_AGENT']; ?></td>
        </tr>
        <tr>
            <td>$_SERVER['SERVER_NAME']</td>
            <td>Ім'я хоста сервера</td>
            <td><?php echo $_SERVER['SERVER_NAME']; ?></td>
        </tr>
        <tr>
            <td>$_SERVER['REQUEST_METHOD']</td>
            <td>Метод запиту до сторінки</td>
            <td><?php echo $_SERVER['REQUEST_METHOD']; ?></td>
        </tr>
    </table>
</body>
</html>