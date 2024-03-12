<?php
session_start();
require("connexion.php");
if (isset($_POST["connecter"])) {
    $compte = $amisbdd->query("SELECT email,mdp FROM candidat");
    $exist = false;
    while ($tuplle = $compte->fetch()) {
        if ($_POST["mail"] == $tuplle["email"] && $_POST["password"] == $tuplle["mdp"]) {
            $exist = true;
            break;
        }
    }
    if ($exist == true) {
        $_SESSION["connected"]=true;
        $_SESSION["mail"]=$_POST["mail"];
        header("location: espacemembre.php");
    } else {
        $_SESSION["connected"]=false;
        header("location: login.php");
        
    }
}


?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/login.css">

    <title>Espace connexion</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-6" id="idlogin" style="padding-top: 60vh;">

                <div class="divlogin">

                    <img src="images/quote30.png" alt="" width="20">&nbsp; &nbsp;
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, corporis.
                </div>
                <div class="divlogin">

                    <img src="images/quote30.png" alt="" width="20">&nbsp; &nbsp;
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, corporis.
                </div>
                <div class="divlogin">

                    <img src="images/quote30.png" alt="" width="20">&nbsp; &nbsp;
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, corporis.
                </div>

            </div>
            <div class="col-12 col-md-6" style="text-align: center; padding-top: 20vh;">
                <form action="login.php" method="post">
                    <h1>Espace logine</h1>
                    <i class="fa fa-user-circle-o fa-5x" aria-hidden="true" id="user"></i>
                    <div class="entrer">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <input type="email" name="mail" id="mail" placeholder="exemple@gmail.com">
                    </div>
                    <div class="entrer">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        <input type="password" name="password" id="password" placeholder="mot de passe">
                        <span id="idspan">
                            <i class="fa fa-eye" aria-hidden="true" id="eye"></i>
                            <i class="fa fa-eye-slash" aria-hidden="true" id="eyes"></i>
                        </span>
                    </div>
                    <div>
                        <input type="checkbox" name="rmdp" id="rmdp" value="retenir le mot de passe">
                        <label for="rmdp">retenir le mot de passe</label>

                    </div>
                    <button type="submit" id="bconnecter" name="connecter">Se connecter</button>
                </form>

            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        -->
    <script src="assets/js/login.js"></script>
</body>

</html>