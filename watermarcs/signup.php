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
        <div class="vissza">
            <a href="./index.php">Kezdőlapra</a>
        </div>
        
        <div class="container signupDiv">
            <h3>Regisztráció</h3>
            <hr>
            <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyinput") {
                    echo "<p>Minden mezőt tölts ki!</p>";
                }
                elseif ($_GET["error"] == "invalidName") {
                    echo "<p>A névben nem szerepelhet szám!</p>";
                }
                elseif ($_GET["error"] == "invalidUid") {
                    echo "<p>Válassz másik felhasználó nevet!</p>";
                }
                elseif ($_GET["error"] == "invalidEmail") {
                    echo "<p>Válassz másik email-t!</p>";
                }
                elseif ($_GET["error"] == "passwordsdontmatch") {
                    echo "<p>Nem egyeznek meg a jelszavak!</p>";
                }
                elseif ($_GET["error"] == "stmtfailed") {
                    echo "<p>Valami nem működik, próbáld újra!</p>";
                }
                elseif ($_GET["error"] == "usernametaken") {
                    echo "<p>Foglalt felhasználó név!</p>";
                }
                elseif ($_GET["error"] == "none") {
                    echo "<p>Még nem regisztráltál!</p>";
                }
            }
        ?>
            <form action="./includes/signup.inc.php" method="post">
                <input type="text" name="name" placeholder="Teljes név...">
                <input type="text" name="email" placeholder="E-mail...">
                <input type="text" name="uid" placeholder="Felhasználó név...">
                <input type="password" name="pwd" placeholder="Jelszó...">
                <input type="password" name="pwdrepeat" placeholder="Jelszó még egyszer...">
                <button type="submit" name="submit">Regisztrálás</button>
            </form>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>