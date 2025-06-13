<?php
    $current_page = basename($_SERVER['PHP_SELF']);

    include __DIR__ . "/services.php";
?>

<!DOCTYPE html>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/Styles/style.css">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <title>Papa Tech | Nos prestations</title>
</head>

<body>

    <?php include __DIR__ . "/Includes/header.php"; ?>

    <main>
        <h1>Nos prestations</h1>
        <div class="tarifs-container">
            <h2 class="tarifs-title">Papa Tech - Tarifs 2025</h2>
            <h3 class="offres">
                <div class="offres-description">
                    <p>Offre Standard</p>
                    <p>Offre Sénior</p>
                </div>
            </h3>
            <h3>A domicile</h3>
            <div class="offre-container">
                <div class="offre-texte">
                    <p><?= $services['assistance']['nom'] ?></p>
                    <p><?= $services['assistance']['descriptif'] ?></p>
                </div>
                <div class="offre-tarif-standard">
                    <?= $services['assistance']['offre standard']?>
                </div>
                <div class="offre-tarif-sénior">
                    <?= $services['assistance']['offre sénior']?>
                </div>
            </div>
            <div class="offre-container">
                <div class="offre-texte">
                    <p><?= $services['sérénité']['nom'] ?></p>
                    <p><?= $services['sérénité']['descriptif'] ?></p>
                </div>
                <div class="offre-tarif-standard">
                    <?= $services['sérénité']['offre standard']?>
                </div>
                <div class="offre-tarif-sénior">
                    <?= $services['sérénité']['offre sénior']?>
                </div>
            </div>
            <h3>A distance</h3>
            <div class="offre-container">
                <div class="offre-texte">
                    <p><?= $services['visio']['nom'] ?></p>
                    <p><?= $services['visio']['descriptif'] ?></p>
                </div>
                <div class="offre-tarif-standard">
                    <?= $services['visio']['offre standard']?>
                </div>
                <div class="offre-tarif-sénior">
                    <?= $services['visio']['offre sénior']?>
                </div>
            </div>
            <div class="offre-container">
                <div class="offre-texte">
                    <h3><?= $services['formation express']['nom'] ?></h3>
                    <p><?= $services['formation express']['descriptif'] ?></p>
                </div>
                <div class="offre-tarif-standard">
                    <?= $services['formation express']['offre standard']?>
                </div>
                <div class="offre-tarif-sénior">
                    <?= $services['formation express']['offre sénior']?>
                </div>
            </div>
            <div class="offre-container">
                <div class="offre-texte">
                    <h3><?= $services['personnalisée']['nom'] ?></h3>
                    <p><?= $services['personnalisée']['descriptif'] ?></p>
                    <h4><?= $services['personnalisée']['nom offre1'] ?></h4>
                    <h4><?= $services['personnalisée']['nom offre2'] ?></h4>
                </div>
                <div class="offre-tarif-standard" id="tarif-standard-perso">
                    <p id="upper-tarif"><?= $services['personnalisée']['offre standard1']?></p>
                    <p><?= $services['personnalisée']['offre standard2']?></p>
                </div>
                <div class="offre-tarif-sénior" id="tarif-sénior-perso">
                    <p id="upper-tarif"><?= $services['personnalisée']['offre sénior1']?></p>
                    <p><?= $services['personnalisée']['offre sénior2']?></p>
                </div>
            </div>
        </div>

    </main>

    <?php include __DIR__ . "/Includes/footer.php"; ?>

</body>

</html>