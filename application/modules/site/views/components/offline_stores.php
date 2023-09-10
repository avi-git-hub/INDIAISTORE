
<div class="container">
  <h2 class="heading-2">Buy Offline</h2>

  <p class="heading-desc">Buy at Apple Reseller or Stores</p>

  <div class="stores">
    <ul class="nav nav-tabs" id="buyOfflineTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#mono_brand_stores" role="tab">
          APR/AAR <p>(Mono brand stores)</p>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#multi_brand_stores" role="tab">Multi Brand Stores</a>
      </li>
    </ul>

    <div class="tab-content" id="myTabContent">
      <div class="store-list tab-pane   show active" id="mono_brand_stores" role="tabpanel">
        <?php if (!empty($offline_store_data['mono_brand_data'])) : ?>
          <?php foreach ($offline_store_data['mono_brand_data'] as $store) : ?>
            <div class="store" data-store-type="<?= $store->type ?>" data-store-name="<?= $store->name ?>" data-store-phone="<?= $store->phone ?>">
              <div class="img">
                <?php if ($store->logo != "" && file_exists(ABS_PATH_FILES_UPLOADS . "stores/$store->logo")) : ?>
                  <img src="<?= PATH_FILES_UPLOADS . "stores/$store->logo" ?>" alt="">
                <?php else : ?>
                  <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100' viewBox='0 0 100 100'%3E%3Crect width='100' height='100' fill='%23cccccc'/%3E%3C/svg%3E" alt="Apex Mobile Store">
                <?php endif; ?>
              </div>

              <div class="details">
                <b class="name"><?= $store->name ?></b>

                <div class="address"><?= $store->address ?></div>

                <div class="num-link">
                  <?php
                  $phone_no_array = preg_split('/ (,|;) /', $store->phone);

                  foreach ($phone_no_array as $p_n_key => $p_n_value) :
                    $trimmed_phone_no = trim($p_n_value);
                  ?>
                    <a class="offline-num" href="<?= $trimmed_phone_no ? "tel:$trimmed_phone_no" : 'javascript:void(0);' ?>" onClick="gtag('event', 'conversion', {'allow_custom_scripts': true,'send_to': 'DC-11602604/invmedia/macbo00a+standard'});gtag('event', 'conversion', {'allow_custom_scripts': true,'send_to': 'DC-11602604/invmedia/macbo00a+standard' });fbq('track', 'Contact');window.lintrk('track', { conversion_id: 8589074 });gtag_report_conversion_call(currurl); gtag('event', 'conversion', {'allow_custom_scripts': true,'send_to': 'DC-11647498/invmedia/watch00+standard'}); gtag('event', 'conversion', {'allow_custom_scripts': true,'send_to': 'DC-11647498/invmedia/watch00+standard'});" id="offlinecall"><?= $trimmed_phone_no ? "<i class='ii-icon-phone'></i>" : '' ?> <?= $trimmed_phone_no ?: '&nbsp;' ?></a>
                  <?php endforeach; ?>

                  <a class="offline-link" href="<?= $store->website ?: 'javascript:void(0);' ?>" target="_blank" onClick="gtag('event', 'conversion', {'allow_custom_scripts': true,'send_to': 'DC-11602604/invmedia/macbo009+standard'}); gtag('event', 'conversion', { 'allow_custom_scripts': true,'send_to': 'DC-11602604/invmedia/macbo009+standard'});fbq('track', 'ViewContent');window.lintrk('track', { conversion_id: 8589090 });gtag_report_conversion_website(currurl);gtag('event', 'conversion', {'allow_custom_scripts': true,'send_to': 'DC-11647498/invmedia/watch001+standard'});" id="offlinewebsite"><?= parse_url($store->website, PHP_URL_HOST) ?: '&nbsp;' ?></a>
                </div>

                <div class="direction-sms">
                  <a class="offline-direction" href="https://maps.google.com/?q=<?= $store->lat . ',' . $store->lng ?>" target="_blank" onClick="fbq('track', 'FindLocation');window.lintrk('track', { conversion_id: 8589066 });gtag_report_conversion_direction(currurl);">GET DIRECTIONS</a>

                  <a class="offline-sms store_sms_modal_btn" href="javascript:void(0);" onClick="fbq('track', 'Contact');gtag('event', 'conversion', {'allow_custom_scripts': true,'send_to': 'DC-11602604/invmedia/macbo008+standard'});gtag('event', 'conversion', {'allow_custom_scripts': true,'send_to': 'DC-11602604/invmedia/macbo008+standard'});window.lintrk('track', { conversion_id: 8589082 });gtag_report_conversion_sms(currurl);gtag('event', 'conversion', {'allow_custom_scripts': true,'send_to': 'DC-11647498/invmedia/watch000+standard'});gtag('event', 'conversion', {'allow_custom_scripts': true,'send_to': 'DC-11647498/invmedia/watch000+standard'});" id="offlinesms">SMS</a>
                </div>

                <input type="hidden" class="pincode" value="<?= $store->pincode ?>">
                <input type="hidden" class="is_open" value="<?= $store->is_open ?>">
              </div>
            </div>
          <?php endforeach; ?>
        <?php else : ?>
          <div class="store m-auto">
            <h6 class="text-muted mt-4">No mono brand stores available for this location.</h6>
          </div>
        <?php endif; ?>

        <div class="text-center mt-4 w-100">
          <a class="btn btn-primary show-more" href="javascript:void(0);">
            <span class="more">View More</span>
          </a>

          <a class="btn btn-primary show-less" href="javascript:void(0);">
            <span class="less">View Less</span>
          </a>
        </div>
      </div>

      <div class="store-list tab-pane" id="multi_brand_stores" role="tabpanel">
        <?php if (!empty($offline_store_data['multi_brand_data'])) : ?>
          <?php foreach ($offline_store_data['multi_brand_data'] as $store) : ?>
            <div class="store" data-store-type="<?= $store->type ?>" data-store-name="<?= $store->name ?>" data-store-phone="<?= $store->phone ?>">
              <div class="img">
                <?php if ($store->logo != "" && file_exists(ABS_PATH_FILES_UPLOADS . "stores/$store->logo")) : ?>
                  <img src="<?= PATH_FILES_UPLOADS . "stores/$store->logo" ?>" alt="">
                <?php else : ?>
                  <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100' viewBox='0 0 100 100'%3E%3Crect width='100' height='100' fill='%23cccccc'/%3E%3C/svg%3E" alt="Apex Mobile Store">
                <?php endif; ?>
              </div>

              <div class="details">
                <b class="name"><?= $store->name ?></b>

                <div class="address"><?= $store->address ?></div>

                <div class="num-link">
                  <?php
                  $phone_no_array = explode(',', $store->phone);

                  foreach ($phone_no_array as $p_n_key => $p_n_value) :
                    $trimmed_phone_no = trim($p_n_value);
                  ?>
                    <a class="offline-num" href="<?= $trimmed_phone_no ? "tel:$trimmed_phone_no" : 'javascript:void(0);' ?>"><?= $trimmed_phone_no ? "<i class='ii-icon-phone'></i>" : '' ?> <?= $trimmed_phone_no ?: '&nbsp;' ?></a>
                  <?php endforeach; ?>

                  <a class="offline-link" href="<?= $store->website ?: 'javascript:void(0);' ?>" target="_blank"><?= parse_url($store->website, PHP_URL_HOST) ?: '&nbsp;' ?></a>
                </div>

                <div class="direction-sms">
                  <a class="offline-direction" href="https://maps.google.com/?q=<?= $store->lat . ',' . $store->lng ?>" target="_blank">GET DIRECTIONS</a>

                  <a class="offline-sms store_sms_modal_btn" href="javascript:void(0);">SMS</a>
                </div>

                <input type="hidden" class="pincode" value="<?= $store->pincode ?>">
                <input type="hidden" class="is_open" value="<?= $store->is_open ?>">

              </div>

            </div>
          <?php endforeach; ?>
        <?php else : ?>
          <div class="store m-auto">
            <h6 class="text-muted mt-4">No multi brand stores available for this location.</h6>
          </div>
        <?php endif; ?>

        <div class="text-center mt-4 w-100">
          <a class="btn btn-primary show-more" href="javascript:void(0);">
            <span class="more">View More</span>
          </a>

          <a class="btn btn-primary show-less" href="javascript:void(0);">
            <span class="less">View Less</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- #modal_send_sms -->

<div class="modal fade" tabindex="-1" role="dialog" id="store_sms_modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header py-2">
        <h4 class="modal-title">Mobile Number</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

      </div>

      <div class="modal-body">
        <div class="alert field_sms_msg" role="alert" style="display: none;"></div>

        <input type="hidden" name="field_store_name" id="field_sms_store_name" value="" />
        <input type="hidden" name="field_store_address" id="field_sms_store_address" value="" />
        <input type="hidden" name="field_store_pincode" id="field_sms_store_pincode" value="" />
        <input type="hidden" name="field_store_phone" id="field_sms_store_phone" value="" />
        <input type="hidden" name="field_store_is_open" id="field_sms_store_is_open" value="" />
        <input type="hidden" name="field_store_type" id="field_sms_store_type" value="" />

        <div class="input-group align-items-center">
          <input type="tel" placeholder="Enter your 10 digit mobile number" maxlength="10" class="form-control" name="field_mob_num" id="field_sms_mob_num" />

          <span class="input-group-btn ml-3">
            <button class="btn btn-primary" name="btn_send_sms" id="store_send_sms_btn">Send SMS</button>
          </span>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- #modal_send_sms -->