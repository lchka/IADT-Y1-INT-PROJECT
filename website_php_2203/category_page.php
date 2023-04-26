<?php
require "./etc/config.php";
try {
    $story = Story::findAll();
    $categoryFind = Story::findbyCategory($_GET["id"], 10);
    // $category = Category::findById($story->category_id);
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
    <link rel="stylesheet" href="Styles/category.css">
    <link rel="stylesheet" href="Styles/header.css">

    <title>Category Page</title>

<body>
    <!-- HEADER -->
    <header>
        <div class="container">
            <div class="navBar width-6">
                <a href="category_page.php?id=3">
                    <li>Motor Sport</li>
                </a>
                <a href="category_page.php?id=2">
                    <li>Car Reviews</li>
                </a>
                <a href="category_page.php?id=4">
                    <li>Features</li>
                </a>
                <a href="category_page.php?id=1">
                    <li>Business</li>
                </a>
                <a><i class="fa-solid fa-magnifying-glass"></i></a>
            </div>
            <div class="navBarSignIn width-6">
                <a>
                    <li class="subscribe">Subscribe</li>
                </a>
                <a href="home_page.php">
                    <li>HOME</li>
                </a>
            </div>
        </div>
    </header>
    <!-- name -->
    <div class="name">
        <div class="container">
            <div class="width-12 newsletter">
               <a href="home_page.php"> <h1>Straight-Piped News</h1></a>
            </div>
            <div class="width-12 articleName">
                <h1>Category Name</h1>
            </div>
        </div>
    </div>

    <!-- Main Category Stories -->
    <div class="mainStory">
        <div class="container">
            <?php foreach ($categoryFind as $story) { ?>
                <div class="mainStoryRight block1 width-3">
                    <div class="width-3 headerWithPara">
                        <div class="images">
                            <img src=".<?= $story->image_url ?>" height="178">
                        </div>
                        <a href="article.php?id=<?= $story->id ?>">
                            <h3>
                                <?= substr($story->headline, 0, 100) ?>
                            </h3>
                        </a>
                        <div class="bottomSection width-3">
                            <li class="timeTwo"><i class="fa-regular fa-clock"></i>5 mins</li>

                        </div>
                    </div>
                </div>

            <?php } ?>

        </div>
    </div>
    <div class="button">
        <div class="container">
            <div class="readMore width-3">
                <a href="home_page.php">
                    <p><i class="fa-solid fa-chevron-right"></i>back to Home Page</p>
                </a>
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
                    <img src="/images/app-store-badges-en 1.png">
                </ul>
            </div>


        </div>

        <div class="copyright flex">
            <p><i class="fa-regular fa-copyright"></i>2023 Newsletter Website</p>
        </div>

    </footer>
</body>