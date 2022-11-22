<?php
include_once "header.php";
?>
<div class="signup-form">
    <h1>Prihlásenie</h1>
    <div class="signup-form-form">
        <form action="../includes/login.inc.php" method="post">
                <input type="text" name="uid" placeholder="Prezývka / Email...">
                <input type="password" name="pwd" placeholder="Heslo...">
            <button type="submit" name="submit">Prihlásit sa</button>
        </form>
    </div>
    <?php
    if (isset($_GET["error"])){
        if ($_GET["error"] == "emptyinput"){
            echo "<p> Vyplnte vsetky polia </p>";
        }
        elseif ($_GET["error"] == "wronglogin") {
            echo "<p> Nespravne prihlasovacie meno </p>";
        }
    }
    ?>
</div>
</div>
</body>
<footer></footer>
<script src="../JS/main.js"></script>
</html>