
<div class="container">
  <h2 class="heading-2">Online Stores</h2>

  <p class="heading-desc">Buy on Apple Authorised Reseller's website</p>

  <div class="stores">
  <?php foreach ($premium_partners_data as $premiumpartner) : ?>

      
    <div class="store store-<?= $premiumpartner->id ?>">
 
             
              <div class="img">
                  <?php if ($premiumpartner->logo != "") : ?>
                    <img src="<?= PATH_FILES_UPLOADS . "partners/$premiumpartner->logo" ?>" alt="">
                  <?php else : ?>
                    <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100' viewBox='0 0 100 100'%3E%3Crect width='100' height='100' fill='%23cccccc'/%3E%3C/svg%3E" alt="Apex Mobile Store">
                  <?php endif; ?>
                </div>
                <div class="num">
                  <a href="<?= $premiumpartner->phone ? "tel:$premiumpartner->phone" : 'javascript:void(0);' ?>">
                    <?= $premiumpartner->phone ? "<i class='ii-icon-phone'></i>" : '' ?> <?= $premiumpartner->phone ?: '&nbsp;' ?>
                  </a>
                </div>

                <div class="link">
                  <a href="<?= $premiumpartner->website ?: 'javascript:void(0);' ?>" target="_blank">
                    <?= parse_url($premiumpartner->website, PHP_URL_HOST) ?: '&nbsp;' ?>
                  </a>
                </div>
          
</div>
<?php endforeach; ?>
    <?php foreach ($online_store_data_new as $partner) : ?>
      <div class="store store-<?= $partner->id ?>" data-partner-name="<?= $partner->name ?>" data-partner-phone="<?= $partner->phone ?>">
        <div class="img">
          <?php if ($partner->logo != "" && file_exists(ABS_PATH_FILES_UPLOADS . "partners/$partner->logo")) : ?>
            <img src="<?= PATH_FILES_UPLOADS . "partners/$partner->logo" ?>" alt="">
          <?php else : ?>
            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100' viewBox='0 0 100 100'%3E%3Crect width='100' height='100' fill='%23cccccc'/%3E%3C/svg%3E" alt="Apex Mobile Store">
          <?php endif; ?>
        </div>

        <div class="num">
          <a href="<?= $partner->phone ? "tel:$partner->phone" : 'javascript:void(0);' ?>" onClick="gtag('event', 'conversion', {'allow_custom_scripts': true,'send_to': 'DC-11602604/invmedia/macbo00-+standard'});gtag('event', 'conversion', {'allow_custom_scripts': true,'send_to': 'DC-11602604/invmedia/macbo00-+standard'});fbq('track', 'Contact');window.lintrk('track', { conversion_id: 8589074 });gtag_report_conversion_call(currurl); gtag('event', 'conversion', {'allow_custom_scripts': true,'send_to': 'DC-11647498/invmedia/watch00+standard'}); gtag('event', 'conversion', {'allow_custom_scripts': true,'send_to': 'DC-11647498/invmedia/watch00+standard'});" class="onlinecall">
            <?= $partner->phone ? "<i class='ii-icon-phone'></i>" : '' ?> <?= $partner->phone ?: '&nbsp;' ?>
          </a>
        </div>

        <div class="link">
          
          <a href="<?= $partner->website ?: 'javascript:void(0);' ?>" target="_blank" onClick="gtag('event', 'conversion', {'allow_custom_scripts': true,'send_to': 'DC-11602604/invmedia/macbo007+standard'});gtag('event', 'conversion', {'allow_custom_scripts': true,'send_to': 'DC-11602604/invmedia/macbo007+standard'});fbq('track', 'ViewContent');window.lintrk('track', { conversion_id: 8589090 });gtag_report_conversion_website(currurl);gtag('event', 'conversion', {'allow_custom_scripts': true,'send_to': 'DC-11647498/invmedia/watch001+standard'});gtag('event', 'conversion', {'allow_custom_scripts': true,'send_to': 'DC-11647498/invmedia/watch001+standard'});" class="onlinewebsite">
            <?= parse_url($partner->website, PHP_URL_HOST) ?: '&nbsp;' ?>
          </a>
        </div>
      </div>
    <?php endforeach; ?>
  </div>

  <div class="text-center">
    <a class="btn btn-primary show-more" href="javascript:void(0);">
      <span class="more">View More</span>
    </a>

    <a class="btn btn-primary show-less" href="javascript:void(0);">
      <span class="less">View Less</span>
    </a>
  </div>
</div>