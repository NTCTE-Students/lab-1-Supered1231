<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>первый код в РНР</title>
</head>
<body>
    <h1>Этот код напасан через HTML</h1>
    <a href="/text.php?message=Привет, мир!">Перейти куда то</a>
    <a href="/greetings.php">Перейти форум</a>
    <ul>
    <?php
        for ($i = 1; $i <= 10; $i++) {
            print("<li> Элемент № {$i}</li>");
        }
    ?>
    </ul>
</body>
</html>