<!DOCTYPE html>
<html lang="uk">
<head><meta charset="UTF-8"><title>Обробка POST</title></head>
<body>
    <h2>Результати обчислень (Метод POST)</h2>
    <?php
    $c = (int)$_POST['c'];
    $d = (int)$_POST['d'];

    echo "Ви ввели числа: <b>$c</b> та <b>$d</b><br><br>";
    echo "Сума: " . ($c + $d) . "<br>";
    echo "Різниця: " . ($c - $d) . "<br>";
    echo "Добуток: " . ($c * $d) . "<br>";
    echo "Частка: " . ($d != 0 ? ($c / $d) : "Ділення на нуль!") . "<br>";
    ?>
</body>
</html>