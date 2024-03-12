<?php
session_start();


?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/stylemembre.css">
  <link rel="stylesheet" href="style.css">

  <title>Espace Membre</title>
</head>

<body>
  <?php
  include("navbar.php");
  ?>
  <main>
    <section class="container" style="margin-top: 50px;">
      <div class="row">
        <div class="col-12">
          <?php
          echo("<p> Bienvenue :</p>".$_SESSION["mail"]);
          
          ?>


          <h1>Mon espace membre</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-6">
          <p class="caros">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia ut commodi aliquid! Nihil fugit consectetur porro inventore quia, quos quis similique itaque sapiente. Rerum quidem deleniti deserunt. Vero, impedit rem!
            Fuga nihil ipsum tempore. Magnam excepturi, cum veritatis quaerat commodi doloremque ducimus exercitationem dignissimos ipsa repellat iste accusantium temporibus! Tenetur hic, dolore rerum molestias ad velit aspernatur accusantium praesentium repellendus?</p>
        </div>
        <div class="col-12 col-md-6">
          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/car2.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="images/car3.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="images/car4.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
    </section>
    <div class="cours" style="margin-top: 50px;">
      <section class="container" >
        <div class="row">
          <div class="col-12">
            <h1>Espace cours</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-md-4"></div>
          <div class="col-12 col-md-8">
            <div class="row">
              <div class="col-12 col-md-4">
                <img src="images/reader.png" alt="" width="50px">
                <a href="cours/Apprendre Le HTML De A à Z Pour Les Zéros.pdf">apprendre le html</a>
              </div>
              <div class="col-12 col-md-4">
                <img src="images/reader.png" alt="" width="50px">
                <a href="cours/apprendre-java-en-154-minutes.pdf">apprendre java</a>
              </div>
              <div class="col-12 col-md-4">
                <img src="images/reader.png" alt="" width="50px">
                <a href="cours/BasesdelaprogrammationCoursdeC.pdf">Cours de C</a>
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-md-4">
                <img src="images/reader.png" alt="" width="50px">
                <a href="cours/Cours Systeme linux.PDF">System linux</a>
              </div>
              <div class="col-12 col-md-4">
                <img src="images/reader.png" alt="" width="50px">
                <a href="cours/Cours_php.pdf">Apprendre php</a>
              </div>
              <div class="col-12 col-md-4">
                <img src="images/reader.png" alt="" width="50px">
                <a href="cours/PrenezenmainBootstrap.pdf">cours bootstrap </a>
              </div>
            </div>

          </div>
        </div>
      </section>
    </div>






  </main>

  <?php
  include("footer1.php");
  ?>





































  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>