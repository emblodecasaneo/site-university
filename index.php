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

</head>

<body>
 
<?php $page = isset($_GET["page"]) ? ($_GET["page"]) : "home" ?>
<?php include("./src/navbar.php")?>

<?php 
switch($page){
    case "home":
        include ("./src/home.php");
    break;
    case "courses":
        include ("./src/courses.php");
    break;
    case "about":
        include ("./src/aboutus.php");
    break;
    case "contact":
        include ("./src/contact.php");
    break;
    

}
?>

<?php include("./src/footer.php")?>


</body>
</html>