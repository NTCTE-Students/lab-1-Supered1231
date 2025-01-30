<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>что там пришло извне</title>
</head>
<body>
    <h1>что же мне пришло извне</h1>
    <?php
        if (isset($_GET['message'])) {
            print('<p>Мне пришло сообщение:</p>');
            print("<p><i>{$_GET['message']}</i></p>");
        } else{
            print('<p>Ничего не пришло...</p>');
        }
    ?>

</body>
</html>