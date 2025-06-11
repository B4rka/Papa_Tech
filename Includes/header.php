<header>
    <div class="header-container">
        <div class="logo-socials">
            <a href="/"><img src="/Images/main-logo.PNG" alt="PapaTech Main Logo"></a>
            <div class="socials-container">
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
            </div>
        </div>
        <nav>
            <a href="/index.php" id="<?= ($current_page == 'index.php') ? 'active' : '' ?>">Accueil</a>
            <a href="/prestations.php" id="<?= ($current_page == 'prestations.php') ? 'active' : '' ?>">Nos Prestations</a>
            <a href="/contact.php" id="<?= ($current_page == 'contact.php') ? 'active' : '' ?>">Nous contacter</a>
            <a href="/about.php" id="<?= ($current_page == 'about.php') ? 'active' : '' ?>">A propos</a>
        </nav>
    </div>

</header>
