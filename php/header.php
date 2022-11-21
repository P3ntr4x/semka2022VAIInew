<?php
 session_start();
?>


<!DOCTYPE html>
<html lang="en">
<meta charset='utf-8'>
<link rel="icon" type="image/x-icon" href="../images/ikona.ico"/>
<header></header>
<body>
<div class="hlavicka">
    <nav>
        <a href="index.php"><img src="../images/logo.png" alt="Logo mojej stranky"></a>
        <div class="menu" id="menuB">
            <i class="fa fa-times" onclick="skryMenu()"></i>
            <ul>
                <li><a href="index.php"> Domov</a></li>
                <li><a href="novinky.php"> Novinky</a></li>
                <li><a href="turnaje.php"> Turnaje</a></li>
                <li><a href="hrdinovia.php"> Hrdinovia</a></li>
                <li><a href="rebricek.php"> Rebríček</a></li>
                <?php
                    if (isset($_SESSION["userid"])){
                        echo "<li><a href='diskusneForum.php'> Diskusné fórum</a></li>";
                        echo "<li><a href='../includes/logout.inc.php'> Odhlásiť sa</a></li>";
                    }
                    else {
                        echo "<li><a href='signup.php'> Registrácia</a></li>";
                        echo "<li><a href='login.php'> Prihlásenie</a></li>";
                    }
                ?>
            </ul>
        </div>
        <i class="fa fa-bars" onclick="zobrazMenu()"></i>
    </nav>
