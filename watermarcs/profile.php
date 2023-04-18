<?php
    include_once 'header.php';
?>
    <section id="Felső rész">
        <div class="container-fluid px-3 py-3 px-md-4 py-md-4 px-lg-5 py-lg-5 felso">
            <?php
                $fajlnev = "profile_pic-dummy.jpg";
                if (isset($_SESSION["userId"])) {
                    $fajlnev = $_SESSION["userPic"];
                    if ($fajlnev == "" || !file_exists("./img/ProfilPic/".$fajlnev)) {
                        $fajlnev = "profile_pic-dummy.jpg";
                    }
            ?>
                
                <img src="./img/ProfilPic/<?php echo $fajlnev ?>" alt="">
                <h1>Szia <?php echo $_SESSION["useruid"] ?>!</h1>

                <form action="./includes/upload.inc.php" method="POST" enctype="multipart/form-data">
                    <input type="file" name="profilkep" id="file" accept="image/jpeg, image/png">
                    <label for="file">Fájl megadása</label>
                    <span>
                        Fájl megadása: <span id="file-name">nincs kiválasztva fájl</span>
                    </span>
                    <br>
                    <input type="submit" value="Frissítés" id="frissit">
                </form>

            <?php
                }
            ?>
        </div>
    </section>

    <script>
        let inputfile = document.getElementById("file");
        let filenamefield = document.getElementById("file-name");
        inputfile.addEventListener("change", function(event){
            let uploadedfilename = event.target.files[0].name;
            filenamefield.textContent = uploadedfilename;
        })
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>
</html>