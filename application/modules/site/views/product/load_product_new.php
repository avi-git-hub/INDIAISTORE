<style>
  .ed {
    margin-left: 18px;
  }

  section.toc .terms .term .desc p:before {
    content: "-" !important;
    position: absolute !important;
    left: 0 !important;
  }

  .stick-ul {
    display: none !important;
  }

  .shot-carousel .tns-controls {
    display: flex !important;
    width: 0 !important;
    height: 0 !important;
    overflow: hidden;
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

    section.product-info .media-panel .main-img .share {
      z-index: 999 !important;
    }

    section.product-info .media-panel .main-img img {
      z-index: 99 !important;
      position: relative !important;
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

    .control li {
      top: 76% !important;
    }

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

    .offer-slide-two .control li {
      top: 50% !important;
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
    font-size: 15px;
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

  .readmorebtn {
    display: none !important;
  }

  @media (max-width: 767px) {
    .new-price-font h3 {
      font-weight: 500;
      font-size: 13px !important;
    }
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
    color: #000000;
  }

  .get-offer-box ul li .offer-col-2 p {
    font-size: 16px;
  }
</style>
<?php
  if($prod_data->prod_slug == 'watch-se-2022' || $prod_data->prod_slug == 'apple-watch-ultra' || $prod_data->prod_slug == 'apple-watch-series-8'){
    ?>
    <style>
      #priceboxdetails{display:none !important;}
      #getbenefitupto{display:none !important;}
    </style>
    <?php
  }
  ?>

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
                <li class="list-menu-compare"><a
                    href="https://www.indiaistore.com/compare/<?php echo strtolower($cat_name); ?>"
                    target="_blank">Compare</a></li>
                <li class="list-menu-store"><a href="https://www.indiaistore.com/store-locator" target="_blank">Find a
                    Store</a></li>
              </ul>

            </div>
          </div>
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
            <div class="new-price-section">

              <div class="new-product-name">
                <h2 id="product-name-colour">iPhone 14 Pro (128GB, Deep Purple)</h2>
              </div>
              <div class="row for-up-down-space" id="price-section"  style="display: flex;">
                <div class="col-4 col-sm-4 col-md-4 new-price new-price-font" id="cal-new-price">
                  <h3 id="cal-new-price-id"></h3>
                  <p class="price-small-text" id="exchangeeffectivepricetextnew">(Exchange Effective Price)*</p>
                </div>
                <div class="col-3 col-sm-3 col-md-3 new-or new-price-font" id="cal-new-or">
                  <h3>- <span>OR</span> -</h3>
                </div>
                <div class="col-5 col-sm-5 col-md-5 new-price-mo new-price-font" id="cal-new-price-mo">
                  <h3 id="cal-new-price-mo-id"></h3>
                  <p>(No Cost EMI Available)*</p>
                  <p class="emioptiondetails-bg"><a href="#emioptiondetails" target="self" data-toggle="modal"
                      data-target="#emioptiondetails">EMI Options</a></p>

                </div>
                <!-- <div class="col-1 col-sm-1 col-md-1"></div> -->

                <!--  Benefit Modal-->
                <div class="modal fade" tabindex="-1" role="dialog" id="emioptiondetails">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-body" id="emioptiondetailsdata">

                      </div>
                    </div>
                  </div>
                </div>


              </div>
              <!-- <div class="outer-product-pricebox"><div class="cp-price main-product-price pdp-cp-price"><div class="new-price"><span class="amount" id="pdp-product-price" data-testid="new-price" value="73990"> ₹73,990.00 </span><div class="tax-text">(Incl. all Taxes)</div></div></div><div class="or-icon-main"><hr class="or-hypen"><span class="or-centerbox">OR</span><hr class="or-hypen"></div><div class="pd-info"><span class="amount">₹3,483/mo*</span><div class="emi-div-btn"><button type="button" class="btn btn-link">EMI Options</button></div></div></div> -->


              <div class="row for-up-down-space1">
                <div class="col-12 col-sm-12 col-md-12 new-price-mrp new-mrp-discount" id="cal-new-price-mrp"
                  style="display:block !important">
                  <h3><span id="new-id-mrp">MRP - <del>129900</del></span> <span class="get-benefit"
                      id="getbenefitupto"><a href="#benefitdetails" target="self" data-toggle="modal"
                        data-target="#benefitdetails">(Get benefits up to <span id="benefitamount"></span>*)</a></span>
                  </h3>
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


            <!-- new slider-->
            <div class="get-offer-box" id="priceboxdetails">
              <ul>
                <li>
                  <div class="offer-col-1">
                    <p>MRP</p>
                  </div>
                  <div class="offer-col-2">
                    <p id="prod_mrp"></p>
                  </div>
                </li>

                <li>
                  <div class="offer-col-1">
                    <p>Effective price</p>
                    <span id="effectivepricetext">
                      <?= $prod_data->prod_effective_price_text ?>
                    </span>
                  </div>
                  <div class="offer-col-2">
                    <p id="prod_effective_price"></p>
                  </div>
                </li>

                <li>
                  <div class="offer-col-1">
                    <p>Exchange Effective price</p>
                    <span id="exchangeeffectivepricetext">
                      <?= $prod_data->prod_exchange_effective_price_text ?>
                    </span>
                  </div>
                  <div class="offer-col-2">
                    <p id="prod_exchange_effective_price"></p>
                  </div>
                </li>

              </ul>

            </div>

            <?php if (!empty($product_details_tabs)): ?>
              <?php foreach ($product_details_tabs as $taboffer): ?>
                <?php if ($taboffer->tab_title == 'Available offers') { ?>
                  <?php if ($taboffer->tab_content_type == 'custom-html'): ?>
                    <?= $taboffer->custom_html ?>
                  <?php endif ?>
                <?php } ?>
              <?php endforeach; ?>
            <?php endif; ?>

            <div class="row for-up-down-space" style="display:none;">
              <div class="col-12 col-sm-6 col-md-6 new-price-mrp" id="cal-new-bank-offer-mrp">
                <div class="bank-box">
                  <div class="new-bank-offer">
                    <img class="img-fuild" src="/files/uploads/loan_offer_icons/hdfc_loan_offer.png" alt="hdfc">
                    <h4>Bank Offer</h4>
                    <p>&#8377;5000 Cashback on HDFC Bank <br>Cards and easy EMI*</p>
                  </div>
                  <div>
                    <ul class="new-tanc">
                      <li><a href="#modal_bank_offers" target="self" data-toggle="modal"
                          data-target="#modal_bank_offers">View More</a></li>
                      <li class="tcr"><a href="#bankoffertandc" target="self" data-toggle="modal"
                          data-target="#bankoffertandc">T&c apply</a></li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="col-12 col-sm-6 col-md-6 new-price-mrp" id="cal-new-loan-offer-mrp">
                <div class="bank-box">
                  <div class="new-bank-offer">
                    <ul>
                      <li style="display: inline-block;"><img class="img-fuild"
                          src="/files/uploads/loan_offer_icons/hdfc_loan_offer.png" alt="hdfc" style="max-width: 70px;">
                      </li>
                      <li style="display: inline-block;"><img class="img-fuild"
                          src="/files/uploads/loan_offer_icons/hdfc_loan_offer.png" alt="hdfc" style="max-width: 70px;">
                      </li>
                      <li style="display: inline-block;"><img class="img-fuild"
                          src="/files/uploads/loan_offer_icons/hdfc_loan_offer.png" alt="hdfc" style="max-width: 70px;">
                      </li>
                      <li style="display: inline-block;"><img class="img-fuild"
                          src="/files/uploads/loan_offer_icons/hdfc_loan_offer.png" alt="hdfc" style="max-width:70px;">
                      </li>
                    </ul>
                    <h4>Loan Offer</h4>
                    <p>No Cost EMI* available <br> on Zest and HDFC Bank</p>
                  </div>
                  <div>
                    <ul class="new-tanc">
                      <li><a href="#modal_bank_offers_loans" target="self" data-toggle="modal"
                          data-target="#modal_bank_offers_loans">View More</li>
                      <li class="tcr"><a href="#loanoffertandc" target="self" data-toggle="modal"
                          data-target="#loanoffertandc">T&c apply</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!-- T&C Modals -->


            <div class="modal fade availableoffertandc" tabindex="-1" role="dialog" id="bankoffertandc">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-body" id="emioptiondetailsdata">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
                    <div class="tab-content">
                      <div role="tabpanel" class="tab-pane active" id="HDFC_loans">
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th colspan="2" style="text-align:center;">*T&C Apply:</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Instant Cashback offer on HDFC Bank Debit and Credit Cards
                                The limited period exclusive offer price is computed on the MRP ₹79900.00 (incl. of all
                                taxes) of iPhone 14, 128 GB, (15.49 cm, 1 N).The illustrative Exchange Effective price
                                calculated above on MRP is as reduced by ₹5000* Instant Store Discount and ₹4000.00
                                Instant cashback offered on the usage of HDFC Bank Debit and Credit Cards, and further
                                reduced by exchange value of iPhone 11 64 GB (15.49 cm, 1 N) in a good working condition
                                along with up to ₹6000.00 exchange bonus.
                              </td>
                            </tr>
                            <tr>
                              <td>The instant cashback offer of ₹4000.00 is valid exclusively on HDFC Bank Credit Cards
                                EMI and Non-EMI & on HDFC Bank Debit Card EMI. The applicable instant cashback offer is
                                valid for transactions made using Brand EMI option on Pine Labs and Paytm terminals only
                                and also, applicable on select participating online merchants via Pine Labs Payment
                                Gateway. The applicable Instant cashback is processed immediately on Pine Labs and Paytm
                                terminals. Card member’s swipe value for the transaction will be reduced by the instant
                                cash back amount. Card members may verify the processing of the instant cash back in the
                                transaction charge slip or Pine Labs Payment Gateway.</td>
                            </tr>
                            <tr>
                              <td>No Cost EMI is also applicable on HDFC Bank Debit and Credit Card EMI transactions on
                                6-month tenor only. Low-Cost EMI applicable on tenors greater than 6 months. Processing
                                fee and GST on interest component applicable as per Bank’s terms and conditions.</td>
                            </tr>
                            <tr>
                              <td>The Exchange bonus of up to ₹6000.00 under Upgrader Fest offer is exclusively provided
                                by the Apple Authorised Trade-in Providers Cashify at select participating stores in
                                association with participating resellers at their sole discretion. Exchange bonus is
                                valid only for transactions involving trade-in of customer’s eligible old devices valued
                                at least ₹3000.00 or above. Customer’s eligible old devices valued between ₹3000.00 and
                                ₹10000.00 will receive an exchange bonus of ₹3000.00, while customer’s eligible old
                                devices valued between ₹10000.00 to ₹15000.00 will receive an exchange bonus of ₹4000.00
                                and customer’s eligible devices valued above ₹15000.00 will receive an exchange bonus of
                                ₹6000.00. The exchange bonus and trade-in value will be passed on as a credit or
                                discount in the customer’s invoice. Exchange Bonus offer can be clubbed with Cards
                                Cashback and Consumer Loans Offer.</td>
                            </tr>
                            <tr>
                              <td>Customer’s eligible old device trade-in value as diagnosed and assessed by Apple
                                Authorised Trade-in Providers will be the final offer. Any other T&Cs as specified by
                                Apple Authorised Trade-in Providers will apply.</td>
                            </tr>
                            <tr>
                              <td>Cashback limited to 2 transaction per card per category during the offer period (Jan
                                01 - Apr 01)</td>
                            </tr>
                            <tr>
                              <td>The minimum transaction value for Cashback eligibility is 90%.</td>
                            </tr>
                            <tr>
                              <td>To know your HDFC Bank Debit Card EMI pre-approved limit, SMS 'MYHDFC' to 5676712 from
                                your registered mobile number.</td>
                            </tr>
                            <tr>
                              <td>The offers may be revised or withdrawn without any prior notice.</td>
                            </tr>
                            <tr>
                              <td>Offer available till stocks last. Available at select participating Apple Authorised
                                Reseller stores. For store details log on to <a href="https://www.indiaistore.com/"
                                  target="_blank">indiaistore.com</a>.</td>
                            </tr>
                            <tr>
                              <td>All trademarks, logos and brand names are the property of their respective owners.
                              </td>
                            </tr>
                            <tr>
                              <td>Product features vary by model.</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>



            <div class="modal fade availableoffertandc" tabindex="-1" role="dialog" id="loanoffertandc">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
                    <div class="tab-content">
                      <div role="tabpanel" class="tab-pane active" id="HDFC_loans">
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th colspan="2" style="text-align:center;">*T&C Apply:</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>• Consumer Loans Offer
                              </td>
                            </tr>
                            <tr>
                              <td>EMI of ₹3329.00 is computed on 0 down payment, 24 months No Cost EMI consumer loan
                                scheme, on the MRP ₹79900.00 (incl. of all taxes) of iPhone 14, 128 GB, (15.49 cm, 1 N).
                                EMIs illustrated above are rounded off to the nearest rupee for ease of reference. . The
                                Exchange bonus of up to ₹6000.00 is exclusively provided by the Apple Authorised
                                Trade-in Providers at select stores at their sole discretion. Exchange bonus is valid
                                only for transactions involving trade-in of eligible old devices. Any other T&Cs as
                                specified by Apple Authorised Trade-in Providers will apply.</td>
                            </tr>
                            <tr>
                              <td>No Cost EMI consumer loan schemes are available on Bajaj Finance, HDFC Bank, IDFC
                                First Bank, ICICI Bank and Zest Money. The consumer loan approval from the financier is
                                at their sole discretion.</td>
                            </tr>
                            <tr>
                              <td>The scheme is provided as No Cost EMI i.e., the benefit of No Cost EMI as a total
                                applicable interest to be charged by financer on consumer loan for original tenure will
                                be borne by Apple authorised distributors. Processing fee is applicable and will be
                                charged to customer. Goods and Services Tax will be applicable on processing fee, and
                                foreclosure charges, as applicable. Customer may be required to enter into separate
                                agreements or arrangements (by whatever name called) with the financier to avail or use
                                the EMI facility. Customers are advised to read the offer/agreement terms and conditions
                                carefully.</td>
                            </tr>
                            <tr>
                              <td>Scheme details as below:</td>
                            </tr>
                            <tr>
                              <td>- 0% Down payment : No Cost EMI : 9 months tenure</td>
                            </tr>
                            <tr>
                              <td>- 0% Down payment : No Cost EMI : 12 months tenure</td>
                            </tr>
                            <tr>
                              <td>- 0% Down payment : No Cost EMI : 18 months tenure</td>
                            </tr>
                            <tr>
                              <td>- 0% Down payment : No Cost EMI : 24 months tenure</td>
                            </tr>
                            <tr>
                              <td>- 20% Down payment : No Cost EMI : 12 months tenure</td>
                            </tr>
                            <tr>
                              <td>- 33% Down payment : No Cost EMI : 12 months tenure</td>
                            </tr>
                            <tr>
                              <td>- 33% Down payment : No Cost EMI : 16 months tenure</td>
                            </tr>
                            <tr>
                              <td>The offers may be revised or withdrawn without any prior notice.</td>
                            </tr>
                            <tr>
                              <td>Product features vary by model.</td>
                            </tr>
                            <tr>
                              <td>All schemes available from January 01, 2023, at select stores.</td>
                            </tr>
                            <tr>
                              <td>Offers valid for limited period and till stocks last.</td>
                            </tr>
                            <tr>
                              <td>TM and © 2023 Apple Inc. All rights reserved.</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <section class="toc bg-light tocnew" style="display:none;">
                    <div class="container">
                      <h2 class="heading-2">Terms &amp; Conditions</h2>
                      <ul class="terms">
                        <li class="term">
                          <span class="title">Consumer Loans Offer</span>
                          <div class="desc">
                            <p>EMI of ₹3329.00 is computed on 0 down payment, 24 months No Cost EMI consumer loan
                              scheme, on the MRP ₹79900.00 (incl. of all taxes) of iPhone 14, 128 GB, (15.49 cm, 1 N).
                              EMIs illustrated above are rounded off to the nearest rupee for ease of reference. . The
                              Exchange bonus of up to ₹6000.00 is exclusively provided by the Apple Authorised Trade-in
                              Providers at select stores at their sole discretion. Exchange bonus is valid only for
                              transactions involving trade-in of eligible old devices. Any other T&Cs as specified by
                              Apple Authorised Trade-in Providers will apply.</p>
                            <p>No Cost EMI consumer loan schemes are available on Bajaj Finance, HDFC Bank, IDFC First
                              Bank, ICICI Bank and Zest Money. The consumer loan approval from the financier is at their
                              sole discretion. </p>
                            <p>The scheme is provided as No Cost EMI i.e., the benefit of No Cost EMI as a total
                              applicable interest to be charged by financer on consumer loan for original tenure will be
                              borne by Apple authorised distributors. Processing fee is applicable and will be charged
                              to customer. Goods and Services Tax will be applicable on processing fee, and foreclosure
                              charges, as applicable. Customer may be required to enter into separate agreements or
                              arrangements (by whatever name called) with the financier to avail or use the EMI
                              facility. Customers are advised to read the offer/agreement terms and conditions
                              carefully.</p>
                            <p>Scheme details as below:</p>
                            <p>- 0% Down payment : No Cost EMI : 9 months tenure</p>
                            <p>- 0% Down payment : No Cost EMI : 12 months tenure</p>
                            <p>- 0% Down payment : No Cost EMI : 18 months tenure</p>
                            <p>- 0% Down payment : No Cost EMI : 24 months tenure</p>
                            <p>- 20% Down payment : No Cost EMI : 12 months tenure</p>
                            <p>- 33% Down payment : No Cost EMI : 12 months tenure</p>
                            <p>- 33% Down payment : No Cost EMI : 16 months tenure</p>
                            <p>The offers may be revised or withdrawn without any prior notice.</p>
                            <p>Product features vary by model.</p>
                            <p>All schemes available from January 01, 2023, at select stores.</p>
                            <p>Offers valid for limited period and till stocks last.</p>
                            <p>TM and © 2023 Apple Inc. All rights reserved.</p>
                          </div>
                        </li>
                      </ul>
                    </div>
                    <section>
                      <style>
                        section.toc .terms .arrow_remove:before {
                          display: none;
                        }
                      </style>
                </div>
              </div>
            </div>
          </div>


          <?php /*if($prod_data->category == "iPhone" && $prod_data->prod_slug != "iphone-se-3rd-generation" && $prod_data->prod_slug != "iphone-12"){*/?>
          <div class="mo-visible" style="display:none;">
            <div class="media">

              <div class="media-body">
                <p
                  style="font-weight: 200;font-size: 1rem;letter-spacing: 0.5px;color: #282828; line-height: 1.6;padding-right: 27px;">
                  Upgrader Fest Offer is available at select participating Apple Authorised Stores.<br>
                  <a style="font-weight:bold;padding-right:0px !important;color: #58a4d8;"
                    href="https://www.indiaistore.com/iphone-upgrader-fest" target="_blank">Know more</a>
                </p>
              </div>
              <img
                src="https://www.indiaistore.com/files/uploads/trade-in/trade-in-new-page-images/upgrader_fest-price.png"
                alt="FEST" class="mr-3 mt-3" style="min-width: 135px;">
            </div>
          </div>
          <div class="mo-visible">
            <div class="stick-ul">
              <ul>
                <li class="list-menu-compare"><a
                    href="https://www.indiaistore.com/compare/<?php echo strtolower($cat_name); ?>"
                    target="_blank">Compare</a></li>
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

<?php if (!empty($product_details_tabs)): ?>
  <section class="product-details">
    <div class="container">
      <ul class="nav nav-tabs" role="tablist">
        <?php $tab_titles = array_column($product_details_tabs, 'tab_title'); ?>

        <?php foreach ($tab_titles as $i => $title): ?>
          <?php if ($title != 'Available offers' && $title != 'Offers') {

            ?>
            <li class="nav-item">
              <a class="nav-link<?= ($i == 1) ? ' active' : '' ?>" data-toggle="tab"
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
        <div class="tab-pane<?= ($i == 1) ? ' show active' : '' ?>" id="details-<?= slugify(strtolower($tab->tab_title)) ?>"
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