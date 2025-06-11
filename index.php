<?php
    $current_page = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="/Styles/style.css">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <title>Papa Tech | Accueil</title>
</head>

<body>

    <?php include __DIR__ . "/Includes/header.php"; ?>

    <main class="main-index">
        <h1>Bienvenue chez Papa Tech ! Votre technicien informatique à domicile !</h1>

        <article class="left-article">
            <h3>Chez Papa Tech, notre priorité : votre tranquilité</h3>
            <p>La technologie est parfois dure à comprendre et à appréhender. Chez Papa Tech, nous travaillons pour que personne n'ait à lutter avec son matériel technique.</p><br>
            <p>Quel que soit votre problème, nous nous engageons à le résoudre et à vous expliquer comment l'éviter à l'avenir</p><br>
            <p>Ne subissez plus, profitez !</p>
        </article>
        <article class="right-article">
            <h3>L'apprentissage à tout âge</h3>
            <p>Chez Papa Tech, nous offrons également des services de formation pour les personnes souhaitant en apprendre un peu plus sur la technologie. 
                Que ce soit pour gagner en autonomie ou ne plus dépendre des services après-vente</p><br>
            <p>Si vous avez une question, vous pouvez nous contacter sur <a href="/contact.php">cette page</a></p>
        </article>
    </main>

    <?php include __DIR__ . "/Includes/footer.php"; ?>

</body>

</html>