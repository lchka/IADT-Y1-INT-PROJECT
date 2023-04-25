<?php
require "./etc/config.php";
try {
    $motorNews = Story::findNum(6, 8);
    $story = Story::findById(20);
    $category = Category::findById($story->category_id);
} catch (Exception $ex) {
    die($ex->getMessage());
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
    <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@500&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Titillium+Web:wght@600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Gulzar&family=Merriweather+Sans:wght@500&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Playfair+Display:wght@400;500;600;800;900&family=Titillium+Web:wght@600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="Styles/all.min.css">
    <link rel="stylesheet" href="Styles/reset.css">
    <link rel="stylesheet" href="Styles/grid.css">
    <link rel="stylesheet" href="Styles/articleStyles.css">
    <link rel="stylesheet" href="Styles/footer.css">
    <link rel="stylesheet" href="Styles/styles.css">
    <link rel="stylesheet" href="Styles/footer.css">
    <link rel="stylesheet" href="Styles/motorNews.css">
    <link rel="stylesheet" href="Styles/sixStories.css">
    <link rel="stylesheet" href="Styles/elongated.css">
    <link rel="stylesheet" href="Styles/fourMediumStories.css">
    <link rel="stylesheet" href="Styles/mainStory.css">
    <link rel="stylesheet" href="Styles/latestStory.css">
    <link rel="stylesheet" href="Styles/header.css">

    <title>Article Page</title>
</head>

<body>
    <!-- HEADER -->
    <header>
        <div class="container">
            <div class="navBar width-6">
                <a>
                    <li>Motor Sport</li>
                </a>
                <a>
                    <li>Car Reviews</li>
                </a>
                <a>
                    <li>Features</li>
                </a>
                <a>
                    <li>Business</li>
                </a>
                <a><i class="fa-solid fa-magnifying-glass"></i></a>
            </div>
            <div class="navBarSignIn width-6">
                <a>
                    <li class="subscribe">Subscribe</li>
                </a>
                <a>
                    <a href="home_page.php?=">
                        <li>HOME</li>
                    </a>
                </a>
            </div>
        </div>
    </header>
    <!-- website name and latest story -->
    <div class="name">
        <div class="container">
            <div class="width-12 newsletter">
            <a href="home_page.php?="><h1>Article Section</h1></a>
            </div>
            <div class="width-12 articleName">
                <h1>will have category name</h1>
            </div>
        </div>
    </div>
    <!-- main article style -->
    <div class="article">
        <div class="container">

            <div class="leftSide width-9">
                <div class="pubDate">
                    <li>Published on <?= $story->publish_date ?></li>
                </div>
                <div class="image width-6">
                    <img src=".<?= $story->image_url ?>">
                </div>
                <div class="authorAndTime">
                    <li>
                        by <?= $story->author ?>
                    </li>
                    <li class="timeTwo">read time: <i class="fa-regular fa-clock"></i><?= $story->read_time ?></li>
                </div>
                <div class="title width-6">
                    <h1><?= $story->headline ?></h1>
                </div>
                <div class="aritclePara">
                    <p><?= $story->article ?> </p>
                </div>
            </div>


            <!-- empty box for now -->
            <div class="emptyBox width-1"> </div>
            <!-- right side of the page -->
            <div class="rightSide width-2">
                <?php foreach ($motorNews as $story) { ?>
                    <div class="blocks block01 width-4">
                        <div class="width-2 Header">
                            <h4><a href="article.php?="><?= substr($story->headline, 0, 35) ?></a></h4>
                        </div>

                        <div class="image image01">
                            <img src=".<?= ($story->image_url) ?>" width=200px height=110px>
                        </div>
                    </div>
                <?php    } ?>
            </div>
        </div>
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