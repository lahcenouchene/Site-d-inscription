<?php



if (isset($_POST["btnvalider"])) {
    require("connexion.php");
    $email = $_POST["email"];
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $daten = $_POST["date"];
    $lieun = $_POST["lieu"];
    $niveau = $_POST["niveau"];
    $tel = $_POST["telephone"];
    $facebook = $_POST["facebook"];
    $password = $_POST["password"];
    $amisbdd->exec("INSERT INTO candidat (email,nom,prenom,daten,lieun,niveau,tel,facebook,mdp) values('"
        . $email . "','" . $nom . "','" . $prenom . "','" . $daten . "','" . $lieun . "','" . $niveau . "','" .
        $tel . "','" . $facebook . "','" . $password . "')");
    echo ("<br>formation inserer avec succes");
}

?>


<!doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="site dune ecole de formation specialisee dans les nouvelles technologies de web">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Mon ecole</title>
</head>

<body>
    <header class="container-fluid">
        <div class="fixed-top">
            <?php
            include("navbar.php");


            ?>
        </div>
        <div class="divheader">
            <h1>bostez vous competences </h1>
            <small>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, rem eius? Esse beatae eaque ut
                aliquid,
                asperiores consequatur laudantium repellat. Quam provident repellendus beatae assumenda earum soluta sed
                placeat
                animi.
            </small><br>
            <button class="btn btn-outline-success" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Sinscrire</button>
            <a href="login.php"><button class="btn btn-outline-success">Se connecter</button></a>
        </div>
    </header>
    <main>
        <section class="container" style=" margin-top: 20px;">
            <div class="row">
                <div class="col-12" style="text-align: center; margin-bottom: 20px; ">
                    <h2 id="Formations" style=" padding-top: 80px;">Nos formations</h2>
                    <small>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</small>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="media">
                        <img src="images/web.png" class="mr-3" alt="...">
                        <div class="media-body">
                            <h5 class="mt-0">Developpement web</h5>
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
                            Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc
                            ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="media">
                        <img src="images/database.png" class="mr-3" alt="...">
                        <div class="media-body">
                            <h5 class="mt-0">base de donnees</h5>
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
                            Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc
                            ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="media">
                        <img src="images/network.png" class="mr-3" alt="...">
                        <div class="media-body">
                            <h5 class="mt-0"> Reseau informatique</h5>
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
                            Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc
                            ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="media">
                        <img src="images/mobile.png" class="mr-3" alt="...">
                        <div class="media-body">
                            <h5 class="mt-0">Developpement mobile</h5>
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
                            Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc
                            ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        </div>
                    </div>
                </div>

            </div>

        </section>
        <section class="container">
            <div class="row">
                <div class="col-12" style="margin-bottom: 20px; text-align: center;">
                    <h2 id="Missions" style="padding-top: 80px;">Votre reussite est notre mission </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-5" style="text-align: center;">
                    <img src="images/missionnaires.png" alt="" class="missionnaires">

                </div>
                <div class="col-12 col-md-7">
                    <div id="mission">
                        <h3>Sourriez vous etes formes</h3>
                        <small>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere quaerat incidunt
                            perspiciatis eveniet repellendus atque ad!</small>
                        <br>
                        <br>
                        <ul>
                            <li>Lorem ipsum sit amet consectetur.</li>
                            <li>Lorem dolor sit amet consectetur.</li>
                            <li>Lorem ipsum dolor amet consectetur.</li>
                            <li>Lorem ipsum dolor sit consectetur.</li>
                            <li>Lorem ipsum dolor sit amet consectetur.</li>
                        </ul>

                    </div>
                </div>

            </div>

        </section>
        <section class="container">
            <div class="row">
                <div class="col-12" style="text-align: center;">
                    <h2 id="Notre Equipe" style="padding-top: 80px;">rencontrez notre equipe</h2>
                    <p>une equipe d'experet au services de nos apperenants</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="formateur">
                        <img src="images/formateur1.jpg" alt="" width="200">
                        <p>nom prenom <br>formateur en ... <br><a href=""></a><img src="images/facebook.png" alt=""><a href=""><img src="images/twitter.png" alt=""></a><a href=""><img src="images/instagram.png" alt=""></a></p>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="formateur">
                        <img src="images/formateur2.jpg" alt="" width="200">
                        <p>nom prenom <br>formateur en ... <br><a href=""></a><img src="images/facebook.png" alt=""><a href=""><img src="images/twitter.png" alt=""></a><a href=""><img src="images/instagram.png" alt=""></a></p>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="formateur">
                        <img src="images/formateur3.jpg" alt="" width="200">
                        <p>nom prenom <br>formateur en ... <br><a href=""></a><img src="images/facebook.png" alt=""><a href=""><img src="images/twitter.png" alt=""></a><a href=""><img src="images/instagram.png" alt=""></a></p>
                    </div>
                </div>

            </div>

        </section>
        <section class="container">
            <div class="row">
                <div class="col-12" style="text-align: center; margin-bottom: 20px;">
                    <h2 id="Attestations" style="padding-top: 80px;">premier pas vers votre qualification</h2>
                    <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure consequuntur repellendus
                        explicabo fugit voluptas est, ut amet maxime. Quasi quisquam animi doloremque, tempora delectus
                        dignissimos perspiciatis inventore officiis eaque magni.
                        Inventore rem, itaque animi at doloribus aperiam eveniet suscipit ratione hic quisquam ipsam
                        sed. Repudiandae nemo harum provident, quod, excepturi explicabo vitae distinctio officia,
                        debitis sit fugiat quo ipsa sunt.</small>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-8">
                    <div class="graduate">
                        <img src="images/graduate.png" alt="" width="150">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus odio repellendus
                            voluptatum? Animi nulla expedita eius esse libero aspernatur praesentium aut non culpa. Ut
                            nostrum consequuntur culpa deleniti laboriosam aliquid! lore</p>
                        <button class="btn btn-outline-success">En savoir plus</button>
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <div class="quote">
                        <img src="images/quote30.png" alt=""><br>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum velit quisquam ratione
                            perferendis repellat. Dicta fuga labore non quisquam libero fugit, aperiam accusantium modi
                            tenetur vel dolore nulla perferendis pariatur? Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Quia quibusdam aliquam repudiandae quod nobis unde eum accusantium quo
                            quisquam, facere hic enim nam quam corporis iure sunt ratione. Aperiam, ad?</p>
                    </div>

                </div>
            </div>

        </section>
    </main>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="index1.php" method="post">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Espace Inscription</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" style="text-align: center;">
                        <img src="images/geek.png" alt="" width="150"><br>

                        <label for="">Veuillez renseigner les champs</label>
                        <div class="table-responsive">
                            <table>
                                <tr>
                                    <td><input type="text" name="nom" id="idnom" placeholder="veuillez indiquer votre nom">
                                    </td>
                                    <td><span id="idspan"></span></td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="prenom" id="idprenom" placeholder="veuillez indiquer votre prenom"></td>
                                    <td><span id="idspan2"></span></td>
                                </tr>
                                <tr>
                                    <td><label for="">date et lieu de naissance</label></td>
                                </tr>
                                <tr>
                                    <td><input type="date" name="date" id="iddate" placeholder="veuillez indiquer votre date">
                                    </td>
                                    <td><input type="text" name="lieu" id="idlieu" placeholder="veuillez indiquer votre lieu de naissance"></td>
                                </tr>
                                <tr>
                                    <td><label for="">Niveau:</label></td>
                                    <td><select name="niveau" id="niveau">
                                            <option value="L1">L1</option>
                                            <option value="L2">L2</option>
                                            <option value="L3">L3</option>
                                            <option value="M2">M1</option>
                                            <option value="M2">M2</option>
                                        </select></td>
                                </tr>
                                <tr>
                                    <td><input type="tel" name="telephone" id="idtelephone" placeholder="votre numero de telephone"> </td>
                                    <td><input type="text" name="facebook" id="idfacebook" placeholder="veuillez indiquer votre facebook"></td>
                                </tr>
                                <tr>
                                    <td><input type="email" name="email" id="idemail" placeholder="exemple@gmail.com"></td>
                                    <td><span id="spanemail"></span></td>
                                </tr>
                                <tr>
                                    <td><input type="password" name="password" id="idmdp" placeholder="veuillez indiquer votre mot de passe"></td>
                                    <td><span id="spanmdp"></span></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-success" data-bs-dismiss="modal">Fermer</button>
                        <button type="submit" class="btn btn-outline-success" name="btnvalider">Valider</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php
    include("footer1.php");
    
    ?>
    <!-- <div class="container">

        <div class="row">
            <div class="col-12 col-sm-3 col-md-6" style="background-color: red;">
                Contenu:1
            </div>
            <div class="col-12 col-sm-9 col-md-6" style="background-color: yellow;">
                contenu:2
            </div>
              
        </div>

    </div> -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="assets/js/validatioinscription.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <!-- small : permet de mettre a cote de paragraph des boutton -->
    <!-- quqnd on veut que toute le section saffiche entierement on utulise container fluide  -->
</body>

</html>