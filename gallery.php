<!DOCTYPE html>
<html>
<?php
include 'header.php';
?>

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
            <h1>Gallery</h1>

            <p>See captured footage from the gameplay</p>
        </div>
    </section>

    <div class="shadow-bottom"></div>
</section>

<!-- content start -->
<div id="content-wrapper">

    <div class="container_12">

        <ul id="filter-item">
            <li data-id="id-1" class="grid_4" data-alpha="photography">

                <figure class="portfolio">
                    <a class="portfolio-image"->
                        <img src="img/portfolio/thumb/portfolio1.jpg" alt="portfolio" width="294"/>
                    </a>

                    <figcaption>
                        <ul class="caption-hover">
                            <li class="portfolio-zoom">
                                <a class="thumb" href="img/portfolio/large/portfolio1.jpg"
                                   data-gal="prettyPhoto[pp_gallery]">zoom
                                </a>
                            </li>
                        </ul>
                    </figcaption>
                </figure>
            </li>

            <li data-id="id-2" class="grid_4" data-alpha="graphicdesign">
                <figure class="portfolio">
                    <a class="portfolio-image">
                        <img src="img/portfolio/thumb/portfolio2.jpg" alt="portfolio" width="294"/>
                    </a>

                    <figcaption>
                        <ul class="caption-hover">
                            <li class="portfolio-zoom">
                                <a class="thumb" href="img/portfolio/large/portfolio2.jpg"
                                   data-gal="prettyPhoto[pp_gallery]">zoom
                                </a>
                            </li>
                        </ul>
                    </figcaption>
                </figure>
            </li>

            <li data-id="id-3" class="grid_4" data-alpha="motiongraphics">
                <figure class="portfolio">
                    <a class="portfolio-image">
                        <img src="img/portfolio/thumb/portfolio3.jpg" alt="portfolio" width="294"/>
                    </a>

                    <figcaption>
                        <ul class="caption-hover">
                            <li class="portfolio-zoom">
                                <a class="thumb" href="img/portfolio/large/portfolio3.jpg"
                                   data-gal="prettyPhoto[pp_gallery]">zoom
                                </a>
                            </li>
                        </ul>
                    </figcaption>
                </figure>
            </li>

            <li data-id="id-4" class="grid_4" data-alpha="photography">
                <figure class="portfolio">
                    <a class="portfolio-image">
                        <img src="img/portfolio/thumb/portfolio4.jpg" alt="portfolio" width="294"/>
                    </a>

                    <figcaption>
                        <ul class="caption-hover">
                            <li class="portfolio-zoom">
                                <a class="thumb" href="img/portfolio/large/portfolio4.jpg"
                                   data-gal="prettyPhoto[pp_gallery]">zoom
                                </a>
                            </li>
                        </ul>
                    </figcaption>
                </figure>
            </li>
        </ul>
        <!-- portfolio items end -->

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

