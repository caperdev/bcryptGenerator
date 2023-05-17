<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/commons.css">
    <title>PHPass Encryptor</title>
</head>
<body>
    <div class="container">
        <form method="post" action="functions.php">
            <input type="text" name="password" placeholder="Inserta tu contraseña a descrifrar aquí">
            <div class="buttons">
                <button type="submit">Encriptar</button>
                <button type="reset" name="reset" onclick="redirectToURL('index.php')">Limpiar</button>
            </div>
        </form>
        <?php
        if (isset($_GET["hashValue"])) {
            $hashValue = $_GET["hashValue"];
            echo '<div class="resultHash">' . htmlspecialchars($hashValue) . '</div>';
        }else {
            echo '<div class="resultHash"></div>';
        }
        ?>
    </div>
    <script src="public/commons.js"></script>
</body>
</html>
