<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="addStyle.css">
    <title>Add Record</title>
</head>
<body>
<div id="container">
    <a id="linkHome" href="./">Home</a>
    <div>
        <?php
        include 'db_connector.php';
        if (isset($_GET['submit'])) {
            $boolean1 = strcasecmp($_GET['symbol1'], "schere") != 0 && strcasecmp($_GET['symbol1'], "stein") != 0 && strcasecmp($_GET['symbol1'], "papier") != 0;
            $boolean2 = strcasecmp($_GET['symbol2'], "schere") != 0 && strcasecmp($_GET['symbol2'], "stein") != 0 && strcasecmp($_GET['symbol2'], "papier") != 0;
            if ($boolean1 || $boolean2) {
                echo "<div class='error'>Bitte geben Sie als symbols nur 'Schere', 'Stein' oder 'Papier' ein!</div>";
            } else {
                addGame($_GET['player1'], $_GET['symbol1'], $_GET['symbol2'], $_GET['player2']);
                echo "Submitted successful!";
            }
        }
        ?>
    </div>
    <form method="GET">
        <label>
            Name of Player 1:
            <input id="player1" name="player1" type="text" required>
        </label>
        <label>
            Symbol chosen by Player 1:
            <select id="symbol1" name="symbol1">
                <option value="Schere">Schere</option>
                <option value="Stein">Stein</option>
                <option value="Papier">Papier</option>
            </select>
        </label>
        <div id="line"></div>
        <label>
            Symbol chosen by Player 2:
            <select id="symbol2" name="symbol2">
                <option value="Schere">Schere</option>
                <option value="Stein">Stein</option>
                <option value="Papier">Papier</option>
            </select>
        </label>
        <label>
            Name of Player 2:
            <input id="player2" name="player2" type="text" required>
        </label>
        <input id="submit" name="submit" type="submit" value="Submit">
    </form>
</div>
</body>
</html>