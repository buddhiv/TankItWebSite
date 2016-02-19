<!DOCTYPE html>
<html>
<head>
    <title>Tank-It | AI</title>
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
            <h1>AI</h1>

            <p>Read about what drives the tanks</p>
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
                    <img src="img/blog/blog-4.jpg" alt="blog"/>
                </section>

                <section class="post-body" style="margin-top: 30px">

                    <p>
                        AI is the tricky part handling the tanks. You can play single player to beat our creation if you
                        want. You will have to manually guide your tank to outrun the AI in this game.
                    </p>

                    <p>
                        Talking about technology, AI is Java born. Although we can see the AI through XNA produced
                        interfaces, the AI is a Java implemented. There are complex al
                    </p>

                    <p>
                        Sed ut perspiciatis unde omnis iste natus error
                        sit voluptatem accusantium doloremque laudantium,
                        totam rem aperiam, eaque ipsa quae ab illo
                        inventore veritatis quasi
                        architecto beatae vitae dicta sunt explicabo.
                        Nemo enim ipsam
                        voluptatem quia voluptas sit aspernatur aut.
                        Net quasi architecto beatae vitae dicta sunt
                        explicabo.
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

