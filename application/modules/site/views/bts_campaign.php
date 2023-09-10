<style>
    .bts_table table tr td{padding: 20px 15px !important;line-height: 1.4 !important;}
    .banner_bts {
    margin-bottom: 20px;
}
</style>
<?php
	 $currentURL2 = current_url(); 
	?>
<script>
var currurl = '<?php echo $currentURL2; ?>';

</script>
<script>
    gtag('event', 'conversion', {'allow_custom_scripts': true,'send_to': 'DC-11602604/invmedia/macbo006+standard'});
    gtag('event', 'conversion', {'allow_custom_scripts': true,'send_to': 'DC-11602604/invmedia/macbo006+standard'});
</script>
<section class="back_to_school">
  <div class="banner_bts">

    <?php if (!empty($bts_campaign_hero[0])) :
      $banner = $bts_campaign_hero[0];
    ?>
      <a href="<?= ($banner->cta) ?: 'javascript:void(0);' ?>" target="<?= ($banner->is_external_cta) ? '_blank' : '' ?>" data-banner-name="<?= $banner->name ?>">
        <picture>
          <source media="(max-width: 768px)" srcset="<?= PATH_FILES_UPLOADS . "banners/$banner->position_slug/$banner->mobile_image" ?>">
          <source media="(min-width: 769px)" srcset="<?= PATH_FILES_UPLOADS . "banners/$banner->position_slug/$banner->desktop_image" ?>">
          <img src="<?= PATH_FILES_UPLOADS . "banners/$banner->position_slug/$banner->desktop_image" ?>" alt="<?= $banner->alt_text ?>">
        </picture>
      </a>
    <?php else : ?>
      <picture>
        <source media="(max-width: 768px)" srcset="<?= PATH_FILES_UPLOADS . 'bts/mobile.jpg' ?>">
        <source media="(min-width: 769px)" srcset="<?= PATH_FILES_UPLOADS . 'bts/desktop.jpg' ?>">
        <img src="<?= PATH_FILES_UPLOADS . 'bts/desktop.jpg' ?>" alt="BTS">
      </picture>
    <?php endif; ?>
  </div>
</section>
<section class="effective-price-calculator bts">
  <div class="container">
    <div class="box">
      <div class="heading-container">
        <h2 class="heading-2 mb-3">Back to School offers</h2>
        <div class="bts_table">
          <table>
            <tbody>
              <tr>
                <td><strong>Product</strong></td>
                <td><strong>Student Offer*</strong></td>
              </tr>
              <tr>
                <td>MacBook Pro 16 (41.05 cm)</td>
                <td>Up to ₹32990 off</td>
              </tr>
              <tr>
                <td>MacBook Pro 14 (35.97 cm)</td>
                <td>Up to ₹23990 off</td>
              </tr>
              <tr>
                <td>MacBook Pro 13 (33.74 cm)</td>
                <td>Up to ₹14990 off</td>
              </tr>
                <tr>
                <td>MacBook Air 13 (34.46 cm)</td>
                <td>Up to ₹14990 off</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="bts_tc">
          <h2 class="mb-4">Terms & Conditions</h2>
          <ol>
            <li>Limited period offer at select Apple Authorised resellers and Apple premium reseller stores. </li>
            <li>Offer may be withdrawn without prior notice. </li>
            <li>Offer above will be on the best available price at the store. </li>
            <li>Offer is exclusively available for school students of class 9 and above, all college students and all teachers of Indian academic institutions.  </li>
            <li>Offer is only valid on submission of valid student ID card and employee ID card for teachers along with identity proof.  </li>
            <li>Offer is not valid on Customized-to-Order Mac models and all iMac models. </li>
            <li>Back to school offer cannot be assigned, exchanged, sold, transferred or combined with any other discount or offer, or redeemed for cash or other goods and services. </li>
            <li>Offer is limited to one (1) purchase of one (1) Mac per customer during the offer period. Product features vary by model. TM and © 2022 Apple Inc. All rights reserved.</li>
              <li>Offer available till stocks last. Student Discount offer varies by each model. 
                  <ol style="padding:15px; 0px; list-style: lower-alpha;">
                      <li>Student Discount offer of ₹ 32990.00 is applicable on purchase of MacBook Pro 16 (41.05 cm, 1N, 1 TB), model, and is computed on the MRP ₹329900.00 (incl. of all taxes).  </li>
                      <li>Student Discount offer of ₹ 23990.00  is applicable on purchase of MacBook Pro 14 (35.97 cm, 1N, 1 TB), model, and is computed on the MRP ₹239900.00 (incl. of all taxes).  </li>
                      <li>Student Discount offer of ₹ 14990.00  is applicable on purchase of MacBook Pro 13 (33.74 cm, 1N, 512 GB), model, and is computed on the MRP ₹149900.00 (incl. of all taxes). </li>
                      <li>Student Discount offer of ₹ 14990.00 is applicable on purchase of MacBook Air 13 (34.46 cm, 1N, 256 GB), model, and is computed on the MRP ₹149900.00 (incl. of all taxes).

</li>
                  </ol>
              </li>
          </ol>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end  -->
<!-- <section class="apple-premium-resellers">
  <div class="container">
    <h2>Apple Premium Resellers</h2>
  </div>
</section> -->

<?php
if ((isset($store_locator)) && (!empty($store_locator))) {
  echo $store_locator;
}
?>

<section class="online-stores" id="online_stores_section"></section>

<section class="buy-offline" id="offline_stores_section"></section>

<?php
//  if (!empty($premium_partners)) :
if (false) :
?>
  <section class="apple-premium-resellers">
    <div class="container">
      <h2 class="heading-2 test1">Available at Apple Authorised Resellers</h2>
      <ul class="seller-list">
        <?php foreach ($premium_partners as $partner) : ?>
          <li>
            <a href="<?= $partner->website ?: 'javascript:void(0);' ?>" target="_blank" data-store-name="<?= $partner->name ?>">
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
  </section>
<?php endif; ?>


<section class="apple-premium-resellers">
  <div class="container">
    <h2 class="heading-2 test2">Available at Apple Authorised Resellers</h2>
    <ul class="seller-list">
        
      <li> <a href="https://www.aptronixindia.com/mac" target="_blank" data-store-name="aptronix-PREMIUM LIFESTYLE &amp; FASHION INDIA PVT LTD">
          <div class="content-overlay"></div> <img src="https://i3-prod-assets.indiaistore.com/files/uploads/partners/partner-logo-1618220534_8394.png">
          <div class="content-details fadeIn-bottom">
            <h3 class="content-title">Visit Website <i class="ii-icon-external-link"></i> </h3>
          </div>
        </a> </li>
        <li> <a href="https://www.croma.com/" target="_blank" data-store-name="Croma">
          <div class="content-overlay"></div> <img src="https://i3-prod-assets.indiaistore.com/files/uploads/partners/partner-logo-1622620008_0225.png">
          <div class="content-details fadeIn-bottom">
            <h3 class="content-title">Visit Website <i class="ii-icon-external-link"></i> </h3>
          </div>
        </a> </li>
        <li> <a href="https://www.futureworldindia.in/index.php?route=product/category&path=224" target="_blank" data-store-name="FUTURE WORLD RETAIL PVT LTD">
          <div class="content-overlay"></div> <img src="https://i3-prod-assets.indiaistore.com/files/uploads/partners/partner-logo-1618220445_4702.png">
          <div class="content-details fadeIn-bottom">
            <h3 class="content-title">Visit Website <i class="ii-icon-external-link"></i> </h3>
          </div>
        </a> </li>
        <li> <a href="https://idelta.co.in/mac" target="_blank" data-store-name="iDelta">
          <div class="content-overlay"></div> <img src="https://i3-prod-assets.indiaistore.com/files/uploads/partners/partner-logo-1618220672_1571.png">
          <div class="content-details fadeIn-bottom">
            <h3 class="content-title">Visit Website <i class="ii-icon-external-link"></i> </h3>
          </div>
        </a> </li>
        <li> <a href="https://idestiny.in/macbook/" target="_blank" data-store-name="CS TRADE LINK PVT LTD - iDestiny">
          <div class="content-overlay"></div> <img src="https://i3-prod-assets.indiaistore.com/files/uploads/partners/partner-logo-1618220602_1844.png">
          <div class="content-details fadeIn-bottom">
            <h3 class="content-title">Visit Website <i class="ii-icon-external-link"></i> </h3>
          </div>
        </a> </li>
        <li> <a href="https://imagineonline.store/t/category/mac" target="_blank" data-store-name="imagine-Ample Technologies Pvt. Ltd">
          <div class="content-overlay"></div> <img src="https://i3-prod-assets.indiaistore.com/files/uploads/partners/partner-logo-1622028935_1282.png">
          <div class="content-details fadeIn-bottom">
            <h3 class="content-title">Visit Website <i class="ii-icon-external-link"></i> </h3>
          </div>
        </a> </li>
        <li> <a href="https://www.theimaginestore.com/mac" target="_blank" data-store-name="imagine-KBRL RETAIL VENTURES LLP">
          <div class="content-overlay"></div> <img src="https://i3-prod-assets.indiaistore.com/files/uploads/partners/partner-logo-1622029011_7856.png">
          <div class="content-details fadeIn-bottom">
            <h3 class="content-title">Visit Website <i class="ii-icon-external-link"></i> </h3>
          </div>
        </a> </li>
        <li> <a href="https://systematixmedia.com/mac" target="_blank" data-store-name="imagine-SYSTEMATIX MEDIA">
          <div class="content-overlay"></div> <img src="https://i3-prod-assets.indiaistore.com/files/uploads/partners/partner-logo-1627557016_4895.png">
          <div class="content-details fadeIn-bottom">
            <h3 class="content-title">Visit Website <i class="ii-icon-external-link"></i> </h3>
          </div>
        </a> </li>
        <li> <a href="https://www.myimaginestore.com/category/mac/macbook-air" target="_blank" data-store-name="imagine-TRESOR SYSTEMS PVT LTD">
          <div class="content-overlay"></div> <img src="https://i3-prod-assets.indiaistore.com/files/uploads/partners/partner-logo-1622029833_904.png">
          <div class="content-details fadeIn-bottom">
            <h3 class="content-title">Visit Website <i class="ii-icon-external-link"></i> </h3>
          </div>
        </a> </li>
        <li> <a href="http://ngrt.in/mac-festival/" target="_blank" data-store-name="inspire-NGRT">
          <div class="content-overlay"></div> <img src="https://i3-prod-assets.indiaistore.com/files/uploads/partners/partner-logo-1623410920_5863.png">
          <div class="content-details fadeIn-bottom">
            <h3 class="content-title">Visit Website <i class="ii-icon-external-link"></i> </h3>
          </div>
        </a> </li>
        <li> <a href="https://inventstore.in/product-category/mac" target="_blank" data-store-name="invent -P3S VENTURES">
          <div class="content-overlay"></div> <img src="https://i3-prod-assets.indiaistore.com/files/uploads/partners/partner-logo-1618220312_5541.png">
          <div class="content-details fadeIn-bottom">
            <h3 class="content-title">Visit Website <i class="ii-icon-external-link"></i> </h3>
          </div>
        </a> </li>
              <li> <a href="https://shop.iplanetstore.in/category/mac" target="_blank" data-store-name="iplanet- CONSOLIDATED PREMIUM RETAILERS">
          <div class="content-overlay"></div> <img src="https://i3-prod-assets.indiaistore.com/files/uploads/partners/partner-logo-1618220774_6698.png">
          <div class="content-details fadeIn-bottom">
            <h3 class="content-title">Visit Website <i class="ii-icon-external-link"></i> </h3>
          </div>
        </a> </li>
        <li> <a href="https://ivenus.in/product-category/mac/" target="_blank" data-store-name="iVenus DATA PRODUCTS">
          <div class="content-overlay"></div> <img src="https://i3-prod-assets.indiaistore.com/files/uploads/partners/partner-logo-1618220932_2972.png">
          <div class="content-details fadeIn-bottom">
            <h3 class="content-title">Visit Website <i class="ii-icon-external-link"></i> </h3>
          </div>
        </a> </li>
        <li> <a href="https://maplestore.in/product-category/cpu/" target="_blank" data-store-name="MAPLE TECHNOLOGIES">
          <div class="content-overlay"></div> <img src="https://i3-prod-assets.indiaistore.com/files/uploads/partners/partner-logo-1618219655_2644.png">
          <div class="content-details fadeIn-bottom">
            <h3 class="content-title">Visit Website <i class="ii-icon-external-link"></i> </h3>
          </div>
        </a> </li>
        <li> <a href="https://www.reliancedigital.in/" target="_blank" data-store-name="Reliance Digital">
          <div class="content-overlay"></div> <img src="https://i3-prod-assets.indiaistore.com/files/uploads/partners/partner-logo-1622620477_247.png">
          <div class="content-details fadeIn-bottom">
            <h3 class="content-title">Visit Website <i class="ii-icon-external-link"></i> </h3>
          </div>
        </a> </li>
        <li> <a href="https://shop.unicornstore.in/mac" target="_blank" data-store-name="UNICORN INFOSOLUTIONS PVT LTD">
          <div class="content-overlay"></div> <img src="https://i3-prod-assets.indiaistore.com/files/uploads/partners/partner-logo-1622025063_0947.png">
          <div class="content-details fadeIn-bottom">
            <h3 class="content-title">Visit Website <i class="ii-icon-external-link"></i> </h3>
          </div>
        </a> </li>
                <li> <a href="https://www.vijaysales.com/" target="_blank" data-store-name="Reliance DigitalVijay Sales">
          <div class="content-overlay"></div> <img src="https://i3-prod-assets.indiaistore.com/files/uploads/partners/partner-logo-1618221151_0716.png">
          <div class="content-details fadeIn-bottom">
            <h3 class="content-title">Visit Website <i class="ii-icon-external-link"></i> </h3>
          </div>
        </a> </li>
    </ul>
  </div>
</section>


<script>

function gtag_report_conversion_website(url) {
  console.log(url);
    var callback = function () {
      if (typeof(url) != 'undefined') {
        window.location = url;
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
      window.location = url;
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
      window.location = url;
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
      window.location = url;
    }
  };
  gtag('event', 'conversion', {
      'send_to': 'AW-838139362/bgRsCO3PsskDEOL7048D',
      'event_callback': callback
  });
  return false;
}
</script>