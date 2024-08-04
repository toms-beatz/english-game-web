<?php
include('brands/brands.php');
include ('brands/briefs.php');
$easyImgPath = 'brands/img/';
$randomBrandKey = array_rand($brands,  1);
$randomBrandName = $randomBrandKey;
$randomBrandImg = $easyImgPath . $brands[$randomBrandKey];
$randomCampainAim = array_rand($campainAim,  1);;
$randomPublic = array_rand($public,  1);;
$randomSupport = array_rand($support,  1);;
$randomToAvoid = array_rand($toAvoid, 1);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/styles.css">

    <title>Brand Puzzler</title>
</head>
<body class="flex flex-col justify-center items-center w-screen h-screen bg-[#f2b6cc]">
<!--<div class="bg-[#F279A6]">#F279A6</div>-->
<!--<div class="bg-[#4F30BF]">#4F30BF</div>-->
<!--<div class="bg-[#F25749]">#F25749</div>-->
<div class="flex flex-col items-center w-full h-3/6 lg:h-100">
    <h1 class="text-5xl lg:text-6xl text-[#F279A6]">Brand Puzzler</h1>
    <div class="brand-card flex flex-col items-center justify-around bg-[#f1f1f1] w-4/6 lg:w-3/12 rounded-lg mt-12 border-r-8 border-b-8 border-[#F279A6]">
        <img class="w-3/6 h-40 object-contain mt-4" src=" <?= $randomBrandImg ?>" />
        <div class="flex flex-col w-5/6 h-2/6 mt-4 my-6 text-lg">
            <div class="item">
                <p>Campain : <?= $campainAim[$randomCampainAim] ?></p>
            </div>
            <div class="item">
                <p>Public : <?= $public[$randomPublic] ?></p>
            </div>
            <div class="item">
                <p>Support : <?= $support[$randomSupport] ?></p>
            </div>
            <div class="item">
                <p>Avoid : <?php  echo '<span id="avoidSpan" class="">'.$toAvoid[$randomToAvoid].'</span> - <span id="category">'.$randomToAvoid.'</span>'; ?></p>
            </div>
        </div>
        <a class="py-2 my-4 px-4 bg-[#4F30BF] text-white font-semibold rounded-lg shadow-md hover:bg-[#4F30BF] focus:outline-none border-b-4 border-r-4 border-[#9097FF] refresh text-md lg:text-lg" href="<?php $_SERVER['PHP_SELF']; ?>">Refresh</a>
    </div>

    <a class="py-2 my-4 px-4 bg-[#4F30BF] text-white font-semibold rounded-lg shadow-md hover:bg-[#4F30BF] focus:outline-none border-b-4 border-r-4 border-[#9097FF] refresh text-md lg:text-lg" href="index.php">Start a new game</a>
</div>
<script src="https://cdn.tailwindcss.com"></script>
<script src="assets/js/script.js"></script>
</body>
</html>
