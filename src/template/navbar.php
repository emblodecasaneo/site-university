<nav>
            <a href="index.php?page=home"><img src="../../assets/logo1.png" alt="le log"></img></a>
            <div class="navigation">
                <ul>
                    <li><a href="index.php?page=home" class="<?= ($_GET['page'] ?? 'home') === 'home' ? 'active' : '' ?>">Home</a></li>
                    <li><a href="index.php?page=course" class="<?= ($_GET['page'] ?? 'home') === 'course' ? 'active' : '' ?>">Courses</a></li>
                    <li><a href="index.php?page=about" class="<?= ($_GET['page'] ?? 'home') === 'about' ? 'active' : '' ?>">About us</a></li>
                    <li><a href="index.php?page=contact" class="<?= ($_GET['page'] ?? 'home') === 'contact' ? 'active' : '' ?>">Contact</a></li>
                </ul>
            </div>
</nav>