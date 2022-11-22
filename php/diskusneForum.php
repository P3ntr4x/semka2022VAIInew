<?php

    require_once "../includes/dbPripojenie.php";

    if(isset($_POST['submit'])) {
        $usersIds = $_SESSION["userid"];
        $titulok = $_POST["zadajte_titulok"];
        $obsah = $_POST["obsah_prispevku"];



        $sql = "INSERT INTO `posts`(`id`, `usersIds`, `titulok`, `obsah`) 
                VALUES (NULL,'$usersIds','$titulok','$obsah')";

        $result = mysqli_query($conn, $sql);

        if ($result) {
            header("location: ../php/index.php?error=success");
        } else {
            echo "Failed:" .mysqli_error($conn);
        }
    }
?>

<?php
    include_once "header.php";
?>
<h1>Diskusné fórum</h1>
  <div class="forum">

  </div>
    <div class="text-center mb-4">
        <h3>Pridaj nový príspevok</h3>
        <p class="text-muted"> Vyplnte všetky polia nižšie</p>
    </div>

<div class="container d-flex justify-content-center">
    <form action="" method="post" style="width: 50vw; min-width: 300px;">
        <div class="row">
            <div class="col">
                <label class="form-label"> Zadajte titulok:</label>
                <input type="text" class="form-control" name="zadajte_titulok" placeholder="Nazov titulku">
            </div>

            <div class="col">
                <label class="form-label"> Napiste obsah Vasho prispevku:</label>
                <input type="text" class="form-control" name="obsah_prispevku" placeholder="...">
            </div>
        </div>
        <div>
            <button type="submit" class="btn btn-success" name="odoslat">Odoslať</button>
            <a href="diskusneForum.php" class="btn btn-danger">Vymazať</a>
        </div>
    </form>
</div>

</div>
</body>
<footer></footer>
<script src="../JS/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</html>