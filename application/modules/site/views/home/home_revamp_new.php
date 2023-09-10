<style>
    section.header-search.search .search-input input{
        font-weight:400 !important;
    }
  
    .screenshot_slider .owl-item.center .item img {
    border: 2px solid transparent !important;
}
    .category-sec .help-heading{
padding-top:30px;
padding-bottom:20px;
    }
    .sub-head-offer{
        padding: 10px 0px 10px 0px;
    font-size: 21px;
    line-height:1.4;
    }
    /* .demo-stories-avatar img {
        background-image: linear-gradient(270deg, #9ed7dd, #2c7cc7) !important;
    } */

    .trending .tns-controls button[data-controls="prev"]::before,
    .tns-controls button[data-controls="next"]::before {
        font-family: "icon-font" !important;
    }

    .trending .tns-outer .tns-controls {
        top: 47% !important;
    }

    .countdown-container {
        display: grid;
        grid-template-columns: 32% 34% 34%;
        column-gap: 10px;
        align-items: center;
        justify-content: center;
    }

    .countdown-container .heading-counter-content img {
        width: 150px;
    }

    .countdown-container .i-14-img img {
        width: 150px;
    }

    .countdown-container .product-title {
        padding: 10px 0;
        font-size: 22px;
        color: #000000;
    }

    .countdown-container .product-title strong {
        border: 1px solid #000000;
        border-radius: 50px;
        padding: 5px 20px;
        cursor: pointer;
    }

    .count-down-small {
        background-color: #fff;
    }

    /*
header .hamburger-menu #category-menu > li ul li a {
    padding: 10px 40px;
    font-size: 1.2rem;
    color: #ffffff;
    font-weight: 600;
}
*/

    @media (max-width:767px) {
        .fancybox-slide--iframe .fancybox-content,.fancybox-slide--map .fancybox-content,.fancybox-slide--pdf .fancybox-content,.fancybox-slide--video .fancybox-content{overflow:visible;padding:0;width:98%!important;height:90vh!important}
        .category-sec .help-heading {
    padding-top: 60px;
        }
        .sub-head-offer {
    padding: 17px 0px 30px 0px;
    font-size: 17px;}

        .countdown-container {
            grid-template-columns: auto;
            display: flex;
            flex-direction: column;
            padding-left: 0;
            padding-right: 0;
        }

        .countdown-container .i-14-img img {
            width: 120px;
        }

        .countdown-container .product-title {
            font-size: 18px;
            padding-bottom: 0;
        }

        .countdown-container .atcb-button {
            min-width: 150px;
            white-space: nowrap;
        }


        .conuter-for-offer #countdown li {
            padding: 0 10px;
        }

        .calender-brief {
            margin: 0 -10px;
        }

        .calender-brief .add-to-your-calender {
            padding-bottom: 5px;
        }

        .calender-brief li {
            flex-basis: 48%;
            max-width: 48%;
        }

        .tns-controls {
            display: none !important;

        }

        .trending .tns-outer .tns-controls button {
            font-size: 0 !important;
            border-radius: 50% !important;
            width: 40px !important;
            height: 40px !important;
            margin: 0 -5% !important;
            border: 0 !important;
            background: transparent !important;
            color: #000000 !important;
        }

        .trending .tns-controls button[data-controls="next"]::before {
            content: " \203A" !important;
            font-size: 45px !important;
            display: block !important;
            font-family: "icon-font" !important;
        }

        .trending .tns-controls button[data-controls="prev"]::before {
            content: " \2039" !important;
            font-size: 45px !important;
            display: block;
            font-family: "icon-font";
        }
    }


    /*_ Media Query Ends for 767 _*/

    .count-down-22 {
        font-family: "SF UI Display", sans-serif !important;
    }

    .conuter-for-offer #countdown li {
        display: inline-block;
        font-size: 15px;
        list-style-type: none;
        padding: 0.5em 15px;

        /* padding: 0.5em 1.5em; */
        padding-bottom: 1em;
        text-transform: capitalize;
        color: #696969;
    }

    .conuter-for-offer #countdown li span {
        display: block;
        font-size: 60px;

        /* font-size: 45px; */
        padding-bottom: 12px;
    }

    #days {
        color: #efd77b;
    }

    #hours {
        color: #97c7ab;
    }

    #minutes {
        color: #c2b9d6;
    }

    .calender-brief li {
        /* display: inline-block; */
        list-style-type: none;
        /* text-transform: capitalize; */
        color: #696969;
    }

    .calender-brief .icalender a {
        font-size: 16px;
        color: #ffffff;
        background: #41b1bd;
        border-radius: 21px;
        padding: 8px 35px;

        /* padding: 8px 42px; */
    }

    .calender-brief .google-calender a {
        font-size: 15px;
        color: #000000;
        background: #ffffff;
        border-radius: 21px;
        padding: 8px 10px;
        border: 1px solid #000000;
    }

    .calender-brief .add-to-your-calender {
        padding-top: 6px;
        flex-basis: 100%;
        max-width: 100%;
        text-align: center;
    }

    .calender-brief .add-to-your-calender a {
        font-size: 15px;
        color: #000000;
        /* background: #ffffff; */
    }

    .calender-brief li {
        margin: 0 auto;
        padding: 15px 5px;

        /* padding: 15px 20px; */
    }

    .calender-brief {
        display: flex;
        /* flex-direction: column; */
        flex-wrap: wrap;
        align-items: center;
        /* margin: 0 auto; */
        /* display: table; */
    }

    .heading-counter-content h2 {
        /* padding: 19px 25px 1px 25px; */
        padding: 19px 5px 1px 5px;
        font-size: 20px;
        font-weight: 400;
        color: #696969;
    }

    .count-down-22 {
        border-bottom: 1px solid #000000;
    }

    .local-link::before {
        content: url('../../files/uploads/landing_pages/iphone_14/calender-25.png');
        display: inline-block;
        width: 15px;
        height: 15px;
        position: relative;
        top: 7px;
        margin-right: 15px;
    }

    .i-14-img {
        margin-bottom: 5px;
    }

    .heading-counter-content {
        padding: 10px 5px;
    }

    @media all and (max-width: 768px) {

        .conuter-for-offer #countdown li span {
            /* font-size: calc(3.375rem * var(--smaller)); */
            font-size: 30px;
        }
    }

    @media only screen and (min-device-width: 768px) and (max-device-width: 1024px) and (orientation : portrait)

    /* applied to lg also */
        {
            .small-icon-stories .owl-nav .owl-prev {
   left: -10px !important;
}
            #panel p {
    font-size: 15px !important;}

        .conuter-for-offer #countdown li span {
            font-size: 32px !important;
        }

        .countdown-container {
            display: block;
        }
    }

    @media (max-width:767px) {
        /* .swiper-slide {
            padding-left: 10px !important;
        } */

        .conuter-for-offer #countdown li {
            padding: 0 10px 10px;
            font-size: 15px;
            /* padding: 15px 10px; */
            line-height: 15px;
        }

        /* .conuter-for-offer #countdown li {} */

        .heading-counter-content {
            /* padding: 10px 5px; */
            padding: 5px;
            padding-bottom: 0px !important;
        }

        .count-down-22 h2 {
            padding: 15px 5px;
            font-size: 15px;
            line-height: 1.4;
            font-weight: 400;
            color: #696969;
        }

        .calender-brief li {
            margin: 0 auto;
            padding: 10px 5px 5px;
            /* padding: 19px 5px; */

            /* padding: 19px 15px; */
            display: block;
        }

        .calender-brief li:last-child {
            padding-top: 0 !important;
        }

    }


    /**  */
    .atcb-icon {
        display: none;
    }

    header .hamburger-menu #category-menu>li ul li a .badge {
        font-weight: 600;
    }

    header .hamburger-menu #category-menu>li ul li a {
        padding: 10px 40px;
        font-size: 1.2rem;
        color: #ffffff;
        font-weight: 600;
    }

    header .hamburger-menu #category-menu>li>a,
    header .hamburger-menu .misc-links {
        font-weight: bold;
    }

    header .hamburger-menu .social-media li a {
        opacity: .9;
    }

    @media (max-width: 1024.98px) {
        header .hamburger-menu .misc-links li a {
            font-weight: 600;
        }
    }

    .buyer-nav-page {}

    section.product-categories a img {
        border: 2px solid #ffffff;
    }

    @media (max-width: 767px) {

        .bank-offer-categ-tile1 {
            width: 100% !important;
            max-width: 195px;
            margin: 0 auto;
            display: table !important;
        }
    }

    .stories-tag-section {
        background-color: #ffffff;
    }
</style>
<section class="search d-none">
    <!-- <div class="helper">
    <div class="container">
      <div class="search-container">
        <div class="search-input">
          <input type="text" id="q" placeholder="I am looking for">

          <i class="ii-icon-search"></i>
          <i class="ii-icon-close clear"></i>
        </div>

        <div class="trending" data-search="0">
          <div class="heading">Trending</div>

          <?php if (!empty($trend_search_data)): ?>
            <div class="list">
              <?php foreach ($trend_search_data as $ts_data): ?>
                <div data-href="<?= $ts_data->cta ?>" class="item"><?= $ts_data->name ?></div>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>
        </div>

        <div class="search-no-result">
          <img src="<?= PATH_FILES_UPLOADS . 'search_404.png' ?>" alt="">
          <h6>No result found</h6>
        </div>

        <div id="search-results">
        </div>
      </div>
    </div>
  </div> -->
    <!-- 
  <div class="floating-search-helper">
    <div class="floating-search show">
      <i class="ii-icon-map-pin"></i>
    </div>
  </div> -->
    <div class="floating-wigdet-store">
        <div class="icon-container">
            <a href="<?= base_url('store-locator') ?>" target="_blank">
                <span class="calculator-img top"> <i class="ii-icon-map-pin"></i></span><span
                    class="background font">Find A Store</span>
            </a>
        </div>
    </div>
</section>

<section class="count-down-22" style="display:none;">
    <div class="count-down-small" style="padding:20px 20px 10px 20px;">
        <div class="container-fluid countdown-container">
            <div class="block-left">
                <div class="name text-center i-14-img">
                    <img width=""
                        src="https://www.indiaistore.com/files/uploads/landing_pages/iphone_14/iphone-14-count-v3.png"
                        alt="iPhone 14 Pro Logo">
                </div>
                <div class="heading-counter-content text-center">
                    <!-- <img width="" src="https://www.indiaistore.com/files/uploads/landing_pages/iphone_14/pre-book.png"
                        alt="Pre book"> -->
                    <h2 class="product-title"><a href="https://www.indiaistore.com/iphone-14"><strong>Pre-book
                                Now</strong></a></h2>
                    <!-- <img width="120"
                        src="https://www.indiaistore.com/files/uploads/landing_pages/iphone_14/pre-book.png"
                        alt="Pre book"> -->
                    <!-- <h2>Available from September 16<sup>th</sup>, 2022.</h2> -->
                    <h2>Available from 16.9.22, 8:00 a.m. IST</h2>
                </div>
            </div>
            <div class="block-middle">
                <div class="conuter-for-offer text-center">
                    <div id="countdown">
                        <ul>
                            <li><span id="days"></span>day</li>
                            <li><span id="hours"></span>Hours</li>
                            <li><span id="minutes"></span>Minutes</li>
                            <!-- <li><span id="seconds"></span>Seconds</li>-->
                        </ul>
                    </div>

                </div>
            </div>
            <div class="block-right">
                <div class="calender-brief">
                    <li class="add-to-your-calender"><span><a href="#" class="local-link">Add To Your
                                Calendar</a></span></li>
                    <!-- <li class="add-to-your-calender"><span><a href="#" class="local-link">Add to your
                                calendar</a></span></li> 
                    <li class="icalender"><span><a href="#">iCalendar</a></span></li>
                    <li class="google-calender"><span><a href="#">Google Calendar</a></span></li>-->

                    <li class="icalender">
                        <div class="atcb" style="display:none;">
                            {
                            "name":"iPhone 14- Available Now.",
                            "description":" iPhone 14. Pre-Book Now.",
                            "startDate":"2022-09-16",
                            "endDate":"2022-09-16",
                            "startTime":"08:00",
                            "endTime":"23:59",
                            "location":"India",
                            "label":"iCalendar",
                            "options":[
                            "Apple"
                            ],
                            "timeZone":"Asia/Kolkata",
                            "iCalFileName":"Reminder-Event"
                            }
                        </div>
                    </li>
                    <li class="google-calender">
                        <div class="atcb" style="display:none;">
                            {
                            "name":"iPhone 14- Available Now.",
                            "description":"iPhone 14. Pre-Book Now.",
                            "startDate":"2022-09-16",
                            "endDate":"2022-09-16",
                            "startTime":"08:00",
                            "endTime":"23:59",
                            "location":"India",
                            "label":"Google Calendar",
                            "options":[
                            "Google"
                            ],
                            "timeZone":"Asia/Kolkata",
                            "iCalFileName":"Reminder-Event"
                            }
                        </div>
                    </li>
                    <li class="outlook-calender">
                        <div class="atcb" style="display:none;">
                            {
                            "name":"iPhone 14- Available Now.",
                            "description":"iPhone 14. Pre-Book Now.",
                            "startDate":"2023-09-16",
                            "endDate":"2023-09-16",
                            "startTime":"08:00",
                            "endTime":"23:59",
                            "location":"India",
                            "label":"Outlook Calendar",
                            "options":[
                            "Outlook.com"
                            ],
                            "timeZone":"Asia/Kolkata",
                            "iCalFileName":"Reminder-Event"
                            }
                        </div>
                    </li>

                </div>
            </div>


        </div>
    </div>
</section>
<?php
// $images = array('https://i3-prod-assets.indiaistore.com/files/uploads/fursat/images/iphone_pro_fursat_low_light_desktop.jpg','https://i3-prod-assets.indiaistore.com/files/uploads/fursat/images/iphone_pro_fursat_desktop.jpg');
// $random_image = array_rand($images);

// $images_mobile = array('https://i3-prod-assets.indiaistore.com/files/uploads/fursat/images/iphone_pro_fursat_low_light_mobile.jpg','https://i3-prod-assets.indiaistore.com/files/uploads/fursat/images/iphone_pro_fursat_mobile.jpg');
// $random_image_mobile = array_rand($images_mobile);


$images = array(
    array(
        'banner_desk_image' => 'files/uploads/rotaion-banner/ipad-desktop-1.jpg',
        'banner_mob_image' => 'files/uploads/rotaion-banner/ipad-mobile-1.jpg',
        'banner_video' => 'https://www.indiaistore.com/Do-More-On-iPad',
    ),
    array(
        'banner_desk_image' => 'files/uploads/rotaion-banner/ipad-desktop-2.jpg',
        'banner_mob_image' => 'files/uploads/rotaion-banner/ipad-mobile-2.jpg',
        'banner_video' => 'https://www.indiaistore.com/Do-More-On-iPad'
    ),
    array(
        'banner_desk_image' => 'files/uploads/rotaion-banner/ipad-desktop-3.jpg',
        'banner_mob_image' => 'files/uploads/rotaion-banner/ipad-mobile-3.jpg',
        'banner_video' => 'https://www.indiaistore.com/Do-More-On-iPad'
    ),
);

$random_image = array_rand($images);

//$random_image_mobile = array_rand($images_mobile);
?>

<section class="">
    <div class="swiper-container SwiperMain">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <?php if (!empty($banner_hero)):
                $i = 1;
                foreach ($banner_hero as $banner):

                    ?>
                    <div class="swiper-slide <?= $banner->additional_classes ?>">
                        <a href="<?= ($banner->cta) ?: 'javascript:void(0);'; ?>"
                            target="<?= ($banner->is_external_cta) ? '_blank' : '_self' ?>"
                            data-banner-name="<?= $banner->name ?>" class="stretched-link1">
                            <picture>
                                <source media="(max-width: 767px)"
                                    srcset="<?= PATH_FILES_UPLOADS . "banners/$banner->position_slug/$banner->mobile_image" ?>">
                                <img src="<?= PATH_FILES_UPLOADS . "banners/$banner->position_slug/$banner->desktop_image" ?>"
                                    alt="" class="img-fluid w-100">
                                <!-- <a href="https://www.indiaistore.com/testimoji" target="_blank" class="stretched-link"></a> -->



                            </picture>

                        </a>
                    </div>
                    <?php
                    $i++;
                endforeach;
            endif;
            ?>
            <!-- <div class="swiper-slide">
                <picture>
                    <source media="(max-width: 767px)" srcset="/files/uploads/home-img/banner-2-mobile.jpg">
                    <img src="/files/uploads/home-img/banner-2.jpg" alt="" class="img-fluid w-100">
                    <a href="https://www.indiaistore.com/Do-More-On-iPad" target="_blank" class="stretched-link"></a>
                </picture>
            </div>
            <div class="swiper-slide">
                <picture>
                    <source media="(max-width: 767px)" srcset="/files/uploads/home-img/banner-3-mobile.jpg">
                    <img src="/files/uploads/home-img/banner-3.jpg" alt="" class="img-fluid w-100">
                    <a href="https://www.indiaistore.com/testimoji" target="_blank" class="stretched-link"></a>
                </picture>
            </div>

            <div class="swiper-slide">
                <picture>
                    <source media="(max-width: 767px)" srcset="/files/uploads/home-img/banner-4-mobile.jpg">
                    <img src="/files/uploads/home-img/banner-4.jpg" alt="" class="img-fluid w-100">
                    <a href="https://www.indiaistore.com/Back-To-School" target="_blank" class="stretched-link"></a>
                </picture>
            </div>  -->
        </div>
        <div class="mainSlider">
            <!-- If we need pagination -->

            <div class="swiper-pagination mainSliderpagination"></div>
            <div class="swiper-scrollbar"></div>

            <!-- If we need scrollbar -->
            <div class="slider-nav">
                <div class="swiper-button-prev line-back"></div>
                <div class="swiper-button-pause">
                    <a onclick="mySwiper.autoplay.stop();" class="autoplay stop stop-btn"><img
                            src="/files/uploads/home-img/pause-btn.png" class="img-fluid" /></a>
                    <a onclick="mySwiper.autoplay.start();" class="autoplay play play-btn" style="display: none"><img
                            src="/files/uploads/home-img/play-btn.png" class="img-fluid" /></a>
                </div>
                <div class="swiper-button-next line-next"></div>
            </div>

        </div>
    </div>
</section>

<!-- <section class="main-slider">
  <?php //if (!empty($banner_hero)) :
  //foreach ($banner_hero as $banner) :
  //if (!empty($banner->video_url)) : 
  ?>
        <div class="item youtube" style="background-color: #000;">
          <a href="<? //= ($banner->cta) ?: 'javascript:void(0);' 
          ?>" target="<? //= ($banner->is_external_cta) ? '_blank' : '' 
          ?>" data-banner-name="<? //= $banner->name 
          ?>">
            <iframe id="youtube-video" class="embed-player slide-media" src="<? //= $banner->video_url . "?enablejsapi=1&controls=0&fs=0&iv_load_policy=3&rel=0&showinfo=0&loop=1" 
            ?>" frameborder="0" allowfullscreen></iframe>
            <div class="caption">Know More</div>
          </a>
        </div>
      <?php //else : 
      ?>
        <div class="item image">
          <div class="slide-image slide-media">
            <a href="<? //= ($banner->cta) ?: 'javascript:void(0);' 
            ?>" target="<? //= ($banner->is_external_cta) ? '_blank' : '' 
            ?>" data-banner-name="<? //= $banner->name 
            ?>">
              <picture>
                <source media="(max-width: 768px)" srcset="<? //= PATH_FILES_UPLOADS . "banners/$banner->position_slug/$banner->mobile_image" 
                ?>">
                <source media="(min-width: 769px)" srcset="<? //= PATH_FILES_UPLOADS . "banners/$banner->position_slug/$banner->desktop_image" 
                ?>">
                <img class="mob image-entity" src="<? //= PATH_FILES_UPLOADS . "banners/$banner->position_slug/$banner->mobile_image" 
                ?>" alt="<?= $banner->alt_text ?>">
                <img class="dex image-entity" src="<? //= PATH_FILES_UPLOADS . "banners/$banner->position_slug/$banner->desktop_image" 
                ?>">
              </picture>
            </a>
          </div>
        </div>
        <?php
        //endif;
        //endforeach;
        //endif; 
        ?>
</section> -->

<section class="mini-carousel" style="display: none;">
    <!-- <div class="cracker">
    <img src="<?= PATH_FILES_UPLOADS . "diwali/c-1.png" ?>" alt="images">
  </div> -->
    <div class="container container-right">
        <div class="slider">
            <?php if (!empty($banner_switch_from)):
                foreach ($banner_switch_from as $banner): ?>
                    <div class="slider-item <?= $banner->additional_classes ?>">
                        <a href="<?= ($banner->cta) ?: 'javascript:void(0);' ?>"
                            target="<?= ($banner->is_external_cta) ? '_blank' : '' ?>" data-banner-name="<?= $banner->name ?>">
                            <img src="<?= PATH_FILES_UPLOADS . "banners/$banner->position_slug/$banner->desktop_image" ?>"
                                alt="<?= $banner->alt_text ?>">
                        </a>
                    </div>
                <?php endforeach;
            endif; ?>
        </div>
    </div>
    <!-- <div class="flower-layer">
    <img src="<?= PATH_FILES_UPLOADS . "diwali/flower.png" ?>" alt="images">
  </div> -->


</section>



<!-- Stories -->
<div class="stories-tag-section">
    <div class="container">
        <h2 class="help-heading pt-4">Offer Snapshots</h2>
        <p class="sub-head-offer">Discover exciting offers for maximum savings on your next Apple product!</p>
        <div class="small-icon-stories pb-2">
            <div class="owl-carousel-sliudes-icon owl-carousel">
                <?php
                $i = 1;
                $k = 0;
                foreach ($snapshots as $snapshot) { ?>
                    <div class="item" data-index="<?= $k ?>">
                        <div class="stories clickableDiv" id="clickableDiv">
                            <a href="javascript:void(0)">
                                <span class="demo-stories-avatar">
                                    <img class="img-fluid"
                                        src="<?= PATH_FILES_UPLOADS . "stories/$snapshot->story_image" ?>" alt="" />
                                </span>
                                <span class="demo-stories-name">
                                    <?php echo $snapshot->story_name; ?>
                                </span>
                            </a>
                        </div>
                    </div>
                    <?php
                    $i++;
                    $k++;
                } ?>
            </div>
        </div>
    </div>
</div>
<!-- partial:index.partial.html -->
<div id="overlay">
    <div id="closeButton">
        <i class="">
            <img class="img-fluid"
                src="https://www.indiaistore.com/themes/frontend/custom/images/stories/close-btn.png" />
        </i>
    </div>
    <div id="popup" class="popupstory">
        <div class="section-padding" id="parent-devisible">
            <div class="screenshot_slider owl-carousel">
                <?php
                
                foreach ($allstories as $stories) {
                    ?>
                    <div class="item" id="<?php echo $stories->id; ?>" data-index-id="<?php echo $j; ?>">
                        <div id="demo-<?php echo $stories['story_slug']; ?>-<?php echo $j; ?>" class="carousel slide"
                            data-ride="carousel" data-interval="false">
                            <!-- Indicators -->
                            <ul class="carousel-indicators">
                                <?php
                                $n = 0;
                                foreach ($stories['story_details'] as $storycount) {
                                    if ($n == 0) {
                                        ?>
                                        <li data-target="#demo-<?php echo $stories['story_slug']; ?>-<?php echo $j; ?>"
                                            data-slide-to="<?php echo $n; ?>" class="active"></li>
                                    <?php } else {
                                        ?>
                                        <li data-target="#demo-<?php echo $stories['story_slug']; ?>-<?php echo $j; ?>"
                                            data-slide-to="<?php echo $n; ?>"></li>
                                        <?php
                                    }
                                    $n++;
                                } ?>

                            </ul>
                            <!-- The slideshow -->
                            <div class="carousel-inner">
                                <?php
                                $p = 1;
                                foreach ($stories['story_details'] as $story) { 
                                    ?>
                                    <div class="carousel-item <?php if ($p == 1) {
                                        echo 'active';
                                    } ?>">
                                    <?php
                                    if($story['story_video_url'] == ""){
                                    ?>
                                  
                                         <img class="img-fluid <?php echo $story['story_video_url']; ?>"
                                            src="https://www.indiaistore.com/files/uploads/stories/<?php echo $stories['story_slug']; ?>/<?php echo $story['story_desktop_image']; ?>" />
                                       
                                   
                                    <?php
                                    } else {
                                        ?>
                                             <a data-fancybox="" href="<?php echo $story['story_video_url']; ?>" class="">
                                         <img class="img-fluid <?php echo $story['story_video_url']; ?>"
                                            src="https://www.indiaistore.com/files/uploads/stories/<?php echo $stories['story_slug']; ?>/<?php echo $story['story_desktop_image']; ?>" />
                                        </a>
                                        <!-- <video autoplay controls>
                                            <source src="<?php echo $story['story_video_url']; ?>" type="video/mp4">
                                        </video> -->
                                        <!-- <div class="d-flex justify-content-center min-vh-100">
                    <div class="embed-responsive embed-responsive-21by9">
                        <video autoplay class="embed-responsive-item" src=<?php echo $story['story_video_url']; ?>></video>
                    </div>
                </div> -->
                                    <?php
                                    }
                                    ?>
                                     </div>       
                                    <?php
                                    $p++;
                                } ?>
                                <!-- <div class="carousel-item">
                <div class="d-flex justify-content-center min-vh-100">
                    <div class="embed-responsive embed-responsive-21by9">
                        <video autoplay class="embed-responsive-item" src="https://www.w3schools.com/html/mov_bbb.mp4"></video>
                    </div>
                </div>
            </div> -->
                               
                            </div>
                            
                            <?php
                            if (count($stories['story_details']) > 1) {
                                ?>
                                <!-- Left and right controls -->
                                <a class="carousel-control-prev"
                                    href="#demo-<?php echo $stories['story_slug']; ?>-<?php echo $j; ?>" data-slide="prev">
                                    <span class="carousel-control-prev-icon">
                                        <img class="img-fluid"
                                            src="https://www.indiaistore.com/themes/frontend/custom/images/stories/prev-btn.png"
                                            alt="" />
                                    </span>
                                </a>
                                <a class="carousel-control-next"
                                    href="#demo-<?php echo $stories['story_slug']; ?>-<?php echo $j; ?>" data-slide="next">
                                    <span class="carousel-control-next-icon">
                                        <img class="img-fluid"
                                            src="https://www.indiaistore.com/themes/frontend/custom/images/stories/next-btn.png"
                                            alt="" />
                                    </span>
                                </a>
                            <?php } ?>
                        </div>
                    </div>
                    <?php
                    $j++;
                } ?>

            </div>
        </div>
    </div>
</div>
<!-- Stories -->

<!--new-section-two-->
<section class="">
    <div class="container">
        <div class="col-12">
            <h2 class="help-heading">Explore What’s New</h2>
            <p class="sub-head-offer">Get latest updates on trending products!</p>
            <div class="row mt-4 mb-5 h-mb">
                <div class="col-12 col-sm-4 col-md-5 d-none d-md-block">
                    <div class="bannericons">
                        <a href="<?= $banner_highlights[0]->cta ?: 'javascript:void(0);' ?>" target="_blank"><img
                                src="<?= PATH_FILES_UPLOADS . "banners/" . $banner_highlights[0]->position_slug . "/" . $banner_highlights[0]->desktop_image ?>"
                                class="img-fluid h-iphone img-shadow h-img-btm" alt=""></a>
                    </div>
                </div>

                <div class="col-12 col-sm-8 col-md-7 d-none d-md-block">
                    <div class="row">
                        <?php
                        $k = 0;
                        foreach ($banner_highlights as $banner_highlight) {

                            if ($k == 0) {

                            } else if ($k == 1) {

                                ?>
                                    <div class="col-md-12">
                                        <div class="bannericons">
                                            <a href="<?= $banner_highlight->cta ?: 'javascript:void(0);' ?>" target="_blank"><img
                                                    src="<?= PATH_FILES_UPLOADS . "banners/" . $banner_highlight->position_slug . "/" . $banner_highlight->desktop_image ?>"
                                                    class="img-fluid img-shadow" alt=""></a>
                                        </div>
                                    </div>
                                <?php
                            } else {

                                ?>
                                    <div class="col-md-6">
                                        <div class="bannericons">
                                            <a href="<?= $banner_highlight->cta ?: 'javascript:void(0);' ?>" target="_blank"><img
                                                    src="<?= PATH_FILES_UPLOADS . "banners/" . $banner_highlight->position_slug . "/" . $banner_highlight->desktop_image ?>"
                                                    class="img-fluid h-img-top img-shadow" alt=""></a>
                                        </div>
                                    </div>
                                <?php
                            }
                            $k++;
                        } ?>
                        <!-- <div class="col-md-6">
                            <div class="bannericons">
                                <a href="https://www.indiaistore.com/Do-More-On-iPad" target="_blank"><img
                                        src="/files/uploads/home-img/ipad-highlights.png"
                                        class="img-fluid h-img-top img-shadow" alt=""></a>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="bannericons">
                                <a href="https://www.indiaistore.com/iphone-14-pro" target="_blank"><img
                                        src="/files/uploads/home-img/iPhone14-Pro-highlight.png"
                                        class="img-fluid h-img-top img-shadow" alt=""></a>
                            </div>
                        </div> -->



                    </div>
                </div>

                <!-- Swiper -->
                <div class="swiper HighlightSlider highlights-swiper  d-block d-md-none py-2">
                    <div class="swiper-wrapper">
                        <?php
                        foreach ($banner_highlights as $banner_highlight_mobile) {
                            ?>
                            <div class="swiper-slide">
                                <div class="card-highlights">
                                    <img src="<?= PATH_FILES_UPLOADS . "banners/" . $banner_highlight_mobile->position_slug . "/" . $banner_highlight_mobile->mobile_image ?>"
                                        class="img-fluid w-100" alt="">
                                    <div classc="buyer-card-cnt">
                                        <a href="<?= $banner_highlight_mobile->cta ?: 'javascript:void(0);' ?>"
                                            target="_blank" class="stretched-link"></a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>



                    <div class="swiper-pagination buyer-pagination highlights-pagination"></div>

                </div>

            </div>



        </div>


    </div>

</section>


<section class="sec-home-4">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="help-heading">Offer Essentials</h2>
                <p class="sub-head-offer">Your smart guide to leading offers!</p>

                <!-- Swiper -->
                <div class="swiper SmartBuyer mt-4">
                    <div class="swiper-wrapper smart-slider">
                        <?php
                        if (!empty($buyers_guide)):
                            $i = 1;
                            foreach ($buyers_guide as $buyersguide): ?>


                                <div class="swiper-slide">
                                    <div class="card-buyer">
                                        <img src="<?= PATH_FILES_UPLOADS . "banners/$buyersguide->position_slug/$buyersguide->desktop_image" ?>"
                                            class="img-fluid" alt="">
                                        <div classc="buyer-card-cnt">
                                            <h4 class="buyer-title">
                                                <?php echo $buyersguide->name; ?>
                                            </h4>
                                            <p class="para-buyer mb-3">
                                                <?php echo $buyersguide->ticker_text; ?>
                                            </p>
                                            <a href="<?php echo $buyersguide->cta; ?>" target="_blank" class="stretched-link">
                                                Know more <i class="fab nav-arrow"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>











                        <!--slide-->

                    </div>

                    <div class="buyer-nav  d-none d-md-block">
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>

                    <div class="buyer-pagination buyer-nav-page d-block d-md-none">
                        <div class="swiper-pagination buyer-pagination"></div>

                    </div>



                    <!-- Swiper JS -->

                </div>
            </div>
        </div>

</section>
<?php if (!empty($product_categories)) : ?>
<section class="sec-home-4 category-sec">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="help-heading">Product Categories</h2>

                <!-- Swiper -->
                <div class="swiper productCategory mt-4">
                    <div class="swiper-wrapper mb-4">
                    <?php 
                    foreach ($product_categories as $cat) : ?>
                        <div class="swiper-slide">
                            <div class="category-item">
                                <div class="product-img">
                                    <img src="<?= PATH_FILES_UPLOADS . "categories/$cat->cat_slug/$cat->cat_home_thumbnail" ?>" class="img-fluid" alt="">
                                    <div class="product-overly"></div>
                                </div>
                                <div class="categori-link">
                                    <a href="<?= base_url($cat->cat_slug) ?>" target="_blank" class="link-cat"><?= $cat->cat_name ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                    </div>

                    <div class="buyer-pagination d-block d-md-none mt-0">
                        <div class="swiper-pagination buyer-pagination"></div>
                    </div>

                    <div class="product-nav d-none d-md-block">
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>


                </div>

                <!-- Swiper JS -->

            </div>
        </div>
    </div>

</section>
<?php endif; ?>


<section class="sec-home-4 ptm">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="help-heading">What We Do</h2>

                <div class="explore-i mt-4">

                    <picture>
                        <source media="(max-width:650px)" srcset="/files/uploads/home-img/explore-img-mo11.png">
                        <img src="/files/uploads/home-img/explore-img11.png" class="img-fluid">
                    </picture>


                    <div id="flip" class="flip d-flex justify-content-center align-items-center">
                        <div class="more_btn">+</div>
                        <p class="d-none d-md-block more-text">More</p>

                    </div>
                    <div id="panel" class="panel">

                        <div class="panel-CNT">
                            <!-- <h2 class="panel-CNT-title mb-4">Welcome to the world of
                                IndiaiStore</h2> -->
                            <p>INDIA iSTORE hosts affordability offers curated by Apple’s National distributors enabling you to buy it from Apple Authorised Reseller near you. It is the official website of Apple Authorised distributors in India: Ingram Micro and Redington Limited. Be it an iPhone, Mac, iPad, Apple Watch or accessories, with our partnership with over 3000 Apple Reseller stores across India, we ensure availability right in your neighbourhood. Both companies provide robust distribution support to Apple products nationwide. Browse online at INDIA iSTORE and Buy from an Apple Authorised Online or Offline store.<br>
                                <a href="https://www.indiaistore.com/about-us" target="_blank"  style="padding-top:15px;">Read more</a>
                            </p>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>

</section>



<?php if (!empty($premium_partners)): ?>
    <section class="apple-premium-resellers">
        <!-- <div class="apr-flower">
    <img src="<?= PATH_FILES_UPLOADS . "diwali/apr-f-1.png" ?>" alt="images">
    </div>
    <div class="cracker-layer">
      <img src="<?= PATH_FILES_UPLOADS . "diwali/c-1.png" ?>" alt="images">
    </div> -->
        <div class="container">
            <h2 class="heading-2">Apple Premium Resellers</h2>
            <ul class="seller-list">
                <?php foreach ($premium_partners as $partner): ?>
                    <li>
                        <a href="<?= $partner->website ?: 'javascript:void(0);' ?>" target="_blank"
                            data-store-name="<?= $partner->name ?>">
                            <div class="content-overlay"></div>
                            <img src="<?= PATH_FILES_UPLOADS . "partners/$partner->logo" ?>">
                            <div class="content-details fadeIn-bottom">
                                <h3 class="content-title">Visit Website <i class="ii-icon-external-link"></i> </h3>
                            </div>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <!-- <div class="cracker">
      <img src="<?= PATH_FILES_UPLOADS . "diwali/c-2.png" ?>" alt="images">
    </div>
    <div class="apr-bottom-flower">
      <img src="<?= PATH_FILES_UPLOADS . "diwali/apr-f-2.png" ?>" alt="images">
    </div> -->
    </section>
<?php endif; ?>

<?php
if (isset($store_locator) && !empty($store_locator))
    echo $store_locator;
?>

<section class="online-stores" id="online_stores_section">
</section>

<section class="buy-offline" id="offline_stores_section">
</section>

<?php if (!empty($banner_interested_in)): ?>

    <section class="offer-carousel interested bg-light">
        <div class="container">
            <h2 class="heading-2">You might be interested in</h2>
        </div>
        <div class="container container-right">
            <div class="slider">
                <?php foreach ($banner_interested_in as $banner): ?>
                    <div class="offer-item <?= $banner->additional_classes ?>">
                        <a href="<?= ($banner->cta) ?: 'javascript:void(0);' ?>"
                            target="<?= ($banner->is_external_cta) ? '_blank' : '' ?>" data-banner-name="<?= $banner->name ?>">
                            <picture>
                                <source media="(max-width: 768px)"
                                    srcset="<?= PATH_FILES_UPLOADS . "banners/$banner->position_slug/$banner->mobile_image" ?>">
                                <source media="(min-width: 769px)"
                                    srcset="<?= PATH_FILES_UPLOADS . "banners/$banner->position_slug/$banner->desktop_image" ?>">
                                <img src="<?= PATH_FILES_UPLOADS . "banners/$banner->position_slug/$banner->desktop_image" ?>"
                                    alt="<?= $banner->alt_text ?>">
                            </picture>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

    </section>

<?php endif; ?>

<?php
// if (isset($online_stores) && !empty($online_stores))
// echo $online_stores;
?>

<?php
// if (isset($offline_stores) && !empty($offline_stores))
// echo $offline_stores;
?>