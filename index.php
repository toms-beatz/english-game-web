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

<form method="post" action="enter_players.php" class="flex flex-col justify-center">
    <label class="refresh text-xl" for="numPlayers">Number of players (max. 5)</label>
    <input class="rounded mt-4 p-2" type="number" name="numPlayers" min="2" max="5" required>
    <input type="submit" value="Submit" class="cursor-pointer py-2 my-4 px-4 bg-[#4F30BF] text-white font-semibold rounded-lg shadow-md hover:bg-[#4F30BF] focus:outline-none border-b-4 border-r-4 border-[#9097FF] refresh text-md lg:text-lg">
</form>

</body>
</html>