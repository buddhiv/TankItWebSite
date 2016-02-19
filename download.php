<!DOCTYPE html>
<html>
<head>
    <title>Tank-It | Download</title>
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
            <h1>Download</h1>

            <p>Get the game running on your computer</p>
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
                    <img src="img/download.jpg" alt="blog"/>
                </section>

                <section class="post-body" style="margin-top: 30px">
                    <div class="">
                        <section class="note-box">
                            <h2 style="color: #d74142; text-align: center; top: 8px; position: relative">View on <a
                                    href="https://github.com/buddhiv/TankItWebSite" target="_blank"
                                    style="font-size: 20px">Github</a></h2>
                        </section>
                    </div>
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

