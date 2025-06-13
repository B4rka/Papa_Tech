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
    <title>Papa Tech | A propos</title>
</head>

<body>

    <?php include __DIR__ . "/Includes/header.php"; ?>

    <main class="main-about">
        <h1>Notre mission :</h1>
        <p>Notre mission, chez Papa Tech, c'est avant tout votre sérénité. Nous oeuvrons pour que votre matériel informatique 
            n'ait plus de secrets pour vous. Grâce à nos formations abordables, nous vous accompagnons pas à pas dans la maîtrise de vos appareils.
        </p>
        <h1>Nos valeurs :</h1>
        <p>Nous croyons que tout le monde devrait avoir accès à un environnement technologique complet aussi bien pour se faciliter la vie 
            ou profiter du confort qu'offre le 21e siècle. C'est pour cela que nous proposons des prix plus attractifs pour les séniors.
            Il est toujours plus difficile de s'adapter et de changer ses habitudes après une vie entière passée sans technologie mais pour nous, c'est une raison supplémentaire 
            pour leur offrir notre aide et notre bienveillance pour que les séniors puissent eux-aussi en profiter.
        </p>
    </main>

    <?php include __DIR__ . "/Includes/footer.php"; ?>

</body>

</html>