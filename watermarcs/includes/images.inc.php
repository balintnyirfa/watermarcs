<?php
    session_start();
    require_once './dbh.inc.php';

    if (isset($_SESSION["userId"])) {
        if (isset($_FILES["kep"])) {
            $eredetinev = $_FILES["kep"]["name"];
            $taroltnev = basename($_FILES["kep"]["tmp_name"]);
            $kepcim = $_POST["cim"];
            $kepmeret = $_FILES["kep"]["size"];
            $datum = $_POST["datum"];
            $leiras = $_POST["leiras"];

            if (copy($_FILES["kep"]["tmp_name"], "../img/userimg/$taroltnev")) {
                $sql = "insert into images (imgUserID, imgOgName, imgSize, imgStoredName, imgDescr, imgDate, imgTitle) values (".$_SESSION["userId"].", '$eredetinev', '$kepmeret', '$taroltnev', '$leiras', '$datum', '$kepcim')";

                if ($conn -> query($sql) == true) {
                    header("location: ../images.php");
                }
                else {
                    unlink("../img/userimg/".$taroltnev);
                }
            }
        }
    }