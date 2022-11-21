<?php
include_once "header.php";
?>
<div class="signup-form">
    <h1>Registrácia</h1>
    <div class="signup-form-form">
    <form action="../includes/signup.inc.php" method="post">
        <input type="text" name="name" placeholder="Celé meno...">
        <input type="text" name="email" placeholder="Email..">
        <input type="text" name="uid" placeholder="Prezývka...">
        <input type="password" name="pwd" placeholder="Heslo...">
        <input type="password" name="pwdrepeat" placeholder="Zopakuj Heslo...">
        <button type="submit" name="submit">Registrovať</button>
    </form>
    </div>
    <?php
    if (isset($_GET["error"])){
        if ($_GET["error"] == "emptyinput"){
            echo "<p> Vyplnte vsetky polia </p>";
        }
        elseif ($_GET["error"] == "invaliduid") {
            echo "<p> Vyber spravne meno </p>";
        }
        elseif ($_GET["error"] == "invalidemail") {
            echo "<p> Zadajte email v spravnom tvare </p>";
        }
        elseif ($_GET["error"] == "passwordsdontmatch") {
            echo "<p> Hesla sa nezhoduju </p>";
        }
        elseif ($_GET["error"] == "stmtfailed") {
            echo "<p> Nieco sa pokazilo, opakujte registraciu </p>";
        }
        elseif ($_GET["error"] == "usernametaken") {
            echo "<p> Pouzivatelske meno sa uz pouziva, vyberte si ine meno </p>";
        }
        elseif ($_GET["error"] == "none") {
            echo "<p> Registracia prebehla uspesne </p>";
        }
    }
    ?>
</div>
</div>
</body>
<footer></footer>
<script src="../JS/main.js"></script>
</html>