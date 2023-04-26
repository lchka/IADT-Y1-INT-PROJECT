<?php
require_once './etc/config.php';

try {
    //  $stories = Story::findAll();
    $categories = Category::findAll();
    $mainStoryRight = Story::findNum(2, 10);
    $mainStoryLeft = Story::findNum(1, 8);
    $latestStory = Story::findNum(1, 0);
    $fourMedium = Story::findNum(4, 15);
    $motorNews = Story::findNum(3, 7);
    $sixButRight = Story::findNum(1, 1);
    $elongatedSection = Story::findNum(2, 19);
    $twoComps = Story::findNum(2, 4);
    $sixComps = Story::findNum(6, 3);
} catch (Exception $e) {
    echo $e;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@500&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Titillium+Web:wght@600;700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@400;600;700&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Gulzar&family=Merriweather+Sans:wght@500&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Playfair+Display:wght@400;500;600;800;900&family=Titillium+Web:wght@600;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="Styles/all.min.css">
    <link rel="stylesheet" href="Styles/reset.css">
    <link rel="stylesheet" href="Styles/grid.css">
    <link rel="stylesheet" href="Styles/styles.css">
    <link rel="stylesheet" href="Styles/footer.css">
    <link rel="stylesheet" href="Styles/motorNews.css">
    <link rel="stylesheet" href="Styles/sixStories.css">
    <link rel="stylesheet" href="Styles/elongated.css">
    <link rel="stylesheet" href="Styles/fourMediumStories.css">
    <link rel="stylesheet" href="Styles/mainStory.css">
    <link rel="stylesheet" href="Styles/latestStory.css">
    <link rel="stylesheet" href="Styles/header.css">

    <title>Straight Piped News</title>
</head>

<body>
    <!-- HEADER -->
    <header>
        <div class="container">
            <div class="navBar width-6">
                
                <a href="">
                    <li>Motor Sport</li>
                </a>
                <a href="">
                    <li>Car Reviews</li>
                </a>
                <a href="">
                    <li>Features</li>
                </a>
                <a href="">
                    <li>Business</li>
                </a>
                <a href=""><i class="fa-solid fa-magnifying-glass"></i></a>
            </div>
            <div class="navBarSignIn width-6">
                <a href="">
                    <li class="subscribe">Subscribe</li>
                </a>
                <a href="">
                    <li>Sign In</li>
                </a>
            </div>
        </div>
    </header>
    <!-- website name and latest story -->
    <div class="name">
        <div class="container">
            <div class="width-12 newsletter">
                <a href="home_page.php?=">
                    <h1>Straight-Piped News</h1>
                </a>

            </div>
            <div class="width-12 latestStory">
                <h1>Latest Story</h1>
            </div>
        </div>
    </div>
    <!-- top story looped -->
    <?php foreach ($latestStory as $story) { ?>


        <div class="latestStory">
            <div class="container">
                <div class="image width-7">
                    <img src=".<?= $story->image_url ?>">
                </div>
                <div class="top width-5">
                    <h1>
                    <a href="article.php?id= <?= $story->id ?>"><?= $story->headline ?></a>
                    </h1>
                    <div class="writing">
                        <p>
                            <?= substr($story->summary, 0, 501) ?>....
                        </p>

                        <div class="readMore">
                            <div class="author">
                                <p>by
                                    <?= $story->author ?>
                                </p>
                            </div>
                            <a href="article.php?id= <?= $story->id ?>">
                                <p><i class="fa-solid fa-chevron-right"></i>Read more</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
    <!-- Line break -->
    <div class="lineBreak container">
    </div>
    <!-- New Advertisment Section -->
    <div class="elongatedSection">
        <div class="container-no-padding">
            <?php foreach ($elongatedSection as $story) { ?>

                <div class="imageFlex width-3">
                    <img src=".<?= $story->image_url ?>">
                </div>
                <div class="writingSection width-3">
                    <div class="width-2 header">
                        <a href="article.php?id=<?= $story->id ?>">
                            <h3>
                                <?= substr($story->headline, 0, 23) ?>
                            </h3>
                        </a>
                    </div>
                    <div class="width-1 motorNews">
                        <li class="category"><a <a href="article.php?id= <?= $story->id ?>">Business</a></li>
                    </div>
                    <a href="article.php?id=<?= $story->id ?>">
                        <p>
                            <?= substr($story->summary, 0, 124) ?>.
                        </p>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
    <!-- Line break -->
    <div class="lineBreakthree container">
    </div>
    <!-- Main Stories looped -->
    <div class="mainStory">
        <div class="container">
            <!-- Main Story Left No picture -->
            <div class="mainStoryLeft width-6">

                <?php foreach ($mainStoryLeft as $story) { ?>

                    <div class=" mainStoryLeft01 ">
                        <div class="headerWithPubDate">
                            <a href="article.php?id=<?= $story->id ?>">
                                <h2>
                                    <?= $story->headline ?>
                                </h2>
                            </a>
                            <div class="width-1 pubDate">
                                <p>Feb 20, 2023
                                </p>
                            </div>
                        </div>
                        <div class="paragraphMain">
                            <p>
                                <?= substr($story->article, 0, 725) ?>.
                            </p>
                        </div>
                        <div class="flexSection">
                            <div class="author">
                                <p>by
                                    <?= $story->author ?>
                                </p>
                            </div>
                            <div class="readMore">
                                <a href="article.php?id= <?= $story->id ?>">
                                    <p><i class="fa-solid fa-chevron-right"></i>Read more</p>
                                </a>
                            </div>
                        </div>

                    </div>
                <?php } ?>
            </div>
            <!-- block 1 -->

            <?php foreach ($mainStoryRight as $story) { ?>
                <div class="mainStoryRight block1 width-3">
                    <div class="width-3 headerWithPara">
                        <div class="images">
                            <img src=".<?= $story->image_url ?>" height="178"> 
                        </div>
                        <a href="article.php?id=<?= $story->id ?>">
                            <h3>
                                <?= $story->headline ?>
                            </h3>
                        </a>
                        <div class="paragraphLong">
                            <p>
                                <?= substr($story->summary, 0, 400) ?>.
                            </p>
                        </div>
                        <div class="bottomSection width-3">
                            <li class="timeTwo"><i class="fa-regular fa-clock"></i>5 mins</li>
                            <li class="category"><a href="article.php?id= <?= $story->id ?>">Car Reviews</a></li>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <!-- block 2 -->


        </div>
    </div>
    </div>
    <!-- Line break -->
    <div class="lineBreaktwo container">
    </div>
    <!-- Four Row Column Blocks looped -->
    <div class="fourMediumComponents">
        <div class="container">

            <!-- Grey block 1 -->
            <?php foreach ($fourMedium as $story) { ?>

                <div class="width-3 greyBlock">
                    <div class="width-2 header">
                        <h4>
                            <a href="article.php?id= <?= $story->id ?>"><?= $story->headline ?></a>
                        </h4>
                    </div>
                    <li>
                        <p class="width-3">
                            <?= substr($story->summary, 0, 285); ?>
                        </p>
                    </li>
                    <li class="author">
                        <p>by
                            <?= $story->author ?>
                        </p>
                    </li>
                </div>

            <?php } ?>

        </div>
    </div>
    <!-- Line break -->
    <div class="lineBreak container">
    </div>
    <!-- 6 Stories Left and Main stories Right -->
    <div class="sixStoriesAndRight">

        <div class="container">

            <!-- left side with 6 columns -->

            <div class="width-5 mainBlockLeft">

                <!-- stories looped-->

                <?php
                $count = 1;
                foreach ($sixComps as $story) { ?>

                    <div class="story">
                        <div class=" width-1 number">
                            <h1>
                                <?php echo $count ?>
                            </h1>
                        </div>
                        <div class="width-5 topPart">
                            <h3>
                            <a href="article.php?id= <?= $story->id ?>"><?= substr($story->headline, 0, 50) ?></a>
                            </h3>
                            <div class="bottomPart">
                                <li class="category"><a href="article.php?id= <?= $story->id ?>"> Features </a></li>

                                <p class="time"><i class="fa-regular fa-clock"></i>
                                    <?= $story->read_time ?>
                                </p>
                            </div>
                        </div>

                    </div>
                    <?php $count++;
                } ?>
            </div>


            <!-- Main Story extended looped -->
            <div class="mainStoryLeft width-7">
                <?php foreach ($sixButRight as $story) { ?>
                    <div class=" mainStoryLeft02 ">
                        <div class="image">
                            <img src=".<?= $story->image_url ?>">
                        </div>
                        <div class="headerWithPubDate">
                            <h2>
                                <a href="article.php?id=<?= $story->id ?>"><?= $story->headline ?></a>
                            </h2>
                            <div class="width-1 pubDate">
                                <p>Feb 20, 2023
                                </p>
                            </div>
                        </div>
                        <div class="paragraphMain">
                            <p>
                                <?= substr($story->summary, 0, 590) ?>
                            </p>
                        </div>
                        <div class="readMore">
                            <div class="author">
                                <p>by
                                    <?= $story->author ?>
                                </p>
                            </div>
                            <a href="article.php?id= <?= $story->id ?>">
                                <p><i class="fa-solid fa-chevron-right"></i>Read more</p>
                            </a>
                        </div>
                    </div>
                <?php } ?>
            </div>

        </div>
    </div>
    <!-- Line break -->
    <div class="lineBreak container">
    </div>
    <!-- MOTORNEWS looped -->
    <div class="motorNews">
        <div class="width-12 container ">
            <?php foreach ($motorNews as $story) { ?>

                <div class="width-4 blocks block01">
                    <div class="width-2 header">
                         <a href="article.php?id= <?= $story->id ?>"><h4>
                           <?= substr($story->headline, 0, 28) ?>
                        </h4>
                    </a>
                    </div>
                    <div class="width-1 MotorNews">
                        <li class="category"><a href="article.php?id= <?= $story->id ?>">Motor News</a></li>
                    </div>
                    <div class="image image01">
                        <img src=".<?= $story->image_url ?>">
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <!-- Line break -->
    <div class="lineBreakthree container">
    </div>
    <!-- FOOTER -->
    <footer>

        <div class="container flex">
            <!-- foot1 -->
            <div class="footerBlock block01">
                <h3>COMPANY</h3>
                <ul>
                    <li><a href="">About this Newsletter Website</a> </li>
                    <li><a href="">Newsroom Policies</a> </li>
                    <li><a href="">Diversity and Inclusion</a></li>
                    <li><a href="">Careers</a></li>
                    <li><a href="">Newsroom</a></li>
                    <li><a href="">Media & Community Relations</a></li>
                </ul>
            </div>

            <!-- foot2-->
            <div class="footerBlock block02">
                <h3>TERMS OF USE</h3>
                <ul>
                    <li><a href="">Digital Products Terms of Sale</a></li>
                    <li><a href="">Print Products Terms of Sale</a> </li>
                    <li><a href="">Terms of Service</a></li>
                    <li><a href="">Privacy Policy</a></li>
                    <li><a href="">Cookie Settings</a></li>
                    <li><a href="">Submissions & Discussion Policy
                        </a></li>
                    <li><a href="">RSS Terms of Service
                        </a></li>
                    <li><a href="">Ad ChoicesZ</a></li>
            </div>

            <!-- foot3 -->
            <div class="footerBlock block03">
                <h3>CONTACT US</h3>
                <ul>
                    <li><a href="">Contact the Newsroom
                        </a> </li>
                    <li><a href="">Contact Customer Care</a> </li>
                    <li><a href="">Contact a team
                        </a></li>
                    <li><a href="">Advertise</a> </li>
                    <li><a href="">Send a News tip</a></li>
                    <li><a href="">Report a vulnerability</a> </li>
                    <li><a href="">Licensing & Syndication</a></li>

                </ul>
            </div>

            <!-- foot4 -->
            <div class="footerBlock block04">
                <h3>GET A SUBSCRIPTION</h3>
                <ul>
                    <li><a href="">Become a Subscriber
                        </a> </li>
                    <li><a href="">Gift Subscriptions
                        </a> </li>
                    <li><a href="">Newsletter & alerts
                        </a> </li>
                    <li><a href="">Ebooks
                        </a> </li>
                    <li><a href="">Mobile & Apps</a> </li>

                </ul>
            </div>


        </div>

        <div class="copyright flex">
            <p><i class="fa-regular fa-copyright"></i>2023 Newsletter Website</p>
        </div>

    </footer>
</body>

</html>