
<style>
    .tns-outer {
    position: relative;
}
.upgrader-txt{
  font-size:36px;
  padding-bottom:5px;
  padding-top:15px;
}
.trade-in-new{
  margin-bottom:65px;
 
}
    .tns-outer .tns-controls {
    position: absolute;
    top: 45%;
    z-index: 2;
    width: 100%;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
}
    .category-listing-carousel .tns-outer .tns-controls{
        top: 26% !important;
    }
   .tns-outer .tns-controls button {
    font-size: 0;
    border-radius: 50%;
    width: 40px;
    height: 40px;
    margin: 0 -5%;
    border: 0;
    background: transparent;
    color: #000000;
}
    .tns-controls button[data-controls="prev"]::before {
    content: " \2039";
    font-size: 45px;
    display: block;
    font-family: "icon-font";
}
    .tns-controls button[data-controls="next"]::before {
    content: " \203A";
    font-size: 45px;
    display: block;
    font-family: "icon-font";
}
    @media (max-width:767px) {
  .tns-controls {
    display: none !important;
   
}
.upgrader-txt {
    font-size: 25px;

}
}
</style>

<div class="mt-3"></div>
<section class="offers-tabs">
  <div class="tabs-container">
    <div class="container">
      <ul class="nav nav-tabs" role="tablist">
        <?php if (!empty($bank_offers)) : ?>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#bank-offers" role="tab">BANK OFFERS</a>
          </li>
        <?php endif; ?>

        <?php if (!empty($loan_offers)) : ?>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#loan-offers" role="tab">LOAN OFFERS</a>
          </li>
        <?php endif; ?>
        <li class="nav-item <?= empty($bank_offers) && empty($loan_offers) ? 'active' : '' ?>">
          <a class="nav-link" data-toggle="tab" href="#tradin-offers" role="tab">TRADE IN OFFERS</a>
        </li>
      </ul>
    </div>
  </div>

  <div class="tab-content">
    <?php if (!empty($bank_offers)) : ?>
      <div class="tab-pane" id="bank-offers" role="tabpanel">
        <?php if (!empty($bank_offers)) : ?>
          <section class="offer-carousel bank">
            <div class="container">
              <h2 class="heading-2">Bank Offers</h2>

              <div class="filters">
                <div class="filter" data-id="icici-kotak-sbi">
                  <img src="<?= PATH_FRONTEND_CUSTOM_IMG . 'logos/icici-kotak-sbi.png' ?>" alt="">
                </div>

<!--
                <div class="filter" data-id="cc">Credit Cards</div>

                <div class="filter" data-id="dc">Debit Cards</div>

                <div class="filter" data-id="noemi">No Cost EMI</div>
-->
              </div>
            </div>

            <div class="container-right container">
              <div class="slider">
                <?php foreach ($bank_offers as $banner) : ?>
                  <div class="offer-item <?= $banner->additional_classes ?>">
                    <a href="<?= (is_null($banner->cta) ? 'javascript:void(0)' : $banner->cta) ?>" data-banner-name="<?= $banner->name ?>" target="<?= (($banner->is_external_cta) ? '_blank' : '_self') ?>">
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
      </div>
    <?php endif; ?>

    <?php if (!empty($loan_offers)) : ?>
      <div class="tab-pane" id="loan-offers" role="tabpanel">

        <?php if (!empty($loan_offers)) : ?>
          <section class="offer-carousel loan">
            <div class="container">
              <h2 class="heading-2">Loan Offers</h2>
              <div class="filters">
                <div class="filter" data-id="bajaj">
                  <img src="<?= PATH_FRONTEND_CUSTOM_IMG . 'logos/bajaj-finserv.png' ?>" alt="">
                </div>
                <div class="filter" data-id="idfc">
                  <img src="<?= PATH_FRONTEND_CUSTOM_IMG . 'logos/idfc.jpg' ?>" alt="">
                </div>
                <div class="filter" data-id="hdfc">
                  <img src="<?= PATH_FRONTEND_CUSTOM_IMG . 'logos/hdfc.png' ?>" alt="">
                </div>

                <div class="filter" data-id="zest">
                  <img src="<?= PATH_FRONTEND_CUSTOM_IMG . 'logos/zest.png' ?>" alt="">
                </div>
              </div>
            </div>

            <div class="container-right container">
              <div class="slider">
                <?php foreach ($loan_offers as $banner) : ?>
                  <div class="offer-item <?= $banner->additional_classes ?>">
                    <a href="<?= (is_null($banner->cta) ? 'javascript:void(0)' : $banner->cta) ?>" data-banner-name="<?= $banner->name ?>" target="<?= (($banner->is_external_cta) ? '_blank' : '_self') ?>">
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
      </div>
    <?php endif; ?>

    <div class="tab-pane" id="tradin-offers" role="tabpanel">

      <section class="trade-in-offers offer-carousel tradein">
      <div class="container">
              <h2 class="heading-2 upgrader-txt">Upgrader Fest Offer</h2>
              <div class="filters" style="display:none;">
                <div class="filter" data-id="bajaj">
                  <img src="<?= PATH_FRONTEND_CUSTOM_IMG . 'logos/bajaj-finserv.png' ?>" alt="">
                </div>
                <div class="filter" data-id="idfc">
                  <img src="<?= PATH_FRONTEND_CUSTOM_IMG . 'logos/idfc.jpg' ?>" alt="">
                </div>
                <div class="filter" data-id="hdfc">
                  <img src="<?= PATH_FRONTEND_CUSTOM_IMG . 'logos/hdfc.png' ?>" alt="">
                </div>

                <div class="filter" data-id="zest">
                  <img src="<?= PATH_FRONTEND_CUSTOM_IMG . 'logos/zest.png' ?>" alt="">
                </div>
              </div>
            </div>
      <div class="container-right container trade-in-new">
              <div class="slider">
                <?php foreach ($trade_in_offers as $banner) : ?>
                  <div class="offer-item <?= $banner->additional_classes ?>">
                    <a href="<?= (is_null($banner->cta) ? 'javascript:void(0)' : $banner->cta) ?>" data-banner-name="<?= $banner->name ?>" target="<?= (($banner->is_external_cta) ? '_blank' : '_self') ?>">
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
        <div class="container">
          <div class="col-md-12">
            <div class="box">
              <h2 class="heading-2">Trade-in Offers</h2>
              <p class="heading-desc" style="display:none;">Exchange bonus of Rs. 3000/- on iPhone.<br>Exchange bonus of Rs. 5000/- on MacBook.</p>
              <div class="offers tab-layout">

                <div class="row">
                  <div class="col-6">
                    <div class="partner-offers-details text-left">
                      <div class="partner-img">
                        <img src="<?= PATH_FRONTEND_CUSTOM_IMG . "logos/cashify.png" ?>">
                      </div>
                      <div class="step">
                        <ul>
                          <li class="title">Select City</li>
                          <li class="desc">STEP 1</li>
                        </ul>
                      </div>
                      <div class="step">
                        <ul>
                          <li class="title">Check Prices</li>
                          <li class="desc">STEP 2</li>
                        </ul>
                      </div>
                      <div class="step">
                        <ul>
                          <li class="title">Get Paid</li>
                          <li class="desc">STEP 3</li>
                        </ul>
                      </div>
                      <a href="javascript:void(0);" class="cashify-btn read-more gradient-text trade_in_button"> <span>KNOW MORE</span> </a>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="partner-offers-details text-left">
                      <div class="partner-img">
                        <img src="<?= PATH_FRONTEND_CUSTOM_IMG . "logos/servify.png" ?>">
                      </div>
                      <div class="step">
                        <ul>
                          <li class="title">Select City</li>
                          <li class="desc">STEP 1</li>
                        </ul>
                      </div>
                      <div class="step">
                        <ul>
                          <li class="title">Check Prices</li>
                          <li class="desc">STEP 2</li>
                        </ul>
                      </div>
                      <div class="step">
                        <ul>
                          <li class="title">Get Paid</li>
                          <li class="desc">STEP 3</li>
                        </ul>
                      </div>
                      <a href="javascript:void(0);" class="servify-btn read-more gradient-text trade_in_button"> <span>KNOW MORE</span> </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
</section>

<section class="effective-price-calculator-tabs">
  <div class="tabs-container">
    <div class="container">
      <ul class="nav nav-tabs" id="buyOfflineTab" role="tablist">
        <?php foreach ($categories as $i => $category) : ?>
          <li class="nav-item">
            <a class="nav-link nav_tabs<?= (($i == 0) ? ' active' : '') ?>" data-toggle="tab" href="#epc-<?= ($i + 1) ?>" role="tab" style="text-transform:none;"><?= $category->cat_name ?></a>
          </li>
        <?php endforeach ?>
      </ul>
    </div>
  </div>

  <div class="tab-content" id="epc-tab-content">
    <?php foreach ($categories as $i => $category) : ?>
      <div class="store-list tab-pane<?= (($i == 0) ? ' show active' : '') ?>" id="epc-<?= ($i + 1) ?>" role="tabpanel">
        <?php
        if ((isset($category->epc_products)) && (!empty($category->epc_products))) {
          echo $category->epc_products;
        }
        ?>
      </div>
    <?php endforeach ?>
  </div>
</section>