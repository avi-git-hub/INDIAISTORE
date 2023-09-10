<style>
  .ed{margin-left:18px;}
  section.toc .terms .term .desc p:before {
    content: "-" !important;
    position: absolute !important;
    left: 0 !important;
}
  .shot-carousel .tns-controls {
    display: flex !important;
    width: 0 !important;
    height: 0 !important;
    overflow: hidden;
}
.mo-visible{display:none;}

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

.sliderButton::before, .sliderButton::after {
  font-family: "icon-font";
}
/*.prevButton, .nextButton{
  background-color: #969393;
    width: 40px;
    height: 40px;
    border-radius: 100px;
    border: 1px solid #000;
}*/
.prevButton::before {
  content: "\2039";
  font-size: 47px;
   /* position: relative;
    top: -13px;*/
}

.nextButton::before {
  content: "\203A";
  font-size: 47px;
   /* position: relative;
    top: -13px;*/
}
@media (max-width:767px) {
  .pnBtn {
    display: none;
   
}
.mo-visible{display:block;}

.mo-visible .mr-3, .mo-visible .mx-3 {
    margin-right: -1.5rem!important;
}
    section.product-info .info-panel .price-calculator .selection.color .color-item .name{font-size: 0.6rem;}
}
    .product-color-deep-purple {
    background-color: #d1cddb;
}
    .product-color-space-black {
    background-color: #333230;
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
    .price-calculator .tns-outer .tns-controls{
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
    content: " \2039";
    font-size: 45px;
    display: block;
    font-family: "icon-font";
}
    .price-calculator .tns-controls button[data-controls="next"]::before {
    content: " \203A";
    font-size: 45px;
    display: block;
    font-family: "icon-font";
}
    @media (max-width:767px) {
  .price-calculator .tns-controls {
    display: none !important;
   
}
.ip-sir{display:none !important;}
    }
    .upgrade-right-txt a{font-size: 1.2rem;font-weight: 200;line-height: 1.5;}


   
    #modal_bank_offers-debit .modal-dialog {

max-width: 50%;

margin: 1.75rem auto;

}

#modal_bank_offers-debit .nav-tabs {

margin: 0 20px;

}

#modal_bank_offers-debit li {

margin-bottom: -6px;

padding: 4px 0px;

font-size: 16px;

font-weight: 300;

padding-bottom: 4px;

}



#modal_bank_offers-debit li a {

color: #555555;

border: none;

font-size: 14px;

letter-spacing: 1px;

}

#modal_bank_offers-debit thead {

background-color: #47b0bb;

border-color: #47b0bb;

color: #ffffff;

}

#modal_bank_offers-debit .table.table-bordered {

border-collapse: separate;

border-radius: 6px;

-moz-border-radius: 6px;

-webkit-border-radius: 6px;

margin-bottom: 0;

border: none;

}

#modal_bank_offers-debit .tab-content {

padding: 30px 20px;

}

#modal_bank_offers-debit .modal-dialog {

max-width: 50%;

margin: 1.75rem auto;

}

#modal_bank_offers-debit a.active {

border-bottom: 3px solid #47b0bb;

color: #47b0bb;

}

#modal_bank_offers-debit li a {

color: #555555;

border: none;

font-size: 14px;

letter-spacing: 1px;

}

/* credit */

#modal_bank_offers-credit .modal-dialog {

max-width: 50%;

margin: 1.75rem auto;

}

#modal_bank_offers-credit .nav-tabs {

margin: 0 20px;

}

#modal_bank_offers-credit li {

margin-bottom: -6px;

padding: 4px 0px;

font-size: 16px;

font-weight: 300;

padding-bottom: 4px;

}



#modal_bank_offers-credit li a {

color: #555555;

border: none;

font-size: 14px;

letter-spacing: 1px;

}

#modal_bank_offers-credit thead {

background-color: #47b0bb;

border-color: #47b0bb;

color: #ffffff;

}

#modal_bank_offers-credit .table.table-bordered {

border-collapse: separate;

border-radius: 6px;

-moz-border-radius: 6px;

-webkit-border-radius: 6px;

margin-bottom: 0;

border: none;

}

#modal_bank_offers-credit .tab-content {

padding: 30px 20px;

}

#modal_bank_offers-credit .modal-dialog {

max-width: 50%;

margin: 1.75rem auto;

}

#modal_bank_offers-credit a.active {

border-bottom: 3px solid #47b0bb;

color: #47b0bb;

}

#modal_bank_offers-credit li a {

color: #555555;

border: none;

font-size: 14px;

letter-spacing: 1px;

}

#modal_bank_offers-debit .table.table-bordered td:first-child {

    width: 35%;
    font-size: 14px;
    border-right: none;
}

#modal_bank_offers-credit .table.table-bordered td:first-child {

width: 35%;
font-size: 14px;
border-right: none;
}

#modal_bank_offers-credit .table.table-bordered th, #modal_bank_offers-credit .table.table-bordered td {
 padding: 15px 20px;
 vertical-align: middle;
 line-height: 25px;
}

#modal_bank_offers-debit .table.table-bordered th, #modal_bank_offers-debit .table.table-bordered td {
 padding: 15px 20px;
 vertical-align: middle;
 line-height: 25px;
}

#modal_bank_offers-credit .table.table-bordered td {
border-top: none;
border-color: #e0e0e0;
color: #000;
font-family: "SFProText-Regular", sans-serif;
}

#modal_bank_offers-debit .table.table-bordered td {
border-top: none;
border-color: #e0e0e0;
color: #000;
font-family: "SFProText-Regular", sans-serif;
}

#modal_bank_offers-debit .table.table-bordered td{

border-top: none;
border-color: #e0e0e0;
color: #000;
font-family: "SFProText-Regular", sans-serif;
font-size: 14px;
}

#modal_bank_offers-credit .table.table-bordered td {

border-top: none;
border-color: #e0e0e0;
color: #000;
font-family: "SFProText-Regular", sans-serif;
font-size: 14px;
}

#modal_bank_offers-debit .table.table-bordered th, #modal_buy_back_offer .table.table-bordered th {
border-top-right-radius:6px;
border-top-left-radius:6px;
border-color: #47b0bb;
font-family: "SFProText-Semibold", sans-serif;
}

#modal_bank_offers-credit .table.table-bordered th, #modal_buy_back_offer .table.table-bordered th {
border-top-right-radius:6px;
border-top-left-radius:6px;
border-color: #47b0bb;
font-family: "SFProText-Semibold", sans-serif;
}

#modal_bank_offers-credit .table.table-bordered th, #modal_bank_offers .table.table-bordered td {

padding:15px 20px;
vertical-align: middle;
line-height: 25px;
}

#modal_bank_offers-debit .table.table-bordered th, #modal_bank_offers .table.table-bordered td {

padding:15px 20px;
vertical-align: middle;
line-height: 25px;
}

@media (max-width: 767px){

#modal_bank_offers-credit .modal-dialog, #modal_bank_offers_loans .modal-dialog {

 max-width: 90%;
}


#modal_bank_offers-debit .modal-dialog, #modal_bank_offers_loans .modal-dialog {

max-width: 90%;
}
}

.showhide1, .showhide2, .showhide3, .showhide4{
  display:none !important;
}


  </style>
 
  <?php
	 $currentURL2 = current_url(); 
	?>
<script>
var currurl = '<?php echo $currentURL2; ?>';

</script>

</div>
<h2 id="productnameforprod" style="display:none;"><?php echo $prod_data->prod_name; ?></h2>
<h3 id="prodslubyproduct" style="display:none;"><?php echo $prod_data->prod_slug; ?></h3>
<?php if (!empty($banner_top_ticker)) : ?>
  <section class="ticker">
    <div class="container">
      <div class="slider">
        <?php foreach ($banner_top_ticker as $banner) : ?>
          <div class="slider-item">
            <!-- <div class="ticker">
              <div class="img"><img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='50' height='50' viewBox='0 0 50 50'%3E%3Crect width='50' height='50' fill='%23545454'/%3E%3C/svg%3E"></div>

              <div class="content">Exchange your Old Smartphone to get a New Iphone</div>
            </div> -->
            <img src="<?= PATH_FILES_UPLOADS, "banners/$banner->position_slug/$banner->desktop_image" ?>" alt="<?= $banner->alt_text ?>" />
          </div>
        <?php endforeach ?>
      </div>
    </div> 
  </section>
<?php endif ?>

<section class="name-price <?= $prod_data->prod_html_classes ?: null ?>">
  <div class="container">
    <div class="name text-center">
      <?php if (!empty($prod_data->prod_logo_dark)) : ?>
        <img src="<?= PATH_FILES_UPLOADS, "products/$prod_data->prod_slug/$prod_data->prod_logo_dark" ?>" alt="<?= $prod_data->prod_name ?> Logo" />
      <?php else : ?>
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
      <div class="col-12 col-lg-6 media-panel">
        <div class="main-img">
          <a href="javascript:void(0);">
            <img src="" alt="" />
          </a>

          <a class="share prod-share-btn" href="javascript:void(0);" data-html="true" data-placement="top" data-popover-content="#prod-share-content" data-toggle="popover" tabindex="0"><i class="ii-icon-share"></i></a>
          <div class="pnBtn">
          <a class="prevButton sliderButton"></a>
          <a class="nextButton sliderButton"></a> 
        </div>
        </div>

        <div class="shot-carousel" data-prod-slug="<?= $prod_data->prod_slug ?>" data-prod-name="<?= $prod_data->prod_name ?>" data-vid="<?= is_null($prod_data->prod_vid_id) ? null : $prod_data->prod_vid_id ?>" data-vid-thumb="<?= is_null($prod_data->prod_vid_thumbnail) ? null : $prod_data->prod_vid_thumbnail ?>">
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
      </div>

      <div class="col-12 col-lg-6 info-panel">

        <a class="share prod-share-btn" href="javascript:void(0);" data-html="true" data-placement="top" data-popover-content="#prod-share-content" data-toggle="popover" tabindex="0"><i class="ii-icon-share"></i></a>

        <div class="price-calculator product" data-product-slug="<?= $prod_data->prod_slug ?>">
          <div class="selection color">
            <h2 class="heading-2">Colour</h2>

            <div class="color-list">
              <?php $prod_colors = explode(',', $prod_data->prod_color) ?>
              <?php // $prod_colors_hex = explode(',', $prod_data->prod_color_hex) 
              ?>

              <?php foreach ($prod_colors as $i => $color) : ?>
                <?php //$color_hex = (!empty($prod_colors_hex[$i])) ? "style='background-color:$prod_colors_hex[$i]!important;'" : ''; 
                $colorcount =  substr_count($color, '-'); 
                if($colorcount == 1){
                   $color1 = explode("-", $color);
                   $newcolor = implode(" ",$color1);
                   $ncolor = $newcolor;
                } else {
                  $ncolor = $color;
                }
                ?>
                <?php $color_hex = ''; ?>

                <div class="color-item<?= ($i == 0) ? ' selected' : '' ?>" data-value="<?= $color ?>">
                  <div class="circle product-color-<?= $color ?>" <?= $color_hex ?>></div>
                  <?php if($ncolor == 'space grey'){ ?>
                  <div class="name"><?= ucwords($ncolor) ?></div>
                  <?php }else{ ?>
                  <div class="name"><?= ucfirst($color) ?></div>
                  <?php } ?>
                </div>
              <?php endforeach ?>
            </div>
          </div>
          <?php
              if($prod_data->prod_slug == "studio-display"){
              ?>

                <style>
                    .selection.rect{
                      display:none;
                    }
                  </style>
                <?php } ?>
          <?php if ((!is_null($prod_data->prod_storage)) || (!is_null($prod_data->prod_screen_size))) : ?>
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
                <?php foreach ($data as $i => $value) : ?>
                  <div data-value="<?= $value ?>" class="attribute<?= ($i == 0) ? ' selected' : '' ?>"><?= strtoupper($value) ?></div>
                <?php endforeach ?>
              </div>
            </div>
          <?php endif ?>
       

          <?php if (!is_null($prod_data->prod_processor)) : ?>
            <div class="selection processor">

             <?php
              if($prod_data->prod_slug == "studio-display"){
              ?>
              <h2 class="heading-2">Glass Type</h2>
              <?php } else { ?>
                <h2 class="heading-2">Processor</h2>

              <?php } ?>

              <div class="attribute-list">
                <?php $processor_values = explode(',', $prod_data->prod_processor); ?>
                <?php foreach ($processor_values as $i => $value) : ?>
                  <div data-value="<?= $value ?>" class="attribute<?= ($i == 0) ? ' selected' : '' ?>"><?= strtoupper($value) ?></div>
                <?php endforeach ?>
              </div>
            </div>
          <?php endif ?>

          <div class="pricing-calculation">
            <table>
              <tr class="d-none">
                <td>MRP</td>

                <td><span id="prod_mrp">--</span></td>
              </tr>
              <?php
              if($prod_data->prod_slug == "apple-tv-4k-2022"){
              ?>
                  <tr>
                    <td colspan="2"  id="productdataapple">Wifi + Ethernet</td>
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
                  <small style="line-height: 1rem;" id="effectivepricetext">
                    <?= $prod_data->prod_effective_price_text ?>
                  </small>
                </td>

                <td><span id="prod_effective_price">--</span></td>
              </tr> 

              <tr class="d-none">
                <td class="pr-2">Exchange Effective price
                  <small style="line-height: 1rem;" id="exchangeeffectivepricetext">
                    <?= $prod_data->prod_exchange_effective_price_text ?>
                  </small>
                </td>

                <td><span id="prod_exchange_effective_price">--</span></td>
              </tr>
            </table>
            <?php if($prod_data->category == "iPhone" && $prod_data->prod_slug != "iphone-se-3rd-generation" && $prod_data->prod_slug != "iphone-12" && $prod_data->prod_slug != "iphone-14-pro" && $prod_data->prod_slug != "iphone-14-pro-max"){ ?>
              <div class="mo-visible">
              <div class="media">
    
    <div class="media-body">
      <p style="font-weight: 200;font-size: 1rem;letter-spacing: 0.5px;color: #282828; line-height: 1.6;padding-right: 27px;">
              Upgrader Fest Offer is available at select participating Apple Authorised Stores.<br>
              <a style="font-weight:bold;padding-right:0px !important;color: #58a4d8;" href="https://www.indiaistore.com/iphone-upgrader-fest" target="_blank">Know more</a></p>    
    </div>
    <img src="https://www.indiaistore.com/files/uploads/trade-in/trade-in-new-page-images/upgrader_fest-price.png" alt="FEST" class="mr-3 mt-3" style="min-width: 135px;">
  </div>
            </div>
               
              
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>
<?php if($prod_data->category == "iPhone" && $prod_data->prod_slug != "iphone-se-3rd-generation" && $prod_data->prod_slug != "iphone-12" && $prod_data->prod_slug != "iphone-14-pro" && $prod_data->prod_slug != "iphone-14-pro-max"){ ?>
  <section class="ip-sir d-none d-xl-block d-block">
  <div class="Fort-fest" style="display:table;margin:0 auto; margin-bottom: 40px;">
  <div class="media">
    <img src="https://www.indiaistore.com/files/uploads/trade-in/trade-in-new-page-images/upgrader_fest-price.png" alt="FEST" class="mr-3 mt-3" style="min-width: 180px;margin-top:0px !important;">
    <div class="media-body">
      <p style="font-weight: 200;font-size: 1.1rem;letter-spacing: 0.5px;color: #282828; line-height: 1.6;">
              Upgrader Fest Offer is available at select participating Apple Authorised Stores.
              &nbsp;<a style="font-weight:bold;color: #58a4d8;" href="https://www.indiaistore.com/iphone-upgrader-fest" target="_blank">Know more</a></p>    
    </div>
    </div>
</section>  
              
            <?php } ?>


<?php if (!empty($switch_calculator_data)) : ?>
  <section class="switcher_calculator">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="switcher_calculator_heading">
            <h3><span>Life is easier on iPhone 12. </span><span>It comes with a Superfast 5G.* </span> <span>Advanced dual-camera system and a Super Retina XDR display.</span></h3>
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
                    <?php foreach ($switch_calculator_data as $key => $value) : ?>
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

<?php if (!empty($product_details_tabs)) : ?>
  <section class="product-details">
    <div class="container">
      <ul class="nav nav-tabs" role="tablist">
        <?php $tab_titles = array_column($product_details_tabs, 'tab_title'); ?>

        <?php foreach ($tab_titles as $i => $title) : ?>
          <?php if($title != 'Available offers') { ?>
          <li class="nav-item">
            <a class="nav-link<?= ($i == 0) ? ' active' : '' ?>" data-toggle="tab" href="#details-<?= slugify(strtolower($title)) ?>" role="tab"><?= $title ?></a>
          </li>
          <?php } ?>
        <?php endforeach ?>

        <?php if (!in_array($prod_data->cat_slug, ['music', 'tv'])) : ?>
          <?php if (!empty($product_to_compare_with)) : ?>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#details-compare" role="tab">COMPARE</a>
            </li>
          <?php endif ?>
        <?php endif ?>
      </ul>
    </div>

    <div class="tab-content bg-dark">
      <?php foreach ($product_details_tabs as $i => $tab) : ?>
        <?php if($tab->tab_title != 'Available offers') { ?>
        <div class="tab-pane<?= ($i == 0) ? ' show active' : '' ?>" id="details-<?= slugify(strtolower($tab->tab_title)) ?>" role="tabpanel">
          <?php if ($tab->tab_content_type == 'banner-upload') : ?>
            <picture>
              <source media="(max-width: 768px)" srcset="<?= PATH_FILES_UPLOADS, 'components/tab-blocks/', $tab->section_slug, '/', $tab->banner_upload_mob ?>">
              <source media="(min-width: 769px)" srcset="<?= PATH_FILES_UPLOADS, 'components/tab-blocks/', $tab->section_slug, '/', $tab->banner_upload_dex ?>">
              <img src="<?= PATH_FILES_UPLOADS, 'components/tab-blocks/', $tab->section_slug, '/', $tab->banner_upload_dex ?>" alt="<?= $tab->tab_title, ' content' ?>">
            </picture>
          <?php elseif ($tab->tab_content_type == 'custom-html') : ?>
            <?= $tab->custom_html ?>
          <?php endif ?>
        </div>
        <?php } ?>
      <?php endforeach ?>

      <?php if (!empty($product_to_compare_with)) : ?>
        <div class="tab-pane" id="details-compare" role="tabpanel">
          <section class="compare-models">
            <div class="container">
              <h2 class="heading-2">Find the right <?= $prod_data->category ?> for you</h2>

              <a class="heading-desc" href="<?= base_url("compare/$prod_data->cat_slug"); ?>">Compare All Models <i class="ii-icon-arrow-right"></i></a>

              <div class="versus-products">
                <div class="product" style="background-color: #181818">
                  <a href="<?= base_url($prod_data->prod_slug); ?>">
                    <picture>
                      <source media="(max-width: 768px)" srcset="<?= PATH_FILES_UPLOADS, "products/$prod_data->prod_slug/$prod_data->prod_img_lg" ?>">
                      <source media="(min-width: 769px)" srcset="<?= PATH_FILES_UPLOADS, "products/$prod_data->prod_slug/$prod_data->prod_img_lg" ?>">
                      <img class="mob" src="<?= PATH_FILES_UPLOADS, "products/$prod_data->prod_slug/$prod_data->prod_img_lg" ?>">
                      <img class="dex" src="<?= PATH_FILES_UPLOADS, "products/$prod_data->prod_slug/$prod_data->prod_img_lg" ?>">
                    </picture>

                    <div class="name"><?= $prod_data->prod_name ?></div>
                  </a>
                </div>

                <div class="product" style="background-color: #181818">
                  <a href="<?= base_url($product_to_compare_with->prod_slug); ?>">
                    <picture>
                      <source media="(max-width: 768px)" srcset="<?= PATH_FILES_UPLOADS, "products/$product_to_compare_with->prod_slug/$product_to_compare_with->prod_img_lg" ?>">
                      <source media="(min-width: 769px)" srcset="<?= PATH_FILES_UPLOADS, "products/$product_to_compare_with->prod_slug/$product_to_compare_with->prod_img_lg" ?>">
                      <img class="mob" src="<?= PATH_FILES_UPLOADS, "products/$product_to_compare_with->prod_slug/$product_to_compare_with->prod_img_lg" ?>">
                      <img class="dex" src="<?= PATH_FILES_UPLOADS, "products/$product_to_compare_with->prod_slug/$product_to_compare_with->prod_img_lg" ?>">
                      <div class="name"><?= $product_to_compare_with->prod_name ?></div>
                    </picture>
                  </a>
                </div>
              </div>

              <div class="text-center">
                <a href="<?= base_url("compare/$prod_data->cat_slug?$prod_data->prod_slug-vs-$product_to_compare_with->prod_slug"); ?>" class="btn btn-primary">Compare</a>
              </div>
            </div>
          </section>
        </div>
      <?php endif ?>
    </div>
  </section>
<?php endif ?>

<?php if (!in_array($prod_data->cat_slug, ['tv', 'music'])) : ?>

  <?php
  if ((isset($component_epc)) && (!empty($component_epc))) {
    echo $component_epc;
  }
  ?>

<?php endif ?>

<?php
if ((isset($store_locator)) && (!empty($store_locator))) {
  echo $store_locator;
}
?>

<?php
if($prod_data->prod_slug == 'iphone-14-pro' || $prod_data->prod_slug == 'iphone-14' || $prod_data->prod_slug == 'iphone-14-pro-max' || $prod_data->prod_slug == 'iphone-14-plus' || $prod_data->prod_slug == 'iphone-13' || $prod_data->prod_slug =='iphone-se-3rd-generation' ||  $prod_data->prod_slug =='iphone-12'){
  ?>
  <style>
    .store-72{
      display:none !important;
    }
    .store-73{
       display:none !important;
    }
  </style>
  <?php
}
?>

<section class="online-stores" id="online_stores_section"></section>

<section class="buy-offline" id="offline_stores_section"></section>

<?php if (!empty($prod_data->prod_terms_and_cond)) : ?>
  <section class="toc bg-light">
    <!-- <div class="container">
      <h2 class="heading-2">Terms & Conditions</h2> -->

    <?= $prod_data->prod_terms_and_cond ?>

    <!-- <a href="#" class="read-more gradient-text">
        <span class="less">READ MORE</span><span class="more">READ LESS</span>
      </a>
    </div> -->
  </section>
<?php endif ?>

<?php if (!empty($prod_data->prod_hero_title)) : ?>
  <section class="product-banner">
    <div class="container">
      <div class="name">
        <?php if (!empty($prod_data->prod_logo)) : ?>
          <img src="<?= PATH_FILES_UPLOADS, "products/$prod_data->prod_slug/$prod_data->prod_logo" ?>" alt="<?= $prod_data->prod_name ?> Logo" />
        <?php else : ?>
          <?= $prod_data->prod_name ?>
        <?php endif ?>
      </div>

      <div class="text-main"><?= $prod_data->prod_hero_title ?></div>

      <!-- <div class="text-desc"> --><?= $prod_data->prod_hero_desc ?>
      <!-- </div> -->

      <picture>
        <source media="(max-width: 768px)" srcset="<?= PATH_FILES_UPLOADS, "products/$prod_data->prod_slug/$prod_data->prod_hero_mob_img" ?>">
        <source media="(min-width: 1366px)" srcset="<?= PATH_FILES_UPLOADS, "products/$prod_data->prod_slug/$prod_data->prod_hero_desk_img" ?>">
        <source media="(min-width: 1920px)" srcset="<?= PATH_FILES_UPLOADS, "products/$prod_data->prod_slug/$prod_data->prod_hero_desk_img" ?>">
        <img src="<?= PATH_FILES_UPLOADS, "products/$prod_data->prod_slug/$prod_data->prod_hero_mob_img" ?>">
      </picture>
    </div>
  </section>
<?php endif ?>

<?php if (!empty($prod_data->prod_feature_tiles)) : ?>
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

<?php if (!empty($banner_suggested_products)) : ?>
  <section class="offer-carousel you-might-like">
    <div class="container">
      <h2 class="heading-2">You may also like</h2>
      <h1 style="display: none;">You may also like</h1>
    </div>

    <div class="container container-right">
      <div class="slider">
        <?php foreach ($banner_suggested_products as $banner) : ?>
          <div class="offer-item">
            <a href="<?= (is_null($banner->cta) ? 'javascript:void(0)' : $banner->cta) ?>" target="<?= (($banner->is_external_cta) ? '_blank' : '_self') ?>" data-banner-name="<?= $banner->name ?>">
              <picture>
                <source media="(max-width: 767px)" srcset="<?= PATH_FILES_UPLOADS, "banners/$banner->position_slug/$banner->mobile_image" ?>">
                <source media="(min-width: 768px)" srcset="<?= PATH_FILES_UPLOADS, "banners/$banner->position_slug/$banner->desktop_image" ?>">

                <img src="<?= PATH_FILES_UPLOADS, "banners/$banner->position_slug/$banner->desktop_image" ?>" alt="<?= $banner->alt_text ?>" />
              </picture>
            </a>
          </div>
        <?php endforeach ?>
      </div>
    </div>
  </section>
<?php endif ?>

<?php if (!empty($banner_cross_selling_products)) : ?>
  <section class="offer-carousel customers-also-bought bg-light">
    <div class="container">
      <h2 class="heading-2">Customers who bought this item also bought</h2>
      <h1 style="display: none;">Customers who bought this item also bought</h1>
    </div>

    <div class="container container-right">
      <div class="slider">
        <?php foreach ($banner_cross_selling_products as $banner) : ?>
          <div class="offer-item">
            <a href="<?= (is_null($banner->cta) ? 'javascript:void(0)' : $banner->cta) ?>" target="<?= (($banner->is_external_cta) ? '_blank' : '_self') ?>" data-banner-name="<?= $banner->name ?>">
              <picture>
                <source media="(max-width: 767px)" srcset="<?= PATH_FILES_UPLOADS, "banners/$banner->position_slug/$banner->mobile_image" ?>">
                <source media="(min-width: 768px)" srcset="<?= PATH_FILES_UPLOADS, "banners/$banner->position_slug/$banner->desktop_image" ?>">

                <img src="<?= PATH_FILES_UPLOADS, "banners/$banner->position_slug/$banner->desktop_image" ?>" alt="<?= $banner->alt_text ?>" />
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
          <a class="facebook-share-icon" href="https://www.facebook.com/sharer/sharer.php?u=<?= urlencode(base_url($prod_data->prod_slug)) ?>" target="_blank">
            <img src="<?= PATH_FILES_UPLOADS . 'share-icons/facebook/facebook.png' ?>">
            <p>Facebook</p>
          </a>
        </li>

        <li class="list-inline-item">
          <a href="https://twitter.com/share?text=<?= urlencode('I love this product on IndiaiStore. Visit your nearest Apple Authorised Resellers today.') ?>&url=<?= urlencode(base_url($prod_data->prod_slug)) ?>" target="_blank" class="twitter-share-icon">
            <img src="<?= PATH_FILES_UPLOADS . 'share-icons/twitter/twitter.png' ?>">
            <p>Twitter</p>
          </a>
        </li>

        <?php if (is_mobile()) : ?>
          <li class="list-inline-item">
            <a href="https://wa.me/?text=<?= urlencode(base_url($prod_data->prod_slug)) ?>" target="_blank" class="whatsapp-share-icon">
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
<script>
  gtag('event', 'conversion', {'allow_custom_scripts': true,'send_to': 'DC-11602604/invmedia/macbo000+standard'});
  gtag('event', 'conversion', {'allow_custom_scripts': true,'send_to': 'DC-11602604/invmedia/macbo000+standard'});

  gtag('event', 'conversion', {'allow_custom_scripts': true,'send_to': 'DC-10620631/invmedia/ipadp0+standard'});
  gtag('event', 'conversion', {'allow_custom_scripts': true,'send_to': 'DC-10620631/invmedia/ipadp0+standard'});

  /*  Watch */

  gtag('event', 'conversion', {'allow_custom_scripts': true,'send_to': 'DC-11647498/invmedia/watch0+standard'});
  gtag('event', 'conversion', {'allow_custom_scripts': true,'send_to': 'DC-11647498/invmedia/watch0+standard'});

function gtag_report_conversion_website(url) {
    var callback = function () {
      if (typeof(url) != 'undefined') {
        /*window.location = url;*/
      }
    };
    gtag('event', 'conversion', {
        'send_to': 'AW-838139362/Wh9zCPz1sckDEOL7048D',
        'event_callback': callback
    });
    return false;
}

function gtag_report_conversion_sms(url) {
  var callback = function () {
    if (typeof(url) != 'undefined') {
      /*window.location = url;*/
    }
  };
  gtag('event', 'conversion', {
      'send_to': 'AW-838139362/czP-CKLesskDEOL7048D',
      'event_callback': callback
  });
  return false;
}

function gtag_report_conversion_direction(url) {
  var callback = function () {
    if (typeof(url) != 'undefined') {
      /*window.location = url;*/
    }
  };
  gtag('event', 'conversion', {
      'send_to': 'AW-838139362/5kQLCPe6gskDEOL7048D',
      'event_callback': callback
  });
  return false;
}

function gtag_report_conversion_call(url) {
  var callback = function () {
    if (typeof(url) != 'undefined') {
      /*window.location = url;*/
    }
  };
  gtag('event', 'conversion', {
      'send_to': 'AW-838139362/bgRsCO3PsskDEOL7048D',
      'event_callback': callback
  });
  return false;
}
</script>