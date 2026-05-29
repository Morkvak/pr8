<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Завдання 2: Метод GET</title>
</head>
<body>
    <h2>Математичні обчислення (Метод GET)</h2>
    <?php
    // Отримуємо змінні з URL, якщо вони порожні - задаємо значення за замовчуванням
    $a = isset($_GET['a']) ? (int)$_GET['a'] : 25;
    $b = isset($_GET['b']) ? (int)$_GET['b'] : 5;

    echo "<p>Отримані числа: <b>a = $a</b>, <b>b = $b</b></p>";
    echo "Сума (a + b) = " . ($a + $b) . "<br>";
    echo "Різниця (a - b) = " . ($a - $b) . "<br>";
    echo "Добуток (a * b) = " . ($a * $b) . "<br>";
    
    if ($b != 0) {
        echo "Частка (a / b) = " . ($a / $b) . "<br>";
    } else {
        echo "Частка (a / b) = Помилка! Ділення на нуль.<br>";
    }
    ?>
    <p><i>Щоб змінити числа, додай до адреси в браузері: <b>?a=10&b=2</b></i></p>
</body>
</html>