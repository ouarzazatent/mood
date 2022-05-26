<?php
function human_filesize($bytes, $decimals = 2) {
    $sz = ['o','Ko','Mo','Go','To','Po'];
    $factor = floor((strlen($bytes) - 1) / 3);
    return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . ' ' . @$sz[$factor];
}

function doc($docFile, $docName){
    return '<a class="lien-doc" href="'.$docFile.'" target="_blank"><li class="item-doc"><h4>'.$docName.'</h4><span class="material-symbols-outlined">download</span><br/><legend>'.human_filesize(filesize($docFile)).'</legend></li></a>';
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>mood - Plan Interactif</title>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
        <link rel="icon" type="image/x-icon" href="assets/images/favicon.svg">
        <link rel="StyleSheet" href="assets/style.css" type="text/css" /> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <script src="assets/script.js"></script>
    </head>
    <body>
        <?php include("header.php"); ?>
        <section>
            <article>
                <h2>Plan interactif</h2><hr/>
                <div id="plan-interactif">
                    <?php include("map/qgis2web_2022_05_07-17_53_13_936808/index.html"); ?>
                </div>
            </article>
            <article id="item2">
                <h2>Plans à télécharger</h2><hr/>
                <h3>Plans généraux</h3>
                <ul class="list-docs">
                    <?php echo doc("docs/plans/Plan_Nord_2022.pdf", "Plan schématique du réseau"); ?>
                    <?php echo doc("docs/plans/Plan_Nord_2022.pdf", "Plan détaillé du réseau"); ?>
                    <?php echo doc("docs/plans/Plan_Tram_2022.pdf", "Plan du réseau tramway"); ?>
                    <?php echo doc("docs/plans/Plan_Nuit_2022.pdf", "Plan du réseau de nuit"); ?>
                    <?php echo doc("docs/plans/Plan_Nord_2022.pdf", "Plan des stations mood vélo / P+R"); ?>
                    <?php echo doc("docs/plans/Plan_Nord_2022.pdf", "Guide touristique"); ?>
                </ul>

                <h3>Plans de secteur</h3>
                <ul class="list-docs">
                    <?php echo doc("docs/plans/Plan_Nord_2022.pdf", "Plan de Saint-Servan"); ?>
                    <?php echo doc("docs/plans/Plan_Nord_2022.pdf", "Plan du centre-ville"); ?>
                    <?php echo doc("docs/plans/Plan_Nord_2022.pdf", "Plan du Secteur Nord-Ouest (Salérin/Champlain)"); ?>
                    <?php echo doc("docs/plans/Plan_Nord_2022.pdf", "Plan du Secteur Nord-Est (Le Quevroux)"); ?>
                    <?php echo doc("docs/plans/Plan_Nord_2022.pdf", "Plan du Secteur Est (Cesson/Mayolay)"); ?>
                    <?php echo doc("docs/plans/Plan_Nord_2022.pdf", "Plan du Secteur Sud-Est (Campmalo)"); ?>
                    <?php echo doc("docs/plans/Plan_Nord_2022.pdf", "Plan du Secteur Sud-Ouest (Lanvilliers/Luscans)"); ?>
                </ul>

                <h3>Plans des pôles principaux</h3>
                <select class="plan" onchange="location = this.value;">
                    <option value="docs/plans/Plan_Nord_2022.pdf">Hôtel de Ville</option>
                    <option value="docs/plans/Plan_Nord_2022.pdf">Gare Duchalet</option>
                    <option value="docs/plans/Plan_Nord_2022.pdf">Thiers - Victor Hugo</option>
                    <option value="docs/plans/Plan_Nord_2022.pdf">Pallois/Les Halles</option>
                    <option value="docs/plans/Plan_Nord_2022.pdf">Hôpital Sud</option>
                    <option value="docs/plans/Plan_Nord_2022.pdf">Point Bleu</option>
                    <option value="docs/plans/Plan_Nord_2022.pdf">Porte de Rimur</option>
                    <option value="docs/plans/Plan_Nord_2022.pdf">Trois Mâts</option>
                    <option value="docs/plans/Plan_Nord_2022.pdf">Gare du Quevroux/Porte de la Trinité</option>
                    <option value="docs/plans/Plan_Verfontaine.pdf">Verfontaine</option>
                    <option value="docs/plans/Plan_Beaulieu_2022.pdf">Campus Beaulieu</option>
                    <option value="docs/plans/Plan_Nord_2022.pdf">Porte Atlantique</option>
                </select>
            </article>
        </section>
        <?php include("footer.php"); ?>
    </body>
</html>