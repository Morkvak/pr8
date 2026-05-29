<!DOCTYPE html>
<html lang="uk">
<head><meta charset="UTF-8"><title>Обробка Рядків</title></head>
<body>
    <h2>Результат з'єднання рядків</h2>
    <?php
    $e = $_POST['e'];
    $f = $_POST['f'];

    echo "<b>а) Перша, потім друга:</b><br>";
    echo $e . " " . $f . "<br><br>";

    echo "<b>б) Друга, потім перша:</b><br>";
    echo $f . " " . $e . "<br>";
    ?>
</body>
</html>