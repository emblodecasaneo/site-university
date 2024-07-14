<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universite.com</title>
    <link rel="stylesheet" href="./src/style.css">
    <script src="https://kit.fontawesome.com/26eceab4c3.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
</head>
<body>
    <?php include('./src/template/navbar.php'); ?>

    <?php
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';

    switch ($page) {
        case 'home':
            include('./src/template/home.php');
            break;
        case 'about':
            include('./src/template/about.php');
            break;
        case 'contact':
            include('./src/template/contact.php');
            break;
        case 'course':
            include('./src/template/coures.php');
            break;
        default:
            include('./src/template/home.php');
            break;
    }
    ?>

    <?php include('./src/template/footer.php'); ?>

    <script src="./src/index.js"></script>
</body>
</html>