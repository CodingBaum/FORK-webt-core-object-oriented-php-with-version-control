<!doctype HTML>
<html lang="en">
    <head>
        <title> Video website dies das idk NILS IST LOST </title>
        <link rel="stylesheet" href="test.css">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    </head>
    <body>
        <header>
            <h1 class="text-3xl font-bold underline">
                Das ist ein toller Titel
            </h1>
            <hr>
        </header>
        <div class="yt">
            <?php
                require("Video.php");

                $youtubeVideo = new YoutubeVideo("The Dragon Palace", 'https://www.youtube.com/embed/EoIhINb85kA');
                echo $youtubeVideo->getHTMLCode();

                $youtubeVideo = new YoutubeVideo("Mountain House", 'https://www.youtube.com/embed/JaTytztB0Nk');
                echo $youtubeVideo->getHTMLCode();

                $youtubeVideo = new YoutubeVideo("Wizard Tower", 'https://www.youtube.com/embed/EaRyDI0HjJY');
                echo $youtubeVideo->getHTMLCode();

                $youtubeVideo = new YoutubeVideo("Hobbit Hole", 'https://www.youtube.com/embed/rzeCdTZ5ylc');
                echo $youtubeVideo->getHTMLCode();

                $youtubeVideo = new YoutubeVideo("Beautiful Little Greenhouse Tutorial", 'https://www.youtube.com/embed/X6p65QXlI3A');
                echo $youtubeVideo->getHTMLCode();
            ?>
        </div>
        <div id="vimeo">
            <?php
                $vimeoVideo = new Vimeo("Oasis - a love letter to San Francisco", "https://player.vimeo.com/video/721214409?h=a4376a0ed2");
                echo $vimeoVideo->getHTMLCode();

                $vimeoVideo = new Vimeo("My Accomplice", "https://player.vimeo.com/video/731738424?h=f54a67bc9b&color=ffffff&title=0&byline=0&portrait=0&badge=0");
                echo $vimeoVideo->getHTMLCode();

                $vimeoVideo = new Vimeo("charlie hankin", "https://player.vimeo.com/video/758322686?h=88ffa414e2");
                echo $vimeoVideo->getHTMLCode();

                $vimeoVideo = new Vimeo("A Brief Disagreement", "https://player.vimeo.com/video/755602543?h=2422a5f12b");
                echo $vimeoVideo->getHTMLCode();

                $vimeoVideo = new Vimeo("Billie Eilish x Beat Saber", "https://player.vimeo.com/video/611934332?h=2851905f84&title=0&byline=0&portrait=0&badge=0");
                echo $vimeoVideo->getHTMLCode();
            ?>
        </div>
    </body>
</html>