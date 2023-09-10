<section class="hero-banner">
  <div class="slider">
    <?php if (!empty($banner_hero)) :
      foreach ($banner_hero as $banner) : ?>
        <div class="slider-item <?= $banner->additional_classes ?>">
          <picture>
            <source media="(max-width: 768px)" srcset="<?= PATH_FILES_UPLOADS . "banners/$banner->position_slug/$banner->mobile_image" ?>">
            <source media="(min-width: 769px)" srcset="<?= PATH_FILES_UPLOADS . "banners/$banner->position_slug/$banner->desktop_image" ?>">
            <img class="mob" src="<?= PATH_FILES_UPLOADS . "banners/$banner->position_slug/$banner->mobile_image" ?>" alt="<?= $banner->alt_text ?>">
            <img class="dex" src="<?= PATH_FILES_UPLOADS . "banners/$banner->position_slug/$banner->desktop_image" ?>" alt="<?= $banner->alt_text ?>">
          </picture>
        </div>
    <?php endforeach;
    endif;
    ?>
  </div>
</section>

<section class="offer_details">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <div class="offer_date">
          <p><strong>Get Your favourite iPhone, now in 24 months No-Cost EMIs</strong></p>
        </div>
      </div>
      <div class="col-12 offer_details_list">
        <ul>
          <li>Upgrade to iPhone today with exclusive offers brought to you by <strong>Zest</strong>.</li>
          <li>Buy iPhone today with 24 months of no cost EMIs, without making any down payment. This offer is on <strong>iPhone 13</strong>, <strong>iPhone 12</strong>, and <strong>iPhone 11</strong> and brought to you exclusively by Zest.</li>
          <li>Check out the stores in your city where you can avail this offer through the <strong>Store Locator</strong> given below or click on <strong>Search Nearby</strong>. This special offer is only available at the stores listed below.</li>
          <li>Don’t miss this opportunity to buy your favourite iPhone at a starting monthly EMI of just ₹2079*. For more details, refer to the <strong>Terms and Conditions</strong> given below.</li>
        </ul>
      </div>
    </div>
  </div>
  </div>
</section>

<section class="buy-offline" id="offline_stores_section">
  <h2 class="heading-2 text-center mb-5">Zest Offer Store Locator</h2>

  <?php
  if ((isset($store_locator)) && (!empty($store_locator))) {
    echo $store_locator;
  }
  ?>

  <div class="container">
    <!-- <h2 class="heading-2">Zest Offer</h2> -->

    <!-- <p class="heading-desc">Buy at at Apple Reseller or Stores</p> -->

    <div class="stores">
      <!-- <ul class="nav nav-tabs" id="buyOfflineTab" role="tablist"> -->
      <!-- <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#mono_brand_stores" role="tab">
            APR/AAR <p>(Mono brand stores)</p>
          </a>
        </li> -->
      <!-- 
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#multi_brand_stores" role="tab">Apple Reseller</a>
        </li> -->
      <!-- </ul> -->

      <!-- <div class="tab-content" id="myTabContent"> -->
      <div class="store-list tab-pane active" id="multi_brand_stores" role="tabpanel">
        <!-- <div class="store" data-store-type="lfr" data-store-name="Reliance Digital | Phoenix Market City Mall, Kurla" data-store-phone="1800 889 1044" style="">
            <div class="img">
              <img src="http://localhost:8000/files/uploads/stores/Reliance_digital.png" alt="">
            </div>

            <div class="details">
              <b class="name">Reliance Digital | Phoenix Market City Mall, Kurla</b>

              <div class="address">Reliance Digital, Lower Ground Floor, Phoenix Market City, LBS Marg, Kurla West, Mumbai 400070, Maharashtra</div>

              <div class="num-link mt-3">
                <a class="offline-num" href="tel:1800 889 1044"><i class="ii-icon-phone"></i> 1800 889 1044</a>

                <a class="offline-link" href="https://www.reliancedigital.in" target="_blank">www.reliancedigital.in</a>
              </div>

              <div class="direction-sms">
              <a class="offline-direction" href="https://maps.google.com/?q=19.0864293,72.8898496" target="_blank">GET DIRECTIONS</a>

              <a class="offline-sms store_sms_modal_btn" href="javascript:void(0);">SMS</a>
              </div>

              <input type="hidden" class="pincode" value="400070">
              <input type="hidden" class="is_open" value="yes">

            </div>

          </div> -->
      </div>
    </div>

  </div>


  <!-- #modal_send_sms -->

  <!-- <div class="modal fade" tabindex="-1" role="dialog" id="store_sms_modal">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header py-2">
            <h4 class="modal-title">Mobile Number</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>

          </div>

          <div class="modal-body">
            <div class="alert field_sms_msg" role="alert" style="display: none;"></div>

            <input type="hidden" name="field_store_name" id="field_sms_store_name" value="">
            <input type="hidden" name="field_store_address" id="field_sms_store_address" value="">
            <input type="hidden" name="field_store_pincode" id="field_sms_store_pincode" value="">
            <input type="hidden" name="field_store_phone" id="field_sms_store_phone" value="">
            <input type="hidden" name="field_store_is_open" id="field_sms_store_is_open" value="">
            <input type="hidden" name="field_store_type" id="field_sms_store_type" value="">

            <div class="input-group align-items-center">
              <input type="tel" placeholder="Enter your 10 digit mobile number" maxlength="10" class="form-control" name="field_mob_num" id="field_sms_mob_num">

              <span class="input-group-btn ml-3">
                <button class="btn btn-primary" name="btn_send_sms" id="store_send_sms_btn">Send SMS</button>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div> -->

  <!-- #modal_send_sms -->
</section>

<section class="terms-and-conditions">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="panel panel-default">
          <div class="panel-heading order_heading" role="tab" id="heading_tnc">
            <div class="row">
              <div class="col-12">
                <h3 class="panel-title order_title">*Terms &amp; Conditions</h3>
              </div>
            </div>
          </div>
          <div class="panel-body order_body">
            <ul class="mb_md_0">
              <li>For iPhone 13, effective EMI of ₹3121* is computed on 0 down payment, 24 months No Cost EMI consumer loan scheme available on ZestMoney, on the MRP ₹79900.00 (incl. of all taxes) of iPhone 13, 128 GB, (15.49 cm, 1 N) and as reduced by instant store discount of ₹5000.00*.</li>
              <li>For iPhone 12, effective EMI of ₹2538* is computed on 0 down payment, 24 months No Cost EMI consumer loan scheme available on ZestMoney, on the MRP ₹65900.00 (incl. of all taxes) of iPhone 12, 64 GB, (15.49 cm, 1 N) and as reduced by instant store discount of ₹5000.00*.</li>
              <li>For iPhone 11, Effective EMI of ₹2079* is computed on 0 down payment, 24 months No Cost EMI consumer loan scheme available on ZestMoney, on the MRP ₹49900.00 (incl. of all taxes) of iPhone 11, 64 GB, (15.49 cm, 1 N). </li>
              <li>EMIs illustrated above are rounded off to the nearest rupee for ease of reference. </li>
              <li>The consumer loan approval from the financier is at their sole discretion. </li>
              <li>This scheme is provided as No Cost EMI i.e. the benefit of No Cost EMI as a total applicable interest to be charged by financer on consumer loan for original tenure will be borne by apple authorised distributors. </li>
              <li>The EMI as stated on the Loan Sanction letter or the charge slip will be deducted on the 5th of every month, and includes the interest component which is credited back to the customer in the form of cashback after payment of each month's EMI. </li>
              <li>Processing fee of 1% is applicable and will be charged to customer. </li>
              <li>Goods and Services Tax will be applicable on processing fee, and foreclosure charges, as applicable. </li>
              <li>Customer may be required to enter into separate agreements or arrangements (by whatever name called) with the financier to avail or use the EMI facility. </li>
              <li>Customers are advised to read the offer/agreement terms and conditions carefully. </li>
            </ul>
            <!-- <div id="tnc" class="panel-collapse collapsed collapse show" role="tabpanel" aria-labelledby="heading_tnc" aria-expanded="false" style="">
              <ul class="mb_md_0">
                <li>This Offer is valid on purchases made as per the Terms and Conditions from 8<sup>th</sup> March 2021 to 30<sup>th</sup> September 2021 .</li>
                <li>Offer details: <ol>
                    <li>On the purchase of select iPhones models (iPhone 12 Pro Max, iPhone 12 Pro, iPhone 12, iPhone 12 mini) at select Apple authorized reseller stores and against card transactions executed on PineLabs POS/EDC terminals only, Cardholders may choose to opt for a 24-month Instant EMI with Deferred Payment Facility (“Facility”) option </li>
                    <li>Under this option, Cardholders will be charged interest only on 75% of the total purchase value, which would be converted into 24 EMIs</li>
                  </ol>
                </li>
              </ul>
              <div class="text-center"> <a href="https://i3-prod-assets.indiaistore.com/files/uploads/bank_offers/hsbc_offers/HSBC-Offer-T-and-Cs.pdf" class="ga_know_more" target="_blank">Know more</a> </div>
            </div>
            <div class="text-center"> <a role="button" data-toggle="collapse" href="#tnc" aria-expanded="true" aria-controls="tnc" class="cta_load_more"></a> </div> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>