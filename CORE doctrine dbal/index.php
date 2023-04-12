<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <title>Doctrine DBAL</title>
</head>
<body>
<h1>USARPS Championship 2023</h1>
<h3>Date: 01.01.2024</h3>
<div id="rps-wrapper">
    <div id="rps-header" class="rps-game">
        <div id="date">DATE</div>
        <div id="name1">NAME1</div>
        <div id="pick1">PICK1</div>
        <div id="middle">:</div>
        <div id="pick2">PICK2</div>
        <div id="name2">NAME2</div>
        <p></p>
    </div>
    <?php
    include 'db_connector.php';

    $allGames = getAllGames();

    $filename = "./RPS-Game_template.html";
    $handle = fopen($filename, "r");
    $rpsTemplate = fread($handle, filesize($filename));
    fclose($handle);

    $loopContent = "";

    foreach ($allGames as $value) {
        $content = str_replace("NAME1", getPlayerNameById($value['fk_pk_player1'])."", $rpsTemplate);
        $content = str_replace("PICK1", $value['symbol1'], $content);
        $content = str_replace("PICK2", $value['symbol2'], $content);
        $content = str_replace("NAME2", getPlayerNameById($value['fk_pk_player2'])."", $content);
        $content = str_replace("DATE", $value['date']."", $content);
        echo $content;
    }
    ?>
</div>
</body>
</html>