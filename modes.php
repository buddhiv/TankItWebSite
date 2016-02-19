<!DOCTYPE html>
<html>
<head>
    <title>Tank-It | Modes</title>
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
            <h1>Modes</h1>

            <p>How can you play</p>
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
                        Sed ut perspiciatis unde omnis iste natus error s
                        it voluptatem accusantium doloremque laudantium,
                        totam rem aperiam, eaque ipsa quae ab illo
                        inventore veritatis et quasi architecto beatae
                        vitae dicta sunt explicabo. Nemo enim ipsam
                        voluptatem quia voluptas sit aspernatur aut.
                        Sed ut perspiciatis unde omnis iste natus error
                        sit voluptatem accusantium doloremque laudantium,
                        totam rem aperiam, eaque ipsa quae ab illo
                        inventore veritatis et quasi architecto beatae
                        vitae dicta sunt explicabo.
                    </p>

                    <blockquote class="text-left grid_11">

                        This is an example of a blockquote. It's
                        simple, clean and very easy to use. And you can
                        use it on all of your pages.

                    </blockquote>

                    <p>
                        Sed ut perspiciatis unde omnis iste natus error
                        sit voluptatem accusantium doloremque laudantium,
                        totam rem aperiam, eaque ipsa quae ab illo
                        inventore veritatis et quasi architecto beatae
                        vitae dicta sunt explicabo. Nemo enim ipsam
                        voluptatem quia voluptas sit aspernatur aut.
                        Net quasi architecto beatae vitae dicta sunt
                        explicabo. Sed ut perspiciatis unde omnis iste natus error
                        sit voluptatem accusantium doloremque laudantium,
                        totam rem aperiam, eaque ipsa quae ab illo
                        inventore veritatis et quasi architecto beatae
                        vitae dicta sunt explicabo.
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

