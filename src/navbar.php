<nav>
        <img src="../assets/logo3.png" alt="le log"></img>
        <div class="navigation">
            <ul>
                <li><a class="<?= ($_GET["page"] ?? "home") === "home" ? "active" :""?>" href="index.php?page=home">Home</a></li>
                <li><a class="<?= ($_GET["page"] ?? "about") === "about" ? "active" :""?>" href="index.php?page=about">About Us</a></li>
                <li><a class="<?= ($_GET["page"] ?? "courses") === "courses" ? "active" :""?>" href="index.php?page=courses">Courses</a></li>
                <li><a class="<?= ($_GET["page"] ?? "contact") === "contact" ? "active" :""?>" href="index.php?page=contact">Contact</a></li>
            </ul>
        </div>
    </nav>