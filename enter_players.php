<?php
session_start(); // Démarre la session

$players = [];

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer le nombre de joueurs depuis la première page
    $numPlayers = isset($_POST["numPlayers"]) ? intval($_POST["numPlayers"]) : 0;

    // Valider le nombre de joueurs (maximum 5)
    $numPlayers = max(1, min($numPlayers, 5));
    $_SESSION["num_player"] = $numPlayers;

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
<!-- Formulaire pour entrer le nombre de joueurs -->
<form method="post" action="gm-reveal.php" class="flex flex-col justify-center">

    <?php
    // Générer les champs pour les noms des joueurs en fonction du nombre choisi
    for ($i = 1; $i <= $numPlayers; $i++) {
        echo "<label class='refresh text-xl' for='player$i'>Player $i :</label>";
        echo "<input class='rounded mt-4 p-2 w-full' type='text' name='player$i' required><br>";
    }
    ?>
    <input class="cursor-pointer py-2 my-4 px-4 bg-[#4F30BF] text-white font-semibold rounded-lg shadow-md hover:bg-[#4F30BF] focus:outline-none border-b-4 border-r-4 border-[#9097FF] refresh text-md lg:text-lg" type="submit" value="Randomize the Game Master">
</form>
</body>
</html>