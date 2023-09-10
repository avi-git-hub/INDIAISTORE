<style>
  .shot-carousel .tns-controls {
    display: flex !important;
    width: 0 !important;
    height: 0 !important;
    overflow: hidden;
  }
  .ed{
    margin-left: 18px;
  }
  section.toc .terms .term .desc p:before {
    content: "-";
    position: absolute;
    left: 0;
}


  .stick-ul {
    display: none !important;
  }

  .mo-visible {
    display: none;
  }

  .pnBtn {
    display: flex;
    justify-content: space-between;
    position: absolute;
    max-width: 100%;
    width: 100%;
    bottom: -70px;
    left: -45px;
    /*top: 50%;
    -webkit-transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    transform: translateY(-50%);*/
  }

  .product-color-deep-purple {
    background-color: #48404f;
  }

  .product-color-space-black {
    background-color: #333230;
  }

  .sliderButton::before,
  .sliderButton::after {
    font-family: "icon-font";
  }

  .prevButton::before {
    content: "\2039";
    -webkit-content: "\2039";
    -o-content: "\2039";
    font-size: 47px;
    /* position: relative;
    top: -13px;*/
  }

  .nextButton::before {
    content: "\203A";
    -webkit-content: "\203A";
    -o-content: "\203A";
    font-size: 47px;
    /* position: relative;
    top: -13px;*/
  }

  @media (max-width:767px) {
    .new-price-section {
      padding: 0px 15px;
    }

    .new-price-mrp {
      padding: 5px 55px;
    }

    .new-mrp-discount {
      padding: 5px 5px !important;
    }

    .bank-box {
      margin: 0px 8px !important;
    }

    .product-offer-carousel .carousel-control-next::before {
      right: 0 !important;
    }

    .product-offer-carousel .carousel-control-prev::before {
      left: 0 !important;
    }

    .pnBtn {
      display: none;

    }

    .mo-visible {
      display: block;
      overflow: hidden;
    }
  }

  .mr-3,
  .mx-3 {
    margin-right: -1.5rem !important;
  }

  .price-calculator .tns-outer {
    position: relative;
  }

  .price-calculator .tns-outer .tns-controls {
    position: absolute;
    top: 50%;
    z-index: 2;
    width: 100%;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
  }

  .price-calculator .tns-outer .tns-controls {
    top: 26% !important;
    top: 0 !important;
  }

  .price-calculator .tns-outer .tns-controls button {
    font-size: 0;
    border-radius: 50%;
    width: 19px;
    height: 19px;
    margin: 0 -5%;
    border: 0;
    background: transparent;
    color: #000000;
  }

  .price-calculator .tns-controls button[data-controls="prev"]::before {
    content: " ";
    -webkit-content: " \2039";
    -o-content: " \2039";
    font-size: 45px;
    /* width: 20px;
height: 20px; */
    /* background:red; */
    display: block;
    font-family: "icon-font";
    -o-font-family: "icon-font";
    font-family: "Font Awesome Kit";
  }

  .price-calculator .tns-controls button[data-controls="next"]::before {
    content: " ";
    -webkit-content: " \203A";
    -o-content: " \203A";
    /* width: 20px;
height: 20px; */
    /* background:red; */
    font-size: 45px;
    display: block;
    font-family: "icon-font";
    -webkit-font-family: "icon-font";
    -o-font-family: "icon-font";
    font-family: "Font Awesome Kit";
  }

  @media (max-width:767px) {
    .control li.prev {
      left: 0 !important;
    }

    .control li.next {
      right: 0 !important;
    }

    /* .control li {top: 76% !important;} */
    .tns-nav-active {
      background-color: gray;
    }

    .price-calculator .tns-controls {
      /* display: none !important; */

    }

    .offer-slide-two .tns-outer .tns-controls {
      top: 75px !important;
    }

    .offer-slide-two .new-price-mrp {
      padding: 1px 32px;
    }

    .offer-slide-two .tns-outer .tns-controls button {
      width: 90px !important;
    }

    .ip-sir {
      display: none !important;
    }
  }


  .upgrade-right-txt a {
    font-size: 1.2rem;
    font-weight: 200;
    line-height: 1.5;
  }

  /* page css */
  .bank-box {
    border: 1px solid #000000;
    padding: 10px;
    border-radius: 16px;
    margin: 22px 0px;
    padding-bottom: 3px;
    background-color: #ffffff;
    min-height: 230px;
  }

  .new-tanc li {
    display: inline-block;
    font-size: 12px;
    padding: 8px 0px;
    margin-top: 10px;
    padding-right: 3px;
    color: #007bff;
    text-decoration: underline;
  }

  #cal-new-price-mrp {
    margin: 5px 0px 0px 0px;
  }

  .tcr {
    float: right;
  }

  .new-bank-offer p {
    font-size: 14px;
    /* margin-top: 4px; */
    line-height: 1.6;
    font-family: "SF UI Display", sans-serif;
    margin-bottom: 0px;
  }

  .new-product-name h2 {
    font-weight: 500;
    font-size: 22px;
    line-height: 20px;
    padding: 10px 0px;
    padding-bottom: 25px;
  }

  section.name-price {
    margin-bottom: 20px !important;
  }

  section.product-info .info-panel .price-calculator {
    margin-top: 5px;
  }

  .new-price-font h3 {
    font-weight: 500;
    font-size: 20px !important;
    line-height: 20px;
    font-family: "SF UI Display", sans-serif;
    display: flex;
    align-items: center;
  }

  .new-price-font p,
  #cal-new-price-mrp span,
  .price-small-text {
    font-size: 11px;
    line-height: 1.6;
    font-family: "SF UI Display", sans-serif;
  }

  #cal-new-price-mrp span {
    color: #007bff;
    /* text-decoration:underline; */
  }

  #cal-new-or span {
    border: 1px solid #000000;
    font-family: "SF UI Display", sans-serif;
    padding: 5px 7px;
    font-size: 20px;
    border-radius: 7px;
    /* margin: 19px; */
    margin: 0 5px;
  }

  #new-id-mrp {
    color: gray !important;
    ;
    font-weight: 500;
    font-size: 18px !important;
  }

  .new-bank-offer h4 {
    font-size: 15px;
    line-height: 1.6;
    font-family: "SF UI Display", sans-serif;
    margin-bottom: 0;
    margin-top: 8px;
  }

  .outer-product-pricebox {
    display: flex;
    align-items: center;
    height: 60px;
  }

  .dark-theme .cp-price.main-product-price {
    color: var(--text-color) !important;
    background-color: var(--croma-wall) !important;
  }

  .cp-price.main-product-price {
    height: 51px;
    padding-bottom: 10px;
    background-color: #fff;
  }

  .cp-price {
    display: flex;
    margin: 1.4rem 0 0.6rem;
    align-items: center;
  }

  .emioptiondetails-bg {
    color: #007bff;
    text-decoration: underline;
  }

  .cp-product-details .cp-price .new-price {
    font-size: 2.6rem;
    line-height: normal;
    width: 185px;
  }

  .main-product-price .tax-text {
    margin-left: 0 !important;
    color: #353535;
    font-size: 1.2rem;
    font-weight: 400;
  }

  .or-icon-main {
    display: flex;
    align-items: center;
    margin-left: 7%;
    margin-right: 7%;
  }

  .cp-product-details .pd-info .amount {
    font-weight: 500;
  }

  .emi-div-btn {
    line-height: .5;
  }

  .emi-div-btn .btn {
    color: #00e9bf !important;
    text-decoration: underline !important;
    text-transform: none !important;
    font-size: 1.2rem !important;
    font-weight: 400 !important;
    padding: 0 !important;
  }

  .product-offer-carousel .carousel-control-next,
  .product-offer-carousel .carousel-control-prev {
    position: absolute;
    background-color: transparent;
    border: none;
    top: 0;
    bottom: 0;
    z-index: 1;
    width: 0 !important;
    opacity: .8;

  }

  /* .middle-content{min-height:90px;} */
  .product-offer-carousel .carousel-control-next::before {
    position: relative;
    top: 0;
    bottom: 0;
    right: -24px;
    transform: rotate(178deg);
    content: "\2039";
    -webkit-content: "\2039";
    font-size: 47px;
    color: #000000;
  }

  .product-offer-carousel .carousel-control-prev::before {
    position: relative;
    top: 0;
    bottom: 0;
    left: -24px;
    transform: rotate(0deg);
    content: "\2039";
    font-size: 47px;
    color: #000000;
  }

  .new-bank-offer li {
    display: inline-block;
    /* padding-right:6px; */
  }

  /* .offer-list-logo {
min-height:45px;
} */

  .new-bank-offer {
    min-height: 150px;
  }

  .offer-slide-two .tns-outer .tns-controls {
    top: 90px !important;
  }

  .price-calculator .offer-slide-two .tns-outer .tns-controls button {
    width: 30px !important;
  }

  .price-calculator .offer-slide-two .tns-outer .tns-controls button {
    width: 30px !important;
  }

  .control li {
    position: absolute;
    z-index: 99;
    top: 50%;
    transform: translateY(-50%);
    color: #000000;
    background: transparent;
    padding: 12px 20px;
    border-radius: 50%;
    cursor: pointer;
  }

  .slideravail {
    position: relative;
  }

  .control {
    list-style: none;

  }

  .control li.prev {
    left: -25px;
  }

  .control li.next {
    right: -25px;
  }

  .tns-nav {
    text-align: center;
    margin-top: 15px;
    margin-bottom: 15px;
  }

  .tns-nav button {
    height: 13px;
    width: 8px;
    background-color: #a5a5a5;
    border: none;
    margin-left: 7px;
    border-radius: 50%;
  }

  .tns-nav .tns-nav-active {
    background-color: black;
  }

  /* .scale{
  animation-name: scale;
  transform-origin: center
}
@keyframes scale{
  from {
    transform: rotate(90deg);
  }
  to{
    transform: rotate(0deg);
  }
} */
  /* Youtube link */
  /* .link {
    position: fixed;
    background-color: #d12322;
    padding: 23px 40px;
    right: 0;
    border-radius: 5px;
    top: 0;
    font-size: 18px;
    font-weight: 500;
    color: #fff;
    text-decoration: none;
    text-transform: capitalize;
    transition: all 0.1s ease-in-out;
  }

  .link i {
    padding-left: 7px;
  }

  .link:hover {
    text-decoration: underline;
    background-color: black;
  } */

  .arrow {
    border: solid black;
    border-width: 0 3px 3px 0;
    display: inline-block;
    padding: 3px;
  }

  .right {
    transform: rotate(-45deg);
    -webkit-transform: rotate(-45deg);
  }

  .left {
    transform: rotate(135deg);
    -webkit-transform: rotate(135deg);
  }


  .slideshow-items {
    width: 500px;
  }

  .slideshow-thumbnails {
    width: 100px;
  }

  #slideshow-items-container {
    display: inline-block;
    position: relative;
  }

  #lens {
    background-color: rgba(233, 233, 233, 0.4)
  }

  #lens,
  #result {
    position: absolute;
    display: none;
    z-index: 1;
  }

  /* .slideshow-items { display: none; } */
  .slideshow-items.active {
    display: block;
  }

  .slideshow-thumbnails {
    opacity: 0.5;
  }

  .slideshow-thumbnails.active {
    opacity: 1;
  }

  #lens,
  .slideshow-items,
  .slideshow-thumbnails,
  #result {
    border: solid var(--light-grey-2) 1px;
  }

  /* .info-panel{z-index:-1;} */
  #result {
    background-color: #FFFFFF;
  }

  @media (max-width: 767px) {

    #lens,
    #result {
      display: none !important;
    }
  }

  .readmorebtn {
    display: none !important;
  }


  /*---getoffer table---*/
  .get-offer-box {
    margin: 30px 0;
    border: 1px solid #000000;
    border-radius: 16px;
    width: 100%;
    padding: 20px;
  }

  .get-offer-box h5 {
    font-size: 16px;
  }

  .get-offer-box ul {
    margin: 0;
  }

  .get-offer-box ul li {
    margin: 0 0 15px 0;
    font-size: 13px;
    display: flex;
    justify-content: space-between;
  }

  .get-offer-box ul li:last-child {
    margin: 0 0 0 0;
  }

  .get-offer-box ul li .offer-col-1 {
    margin-right: 15px;
  }

  .get-offer-box ul li .offer-col-1 p {
    font-size: 16px;
  }

  .get-offer-box ul li .offer-col-1 span {
    font-size: 11px;
    font-weight: 300;
    margin-top: 6px;
    float: left;
    line-height: 1.4;
  }

  .get-offer-box ul li .offer-col-2 p {
    font-size: 16px;
  }

  .ed {
    margin-left: 18px;
  }
</style>
<div style="display:none;">
</div>
<h2 id="productnameforprod" style="display:none;">
  <?php echo $prod_data->prod_name; ?>
</h2>
<?php if (!empty($banner_top_ticker)): ?>
  <section class="ticker">
    <div class="container">
      <div class="slider">
        <?php foreach ($banner_top_ticker as $banner): ?>
          <div class="slider-item">
            <!-- <div class="ticker">
              <div class="img"><img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='50' height='50' viewBox='0 0 50 50'%3E%3Crect width='50' height='50' fill='%23545454'/%3E%3C/svg%3E"></div>

              <div class="content">Exchange your Old Smartphone to get a New Iphone</div>
            </div> -->
            <img src="<?= PATH_FILES_UPLOADS, "banners/$banner->position_slug/$banner->desktop_image" ?>"
              alt="<?= $banner->alt_text ?>" />
          </div>
        <?php endforeach ?>
      </div>
    </div>
  </section>
<?php endif ?>

<section>
  <div class="container" style="display:none;">
    <?php
    echo $cat_name . ' >' . $prod_data->prod_name;
    ?>
  </div>
</section>

<section class="name-price <?= $prod_data->prod_html_classes ?: null ?>">
  <div class="container">
    <div class="name text-center">
      <?php if (!empty($prod_data->prod_logo_dark)): ?>
        <img src="<?= PATH_FILES_UPLOADS, "products/$prod_data->prod_slug/$prod_data->prod_logo_dark" ?>"
          alt="<?= $prod_data->prod_name ?> Logo" />
      <?php else: ?>
        <?= $prod_data->prod_name ?>
      <?php endif ?>
    </div>

    <!--<div class="price">&#8377;<? //= currency_format($prod_data->prod_highlighted_price, 'INR') 
    ?></div>-->

    <!-- <div class="btn btn-primary locate-store">Locate a Store</div> -->
  </div>
</section>

<section class="product-info">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-6">

        <div class="media-fix">
          <div class=" media-panel">
            <div id='lens'></div>
            <div id='result' style="z-index:1;"></div>
            <div class="main-img">
              <a href="javascript:void(0);">
                <img src="" alt="" />
              </a>

              <a class="share prod-share-btn" href="javascript:void(0);" data-html="true" data-placement="top"
                data-popover-content="#prod-share-content" data-toggle="popover" tabindex="0"><i
                  class="ii-icon-share"></i></a>
              <div class="pnBtn">
                <a class="prevButton sliderButton"></a>
                <a class="nextButton sliderButton"></a>
              </div>
            </div>


            <div class="shot-carousel" data-prod-slug="<?= $prod_data->prod_slug ?>"
              data-prod-name="<?= $prod_data->prod_name ?>"
              data-vid="<?= is_null($prod_data->prod_vid_id) ? null : $prod_data->prod_vid_id ?>"
              data-vid-thumb="<?= is_null($prod_data->prod_vid_thumbnail) ? null : $prod_data->prod_vid_thumbnail ?>">
              <!-- <div class="slider">
                                  <?php //if ((!is_null($prod_data->prod_vid_id)) && (!is_null($prod_data->prod_vid_thumbnail))) : 
                                  ?>
                                    <div class="slider-item slider-item-video">
                                      <div class="product-shot" data-asset-type="video" data-video-url="https://www.youtube.com/watch?v=<?= $prod_data->prod_vid_id ?>">
                                        <img src="<? //= PATH_FILES_UPLOADS, "products/$prod_data->prod_slug/$prod_data->prod_vid_thumbnail" 
                                        ?>" alt="<?= $prod_data->prod_name ?> Video" />
                                      </div>
                                    </div>
                                  <?php //endif 
                                  ?>
                                </div> -->
            </div>


            <!-- <div class="pnBtn">
                  <a class="prevButton">Prev</a>
                  <a class="nextButton">Next</a>
                </div> -->

            <div class="stick-ul">
              <ul>
                <?php if ($prod_data->prod_slug != "airpods-3rd-generation") { ?>
                  <li class="list-menu-compare"><a
                      href="https://www.indiaistore.com/compare/<?php echo strtolower($cat_name); ?>"
                      target="_blank">Compare</a></li>
                <?php } ?>
                <li class="list-menu-store"><a href="https://www.indiaistore.com/store-locator" target="_blank">Find a
                    Store</a></li>
              </ul>


            </div>

          </div>

          <!-- <div class="product-mrp">
                        <h3><span  id="new-id-mrp">MRP - <del>129900</del></span> 
                        
                        </h3>
                        </div> -->
        </div>



      </div>

      <div class="col-12 col-lg-6 info-panel" id="productdetailsinfo">

        <a class="share prod-share-btn" href="javascript:void(0);" data-html="true" data-placement="top"
          data-popover-content="#prod-share-content" data-toggle="popover" tabindex="0"><i
            class="ii-icon-share"></i></a>

        <div class="price-calculator product" data-product-slug="<?= $prod_data->prod_slug ?>">
          <div class="selection color">
            <h2 class="heading-2">Colour</h2>

            <div class="color-list">
              <?php $prod_colors = explode(',', $prod_data->prod_color) ?>
              <?php // $prod_colors_hex = explode(',', $prod_data->prod_color_hex)
              
              ?>
              <?php foreach ($prod_colors as $i => $color): ?>

                <?php //$color_hex = (!empty($prod_colors_hex[$i])) ? "style='background-color:$prod_colors_hex[$i]!important;'" : ''; 
                  $colorcount = substr_count($color, '-');
                  if ($colorcount == 1) {
                    $color1 = explode("-", $color);
                    $newcolor = implode(" ", $color1);
                    $ncolor = $newcolor;
                  } else {
                    $ncolor = $color;
                  }
                  ?>
                <?php $color_hex = ''; ?>

                <div class="color-item<?= ($i == 0) ? ' selected' : '' ?>" data-value="<?= $color ?>">
                  <div class="circle product-color-<?= $color ?>" <?= $color_hex ?>></div>

                  <?php if ($ncolor == 'space grey') { ?>
                    <div class="name">
                      <?= ucwords($ncolor) ?>
                    </div>
                  <?php } else { ?>
                    <div class="name">
                      <?= ucfirst($color) ?>
                    </div>
                  <?php } ?>

                </div>
              <?php endforeach ?>
            </div>
          </div>


          <?php
          if ($prod_data->prod_slug != "studio-display") {
            ?>
            <?php if ((!is_null($prod_data->prod_storage)) || (!is_null($prod_data->prod_screen_size))): ?>
              <div class="selection rect">
                <?php
                // product has storage attribute
                if (!is_null($prod_data->prod_storage)) {
                  echo '<h2 class="heading-2">Storage</h2>';

                  $data = explode(',', $prod_data->prod_storage);
                }



                // product has screen size attribute
                if (!is_null($prod_data->prod_screen_size)) {
                  echo '<h2 class="heading-2">Screen Size</h2>';

                  $data = explode(',', $prod_data->prod_screen_size);
                }
                ?>


                <div class="attribute-list">
                  <?php foreach ($data as $i => $value): ?>
                    <div data-value="<?= $value ?>" class="attribute<?= ($i == 0) ? ' selected' : '' ?>"><?= strtoupper($value) ?></div>
                  <?php endforeach ?>
                </div>
              </div>
            <?php endif ?>
          <?php } ?>




          <?php if (!is_null($prod_data->prod_processor)): ?>
            <div class="selection processor">
              <?php
              if ($prod_data->prod_slug == "studio-display") {
                ?>
                <h2 class="heading-2">Glass Type</h2>
              <?php } else { ?>
                <h2 class="heading-2">Processor</h2>

              <?php } ?>

              <div class="attribute-list">
                <?php $processor_values = explode(',', $prod_data->prod_processor); ?>
                <?php foreach ($processor_values as $i => $value): ?>
                  <div data-value="<?= $value ?>" class="attribute<?= ($i == 0) ? ' selected' : '' ?>"><?= strtoupper($value) ?></div>
                <?php endforeach ?>
              </div>
            </div>
          <?php endif ?>

          <div class="pricing-calculation">
            <!-- <table style="display:none;">
              <tr class="d-none">
                <td>MRP</td>
                  
                <td><span id="prod_mrp">--</span></td>
              </tr>

              <?php
              if ($prod_data->prod_slug == "apple-tv-4k-2022") {
                ?>
                  <tr>
                    <td colspan="2">Wifi + Ethernet</td>
                  </tr>
                  <?php
              }

              ?>

              <tr class="d-none">
                <td>Instant Store Discount
                  <small style="line-height: 1rem;">
                    <?= $prod_data->prod_store_discount_text ?>
                  </small>
                </td>

                <td><span id="prod_store_discount">--</span></td>
              </tr>

              <tr class="d-none">
                <td>Effective price
                  <small style="line-height: 1rem;">
                    <?= $prod_data->prod_effective_price_text ?>
                  </small>
                </td>

                <td><span id="prod_effective_price">--</span></td>
              </tr>

              <tr class="d-none">
                <td class="pr-2">Exchange Effective price
                  <small style="line-height: 1rem;">
                    <?= $prod_data->prod_exchange_effective_price_text ?>
                  </small>
                </td>

                <td><span id="prod_exchange_effective_price">--</span></td>
              </tr>
             
              
            </table> -->
            <div class="new-price-section">

              <div class="new-product-name">
                <h2 id="product-name-colour">iPhone 14 Pro (128GB, Deep Purple)</h2>
              </div>
              <div class="row for-up-down-space" id="price-section">
                <div class="col-4 col-sm-4 col-md-4 new-price new-price-font" id="cal-new-price">
                  <h3 id="cal-new-price-id">&#8377;129900 </h3>
                  <p class="price-small-text" id="exchangeeffectivepricetextnew">(Exchange Effective Price)*</p>
                  <p class="cd-of"><a href="#benefitdetails" target="self" data-toggle="modal"
                      data-target="#benefitdetails">Card Offer Details</a></p>
                </div>
                <div class="col-3 col-sm-3 col-md-3 new-or new-price-font" id="cal-new-or">
                  <h3>- <span>OR</span> -</h3>
                </div>
                <div class="col-5 col-sm-5 col-md-5 new-price-mo new-price-font" id="cal-new-price-mo">
                  <h3 id="cal-new-price-mo-id">&#8377;3329/p.m</h3>
                  <p>(No Cost EMI Available)*</p>
                  <p class="emioptiondetails-bg">
                    <a href="#emioptiondetails" class="emi-op" target="self" data-toggle="modal"
                      data-target="#emioptiondetails">EMI Options</a>
                  </p>
                </div>
                <!-- <div class="col-1 col-sm-1 col-md-1"></div> -->

                <!--  Benefit Modal-->
                <div class="modal fade all-emi-tables" tabindex="-1" role="dialog" id="emioptiondetails">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-body" id="emioptiondetailsdata">

                      </div>
                    </div>
                  </div>
                </div>


              </div>
              <!-- <div class="outer-product-pricebox"><div class="cp-price main-product-price pdp-cp-price"><div class="new-price"><span class="amount" id="pdp-product-price" data-testid="new-price" value="73990"> ₹73,990.00 </span><div class="tax-text">(Incl. all Taxes)</div></div></div><div class="or-icon-main"><hr class="or-hypen"><span class="or-centerbox">OR</span><hr class="or-hypen"></div><div class="pd-info"><span class="amount">₹3,483/mo*</span><div class="emi-div-btn"><button type="button" class="btn btn-link">EMI Options</button></div></div></div> -->


              <div class="row for-up-down-space1" style="display:none;">
                <div class="col-12 col-sm-12 col-md-12 new-price-mrp new-mrp-discount" id="cal-new-price-mrp"
                  style="display:block !important">
                  <h3><span id="new-id-mrp">MRP - <del>129900</del></span> <span class="get-benefit"
                      id="getbenefitupto"><a href="#benefitdetails" target="self" data-toggle="modal"
                        data-target="#benefitdetails">(Get benefits up to <span
                          id="benefitamount">26000</span>*)</a></span></h3>
                </div>
              </div>
            </div>

            <!--  Benefit Modal-->
            <div class="modal fade" tabindex="-1" role="dialog" id="benefitdetails">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-body" id="benefirmodaldata">

                  </div>
                </div>
              </div>
            </div>



            <!--newtab table section start-->

            <section class="accessories-tabs" style="display:none1;">
              <!-- <h2 class="help-heading">See how much your device is worth:</h2> -->
              <div class="tabs-container">
                <div class="container1">
                  <ul class="nav nav-tabs" id="buyOfflineTab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" data-toggle="tab" href="#acces-1" role="tab" aria-selected="false">
                        Loan Offer</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#acces-2" role="tab" aria-selected="false">
                        Bank Cashback Offer </a>
                    </li>
                    <!-- <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#acces-4" role="tab" aria-selected="true">
             Apple Watch </a>
        </li> -->
                  </ul>
                </div>
              </div>
              <div class="tab-content" id="epc-tab-content">
                <div class="store-list tab-pane active show" id="acces-1" role="tabpanel">
                  <div class="container">

                    <div class="get-offer-box" id="priceboxdetails">
                      <ul>
                        <li>
                          <div class="offer-col-1">
                            <p>MRP</p>
                          </div>
                          <div class="offer-col-2">
                            <p id="prod_mrp_new">₹79900</p>
                          </div>
                        </li>
                        <li>
                          <div class="offer-col-1">
                            <p>(-) Instant Store Discount</p>
                            <!-- <span id="exchangeeffectivepricetextemi">(After ₹5000* Instant Store Discount)</span> -->
                          </div>
                          <div class="offer-col-2">
                            <p id="prod_store_discount">₹5000</p>
                          </div>
                        </li>
                        <li>
                          <div class="offer-col-1">
                            <p>(-) Exchange Value</p>
                            <!-- <span id="exchangeeffectivepricetextemi">(After ₹5000* Instant Store Discount)</span> -->
                          </div>
                          <div class="offer-col-2">
                            <p id="prod_exchange_price">₹20000</p>
                          </div>
                        </li>
                        <li>
                          <div class="offer-col-1">
                            <p>(-) Exchange Bonus</p>
                            <!-- <span id="exchangeeffectivepricetextemi">(After ₹5000* Instant Store Discount)</span> -->
                          </div>
                          <div class="offer-col-2">
                            <p id="prod_exchange_bonus">Up to ₹8000</p>
                          </div>
                        </li>
                        <li>
                          <div class="offer-col-1">
                            <p>Net Effective Price</p>
                            <!-- <span id="exchangeeffectivepricetextemi">(After ₹5000* Instant Store Discount)</span> -->
                          </div>
                          <div class="offer-col-2">
                            <p id="prod_net_price">₹46900</p>
                          </div>
                        </li>
                        <li>
                          <div class="offer-col-1">
                            <?php if ($prod_data->prod_slug == "airpods-3rd-generation" || $prod_data->prod_slug == "ipad-9th-generation") { ?>
                              <p>Effective EMI</p>
                            <?php } else { ?>
                              <p>Exchange Effective EMI</p>
                            <?php } ?>
                            <!-- <span id="exchangeeffectivepricetexteminew">
        <?= $prod_data->prod_exchange_effective_price_text_emi ?></span> -->
                            <span id="net_price_eff_emi">(46900*/24 months No Cost EMI) </span>
                          </div>
                          <div class="offer-col-2">
                            <p id="prod_exchange_effective_price_emi_new">₹1954</p>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="store-list tab-pane" id="acces-2" role="tabpanel">
                  <div class="container">
                    <div class="get-offer-box" id="priceboxdetails">
                      <ul>
                        <li>
                          <div class="offer-col-1">
                            <p>MRP</p>
                          </div>
                          <div class="offer-col-2">
                            <p id="prod_mrp_new_mrp">₹79900</p>
                          </div>
                        </li>

                        <li>
                          <div class="offer-col-1">
                            <p>(-) Instant Store Discount</p>
                            <!-- <span id="exchangeeffectivepricetextemi">(After ₹5000* Instant Store Discount)</span> -->
                          </div>
                          <div class="offer-col-2">
                            <p id="prod_store_discount_tab2">₹20000</p>
                          </div>
                        </li>

                        <li>
                          <div class="offer-col-1">
                            <p>(-) Cashback</p>
                            <!-- <span id="exchangeeffectivepricetextemi">(After ₹5000* Instant Store Discount)</span> -->
                          </div>
                          <div class="offer-col-2">
                            <p id="prod_cashback">₹20000</p>
                          </div>
                        </li>
                        <li>
                          <div class="offer-col-1">
                            <?php if ($prod_data->prod_slug == "airpods-3rd-generation") { ?>
                              <p>Effective Price</p>
                            <?php } else { ?>
                              <p>Net Effective Price</p>
                            <?php } ?>
                            <!-- <span id="exchangeeffectivepricetextemi">(After ₹5000* Instant Store Discount)</span> -->
                          </div>
                          <div class="offer-col-2">
                            <p id="prod_net_price_tab2">₹46900</p>
                          </div>
                        </li>
                        <li>
                          <div class="offer-col-1">
                            <p>(-) Exchange Value</p>
                            <!-- <span id="exchangeeffectivepricetextemi">(After ₹5000* Instant Store Discount)</span> -->
                          </div>
                          <div class="offer-col-2">
                            <p id="prod_exchange_price_tab2">₹20000</p>
                          </div>
                        </li>
                        <li>
                          <div class="offer-col-1">
                            <p>(-) Exchange Bonus</p>
                            <!-- <span id="exchangeeffectivepricetextemi">(After ₹5000* Instant Store Discount)</span> -->
                          </div>
                          <div class="offer-col-2">
                            <p id="prod_exchange_bonus_tab2">Up to ₹8000</p>
                          </div>
                        </li>
                        <li>
                          <div class="offer-col-1">
                            <?php if ($prod_data->prod_slug == "ipad-9th-generation") { ?>
                              <p>Effective Price</p>
                            <?php } else { ?>
                              <p>Exchange Effective Price</p>
                            <?php } ?>
                            <span id="exchangeeffectivepricetextemi">(After ₹5000* Instant Store Discount)</span>
                          </div>
                          <div class="offer-col-2">
                            <p id="prod_exchange_effective_price">₹40900</p>
                          </div>
                        </li>




                      </ul>
                    </div>
                  </div>
                </div>
                <!-- <div class="store-list tab-pane" id="acces-4" role="tabpanel">
      <div class="container">
        third
      </div>
    </div> -->
              </div>
            </section>

            <!--newtab table section end-->

            <!-- new slider-->
            <div class="get-offer-box" id="priceboxdetails" style="display:none;">
              <ul>
                <li>
                  <div class="offer-col-1">
                    <p>MRP</p>
                  </div>
                  <div class="offer-col-2">
                    <p id="prod_mrp">₹79900</p>
                  </div>
                </li>

                <!-- <li>
                       <div class="offer-col-1">
                          <p>Effective price</p>
                          <span id="effectivepricetext">
                          <?= $prod_data->prod_effective_price_text ?>
                          </span>
                      </div>
                      <div class="offer-col-2"><p id="prod_effective_price">₹70900</p></div>
                    </li> 

                    <li>
                       <div class="offer-col-1">
                          <p>Exchange Effective price</p>
                          <span id="exchangeeffectivepricetext"> <?= $prod_data->prod_exchange_effective_price_text ?></span>
                      </div>
                      <div class="offer-col-2"><p id="prod_exchange_effective_price">₹42900</p></div>
                    </li>  -->
                <li>
                  <div class="offer-col-1">
                    <p>Effective EMI p.m.</p>
                    <!-- <span id="exchangeeffectivepricetextemi">(After ₹5000* Instant Store Discount)</span> -->
                  </div>
                  <div class="offer-col-2">
                    <p id="prod_exchange_effective_price_emi">₹42900</p>
                  </div>
                </li>
                <li>
                  <div class="offer-col-1">
                    <p>Exchange Effective EMI</p>
                    <!-- <span id="exchangeeffectivepricetexteminew"> <?= $prod_data->prod_exchange_effective_price_text_emi ?></span> -->
                    <span>(After ₹5000* Instant Store Discount + Exchange Bonus up to ₹8000*)<br>(Trade-in value of
                      20000 is calculated on the exchange value of iPhone 11, 64 GB in good condition*)
                    </span>
                  </div>
                  <div class="offer-col-2">
                    <p id="prod_exchange_effective_price_emi_new">₹42900</p>
                  </div>
                </li>

              </ul>

            </div>



            <!-- new slider end-->
            <?php if (!empty($product_details_tabs)): ?>
              <?php foreach ($product_details_tabs as $taboffer): ?>
                <?php if ($taboffer->tab_title == 'Available offers') { ?>
                  <?php if ($taboffer->tab_content_type == 'custom-html'): ?>
                    <?= $taboffer->custom_html ?>
                  <?php endif ?>
                <?php } ?>
              <?php endforeach; ?>
            <?php endif; ?>


            <!-- T&C Modals -->

            <?php //if($prod_data->category == "iPhone" && $prod_data->prod_slug != "iphone-se-3rd-generation" && $prod_data->prod_slug != "iphone-12"){ ?>
            <!-- <div class="mo-visible" style="display:none;">
              <div class="media">
    
    <div class="media-body">
      <p style="font-weight: 200;font-size: 1rem;letter-spacing: 0.5px;color: #282828; line-height: 1.6;padding-right: 27px;">
              Upgrader Fest Offer is available at select participating Apple Authorised Stores.<br>
              <a style="font-weight:bold;padding-right:0px !important;color: #58a4d8;" href="https://www.indiaistore.com/iphone-upgrader-fest" target="_blank">Know more</a></p>    
    </div>
    <img src="https://www.indiaistore.com/files/uploads/trade-in/trade-in-new-page-images/upgrader_fest-price.png" alt="FEST" class="mr-3 mt-3" style="min-width: 135px;">
  </div>
            </div> -->
            <div class="mo-visible">
              <div class="stick-ul">
                <ul>
                  <?php if ($prod_data->prod_slug != "airpods-3rd-generation") { ?>
                    <li class="list-menu-compare"><a
                        href="https://www.indiaistore.com/compare/<?php echo strtolower($cat_name); ?>"
                        target="_blank">Compare</a></li>
                  <?php } ?>
                  <li class="list-menu-store"><a href="https://www.indiaistore.com/store-locator" target="_blank">Find a
                      Store</a></li>
                </ul>
              </div>
            </div>

            <?php //} ?>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>

<?php if ($prod_data->category == "iPhone" && $prod_data->prod_slug != "iphone-se-3rd-generation" && $prod_data->prod_slug != "iphone-12") { ?>
  <!-- <section class="ip-sir d-none d-xl-block d-block">
  <div class="Fort-fest" style="display:table;margin:0 auto; margin-bottom: 40px;">
  <div class="media">
    <img src="https://www.indiaistore.com/files/uploads/trade-in/trade-in-new-page-images/upgrader_fest-price.png" alt="FEST" class="mr-3 mt-3" style="min-width: 180px;margin-top:0px !important;">
    <div class="media-body">
      <p style="font-weight: 200;font-size: 1.1rem;letter-spacing: 0.5px;color: #282828; line-height: 1.6;">
              Upgrader Fest Offer is available at select participating Apple Authorised Stores.
              &nbsp;<a style="font-weight:bold;color: #58a4d8;" href="https://www.indiaistore.com/iphone-upgrader-fest" target="_blank">Know more</a></p>    
    </div>
    </div>
</section>   -->

<?php } ?>
<?php if (!empty($switch_calculator_data)): ?>
  <section class="switcher_calculator">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="switcher_calculator_heading">
            <h3><span>Life is easier on iPhone 12. </span><span>It comes with a Superfast 5G.* </span> <span>Advanced
                dual-camera system and a Super Retina XDR display.</span></h3>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="switcher_calculator_body">
            <h3>Calculate your effective price</h3>
            <h5>Switch Calculator</h5>
            <div class="switcher_calculator_form">
              <div class="row">
                <div class="col-12 col-md-4">
                  <select id="field_switch_from" class="form-control mb_xs_15 for_epc">
                    <option value="" selected>*Switch from your current device</option>
                    <?php foreach ($switch_calculator_data as $key => $value): ?>
                      <option value="<?= $value->switch_from ?>"><?= $value->switch_from ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>

                <div class="col-12 col-md-4">
                  <select id="field_switch_to" class="form-control mb_xs_15 for_epc">
                    <option value="">*Switch To</option>
                  </select>
                </div>

                <div class="col-12 col-md-4">
                  <input id="field_switch_amount" type="text" class="form-control for_epc" placeholder="*Price" readonly>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>

<?php
if ((isset($store_locator)) && (!empty($store_locator))) {
  echo $store_locator;
}
?>

<section class="online-stores" id="online_stores_section"></section>

<section class="buy-offline" id="offline_stores_section"></section>
<?php if (!in_array($prod_data->cat_slug, ['tv', 'music'])): ?>

  <?php
  if ((isset($component_epc)) && (!empty($component_epc))) {
    echo $component_epc;
  }
  ?>

<?php endif ?>


<?php if ($prod_data->prod_slug != "airpods-3rd-generation") { ?>
  <?php if (!empty($product_details_tabs)): ?>
    <section class="product-details">
      <div class="container">
        <ul class="nav nav-tabs" role="tablist">
          <?php $tab_titles = array_column($product_details_tabs, 'tab_title'); ?>

          <?php foreach ($tab_titles as $i => $title): ?>
            <?php if ($title != 'Available offers' && $title != 'Offers') {

              ?>
              <li class="nav-item" id="<?php echo $i; ?>">
                <a class="nav-link<?= ($i == 0) ? ' active' : '' ?>" data-toggle="tab"
                  href="#details-<?= slugify(strtolower($title)) ?>" role="tab"><?= $title ?></a>
              </li>
            <?php } ?>
          <?php endforeach ?>

          <?php if (!in_array($prod_data->cat_slug, ['music', 'tv'])): ?>
            <?php if (!empty($product_to_compare_with)): ?>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#details-compare" role="tab">COMPARE</a>
              </li>
            <?php endif ?>
          <?php endif ?>
        </ul>
      </div>

      <div class="tab-content bg-dark">
        <?php foreach ($product_details_tabs as $i => $tab): ?>
          <div class="tab-pane<?= ($i == 0) ? ' show active' : '' ?>" id="details-<?= slugify(strtolower($tab->tab_title)) ?>"
            role="tabpanel">
            <?php if ($tab->tab_content_type == 'banner-upload'): ?>
              <picture>
                <source media="(max-width: 768px)"
                  srcset="<?= PATH_FILES_UPLOADS, 'components/tab-blocks/', $tab->section_slug, '/', $tab->banner_upload_mob ?>">
                <source media="(min-width: 769px)"
                  srcset="<?= PATH_FILES_UPLOADS, 'components/tab-blocks/', $tab->section_slug, '/', $tab->banner_upload_dex ?>">
                <img src="<?= PATH_FILES_UPLOADS, 'components/tab-blocks/', $tab->section_slug, '/', $tab->banner_upload_dex ?>"
                  alt="<?= $tab->tab_title, ' content' ?>">
              </picture>
            <?php elseif ($tab->tab_content_type == 'custom-html'): ?>
              <?= $tab->custom_html ?>
            <?php endif ?>
          </div>
        <?php endforeach ?>

        <?php if (!empty($product_to_compare_with)): ?>
          <div class="tab-pane" id="details-compare" role="tabpanel">
            <section class="compare-models">
              <div class="container">
                <h2 class="heading-2">Find the right
                  <?= $prod_data->category ?> for you
                </h2>

                <a class="heading-desc" href="<?= base_url("compare/$prod_data->cat_slug"); ?>">Compare All Models <i
                    class="ii-icon-arrow-right"></i></a>

                <div class="versus-products">
                  <div class="product" style="background-color: #181818">
                    <a href="<?= base_url($prod_data->prod_slug); ?>">
                      <picture>
                        <source media="(max-width: 768px)"
                          srcset="<?= PATH_FILES_UPLOADS, "products/$prod_data->prod_slug/$prod_data->prod_img_lg" ?>">
                        <source media="(min-width: 769px)"
                          srcset="<?= PATH_FILES_UPLOADS, "products/$prod_data->prod_slug/$prod_data->prod_img_lg" ?>">
                        <img class="mob"
                          src="<?= PATH_FILES_UPLOADS, "products/$prod_data->prod_slug/$prod_data->prod_img_lg" ?>">
                        <img class="dex"
                          src="<?= PATH_FILES_UPLOADS, "products/$prod_data->prod_slug/$prod_data->prod_img_lg" ?>">
                      </picture>

                      <div class="name">
                        <?= $prod_data->prod_name ?>
                      </div>
                    </a>
                  </div>

                  <div class="product" style="background-color: #181818">
                    <a href="<?= base_url($product_to_compare_with->prod_slug); ?>">
                      <picture>
                        <source media="(max-width: 768px)"
                          srcset="<?= PATH_FILES_UPLOADS, "products/$product_to_compare_with->prod_slug/$product_to_compare_with->prod_img_lg" ?>">
                        <source media="(min-width: 769px)"
                          srcset="<?= PATH_FILES_UPLOADS, "products/$product_to_compare_with->prod_slug/$product_to_compare_with->prod_img_lg" ?>">
                        <img class="mob"
                          src="<?= PATH_FILES_UPLOADS, "products/$product_to_compare_with->prod_slug/$product_to_compare_with->prod_img_lg" ?>">
                        <img class="dex"
                          src="<?= PATH_FILES_UPLOADS, "products/$product_to_compare_with->prod_slug/$product_to_compare_with->prod_img_lg" ?>">
                        <div class="name">
                          <?= $product_to_compare_with->prod_name ?>
                        </div>
                      </picture>
                    </a>
                  </div>
                </div>

                <div class="text-center">
                  <a href="<?= base_url("compare/$prod_data->cat_slug?$prod_data->prod_slug-vs-$product_to_compare_with->prod_slug"); ?>"
                    class="btn btn-primary">Compare</a>
                </div>
              </div>
            </section>
          </div>
        <?php endif ?>
      </div>
    </section>
  <?php endif ?>
<?php } ?>



<?php if (!empty($prod_data->prod_terms_and_cond)): ?>
  <section class="toc tocnew bg-light">
    <!-- <div class="container">
      <h2 class="heading-2">Terms & Conditions</h2> -->

    <?= $prod_data->prod_terms_and_cond ?>

    <!-- <a href="#" class="read-more gradient-text">
        <span class="less">READ MORE</span><span class="more">READ LESS</span>
      </a>
    </div> -->
  </section>
<?php endif ?>

<?php if (!empty($prod_data->prod_hero_title)): ?>
  <section class="product-banner">
    <div class="container">
      <div class="name">
        <?php if (!empty($prod_data->prod_logo)): ?>
          <img src="<?= PATH_FILES_UPLOADS, "products/$prod_data->prod_slug/$prod_data->prod_logo" ?>"
            alt="<?= $prod_data->prod_name ?> Logo" />
        <?php else: ?>
          <?= $prod_data->prod_name ?>
        <?php endif ?>
      </div>

      <div class="text-main">
        <?= $prod_data->prod_hero_title ?>
      </div>

      <!-- <div class="text-desc"> -->
      <?= $prod_data->prod_hero_desc ?>
      <!-- </div> -->

      <picture>
        <source media="(max-width: 768px)"
          srcset="<?= PATH_FILES_UPLOADS, "products/$prod_data->prod_slug/$prod_data->prod_hero_mob_img" ?>">
        <source media="(min-width: 1366px)"
          srcset="<?= PATH_FILES_UPLOADS, "products/$prod_data->prod_slug/$prod_data->prod_hero_desk_img" ?>">
        <source media="(min-width: 1920px)"
          srcset="<?= PATH_FILES_UPLOADS, "products/$prod_data->prod_slug/$prod_data->prod_hero_desk_img" ?>">
        <img src="<?= PATH_FILES_UPLOADS, "products/$prod_data->prod_slug/$prod_data->prod_hero_mob_img" ?>">
      </picture>
    </div>
  </section>
<?php endif ?>

<?php if (!empty($prod_data->prod_feature_tiles)): ?>
  <section class="features">
    <?= $prod_data->prod_feature_tiles ?>
  </section>
<?php endif ?>

<?php //if (!empty($prod_data->prod_vid_id)) : 
?>
<!-- <section class="video-banner">
    <div class="aspect-ratio-helper">
      <div id="yt-player" data-video-id="<?= $prod_data->prod_vid_id ?>"></div>
    </div>

    <div class="play-panel">
      <div class="buttonitem">
        <img src="<?= PATH_FRONTEND_CUSTOM_IMG . 'ui/shape.png' ?>" />
      </div>

      <div class="circlePulse" style="animation-delay: 0s"></div>

      <div class="circlePulse" style="animation-delay: 1s;"><img src="<?= PATH_FRONTEND_CUSTOM_IMG . 'ui/oval.png' ?>"></div>

      <div class="circlePulse" style="animation-delay: 1s;"><img src="<?= PATH_FRONTEND_CUSTOM_IMG . 'ui/oval2.png' ?>"></div>

      <div class="circlePulse" style="animation-delay: 1s;"><img src="<?= PATH_FRONTEND_CUSTOM_IMG . 'ui/oval3.png' ?>"></div>

      <div class="text">Watch the film</div>
    </div>
  </section> -->
<?php //endif 
?>

<?php if (!empty($banner_suggested_products)): ?>
  <section class="offer-carousel you-might-like">
    <div class="container">
      <h2 class="heading-2">You may also like</h2>
      <h1 style="display: none;">You may also like</h1>
    </div>

    <div class="container container-right">
      <div class="slider">
        <?php foreach ($banner_suggested_products as $banner): ?>
          <div class="offer-item">
            <a href="<?= (is_null($banner->cta) ? 'javascript:void(0)' : $banner->cta) ?>"
              target="<?= (($banner->is_external_cta) ? '_blank' : '_self') ?>" data-banner-name="<?= $banner->name ?>">
              <picture>
                <source media="(max-width: 767px)"
                  srcset="<?= PATH_FILES_UPLOADS, "banners/$banner->position_slug/$banner->mobile_image" ?>">
                <source media="(min-width: 768px)"
                  srcset="<?= PATH_FILES_UPLOADS, "banners/$banner->position_slug/$banner->desktop_image" ?>">

                <img src="<?= PATH_FILES_UPLOADS, "banners/$banner->position_slug/$banner->desktop_image" ?>"
                  alt="<?= $banner->alt_text ?>" />
              </picture>
            </a>
          </div>
        <?php endforeach ?>
      </div>
    </div>
  </section>
<?php endif ?>

<?php if (!empty($banner_cross_selling_products)): ?>
  <section class="offer-carousel customers-also-bought bg-light">
    <div class="container">
      <h2 class="heading-2">Customers who bought this item also bought</h2>
      <h1 style="display: none;">Customers who bought this item also bought</h1>
    </div>

    <div class="container container-right">
      <div class="slider">
        <?php foreach ($banner_cross_selling_products as $banner): ?>
          <div class="offer-item">
            <a href="<?= (is_null($banner->cta) ? 'javascript:void(0)' : $banner->cta) ?>"
              target="<?= (($banner->is_external_cta) ? '_blank' : '_self') ?>" data-banner-name="<?= $banner->name ?>">
              <picture>
                <source media="(max-width: 767px)"
                  srcset="<?= PATH_FILES_UPLOADS, "banners/$banner->position_slug/$banner->mobile_image" ?>">
                <source media="(min-width: 768px)"
                  srcset="<?= PATH_FILES_UPLOADS, "banners/$banner->position_slug/$banner->desktop_image" ?>">

                <img src="<?= PATH_FILES_UPLOADS, "banners/$banner->position_slug/$banner->desktop_image" ?>"
                  alt="<?= $banner->alt_text ?>" />
              </picture>
            </a>
          </div>
        <?php endforeach ?>
      </div>
    </div>
  </section>
<?php endif ?>

<?php //if (!empty($product_to_compare_with)) : 
?>
<!-- <section class="compare-models">
    <div class="container">
      <h2 class="heading-2">Find the right <?= $prod_data->category ?> for you</h2>

      <a class="heading-desc" href="<?= base_url("compare/$prod_data->cat_slug"); ?>">Compare All Models <i class="ii-icon-arrow-right"></i></a>

      <div class="versus-products">
        <div class="product">
          <a href="<?= base_url($prod_data->prod_slug); ?>">
            <picture>
              <source media="(max-width: 768px)" srcset="<?= PATH_FILES_UPLOADS, 'products/', $prod_data->prod_slug, '/', $prod_data->prod_img_lg ?>">
              <source media="(min-width: 769px)" srcset="<?= PATH_FILES_UPLOADS, 'products/', $prod_data->prod_slug, '/', $prod_data->prod_img_lg ?>">
              <img class="mob" src="<?= PATH_FILES_UPLOADS, 'products/', $prod_data->prod_slug, '/', $prod_data->prod_img_lg ?>">
              <img class="dex" src="<?= PATH_FILES_UPLOADS, 'products/', $prod_data->prod_slug, '/', $prod_data->prod_img_lg ?>">
            </picture>

            <div class="name"><?= $prod_data->prod_name ?></div>
          </a>
        </div>

        <div class="product">
          <a href="<?= base_url($product_to_compare_with->prod_slug); ?>">
            <picture>
              <source media="(max-width: 768px)" srcset="<?= PATH_FILES_UPLOADS, 'products/', $product_to_compare_with->prod_slug, '/', $product_to_compare_with->prod_img_lg ?>">
              <source media="(min-width: 769px)" srcset="<?= PATH_FILES_UPLOADS, 'products/', $product_to_compare_with->prod_slug, '/', $product_to_compare_with->prod_img_lg ?>">
              <img class="mob" src="<?= PATH_FILES_UPLOADS, 'products/', $product_to_compare_with->prod_slug, '/', $product_to_compare_with->prod_img_lg ?>">
              <img class="dex" src="<?= PATH_FILES_UPLOADS, 'products/', $product_to_compare_with->prod_slug, '/', $product_to_compare_with->prod_img_lg ?>">
              <div class="name"><?= $product_to_compare_with->prod_name ?></div>
            </picture>
          </a>
        </div>
      </div>

      <div class="text-center">
        <a href="<?= base_url("compare/$prod_data->cat_slug?$prod_data->prod_slug-vs-$product_to_compare_with->prod_slug"); ?>" class="btn btn-primary">Compare</a>
      </div>
    </div>
  </section> -->
<?php //endif 
?>


<div class="d-none" id="prod-share-content">
  <div class="popover-body">
    <div class="share-container">
      <h4>SHARE</h4>
      <ul class="list-inline">
        <li class="list-inline-item">
          <a class="facebook-share-icon"
            href="https://www.facebook.com/sharer/sharer.php?u=<?= urlencode(base_url($prod_data->prod_slug)) ?>"
            target="_blank">
            <img src="<?= PATH_FILES_UPLOADS . 'share-icons/facebook/facebook.png' ?>">
            <p>Facebook</p>
          </a>
        </li>

        <li class="list-inline-item">
          <a href="https://twitter.com/share?text=<?= urlencode('I love this product on IndiaiStore. Visit your nearest Apple Authorised Resellers today.') ?>&url=<?= urlencode(base_url($prod_data->prod_slug)) ?>"
            target="_blank" class="twitter-share-icon">
            <img src="<?= PATH_FILES_UPLOADS . 'share-icons/twitter/twitter.png' ?>">
            <p>Twitter</p>
          </a>
        </li>

        <?php if (is_mobile()): ?>
          <li class="list-inline-item">
            <a href="https://wa.me/?text=<?= urlencode(base_url($prod_data->prod_slug)) ?>" target="_blank"
              class="whatsapp-share-icon">
              <img src="<?= PATH_FILES_UPLOADS . 'share-icons/whatsapp/whatsapp.png' ?>">
              <p>WhatsApp</p>
            </a>
          </li>
        <?php endif; ?>

        <li class="list-inline-item">
          <a href="<?= base_url($prod_data->prod_slug) ?>" class="copy-link-share-icon" <?= is_mobile() ? "data-trigger='click' data-toggle='tooltip' title='Copied!'" : ''; ?>>
            <img src="<?= PATH_FILES_UPLOADS . 'share-icons/copy-link/copy-link.png' ?>">
            <p>Copy Link</p>
          </a>
        </li>

      </ul>
    </div>
  </div>
</div>
<style>
  .term1 div p:nth-child(n+4) {
    display: none;
  }

  .term2 div p:nth-child(n+4) {
    display: none;
  }

  .term3 div p:nth-child(n+4) {
    display: none;
  }

  .term4 div p:nth-child(n+4) {
    display: none;
  }

  section.toc .terms:not(.more) .term:nth-child(n+3) {
    display: block !important;
  }
</style>