<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/login-signup.css">
    <link rel="shortcut icon" href="./img/logo.png" type="image/x-icon"> <!-- Icons made by "https://www.freepik.com" Freepik from "https://www.flaticon.com/" -->

    <title>Watermarcs</title>
</head>
<body>

    <section id="Reg. rész">
        <a href="./index.php">Kezdőlapra</a>
        <div class="container signupDiv">
            <h3>Bejelentkezés</h3>
            <hr>
            <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyinput") {
                    echo "<p id='valasz'>Minden mezőt tölts ki!</p>";
                }
                else if ($_GET["error"] == "wronglogin") {
                    echo "<p id='valasz'>Helytelen bejelentkezési információ!</p>";
                }
            }
            ?>
            <form action="./includes/login.inc.php" method="post">
                <input type="text" name="uid" placeholder="Felhasználó név/E-mail...">
                <input type="password" name="pwd" placeholder="Jelszó...">
                <button type="submit" name="submit">Bejelentkezés</button>
            </form>
            
        </div>

    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>