<style>
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
            font-size: 20px;
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
        font-size: 18px;
        list-style-type: none;
        padding: 0.5em 1.5em;

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
            font-size: 35px;
        }
    }

    @media (max-width:767px) {
        .conuter-for-offer #countdown li {
            padding: 0 10px 10px;
            font-size: 15px;

            /* padding: 15px 10px; */
        }

        /* .conuter-for-offer #countdown li {} */

        .heading-counter-content {
            /* padding: 10px 5px; */
            padding: 5px;
            padding-bottom: 0px !important;
        }

        .count-down-22 h2 {
            padding: 15px 5px;
            font-size: 16px;
            line-height: 1.4;
            font-weight: 400;
            color: #696969;
        }

        .calender-brief li {
            margin: 0 auto;
            padding: 19px 5px 5px;
            /* padding: 19px 5px; */

            /* padding: 19px 15px; */
            display: block;
        }

    }


    /**  */
    .atcb-icon {
        display: none;
    }
    header .hamburger-menu #category-menu>li ul li a .badge{font-weight: 600;}
    header .hamburger-menu #category-menu > li ul li a {
    padding: 10px 40px;
    font-size: 1.2rem;
    color: #ffffff;
    font-weight: 600;
}
    header .hamburger-menu #category-menu>li>a, header .hamburger-menu .misc-links{font-weight: bold;}
    header .hamburger-menu .social-media li a{opacity: .9;}
    @media (max-width: 1024.98px){
header .hamburger-menu .misc-links li a {
    font-weight: 600;
        }}
    section.product-categories a img {
    border: 2px solid #ffffff;
}
    @media (max-width: 767px){
.bank-offer-categ-tile1 {
    width: 100% !important;
    max-width: 195px;
    margin: 0 auto;
    display: table!important;
        }}
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

          <?php if (!empty($trend_search_data)) : ?>
            <div class="list">
              <?php foreach ($trend_search_data as $ts_data) : ?>
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
    <div class="count-down-small" style="padding:20px;">
        <div class="container-fluid countdown-container">
            <div class="block-left">
                <div class="name text-center i-14-img">
                    <img width=""
                        src="https://stage.indiaistore.com/files/uploads/landing_pages/iphone_14/iphone-14-count-v3.png"
                        alt="iPhone 14 Pro Logo">
                </div>
                <div class="heading-counter-content text-center">
                    <!-- <img width="" src="https://stage.indiaistore.com/files/uploads/landing_pages/iphone_14/pre-book.png"
                        alt="Pre book"> -->
                        <h2 class="product-title"><a href="https://www.indiaistore.com/iphone-14"><strong>Pre-book Now</strong></a></h2>
                    <!-- <img width="120"
                        src="https://stage.indiaistore.com/files/uploads/landing_pages/iphone_14/pre-book.png"
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

                     <li class="icalender"><div class="atcb" style="display:none;">
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
                     <li class="google-calender"><div class="atcb"  style="display:none;">
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

                </div>
            </div>


        </div>
    </div>
</section>

<section class="hero-banner"> 
    <div class="slider">
       
    
        <?php if (!empty($banner_hero)) :
      $i = 1;
      foreach ($banner_hero as $banner) : ?>
        <div class="slider-item <?= $banner->additional_classes ?>">
        <?php if ($banner->video_url) { ?>
            <a data-fancybox href="<?= $banner->video_url ?>" data-banner-name="<?= $banner->name ?>">
                <?php } else if($banner->desktop_image_mapping != '' && $banner->mobile_image_mapping != ''){
                  } else { ?>
                <a href="<?= ($banner->cta) ?: 'javascript:void(0);'; ?>"
                    target="<?= ($banner->is_external_cta) ? '_blank' : '_self' ?>"
                    data-banner-name="<?= $banner->name ?>">
                    <?php } ?>
                    <?php  if($banner->desktop_image_mapping != '' && $banner->mobile_image_mapping != ''){ ?>
                      <picture>
                      
                        <img class="dex d-none d-sm-block"
                            src="<?= PATH_FILES_UPLOADS . "banners/$banner->position_slug/$banner->desktop_image" ?>"
                            alt="<?= $banner->alt_text ?>" usemap="#banner-desktop-mapping-<?php echo $i; ?>">
                       
                        <img class="mob d-sm-none d-md-none d-lg-none"
                            src="<?= PATH_FILES_UPLOADS . "banners/$banner->position_slug/$banner->mobile_image" ?>"
                            alt="<?= $banner->alt_text ?>" usemap="#banner-mobile-mapping-<?php echo $i; ?>">
                       
                    </picture>
                    <?php } else { ?>
                    <picture>
                        <source media="(min-width: 769px)"
                            srcset="<?= PATH_FILES_UPLOADS . "banners/$banner->position_slug/$banner->desktop_image" ?>">
                        <img class="dex"
                            src="<?= PATH_FILES_UPLOADS . "banners/$banner->position_slug/$banner->desktop_image" ?>"
                            alt="<?= $banner->alt_text ?>">
                        <source media="(max-width: 768px)"
                            srcset="<?= PATH_FILES_UPLOADS . "banners/$banner->position_slug/$banner->mobile_image" ?>">
                        <img class="mob"
                            src="<?= PATH_FILES_UPLOADS . "banners/$banner->position_slug/$banner->mobile_image" ?>"
                            alt="<?= $banner->alt_text ?>">
                       
                    </picture>
                    <?php } ?>
                    <?php  if($banner->desktop_image_mapping != '' && $banner->mobile_image_mapping != ''){ ?>
                      <map name="banner-desktop-mapping-<?php echo $i; ?>">
                    <?php echo $banner->desktop_image_mapping; ?>
                    </map>
                    <map name="banner-mobile-mapping-<?php echo $i; ?>">
                    <?php echo $banner->mobile_image_mapping; ?>
                    </map>
                    <?php } ?>



                    <?php if ($banner->video_url) : ?>
                    <div class="playButton">
                        <img src="<?= PATH_FRONTEND_CUSTOM_IMG . "ui/play.png" ?>" alt="Play Button">
                    </div>

                    <?php if ($banner->cta) : ?>
                    <div class="videoCtaBtn" data-href="<?= $banner->cta ?>"
                        data-target="<?= ($banner->is_external_cta) ? '_blank' : '' ?>">Know more</div>
                    <?php endif; ?>
                    <?php endif; ?>
                    <?php if ($banner->video_url) { ?>
                    </a>
                <?php } else if($banner->desktop_image_mapping != '' && $banner->mobile_image_mapping != ''){
                  }else { ?>
                </a>
                    <?php } ?>
        </div>
        <?php
        $i++;
      endforeach;
    endif; ?>
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

<section class="mini-carousel">
    <!-- <div class="cracker">
    <img src="<?= PATH_FILES_UPLOADS . "diwali/c-1.png" ?>" alt="images">
  </div> -->
    <div class="container container-right">
        <div class="slider">
            <?php if (!empty($banner_switch_from)) :
        foreach ($banner_switch_from as $banner) : ?>
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
      <h2 class="heading-2">Stories</h2>
        <div class="small-icon-stories">
          <div class="owl-carousel-sliudes-icon owl-carousel">
            <?php 
            $i = 1;
            $k = 0;
            foreach($snapshots as $snapshot){ ?>
            <div class="item" data-index="<?=$k ?>">
              <div class="stories clickableDiv" id="clickableDiv">
                <a href="javascript:void(0)">
                  <span class="demo-stories-avatar">
                    <img class="img-fluid" src="<?= PATH_FILES_UPLOADS . "stories/$snapshot->story_image" ?>" alt="" />
                  </span>
                  <span class="demo-stories-name"><?php echo $snapshot->story_name; ?></span>
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
          <img class="img-fluid" src="https://www.indiaistore.com/themes/frontend/custom/images/stories/close-btn.png" />
        </i>
      </div>
      <div id="popup" class="popupstory">
        <div class="section-padding" id="parent-devisible">
          <div class="screenshot_slider owl-carousel">
            <?php
            $j = 1;
            foreach($allstories as $stories){
            ?>
            <div class="item" id="<?php echo $stories->id; ?>" data-index-id="<?php echo $j; ?>">
              <div id="demo-<?php echo $stories['story_slug']; ?>-<?php echo $j; ?>" class="carousel slide" data-ride="carousel" data-interval="false">
                <!-- Indicators -->
                <ul class="carousel-indicators">
                  <?php 
                    $n = 0;
                    foreach($stories['story_details'] as $storycount){
                      if($n == 0){
                  ?>
                  <li data-target="#demo-<?php echo $stories['story_slug']; ?>-<?php echo $j; ?>" data-slide-to="<?php echo $n; ?>" class="active"></li>
                  <?php } else {
                    ?>
                  <li data-target="#demo-<?php echo $stories['story_slug']; ?>-<?php echo $j; ?>" data-slide-to="<?php echo $n; ?>"></li>
                    <?php
                  }
                  $n++; } ?>
                  
                </ul>
                <!-- The slideshow -->
                <div class="carousel-inner">
                  <?php   
                  $p = 1;
                  foreach($stories['story_details'] as $story){ ?>
                  <div class="carousel-item <?php if($p == 1){ echo 'active'; } ?>">
                    <img class="img-fluid" src="https://i3-prod-assets.indiaistore.com/files/uploads/stories/<?php echo $stories['story_slug']; ?>/<?php echo $story['story_desktop_image']; ?>" />
                  </div>
                  <?php 
                $p++;
                } ?>
                </div>
                <?php 
                if(count($stories['story_details']) > 1){
                ?>
                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo-<?php echo $stories['story_slug']; ?>-<?php echo $j; ?>" data-slide="prev">
                  <span class="carousel-control-prev-icon">
                    <img class="img-fluid" src="https://www.indiaistore.com/themes/frontend/custom/images/stories/prev-btn.png" alt="" />
                  </span>
                </a>
                <a class="carousel-control-next" href="#demo-<?php echo $stories['story_slug']; ?>-<?php echo $j; ?>" data-slide="next">
                  <span class="carousel-control-next-icon">
                    <img class="img-fluid" src="https://www.indiaistore.com/themes/frontend/custom/images/stories/next-btn.png" alt="" />
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







<?php if (!empty($banner_trending_offers)) : ?>
<section class="offer-carousel trending">
    <div class="container">

        <h2 class="heading-2">Trending Offers</h2>
    </div>
    <div class="container container-right">
        <div class="slider">
            <?php foreach ($banner_trending_offers as $banner) : ?>
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
    <!-- <div class="cracker-group">
      <div class="shape-one">
        <img src="<?= PATH_FILES_UPLOADS . "diwali/c-2.png" ?>" alt="images">
      </div>
      <div class="shape-two">
        <img src="<?= PATH_FILES_UPLOADS . "diwali/c-3.png" ?>" alt="images">
      </div>
  </div> -->

</section>
<?php endif; ?>

<?php if (!empty($product_categories)) : ?>
<section class="product-categories">
    <div class="container">
        <h2 class="heading-2">Product Categories</h2>
    </div>
    <div class="wrapper">
        <div class="category-list">
            <?php foreach ($product_categories as $cat) : ?>
            <a href="<?= base_url($cat->cat_slug) ?>" data-cat-name="<?= $cat->cat_name ?>">
                <img src="<?= PATH_FILES_UPLOADS . "categories/$cat->cat_slug/$cat->cat_thumbnail" ?>">
            </a>
            <?php endforeach; ?>

            <?php if (!empty($banner_cat_last_thumb)) : ?>
                <?php foreach ($banner_cat_last_thumb as $banner_cat) : ?>
                    <a href="<?= $banner_cat->cta ?: 'javascript:void(0);' ?>"
                target="<?= ($banner_cat->is_external_cta) ? '_blank' : '' ?>"
                data-cat-name="<?= $banner_cat->name ?>" class="<?php echo $banner_cat->additional_classes; ?>">
                <img
                    src="<?= PATH_FILES_UPLOADS . "banners/" . $banner_cat->position_slug . "/" . $banner_cat->mobile_image ?>">
                </a>
                <?php endforeach; ?>
            <?php endif; ?>

            <?php /*if (!empty($banner_cat_last_thumb[0])) : ?>
            <a href="<?= $banner_cat_last_thumb[0]->cta ?: 'javascript:void(0);' ?>"
                target="<?= ($banner_cat_last_thumb[0]->is_external_cta) ? '_blank' : '' ?>"
                data-cat-name="<?= $banner_cat_last_thumb[0]->name ?>">
                <img
                    src="<?= PATH_FILES_UPLOADS . "banners/" . $banner_cat_last_thumb[0]->position_slug . "/" . $banner_cat_last_thumb[0]->mobile_image ?>">
            </a>
            <?php endif;*/ ?>
        </div>
    </div>
    <!-- <div class="deepak-group">
      <div class="shape-one">
        <img src="<?= PATH_FILES_UPLOADS . "diwali/d-1.png" ?>" alt="images">
      </div>
      <div class="shape-two">
        <img src="<?= PATH_FILES_UPLOADS . "diwali/d-2.png" ?>" alt="images">
      </div>
    </div> -->
</section>

<?php endif; ?>

<?php if (!empty($premium_partners)) : ?>
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
            <?php foreach ($premium_partners as $partner) : ?>
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

<?php if (!empty($banner_interested_in)) : ?>

<section class="offer-carousel interested bg-light">
    <div class="container">
        <h2 class="heading-2">You might be interested in</h2>
    </div>
    <div class="container container-right">
        <div class="slider">
            <?php foreach ($banner_interested_in as $banner) : ?>
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