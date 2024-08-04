<?php
session_start();
// Récupérer les noms des joueurs depuis le formulaire
for ($i = 1; $i <= intval($_SESSION["num_player"]); $i++) {
    $fieldName = "player" . $i;
    if (isset($_POST[$fieldName]) && !empty($_POST[$fieldName])) {
        $players[] = $_POST[$fieldName];
    }
}


// Trier les joueurs de manière aléatoire
shuffle($players);

// Choisir le premier joueur trié aléatoirement s'il y a des joueurs
if (!empty($players)) {
    $randomPlayer = array_shift($players);
    // Stocker le joueur choisi dans la session
    $_SESSION['randomPlayer'] = $randomPlayer;

} else {
    // Rediriger vers enter_players.php si la liste de joueurs n'est pas définie
    header("Location: enter_players.php");
    exit();
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Brand Puzzler</title>
</head>
<body class="flex flex-col justify-center items-center w-screen h-screen bg-[#f2b6cc]">
<?=
    '<p class="text-2xl text-center">
        <span class="reveal">Your Game Master is </span>
        <span class="gm text-4xl">'.$randomPlayer.'✨</span>
    </p>';
?>
    <a class="py-2 my-4 px-4 bg-[#4F30BF] text-white font-semibold rounded-lg shadow-md hover:bg-[#4F30BF] focus:outline-none border-b-4 border-r-4 border-[#9097FF] refresh text-md lg:text-lg" href="game.php">Play</a>
</body>
</html>