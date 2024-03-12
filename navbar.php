<nav class="navbar navbar-expand-lg navbar-light" style="border-bottom: solid 1px #9a1213;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="images/logo.png" width="50" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="#Formations">Formations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Missions">Missions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#Attestations">Attestations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#Notre Equipe">Notre Equipe</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#Contact">Contact</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <!-- Bouton de déconnexion -->
            <button class="btn btn-outline-danger ms-2" id="deconnexionBtn">Déconnecter</button>
        </div>
    </div>
</nav>

<script>
    // Ajoutez un événement de clic au bouton de déconnexion
    document.getElementById("deconnexionBtn").addEventListener("click", function() {
         // Rediriger vers index.php
         window.location.href = "index1.php";});
</script>



