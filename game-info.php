<!DOCTYPE html>
<html>
<head>
    <title>Tank-It | Game Info</title>
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
            <h1>Game Info</h1>

            <p>Get to know about the game</p>
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
                    <img src="img/game-info.jpg" alt="blog"/>
                </section>

                <section class="post-body" style="margin-top: 30px">

                    <p>
                        A shooting game where the skills of multiple players are tested. This is a Single
                        player/Multiplayer game where you players can get together and get the thrill of shooting with
                        tanks on a mini map.
                    </p>

                    <p>
                        A game developed using multiple platforms. Here several engines are running to provide the tank
                        experience to the player. Tank environment, movement, decisions are productions of those
                        engines. Multiple technologies like XNA, Java Swing collide together to bring out the
                        experience. Tested to the limit by various players, these engines have proved to be the best of
                        those kinds yet.
                    </p>

                    <p>
                        There are two types of play you get in this game. Multiplayer and Single player. You can either
                        play against the AI or play against your friends tanks. Play in both type of play and enjoy the
                        thrill of the battlefield.
                    </p>
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

