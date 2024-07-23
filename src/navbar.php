<nav>
        <a href="index.php?page=home"><img src="src/logo3.png" alt="le logo"></a>
        <div class="navigation">
            <ul>
                <li><a href="index.php?page=home" class="<?= ($_GET['page'] ?? 'home') === 'home' ? 'active' : '' ?>" >Home</a></li>
                <li><a href="index.php?page=courses" class="<?= ($_GET['page'] ?? 'home') === 'courses' ? 'active' : '' ?>" >Courses</a></li>
                <li><a href="index.php?page=about" class="<?= ($_GET['page'] ?? 'home') === 'about' ? 'active' : '' ?>" >About us</a></li>
                <li><a href="index.php?page=contact" class="<?= ($_GET['page'] ?? 'home') === 'contact' ? 'active' : '' ?>" >Contact</a></li>
            </ul>
        </div>
</nav>