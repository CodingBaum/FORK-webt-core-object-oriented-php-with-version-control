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
        <div class="id">ID</div>
        <div class="date">DATE</div>
        <div class="name1">NAME1</div>
        <div class="pick1">PICK1</div>
        <div class="middle">:</div>
        <div class="pick2">PICK2</div>
        <div class="name2">NAME2</div>
        <p></p>
    </div>
    <?php
    include 'db_connector.php';

    if (isset($_GET["DELETE"])) {
        $id = $_GET["id"];
        deleteGame($id);
    }

    $allGames = getAllGames();

    $filename = "./RPS-Game_template.html";
    $handle = fopen($filename, "r");
    $rpsTemplate = fread($handle, filesize($filename));
    fclose($handle);

    $loopContent = "";

    foreach ($allGames as $value) {
        $content = str_replace("NAME1", $value['fk_pk_player1'], $rpsTemplate);
        $content = str_replace("ID", $value['pk_id'], $content);
        $content = str_replace("PICK1", $value['symbol1'], $content);
        $content = str_replace("PICK2", $value['symbol2'], $content);
        $content = str_replace("NAME2", $value['fk_pk_player2'], $content);
        $content = str_replace("DATE", $value['date'] . "", $content);
        echo $content;
    }
    ?>
</div>
<a id="linkAdd" href="addRecord.php">Add Record</a>
</body>
</html>