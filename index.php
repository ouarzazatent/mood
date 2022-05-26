<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>mood - Transports de Saint-Servan Métropole</title>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
        <meta name="description" content="L'assistant de tous vos déplacements en bus, tramway, train, vélo, covoiturage au sein de Saint-Servan Métropole." />
        <link rel="icon" type="image/x-icon" href="assets/images/favicon.svg">
        <link rel="stylesheet" href="assets/style.css" type="text/css" /> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <script src="assets/script.js"></script>
    </head>
    <body >
        <?php include("header.php"); include("accueil-menu.php"); ?>
        <section>
            <article id="accueil">
                <h2>Info Trafic</h2><hr/>

                <h3><span class="material-symbols-outlined">tram</span> Tramway / Train</h3>
                <ul class="list-lignes" id="list-lignes-tram"></ul>

                <h3><span class="material-symbols-outlined">departure_board</span> Chronobus</h3>
                <ul class="list-lignes" id="list-lignes-chronobus"></ul>

                <h3><span class="material-symbols-outlined">directions_bus</span> Bus</h3>
                <ul class="list-lignes" id="list-lignes-bus"></ul>

                <h3><span class="material-symbols-outlined">double_arrow</span> Express</h3>
                <ul class="list-lignes" id="list-lignes-express"></ul>

                <h3><span class="material-symbols-outlined">bedtime</span> Nocturne</h3>
                <ul class="list-lignes" id="list-lignes-nooz"></ul>

                <h3><span class="material-symbols-outlined">hail</span> Navettes</h3>
                <ul class="list-lignes" id="list-lignes-navette"></ul>
            </article>
            <article id="item2">
                <h2>Actualités</h2><hr/>

                <div class="list-actu">
                    <a href="" class="item-actu">
                        <img src="assets/images/actu/validation.svg" />
                        <div class="desc-actu"><p>Choisissez votre mode de validation préféré</p></div>
                    </a>
                    <a href="" class="item-actu">
                        <img src="assets/images/actu/pool.svg" />
                        <div class="desc-actu"><p>Le covoiturage, on y go avec Klaxit et Ouestgo !</p></div>
                    </a>
                    <a href="" class="item-actu">
                        <img src="assets/images/actu/citypass.svg" />
                        <div class="desc-actu"><p>Le citypass, la liberté de découvrir et s'évader</p></div>
                    </a>
                    <a href="actualites.php" class="next"><span class="material-symbols-outlined">add</span></a>
                </div>
            </article>
            <img class="banniere" src="assets/images/actu/appli.svg" />
        </section>
        <?php include("footer.php"); ?>
    </body>
</html>