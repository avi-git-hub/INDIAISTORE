<style>
  .bts_table table tr td{padding: 20px 15px !important;line-height: 1.4 !important;}
  .banner_bts {
  margin-bottom: 20px;
}
  @media (max-width:767px) {
      .bts_table table tr td{font-size: 0.8rem;padding: 7px !important;}}
      section.effective-price-calculator .heading-container {
  padding: 0 8px !important;}
</style>
<section class="back_to_school" style="margin-bottom:5%;">
<div class="banner_bts">

  <?php if (!empty($iphone_upgrader_print_hero[0])) :
    $banner = $iphone_upgrader_print_hero[0];
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
<!--        <h2 class="heading-2 mb-3">Offer table</h2>-->
      <div class="bts_table" style="overflow-x:auto;"> 
        <table>
          <tbody>
            <tr>
              <td><strong>&nbsp;</strong></td>
              <td><strong>iPhone 14</strong></td>
              <td><strong>iPhone 14 Plus</strong></td>
              <!-- <td><strong>iPhone 14 Pro</strong></td>
                <td><strong>iPhone 14 Pro Max</strong></td> -->
                <td><strong>iPhone 13</strong></td>
                <td><strong>iPhone 14 Pro</strong></td>
            </tr>
            <tr>
              <td>MRP (inc. of all taxes), (128 GB, IN)</td>
              <td>₹79900</td>
              <td>₹89900</td>
              <!-- <td>₹129900</td>
              <td>₹139900</td> -->
              <td>₹69900</td>
              <td>₹129900</td>
            </tr>
            <tr>
              <td>Cashback</td>
              <td>₹4000</td>
              <td>₹4000</td>
              <!-- <td>₹4000</td>
              <td>₹4000</td> -->
              <td>₹2000</td>
              <td>₹3000</td>
            </tr>
              <tr>
              <td>Exchange value of your old smartphone*</td>
              <td>₹20000</td>
              <td>₹20000</td>
              <!-- <td>₹20000</td>
              <td>₹20000</td> -->
              <td>₹20000</td>
              <td>₹26000</td>
             </tr>
              <tr>
              <td>Exchange Bonus</td>
              <td>₹3000</td>
              <td>₹3000</td>
              <!-- <td>₹6000</td>
              <td>₹8000</td> -->
              <td>₹3000</td>
              <td>₹3000</td>
              </tr>
            <tr>
            <tr>
              <td>Instant Store Discount</td>
              <td>₹5000</td>
              <td>₹5000</td>
              <!-- <td>₹6000</td>
              <td>₹6000</td> -->
              <td>₹5000</td>
              <td>NA</td>
              </tr>
            <tr>
                <td><strong>Exchange Effective Price</strong></td>
              <td>₹47900</td>
              <td>₹57900</td>
              <!-- <td>₹99900</td>
              <td>₹109900</td> -->
              <td>₹39900</td>
              <td>₹97900</td>
          </tr>
          <tr>
                <td><strong>Exchange Effective EMI p.m.</strong></td>
              <td>₹2163</td>
              <td>₹2579</td>
              <!-- <td>₹99900</td>
              <td>₹109900</td> -->
              <td>₹1746</td>
              <td>₹4204</td>
          </tr>
          </tbody>
        </table>
      </div>
      <div class="bts_tc">
        <h2 class="mb-4">Terms & Conditions</h2>
      <ol><li>The limited period exclusive offer price is computed on the MRP ₹79900.00 (incl. of all taxes) of iPhone 14, 128 GB, (15.40 cm, 1 N), MRP ₹89900.00 (incl. of all taxes) of iPhone 14 Plus, 128 GB, (16.95 cm, 1 N), MRP ₹129900.00 (incl. of all taxes) of iPhone 14 Pro, 128 GB, (15.54 cm, 1 N) and MRP ₹139900.00 (incl. of all taxes) of iPhone 14 Pro Max, 128 GB, (17.00 cm, 1 N). For iPhone 14, 128 GB, (15.40 cm, 1 N) and iPhone 14 Plus, 128 GB, (16.95 cm, 1 N), the illustrative Exchange Effective price calculated above on MRP is reduced by ₹5000* Instant Store Discount and ₹4000.00 cashback available on EMI transaction on HDFC Bank Debit and Credit Card and Non-EMI transaction on HDFC Bank Credit Cards. For iPhone 14 Pro, 128 GB, (15.54 cm, 1N) and iPhone 14 Pro Max, 128 GB, (17.00 cm, 1N), the illustrative Exchange Effective price calculated above on MRP is reduced by ₹3000.00 cashback available on EMI transaction on HDFC Bank Debit and Credit Card and Non-EMI transaction on HDFC Bank Credit Cards. These amounts are further reduced by exchange value of iPhone 11 64 GB (15.49 cm, 1 N) in a good working condition along with up to ₹3000.00 exchange bonus. The cashback offer is available and valid exclusively on EMI transaction on HDFC Bank Debit and Credit Card and Non-EMI transaction on HDFC Bank Credit Cards. The cashback offer is valid and applicable for transactions made using the Brand EMI option on Pine Labs and Paytm terminals and on select online merchants via Pine Labs Payment Gateway. Processing fee and GST on interest component is applicable as per the Bank’s terms and conditions.</li> <li>The Exchange bonus of upto ₹3000.00 is exclusively provided by the Apple Authorised Trade-in Providers Cashify at select stores at their sole discretion. </li> <li>3. Exchange bonus is valid only for transactions involving trade-in of eligible old devices valued at least ₹3000.00 or above. Eligible old devices valued between ₹3000.00 and ₹10000.00 will receive an exchange bonus of  ₹2000 and customer’s eligible devices valued above  ₹10000.00 will receive an exchange bonus of  ₹3000.00.</li> <li>The exchange bonus and trade-in value will be passed on as a credit or discount in the customer’s invoice. Exchange Bonus offer can be clubbed with Cards Cashback Offer. Exchange Bonus offer can be clubbed with any other existing consumer loan offers as well as iPhone for life. Customer’s eligible old device trade-in value as diagnosed and assessed by Apple Authorised Trade-in Providers will be the final offer. Any other T&amp;Cs as specified by Apple Authorised Trade-in Providers will be the final offer. Any other T&amp;Cs as specified by Apple Authorised Trade-in Providers will apply. Offer available till stocks last. Available at select Apple Authorised Reseller stores. For store details log on to indiaistore.com. The offers may be revised or withdrawn without any prior notice. Product features vary by model. TM and © 2023 Apple Inc. All rights reserved. </li> <li><a style="font-weight: normal;color: #0056b3;" href="https://www.indiaistore.com/files/uploads/macbook-new-lp-2022/List-of-Stores-iPhone-Upgrader-Fest.pdf" target="_blank">List of stores which are enabled for up to ₹3000 iPhone Exchange Offer.</a></li> </ol>
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
  <h2 class="heading-2 test2">Available at select Apple Authorised Resellers</h2>
  <ul class="seller-list">
      
    <li> <a href="https://www.aptronixindia.com/mac" target="_blank" data-store-name="aptronix-PREMIUM LIFESTYLE &amp; FASHION INDIA PVT LTD">
        <div class="content-overlay"></div> <img src="https://i3-prod-assets.indiaistore.com/files/uploads/partners/partner-logo-1618220534_8394.png">
        <div class="content-details fadeIn-bottom">
          <h3 class="content-title">Visit Website <i class="ii-icon-external-link"></i> </h3>
        </div>
      </a> </li>
      <li> <a href="https://www.bajajelectronics.com/" target="_blank" data-store-name="Bajaj">
  <div class="content-overlay"></div> <img src="https://i3-prod-assets.indiaistore.com/files/uploads/partners/partner-logo-1618226818_2896.png">
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
      <li> <a href="https://www.poorvika.com/" target="_blank" data-store-name="Poorvika">
  <div class="content-overlay"></div> <img src="https://i3-prod-assets.indiaistore.com/files/uploads/partners/partner-logo-1618221223_0353.png">
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
      <li> <a href="https://www.sangeethamobiles.com/" target="_blank" data-store-name="Croma">
  <div class="content-overlay"></div> <img src="https://i3-prod-assets.indiaistore.com/files/uploads/partners/partner-logo-1618226654_7855.png">
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