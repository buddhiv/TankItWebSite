<!DOCTYPE html>
<html>
<head>
    <title>Tank-It | FAQ</title>
    <?php
    include 'header.php';
    ?>
</head>

<body>
<!-- header start -->
<?php
include 'menu.php';
?>
<!-- header end -->

<!-- page-title start-->
<section class="page-title-container">

    <!-- top shadow on container -->
    <div class="shadow-top"></div>

    <section class="page-title">
        <div class="title">
            <h1>FAQ</h1>

            <p>What do the players have to ask us</p>
        </div>
    </section>

    <div class="shadow-bottom"></div>
</section>

<!-- content start -->
<div id="content-wrapper">

    <div class="container_12">

        <div class="grid_12 content-sidebar-right" style="margin-top: -50px">

            <article class="blog-post single">
                <section class="post-info-container" style="">
                    <img src="img/faq.jpg" alt="blog"/>
                </section>

                <section class="post-body" style="margin-top: 30px">
                    <section class="vertical-toggle">
                        <div class="set">
                            <div class="title">
                                <a class="text">How do I play the game?</a>

                            </div>
                            <div class="content">
                                <p class="vertical-content">There are two modes of gameplay. You can either pick playing
                                    multiplayer or single player mode in this game.</p>
                            </div>
                        </div>
                        <div class="set">
                            <div class="title">
                                <a class="text">How do I get the game?</a>

                            </div>
                            <div class="content">
                                <p class="vertical-content">You can get the game, view the source code or contribute to
                                    that from our download page.</p>
                            </div>
                        </div>
                    </section>
                </section>
            </article>
        </div>

    </div>
    <!-- container_12 end -->
</div>
<!-- content wrapper end -->


<!-- footer wrapper start -->
<?php
include 'footer.php';
?>
<!-- footer wrapper end -->

<script>
    $('.tweets-list-container').tweetscroll({
        username: 'pixel_industry',
        time: true,
        limit: 11,
        replies: true,
        position: 'append',
        date_format: 'style2',
        animation: 'slide_up',
        visible_tweets: 2
    });

    $("#foo3").carouFredSel({
        items: 1,
        auto: true,
        scroll: 1,
        pagination: "#foo3_pag"
    });

    //placeholder fix
    $('input[placeholder], textarea[placeholder]').placeholder();
</script>
</body>
</html>

