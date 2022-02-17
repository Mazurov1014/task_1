<?php
	include 'index.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrations</title>
</head>
<body>
    <main>
        <form action = "reg.php" method = "get">
            <label for = "login">Логин:</label>
            <input type = "text" name = "login" id = "login">
            <label for = "password">Пароль:</label>
            <input type = "text" name = "password" id = "password">
            <input type = "submit">
        </form>
    </main>
        
</body>
</html>