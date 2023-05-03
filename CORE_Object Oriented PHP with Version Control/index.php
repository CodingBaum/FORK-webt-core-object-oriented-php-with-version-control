<!DOCTYPE HTML>
<html lang="en">
<head>
    <title> Gute-Videos website </title>
    <link rel="stylesheet" href="test.css">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
</head>
<body class="h-[100%]">
<?php
require("Video.php");
session_start();

$videoArray = array(
        $youtubeVideo = new YoutubeVideo("The Dragon Palace", 'https://www.youtube.com/embed/EoIhINb85kA'),
        $youtubeVideo = new YoutubeVideo("Mountain House", 'https://www.youtube.com/embed/JaTytztB0Nk'),
        $youtubeVideo = new YoutubeVideo("Wizard Tower", 'https://www.youtube.com/embed/EaRyDI0HjJY'),
        $youtubeVideo = new YoutubeVideo("Hobbit Hole", 'https://www.youtube.com/embed/rzeCdTZ5ylc'),
        $youtubeVideo = new YoutubeVideo("Beautiful Little Greenhouse Tutorial", 'https://www.youtube.com/embed/X6p65QXlI3A'),
        $vimeoVideo = new Vimeo("Oasis - a love letter to San Francisco", "https://player.vimeo.com/video/721214409?h=a4376a0ed2"),
        $vimeoVideo = new Vimeo("My Accomplice", "https://player.vimeo.com/video/731738424?h=f54a67bc9b&color=ffffff&title=0&byline=0&portrait=0&badge=0"),
        $vimeoVideo = new Vimeo("charlie hankin", "https://player.vimeo.com/video/758322686?h=88ffa414e2"),
        $vimeoVideo = new Vimeo("A Brief Disagreement", "https://player.vimeo.com/video/755602543?h=2422a5f12b"),
        $vimeoVideo = new Vimeo("Billie Eilish x Beat Saber", "https://player.vimeo.com/video/611934332?h=2851905f84&title=0&byline=0&portrait=0&badge=0")
    );

$_SESSION["videos"]=$videoArray;
if (!isset($_SESSION["index"])) {
    $_SESSION["index"]=0;
}

if (isset($_POST['button1'])) {
    if ($_SESSION["index"] > 0) {
        $_SESSION["index"]--;
    } else {
        $_SESSION["index"] = 9;
    }
}
if (isset($_POST['button2'])) {
    if ($_SESSION["index"] < 9) {
        $_SESSION["index"]++;
    } else {
        $_SESSION["index"] = 0;
    }
}
?>
<header class="md:h-[7rem] text-center text-4xl md:text-5xl lg:text-6xl underline mt-[2rem] mb-[1rem]">
    <?php
        echo $_SESSION["videos"][$_SESSION["index"]]->getName();
    ?>
</header>
<div class="h-[100%] items-center justify-center">
    <form method="post" class="h-[100%] flex flex-col md:flex-row items-center justify-center">
        <input name="button1" type="submit" class=" bg-gray-200 border border-black hover:bg-gray-300 transition text-7xl place-content-center rounded-3xl cursor-pointer flex justify-center align-middle w-[6rem] h-[6rem]" value="<">
        <div class="mr-20 ml-20 md:mb-0 ">
            <?php
            echo $_SESSION["videos"][$_SESSION["index"]]->getHTMLCode();
            ?>
        </div>
        <input name="button2" type="submit" class="lg:mt-8 sm:w-[3rem] lg:w-[6rem]  md:mt-0 bg-gray-200 border border-black hover:bg-gray-300 transition text-7xl place-content-center rounded-3xl cursor-pointer flex justify-center align-middle w-[6rem] h-[6rem]" value=">">
    </form>
</div>
</body>
</html>