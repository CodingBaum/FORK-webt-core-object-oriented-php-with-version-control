<!doctype html>
<html>
    <head>
        <title>QR Code</title>
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <?php
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
            ->data('tel:+43 1 22 33 444')
            ->encoding(new Encoding('UTF-8'))
            ->errorCorrectionLevel(new ErrorCorrectionLevelHigh())
            ->size(300)
            ->margin(10)
            ->roundBlockSizeMode(new RoundBlockSizeModeMargin())
            ->labelText('')
            ->labelFont(new NotoSans(20))
            ->labelAlignment(new LabelAlignmentCenter())
            ->validateResult(false)
            ->build();

        $result->saveToFile(__DIR__.'/qrcode.png');
        ?>
        <img src="qrcode.png">
    </body>
</html>