<style>
    .total_value {
   font-size: 13px;
        line-height:30px;
    }
    @media (min-width: 64em)
{
#three_iphone {
    width: calc(100%);
    }}
    #three_iphone > .tns-item {
    width: calc(32%);
    padding-right: 20px;
}
</style>
<main>
  <section class="top_banner_tradein">
    <?php if (!empty($banner_trade_in_hero[0])) : ?>

      <div class="banner_tradein <?= $banner_trade_in_hero[0]->additional_classes ?>">
        <a href="<?= ($banner_trade_in_hero[0]->cta) ?: 'javascript:void(0);' ?>" target="<?= ($banner_trade_in_hero[0]->is_external_cta) ? '_blank' : '' ?>" data-banner-name="<?= $banner_trade_in_hero[0]->name ?>">
          <picture>
            <source media="(max-width: 768px)" srcset="<?= PATH_FILES_UPLOADS . "banners/" . $banner_trade_in_hero[0]->position_slug . "/" . $banner_trade_in_hero[0]->mobile_image ?>">
            <source media="(min-width: 769px)" srcset="<?= PATH_FILES_UPLOADS . "banners/" . $banner_trade_in_hero[0]->position_slug . "/" . $banner_trade_in_hero[0]->desktop_image ?>">
            <img src="<?= PATH_FILES_UPLOADS . "banners/" . $banner_trade_in_hero[0]->position_slug . "/" . $banner_trade_in_hero[0]->mobile_image ?>" alt="Upgrade to iphone 12">
          </picture>
        </a>

      <?php endif; ?>


      </div>
  </section>
  <section class="trade_in_price_iphones pricing_tp_bttm">
    <div class="container">
      <div class="pricing_details">
        <h2>Pricing details</h2>
        <h5>Calculated on exchange value of iPhone 11 64 GB in good condition</h5>
      </div>
    <div class="tradein_crosel">
        <div class="slider" id="three_iphone">
          <div class="slider-item top_three_box iphone_1_bg_grey">
            <div class="product_trade_in">
              <div class="name">
                <div class="action d-none"> <i class="ii-icon-compare"></i> <i class="ii-icon-share"></i> </div>
              </div>
              <div class="product-media">
                <div class="main-img"> <img src="<?= PATH_FILES_UPLOADS . "trade-in/iphone_14_trade_in.jpg" ?>"> </div>
              </div>
              <div class="center_price">
                <div class="iphone_name">
                  <i class="fab fa-apple"></i> <span>iPhone 14</span>
                </div>
                <div class="iphone_price">
                  <span>₹ 79900</span>
                </div>
              </div>
              <div class="product_cashback_value">

                <div class="row mr_tp_bttm">
                  <div class="col-md-6 offer_cashback">Cashback</div>
                  <div class="col-md-6 total_value"><span>₹ 5000*</span></div>
                </div>

                <div class="row mr_tp_bttm">
                  <div class="col-md-6 offer_cashback">Exchange Bonus</div>
                  <div class="col-md-6 total_value"><span>Up to ₹ 3000*</span></div>
                </div>
                <div class="row mr_tp_bttm">
                  <div class="col-md-6 offer_cashback">Exchange Value of Old Smartphone</div>
                  <div class="col-md-6 total_value"><span>₹ 18000*</span></div>
                </div>
                <div class="row mr_tp_bttm">
                  <div class="col-md-6 offer_cashback">Exchange Effective Price</div>
                  <div class="col-md-6 total_value"><span>₹ 53900*</span></div>
                </div>
              </div>
            </div>
          </div>
          <div class="slider-item top_three_box iphone_2_bg_grey">
            <div class="product_trade_in">
              <div class="name">
                <div class="action d-none"> <i class="ii-icon-compare"></i> <i class="ii-icon-share"></i> </div>
              </div>
              <div class="product-media">
                <div class="main-img"> <img src="<?= PATH_FILES_UPLOADS . "trade-in/iphone_14_Pro_trade_in.jpg" ?>"> </div>
              </div>
              <div class="center_price">
                <div class="iphone_name">
                  <i class="fab fa-apple"></i> <span>iPhone 14 Pro</span>
                </div>
                <div class="iphone_price">
                  <span>₹ 129900</span>
                </div>
              </div>
              <div class="product_cashback_value">
                <div class="row mr_tp_bttm">
                  <div class="col-md-6 offer_cashback">Cashback</div>
                  <div class="col-md-6 total_value"><span>₹ 4000*</span></div>
                </div>
                <div class="row mr_tp_bttm">
                  <div class="col-md-6 offer_cashback">Exchange Bonus</div>
                  <div class="col-md-6 total_value"><span>Up to ₹ 3000*</span></div>
                </div>
<!--
                <div class="row mr_tp_bttm">
                  <div class="col-md-6 offer_cashback">Instant Store Discount</div>
                  <div class="col-md-6 total_value"><span>₹ 5000*</span></div>
                </div>
-->
                <div class="row mr_tp_bttm">
                  <div class="col-md-6 offer_cashback">Exchange Value of Old Smartphone</div>
                  <div class="col-md-6 total_value"><span>₹ 18000*</span></div>
                </div>
                <div class="row mr_tp_bttm">
                  <div class="col-md-6 offer_cashback">Exchange Effective Price</div>
                  <div class="col-md-6 total_value"><span>₹ 104900*</span></div>
                </div>
              </div>
            </div>
          </div>
          <div class="slider-item top_three_box iphone_3_bg_grey">
            <div class="product_trade_in">
              <div class="name">
                <div class="action d-none"> <i class="ii-icon-compare"></i> <i class="ii-icon-share"></i> </div>
              </div>
              <div class="product-media">
                <div class="main-img"> <img src="<?= PATH_FILES_UPLOADS . "trade-in/iphone_14_Pro-Max_trade_in.jpg" ?>"> </div>
              </div>
              <div class="center_price">
                <div class="iphone_name">
                  <i class="fab fa-apple"></i> <span>iPhone 14 Pro Max</span>
                </div>
                <div class="iphone_price">
                  <span>₹ 139900</span>
                </div> 
              </div>
              <div class="product_cashback_value">
                <div class="row mr_tp_bttm">
                  <div class="col-md-6 offer_cashback">Cashback</div>
                  <div class="col-md-6 total_value"><span>₹ 4000*</span></div>
                </div>
                <div class="row mr_tp_bttm">
                  <div class="col-md-6 offer_cashback">Exchange Bonus</div>
                  <div class="col-md-6 total_value"><span>Up to ₹ 3000*</span></div>
                </div>
                <div class="row mr_tp_bttm">
                  <div class="col-md-6 offer_cashback">Exchange Value of Old Smartphone</div>
                  <div class="col-md-6 total_value"><span>₹ 18000*</span></div>
                </div>
                <div class="row mr_tp_bttm">
                  <div class="col-md-6 offer_cashback">Exchange Effective Price</div>
                  <div class="col-md-6 total_value"><span>₹ 114900*</span></div>
                </div>
              </div>
            </div>
          </div>
          <!-- <div class="slider-item top_three_box iphone_3_bg_grey">
            <div class="product_trade_in">
              <div class="name">
                <div class="action d-none"> <i class="ii-icon-compare"></i> <i class="ii-icon-share"></i> </div>
              </div>
              <div class="product-media">
                <div class="main-img"> <img src="<?= PATH_FILES_UPLOADS . "trade-in/iphone-12-mini.png" ?>"> </div>
              </div>
              <div class="center_price">
                <div class="iphone_name">
                  <i class="fab fa-apple"></i> <span>iPhone 11 pro </span>
                </div>
                <div class="iphone_price">
                  <span>₹ 69900</span>
                </div>
              </div>
              <div class="product_cashback_value">
                <div class="row mr_tp_bttm">
                  <div class="col-md-6 offer_cashback">Cashback</div>
                  <div class="col-md-6 total_value"><span>₹ 69900</span></div>
                </div>
                <div class="row mr_tp_bttm">
                  <div class="col-md-6 offer_cashback">Exchange Bonus</div>
                  <div class="col-md-6 total_value"><span>₹ 3000</span></div>
                </div>
                <div class="row mr_tp_bttm">
                  <div class="col-md-6 offer_cashback">Exchange Value of Old Smartphone*</div>
                  <div class="col-md-6 total_value"><span>₹ 9000</span></div>
                </div>
                <div class="row mr_tp_bttm">
                  <div class="col-md-6 offer_cashback">Exchange Effective Price</div>
                  <div class="col-md-6 total_value"><span>₹ 51900</span></div>
                </div>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </div>
  </section>
  <section class="exchanges_casify_servify pricing_tp_bttm">
    <div class="container">
      <div class="pricing_details">
        <h2>Exchange your old smart phone for an iPhone</h2>
      </div>
      <div class="casify_servify_sec">
        <div class="row">
          <div class="col-md-6 ext_brdr mgn_rt"><a href="#" target="_blank" class="cashify-btn">
              <div class="text"><span>Find your device value at</span></div>
              <div class="logo_tredin casify"><img src="<?= PATH_FILES_UPLOADS . "trade-in/cashify.png" ?>" alt="cashify"></div>
            </a>
          </div>
          <div class="col-md-6 ext_brdr"><a href="#" target="_blank" class="servify-btn">
              <div class="text"><span>Find your device value at</span></div>
              <div class="logo_tredin servicy"><img src="<?= PATH_FILES_UPLOADS . "trade-in/servify.png" ?>" alt="servify"></div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
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
  <section class="availabel_store" style="display:none;">
    <div class="container">
      <div class="heading_availabel">
        <h2>Available At</h2>
      </div>
      <div class="partner_box">
        <div class="three_box_offer">
          <div class="box_offer">
            <div class="info_partner border_ryt_bttm">
              <div class="partner_logo"><img src="https://i3-prod-assets.indiaistore.com/files/uploads/partners/partner-logo-1622025063_0947.png" alt="partner logo"></div>
              <div class="phone"><a href="tel:8287482874"><i class="ii-icon-phone" aria-hidden="true"></i> +91 8287482874</a></div>
              <div class="email"><a href="mailto:sales@uipl.co.in"><i class="ii-icon-email" aria-hidden="true"></i> sales@uipl.co.in</a> |
                <a href="mailto:unicare@uipl.co.in"> unicare@uipl.co.in</a>
              </div>
              <div class="locate_us_button"><a data-store-name="Unicorn" href="https://unicornstore.in/" target="_blank" class="read-more gradient-text"> <span>Locate us <i class="ii-icon-arrow-right"></i></span> </a></div>
            </div>
          </div>
          <div class="box_offer">
            <div class="info_partner border_ryt_bttm">
              <div class="partner_logo"><img src="https://i3-prod-assets.indiaistore.com/files/uploads/partners/partner-logo-1622029833_904.png" alt="partner logo"></div>
              <div class="phone"><a href="tel:8287482874"><i class="ii-icon-phone" aria-hidden="true"></i> +91 8287482874</a></div>
              <div class="email"><a href="mailto:alisha@imaginestore.com"><i class="ii-icon-email" aria-hidden="true"></i> alisha@imaginestore.com</a>
              </div>
              <div class="locate_us_button"><a data-store-name="Imagine Tresor" href="https://www.myimaginestore.com/" target="_blank" class="read-more gradient-text"> <span>Locate us <i class="ii-icon-arrow-right"></i></span> </a></div>
            </div>
          </div>
          <div class="box_offer">
            <div class="info_partner border_bttm">
              <div class="partner_logo"><img src="https://i3-prod-assets.indiaistore.com/files/uploads/partners/partner-logo-1618220534_8394.png" alt="partner logo"></div>
              <div class="phone"><a href="tel:8340088888"><i class="ii-icon-phone" aria-hidden="true"></i> +91 8340088888</a></div>
              <div class="email"><a href="mailto:contactus@aptronixindia.com"><i class="ii-icon-email" aria-hidden="true"></i> contactus@aptronixindia.com</a>
              </div>
              <div class="locate_us_button"><a data-store-name="Aptronix" href="https://aptronixindia.com/" target="_blank" class="read-more gradient-text"> <span>Locate us <i class="ii-icon-arrow-right"></i></span> </a></div>
            </div>
          </div>

        </div>
        <div class="three_box_offer">
          <div class="box_offer">
            <div class="info_partner border_ryt_bttm">
              <div class="partner_logo"><img src="https://i3-prod-assets.indiaistore.com/files/uploads/partners/partner-logo-1618219655_2644.png" alt="partner logo"></div>
              <div class="phone"><a href="tel:1800-266-3545"><i class="ii-icon-phone" aria-hidden="true"></i> 1800-266-3545</a></div>
              <div class="email"><a href="mailto:support.center@mapletechnologies.org"><i class="ii-icon-email" aria-hidden="true"></i> support.center@mapletechnologies.org</a>
              </div>
              <div class="locate_us_button"><a data-store-name="Maple" href="https://maplestore.in/" target="_blank" class="read-more gradient-text"> <span>Locate us <i class="ii-icon-arrow-right"></i></span> </a></div>
            </div>
          </div>
          <div class="box_offer">
            <div class="info_partner border_ryt_bttm">
              <div class="partner_logo"><img src="https://i3-prod-assets.indiaistore.com/files/uploads/partners/partner-logo-1622029011_7856.png" alt="partner logo"></div>
              <div class="phone"><a href="tel:9830590080"><i class="ii-icon-phone" aria-hidden="true"></i> +91 9830590080</a></div>
              <div class="email"><a href="mailto:support@theimaginestore.com"><i class="ii-icon-email" aria-hidden="true"></i> support@theimaginestore.com</a>
              </div>
              <div class="locate_us_button"><a data-store-name="Imagine Store" href="https://www.theimaginestore.com/" target="_blank" class="read-more gradient-text"> <span>Locate us <i class="ii-icon-arrow-right"></i></span> </a></div>
            </div>
          </div>
          <div class="box_offer">
            <div class="info_partner border_bttm">
              <div class="partner_logo"><img src="https://i3-prod-assets.indiaistore.com/files/uploads/partners/partner-logo-1623410920_5863.png" alt="partner logo"></div>
              <div class="phone"><a href="tel:9999693807"><i class="ii-icon-phone" aria-hidden="true"></i> +91 9999693807</a></div>
              <div class="email"><a href="mailto:sales@ngrt.in"><i class="ii-icon-email" aria-hidden="true"></i> sales@ngrt.in</a>
              </div>
              <div class="locate_us_button"><a data-store-name="iNSPiRE" href="https://www.inspirestore.in/" target="_blank" class="read-more gradient-text"> <span>Locate us <i class="ii-icon-arrow-right"></i></span> </a></div>
            </div>
          </div>

        </div>
        <div class="three_box_offer">
          <div class="box_offer">
            <div class="info_partner border_ryt_bttm">
              <div class="partner_logo"><img src="https://i3-prod-assets.indiaistore.com/files/uploads/partners/partner-logo-1622028935_1282.png" alt="partner logo"></div>
              <div class="phone"><a href="tel:80-46999888"><i class="ii-icon-phone" aria-hidden="true"></i> +91 80-46999888</a></div>
              <div class="email"><a href="mailto:support@imagineonline.com"><i class="ii-icon-email" aria-hidden="true"></i> support@imagineonline.com</a>
              </div>
              <div class="locate_us_button"><a data-store-name="Imagine Online" href="https://www.imagineonline.store/" target="_blank" class="read-more gradient-text"> <span>Locate us <i class="ii-icon-arrow-right"></i></span> </a></div>
            </div>
          </div>
          <div class="box_offer">
            <div class="info_partner border_ryt_bttm">
              <div class="partner_logo"><img src="https://i3-prod-assets.indiaistore.com/files/uploads/partners/partner-logo-1618220774_6698.png" alt="partner logo"></div>
              <div class="phone"><a href="tel:80-33013209"><i class="ii-icon-phone" aria-hidden="true"></i> +91 80-33013209</a></div>
              <div class="email"><a href="mailto:customerservice@iplanetstore.in"><i class="ii-icon-email" aria-hidden="true"></i> customerservice@iplanetstore.in</a>
              </div>
              <div class="locate_us_button"><a data-store-name="iPlanet" href="https://www.store.iplanetstore.in/" target="_blank" class="read-more gradient-text"> <span>Locate us <i class="ii-icon-arrow-right"></i></span> </a></div>
            </div>
          </div>
          <div class="box_offer">
            <div class="info_partner border_bttm">
              <div class="partner_logo"><img src="https://i3-prod-assets.indiaistore.com/files/uploads/partners/partner-logo-1618220672_1571.png" alt="partner logo"></div>
              <div class="phone"><a href="tel:"><i class="ii-icon-phone" aria-hidden="true"></i> -</a></div>
              <div class="email"><a href="mailto:info@idelta.co.in"><i class="ii-icon-email" aria-hidden="true"></i> info@idelta.co.in</a>
              </div>
              <div class="locate_us_button"><a data-store-name="iDelta" href="https://www.idelta.co.in/offer" target="_blank" class="read-more gradient-text"> <span>Locate us <i class="ii-icon-arrow-right"></i></span> </a></div>
            </div>
          </div>

        </div>
        <div class="three_box_offer">
          <!--<div class="box_offer">
            <div class="info_partner border_ryt_bttm">
              <div class="partner_logo"><img src="<?= PATH_FILES_UPLOADS . "trade-in/nyasa.png" ?>" alt="partner logo"></div>
              <div class="phone"><a href="tel:7718806270"><i class="ii-icon-phone" aria-hidden="true"></i> +91 7718806270</a></div>
              <div class="email"><a href="mailto:promo@nyasa.info"><i class="ii-icon-email" aria-hidden="true"></i> promo@nyasa.info</a>
              </div>
              <div class="locate_us_button"><a data-store-name="Nyasa" href="https://www.nyasa.info/" target="_blank" class="read-more gradient-text"> <span>Locate us <i class="ii-icon-arrow-right"></i></span> </a></div>
            </div>
          </div>-->
          <div class="box_offer">
            <div class="info_partner border_ryt_bttm">
              <div class="partner_logo"><img src="https://i3-prod-assets.indiaistore.com/files/uploads/partners/partner-logo-1618220445_4702.png" alt="partner logo"></div>
              <div class="phone"><a href="tel:1800-572-9392"><i class="ii-icon-phone" aria-hidden="true"></i> 1800-572-9392</a></div>
              <div class="email"><a href="mailto:contact@futureworldindia.co.in"><i class="ii-icon-email" aria-hidden="true"></i> contact@futureworldindia.co.in</a>
              </div>
              <div class="locate_us_button"><a data-store-name="Future World" href="http://futureworldindia.in/" target="_blank" class="read-more gradient-text"> <span>Locate us <i class="ii-icon-arrow-right"></i></span> </a></div>
            </div>
          </div>
          <div class="box_offer">
            <div class="info_partner border_ryt_bttm">
              <div class="partner_logo"><img src="https://i3-prod-assets.indiaistore.com/files/uploads/partners/partner-logo-1618220312_5541.png" alt="partner logo"></div>
              <div class="phone"><a href="tel:8130115556"><i class="ii-icon-phone" aria-hidden="true"></i> +91 8130115556</a></div>
              <div class="email"><a href="mailto:support@invent.net.in"><i class="ii-icon-email" aria-hidden="true"></i> support@invent.net.in</a>
              </div>
              <div class="locate_us_button"><a data-store-name="iNvent" href="https://www.inventstore.in/categories/mac/cid-CU00350658.aspx" target="_blank" class="read-more gradient-text"> <span>Locate us <i class="ii-icon-arrow-right"></i></span> </a></div>
            </div>
          </div>
          <div class="box_offer">
            <div class="info_partner border_ryt_bttm">
              <div class="partner_logo"><img src="https://i3-prod-assets.indiaistore.com/files/uploads/partners/partner-logo-1643272878_9241.png" alt="partner logo"></div>
              <div class="phone"><a href="tel:9830590080"><i class="ii-icon-phone" aria-hidden="true"></i> +91 9830590080</a></div>
              <div class="email"><a href="mailto:marketing@csgroup.in"><i class="ii-icon-email" aria-hidden="true"></i> marketing@csgroup.in</a>
              </div>
              <div class="locate_us_button"><a data-store-name="iDestiny" href="https://www.idestiny.in/" target="_blank" class="read-more gradient-text"> <span>Locate us <i class="ii-icon-arrow-right"></i></span> </a></div>
            </div>
          </div>
        </div>
        <div class="three_box_offer">

          <div class="box_offer">
            <div class="info_partner border_ryt_bttm">
              <div class="partner_logo"><img src="https://i3-prod-assets.indiaistore.com/files/uploads/partners/partner-logo-1627557016_4895.png" alt="partner logo"></div>
              <div class="phone"><a href="tel:8336068768"><i class="ii-icon-phone" aria-hidden="true"></i> +91 8336068768</a></div>
              <div class="email"><a href="mailto:imagine@systematixmedia.com"><i class="ii-icon-email" aria-hidden="true"></i> imagine@systematixmedia.com</a>
              </div>
              <div class="locate_us_button"><a data-store-name="Imagine Systematix Media" href="https://systematixmedia.com/" target="_blank" class="read-more gradient-text"> <span>Locate us <i class="ii-icon-arrow-right"></i></span> </a></div>
            </div>
          </div>
          <div class="box_offer">
            <div class="info_partner border_ryt_bttm">
              <div class="partner_logo"><img src="https://i3-prod-assets.indiaistore.com/files/uploads/partners/partner-logo-1618220932_2972.png" alt="partner logo"></div>
              <div class="phone"><a href="tel:8340088888"><i class="ii-icon-phone" aria-hidden="true"></i> +91 8340088888</a></div>
              <div class="email"><a href="mailto:contactus@aptronixindia.com"><i class="ii-icon-email" aria-hidden="true"></i> contactus@aptronixindia.com</a>
              </div>
              <div class="locate_us_button"><a data-store-name="iVENUS" href="https://www.ivenus.in/" target="_blank" class="read-more gradient-text"> <span>Locate us <i class="ii-icon-arrow-right"></i></span> </a></div>
            </div>
          </div>
          <div class="box_offer">
            <div class="info_partner border_bttm">
              <div class="partner_logo"><img src="<?= PATH_FILES_UPLOADS . "trade-in/iworld.png" ?>" alt="partner logo"></div>
              <div class="phone"><a href="tel:+91-11-45608272"><i class="ii-icon-phone" aria-hidden="true"></i> +91-11-45608272</a></div>
              <div class="email"><a href="mailto:accounts@iworld.co.in"><i class="ii-icon-email" aria-hidden="true"></i> accounts@iworld.co.in</a>
              </div>
              <div class="locate_us_button"><a data-store-name="iWorld" href="http://www.iworld.co.in/" target="_blank" class="read-more gradient-text"> <span>Locate us <i class="ii-icon-arrow-right"></i></span> </a></div>
            </div>
          </div>
        </div>
        <!--<div class="three_box_offer">
          <div class="box_offer">
            <div class="info_partner border_ryt_bttm">
              <div class="partner_logo"><img src="<?= PATH_FILES_UPLOADS . "trade-in/eham-digital.png" ?>" alt="partner logo"></div>
              <div class="phone"><a href="tel:9605045678"><i class="ii-icon-phone" aria-hidden="true"></i> +91 9605045678</a></div>
              <div class="email"><a href="mailto:reachus@ehamdigital.com"><i class="ii-icon-email" aria-hidden="true"></i> reachus@ehamdigital.com</a>
              </div>
              <div class="locate_us_button"><a data-store-name="Eham Digital" href="http://appletvm.com/" target="_blank" class="read-more gradient-text"> <span>Locate us <i class="ii-icon-arrow-right"></i></span> </a></div>
            </div>
          </div>
          

        </div>-->
        <div class="text-center mob_wth">
          <a class="btn btn-primary show-more only_mobile" href="javascript:void(0);" id="loadMore">
            <span class="more">Load More</span>
          </a>
        </div>
      </div>
    </div>
  </section>
</main>