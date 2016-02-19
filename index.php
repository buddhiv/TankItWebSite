<!DOCTYPE html>
<html>
<head>
    <title>Tank-It | Home</title>

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

<!-- slider start -->
<div class="slider-wrapper">

    <div class="shadow-top"></div>

    <div id="slider" class="nivoSlider home-slider">
        <img src="img/slider/slider1.jpg" alt="slider" title="#htmlcaption1"/>
        <img src="img/slider/slider2.jpg" alt="slider" title="#htmlcaption2"/>
        <img src="img/slider/slider3.jpg" alt="slider" title="#htmlcaption3"/>
    </div>

    <!-- image captions start -->
    <div id="htmlcaption1">
        <p class="nivo-caption-title">
            Tank-It Frontline: Available Now
        </p>

        <div class="nivo-caption-subtitle">
            The next big tank-shooting saga is now released worldwide.
        </div>
    </div>
    <!-- image captions end -->

    <!-- Second image captions start -->
    <div id="htmlcaption2">
        <p class="nivo-caption-title">
            Packed with content, rule your own battlefield.
        </p>

        <div class="nivo-caption-subtitle">
            Get into chaos in a variety of terrain and maps.
        </div>
    </div>
    <!-- image captions end -->

    <!-- Thirs image captions start -->
    <div id="htmlcaption3">
        <p class="nivo-caption-title">
            Everything new from bottom to top.
        </p>

        <div class="nivo-caption-subtitle">
            New engine, new UI with a whole new gameplay experience.
        </div>
    </div>
    <!-- image captions end -->

    <!-- slider images shadow -->
    <div class="slider-shadow"></div>

    <div class="shadow-bottom"></div>
</div>


<!-- content start -->
<div id="content-wrapper">

    <div class="container_12">

        <!-- entry note start -->
        <section class="enter-note grid_12" style="text-align: center">
            <h2>Introducing <span class="text-red">Tank-It Frontline</span>: the next big tank-shooting saga.</h2>

            <p class="light">
                Get in the chaos!
            </p>
        </section>
        <!-- entry note end -->

        <!-- services wrapper start -->
        <ul class="services-wrap">

            <!-- first service start -->
            <li class="grid_3">
                <div class="service-content services-home clearfix">
                    <h5>WHOLE NEW PACKS</h5>

                    <p>
                        Experience the newest expansion with a whole new bunch of terrain and maps.
                    </p>

                    <a href="services.html" class="btn-small white">
                    </a>
                    <br/>
                </div>
            </li>
            <!-- first service end -->

            <!-- second service start -->
            <li class="grid_3">
                <div class="service-content services-home clearfix">
                    <h5>MULTIPLAYER THRILLS</h5>

                    <p>
                        Get in the multiplayer mode challenging your friends on a server.
                    </p>

                    <a href="services.html" class="btn-small white">
                    </a>
                    <br/>
                </div>
            </li>
            <!-- second service end -->

            <!-- third service start -->
            <li class="grid_3">
                <div class="service-content services-home clearfix">
                    <h5>PLAY TO YOUR SPEED</h5>

                    <p>
                        Always the quickest and the smartest will survive in this face-to-face tank war.
                    </p>

                    <a href="services.html" class="btn-small white">
                    </a>
                    <br/>
                </div>
            </li>
            <!-- third service end -->

            <!-- fourth service start -->
            <li class="grid_3">
                <div class="service-content services-home clearfix">
                    <h5>CONQUER THE AI</h5>

                    <p>
                        Play your role, challenge the AI with your skills and conquer the land.
                    </p>

                    <a href="services.html" class="btn-small white">
                    </a>
                    <br/>
                </div>
            </li>
            <!-- fourth service end -->

        </ul>
        <!-- #services-wrap end -->

        <div class="grid_12">
            <section class="note-box">
                <h2 style="color: #d74142; text-align: center; top: 8px; position: relative">Join the Saga</h2>
            </section>
        </div>

        <!-- portfolio title end -->

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
    $(window).load(function () {
        $('#slider').nivoSlider();
    });

    /* ================ TWEETS SCROLL ================ */
    $('.tweets-list-container').tweetscroll({
        username: 'pixel_industry',
        time: true,
        limit: 11,
        replies: true,
        position: 'append',
        date_format: 'style2',
        animation: 'slide_up',
        visible_tweets: 1
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
