<!doctype html>
<html>
    <head>
        <title>QR Code</title>
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <?php
        $value = '+43 1 22 33 444';

        if (isset($_GET["submit"])) {
            $value = ''.$_GET["input-field"];
        }

        require '../vendor/autoload.php';

        use Endroid\QrCode\Builder\Builder;
        use Endroid\QrCode\Encoding\Encoding;
        use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelHigh;
        use Endroid\QrCode\Label\Alignment\LabelAlignmentCenter;
        use Endroid\QrCode\Label\Font\NotoSans;
        use Endroid\QrCode\RoundBlockSizeMode\RoundBlockSizeModeMargin;
        use Endroid\QrCode\Writer\PngWriter;

        $result = Builder::create()
            ->writer(new PngWriter())
            ->writerOptions([])
            ->data("tel:".$value)
            ->encoding(new Encoding('UTF-8'))
            ->errorCorrectionLevel(new ErrorCorrectionLevelHigh())
            ->size(300)
            ->margin(10)
            ->roundBlockSizeMode(new RoundBlockSizeModeMargin())
            ->labelText($value)
            ->labelFont(new NotoSans(20))
            ->labelAlignment(new LabelAlignmentCenter())
            ->validateResult(false)
            ->build();

        $result->saveToFile(__DIR__.'/qrcode.png');
        ?>

        <div id="container">
            <form method="get">
                <label for="input-field">Enter a phone number:</label>
                <input id="input-field" name="input-field" type="text" placeholder="+43 1 22 33 444"><br>
                <input id="submit" name="submit" type="submit" value="Submit">
            </form>
            <?php
            $picture = '';
            if (isset($_GET["submit"])) {
                $picture = "qrcode.png";
            } else {
                $picture = "empty.png";
            }
            echo "<img src='".$picture."' alt='QR-Code'>";
            ?>
        </div>
    </body>
</html>