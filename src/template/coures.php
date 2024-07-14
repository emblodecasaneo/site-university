<?php
$courses = [
    [
        "image" => "../assets/back.jpeg",
        "start_date" => "10/10/204",
        "title" => "Licence cycle",
        "reviews" => 2456,
        "cost" => 350000
    ],
    [
        "image" => "../assets/back.jpeg",
        "start_date" => "10/10/204",
        "title" => "Prepa licence",
        "reviews" => 24,
        "cost" => 814000
    ],
    [
        "image" => "../assets/back.jpeg",
        "start_date" => "10/10/204",
        "title" => "JavaScript Beginners Courses",
        "reviews" => 2456,
        "cost" => 60000
    ],
    // Ajoutez plus de cours ici...
];
?>

<section id="course">
    <h1>Our Popular Courses</h1>
    <p class="titre">Replenish man have thing gathering lights yielding shall you</p>

    <div class="course-box">
        <?php foreach ($courses as $course): ?>
            <div class="courses">
                <img src="<?= $course['image'] ?>" alt=""/>
                <div class="details">
                    <span class="class-day">Start to <?= $course['start_date'] ?></span>
                    <h4><?= $course['title'] ?></h4>
                    <div class="start-box">
                        <img class="start" src="../assets/star-solid.svg"/>
                        <img class="start" src="../assets/star-solid.svg"/> 
                        <img class="start" src="../assets/star-solid.svg"/> 
                        <img class="start" src="../assets/star-solid.svg"/>
                        <text class="avis">(<?= $course['reviews'] ?> avis)</text>
                    </div>
                    <div class="cost">
                        $<?= number_format($course['cost'], 2) ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
