<?php
$courses = [
    [
        "image" => "../assets/image4.jpeg",
        "start_date" => "10/10/204",
        "title" => "INGENIEURIE",
        "reviews" => 2456,
        "cost" => 1500000
    ],
    [
        "image" => "../assets/image2.jpeg",
        "start_date" => "10/10/204",
        "title" => "MANAGMENT",
        "reviews" => 24,
        "cost" => 1500000
    ],
    [
        "image" => "../assets/image5.jpeg",
        "start_date" => "10/10/204",
        "title" => "ECONOMIE/MANAGMENT",
        "reviews" => 2456,
        "cost" => 1500000
    ],
    
    // Ajoutez plus de cours ici...
];

$btscourses = [
    [
        "image" => "../assets/image4.jpeg",
        "start_date" => "10/10/204",
        "title" => "GRH",
        "reviews" => 2456,
        "cost" => 350000
    ],
    [
        "image" => "../assets/image2.jpeg",
        "start_date" => "10/10/204",
        "title" => "MANAGMENT",
        "reviews" => 24,
        "cost" => 814000
    ],
    [
        "image" => "../assets/image2.jpeg",
        "start_date" => "10/10/204",
        "title" => "GENI LOGICIEL",
        "reviews" => 2456,
        "cost" => 60000
    ],
    [
        "image" => "../assets/image6.jpeg",
        "start_date" => "10/10/204",
        "title" => "BATIMENT",
        "reviews" => 2456,
        "cost" => 60000
    ],
    
    // Ajoutez plus de cours ici...
];
?>

<section id="course">
    <h1 class="titre-course">PREPA RISS</h1>
    <p class="titre">two years in  Cameroon,three years abroad</p>
    <div class="course-box">
        <?php foreach ($courses as $course): ?>
            <div class="courses">
                <img src="<?= $course['image'] ?>" alt=""/>
                <div class="details">
                    <span class="class-day">Start to <?= $course['start_date'] ?></span>
                    <h4><?= $course['title'] ?></h4>
                    <div class="str-cost">
                    <div class="start-box">
                        <img class="start" src="../assets/star-solid.svg"/>
                        <img class="start" src="../assets/star-solid.svg"/> 
                        <img class="start" src="../assets/star-solid.svg"/> 
                        <img class="start" src="../assets/star-solid.svg"/>
                        <text class="avis">(<?= $course['reviews'] ?> avis)</text>
                    </div>
                    <a class="subscribe" href="">Subscribe</a>
                    </div>
                    <div class="cost">
                        $<?= ($course['cost']) ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <h1 class="titre-course">CYCLE BTS</h1>
    <p class="titre">Replenish man have thing gathering lights yielding shall you</p>
    <div class="course-box">
        <?php foreach ($btscourses as $course): ?>
            <div class="courses">
                <img src="<?= $course['image'] ?>" alt=""/>
                <div class="details">
                    <span class="class-day">Start to <?= $course['start_date'] ?></span>
                    <h4><?= $course['title'] ?></h4>
                    <div class="str-cost">
                    <div class="start-box">
                        <img class="start" src="../assets/star-solid.svg"/>
                        <img class="start" src="../assets/star-solid.svg"/> 
                        <img class="start" src="../assets/star-solid.svg"/> 
                        <img class="start" src="../assets/star-solid.svg"/>
                        <text class="avis">(<?= $course['reviews'] ?> avis)</text>
                    </div>
                    <a class="subscribe" href="">Subscribe</a>
                    </div>
                    <div class="cost">
                        $<?= ($course['cost']) ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
