<?php
    $current_page = basename($_SERVER['PHP_SELF']);
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
    </main>

    <?php include __DIR__ . "/Includes/footer.php"; ?>

</body>

</html>