<?php
    session_start();
    require_once './dbh.inc.php';

    if (isset($_SESSION["useruid"])) {
        if (isset($_FILES["profilkep"])) {
            $fajlnev = basename($_FILES["profilkep"]["tmp_name"]);

            if (copy($_FILES["profilkep"]["tmp_name"], "../img/ProfilPic/$fajlnev")) {
                $sql = "update users set usersPic = '$fajlnev' where usersID = " . $_SESSION["userId"];
                
                if ($conn -> query($sql) != true) {
                    unlink("../img/ProfilPic/".$fajlnev);
                }

                else {
                    $_SESSION["userPic"] = $fajlnev;
                }

                header("location: ../profile.php");
            }
        }
    }
    