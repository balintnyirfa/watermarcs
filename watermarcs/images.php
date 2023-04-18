<?php
    include_once 'header.php';
    require_once './includes/dbh.inc.php';
?>

        <div class="container-fluid px-3 py-3 px-md-4 py-md-4 px-lg-5 py-lg-5 feltolt">
            <h1>Töltsd fel a munkáidat</h1>
            <hr>
            <form action="./includes/images.inc.php" method="POST" enctype="multipart/form-data">
                <div class="sorok">
                    <p>Válaszd ki a feltöltendő fájlt:</p>
                    <input type="file" name="kep" id="kep" accept="image/jpeg, image/gif, image/png"><label for="kep">Új kép</label>
                    <span>
                        Fájl megadása: <span id="file-name">nincs kiválasztva fájl</span>
                    </span>
                </div>
                <div class="sorok">
                    <p>Add meg a műved címét:</p>
                    <input type="text" name="cim" id="cim">
                </div>
                <div class="sorok">
                    <p>Add meg, hogy mikor készült:</p>
                    <input type="date" name="datum" id="datum">
                </div>
                <div class="sorok">
                    <p>Írj egy rövid leírást az alkotásodhoz:</p>
                    <input type="text" name="leiras" id="leiras">
                </div>
                <div class="sorok">
                    <input type="submit" value="Feltölt" id="feltolt">
                </div>
            </form>
        </div>

        <div class="container-fluid px-3 py-3 px-md-4 py-md-4 px-lg-5 py-lg-5 kartyaKepek">
            <?php
                if (isset($_SESSION["userId"])) {
                    $select = "SELECT imgId, imgStoredName, imgTitle, imgDescr, imgDate FROM images WHERE imgUserID = ".$_SESSION["userId"];
                    $eredmeny = $conn->query($select);
                    while ($sor = $eredmeny->fetch_assoc()) {
            ?>

            <div class="cards">
                <div id="cardPic">
                    <img src="./img/userimg/<?php echo $sor["imgStoredName"]?>" alt="<?php echo $sor["imgTitle"]; ?>" title="<?php echo $sor["imgTitle"]; ?>">
                </div>
                <div id="kartyaSzoveg">
                    <p><b>Cím:</b> <?php echo $sor["imgTitle"]; ?></p>
                    <p><b>Dátum:</b> <?php echo $sor["imgDate"]; ?></p>
                    <p><b>Leírás:</b> <?php echo $sor["imgDescr"]; ?></p>
                    <form action="./includes/images.inc.php" method="post">
                        <input type="submit" name="torles" value="Törlés">
                    </form>
                </div>
            </div>

            <?php
                    }
                    $conn -> close();
                }
            ?>
        </div>

        <script>
            let inputfile = document.getElementById("kep");
            let filenamefield = document.getElementById("file-name");
            inputfile.addEventListener("change", function(event){
                let uploadedfilename = event.target.files[0].name;
                filenamefield.textContent = uploadedfilename;
            })
        </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    </body>
</html>