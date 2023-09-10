  <section class="macbook-lp-box">
    <div class="container">
      <div class="top-heading">
        <h2 class="heading-2 text-center">Get the power you want</h2>
        <h4 class="text-center">Customise your Mac with processor, memory, graphics<sup>#</sup> and storage that’s right for you.</h4>
      </div>
      <div class="banner-wrapper"> <img src="<?= PATH_FILES_UPLOADS . "macbook-new-lp-2022/top-img-1.png" ?>" class="img-fluid dex" alt="Banners"> </div>
      <div class="banner-para-bottom">
        <p>* Terms & conditions apply. Product features vary by model. TM and @ 2022 Apple Inc. All rights reserved. </p>
        <p>* Ability to configure as select products.</p>
      </div>
    </div>
  </section>

  <section class="macbook-lp-box bg-grey">
    <div class="container">
      <div class="top-heading">
        <h2 class="heading-2 text-center">Customised Mac. Get it Now</h2>
        <h6 class="text-center font-weight-light">Customise your Mac with a range of processor, memory and storage options.
          So, it's configured for exactly what you need, right out of the box.</h6>
      </div>
      <div class="box-icons">
        <div class="box-1"><img class="mb-2" src="<?= PATH_FILES_UPLOADS . "macbook-new-lp-2022/icon-1.png" ?>" alt="icon">
          <h6 class="text-center font-weight-light">Faster<br>Processor</h6>
        </div>
        <div class="box-1"><img class="mb-2" src="<?= PATH_FILES_UPLOADS . "macbook-new-lp-2022/icon-2.png" ?>" alt="icon">
          <h6 class="text-center font-weight-light">Increased<br>Storage</h6>
        </div>
        <div class="box-1"><img class="mb-2" src="<?= PATH_FILES_UPLOADS . "macbook-new-lp-2022/icon-3.png" ?>" alt="icon">
          <h6 class="text-center font-weight-light">More<br>Memory</h6>
        </div>
        <div class="box-1"><img class="mb-2" src="<?= PATH_FILES_UPLOADS . "macbook-new-lp-2022/icon-4.png" ?>" alt="icon">
          <h6 class="text-center font-weight-light">Graphics<br>Upgrade</h6>
        </div>
      </div>
  </section>

  <section class="macbook-lp-box bg-grey tk-yr-pic">
    <div class="container">
      <div class="top-heading">
        <h2 class="heading-2 text-center">Take your pick</h2>
      </div>
      <div class="box-icons">
        <div class="box-1">
          <div class="bdr-box">
            <div class="box_img"> <img src="<?= PATH_FILES_UPLOADS . "macbook-new-lp-2022/mac-img-1.png" ?>" alt="image">
              <div class="mac-heading">
                <h4>MacBook Air</h4>
                <p>Power and value in one package. MacBook Air is perfect for businesses, no matter their size.</p>
              </div>
            </div>
          </div>
          <!-- <div class="box_button"><a href="/macbook-air-m1-chip" target="blank"> Customise Now</a></div> -->
        </div>
        <div class="box-1">
          <div class="bdr-box">
            <div class="box_img"> <img src="<?= PATH_FILES_UPLOADS . "macbook-new-lp-2022/mac-img-2.png" ?>" alt="image">
              <div class="mac-heading">
                <h4>MacBook Pro 35cm</h4>
                <p>The Apple M1 chip takes the powerhouse notebook to a whole new level of pro.</p>
              </div>
            </div>
          </div>
          <!-- <div class="box_button"><a href="/macbook-pro-35cm-new" target="blank"> Customise Now</a></div> -->
        </div>
        <div class="box-1">
          <div class="bdr-box">
            <div class="box_img"> <img src="<?= PATH_FILES_UPLOADS . "macbook-new-lp-2022/mac-img-3.png" ?>" alt="image">
              <div class="mac-heading">
                <h4>MacBook Pro 41cm</h4>
                <p>Incredible processing and a big,beautiful display make it the go-to for big, beautiful work.</p>
              </div>
            </div>
          </div>
          <!-- <div class="box_button"><a href="/macbook-pro-41cm-new" target="blank"> Customise Now</a></div> -->
        </div>
        <div class="box-1">
          <div class="bdr-box">
            <div class="box_img"> <img src="<?= PATH_FILES_UPLOADS . "macbook-new-lp-2022/mac-img-4.png" ?>" alt="image">
              <div class="mac-heading">
                <h4>iMac</h4>
                <p>The can-do desktop gives you more ports, more power and more versatility.</p>
              </div>
            </div>
          </div>
          <!-- <div class="box_button"><a href="/imac-2021" target="blank"> Customise Now</a></div> -->
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-md-8">

          <div class="box_button">
            <h2 class="heading-2">To customise, visit:</h2>
          </div>

          <div class="customise_now_row row p-0 m-0 mt-4 align-items-center">
            <div class="col-6 p-md-0 m-0">
              <a href="http://apac.ingrammicro.com/ProductConfigurator/" target="_blank" rel="noopener noreferrer">
                <img src="themes/frontend/custom/images/logos/ingram.png" alt="" class="img-fluid img-thumbnail py-3 px-3">
              </a>
            </div>
            <div class="col-6 p-md-0 m-0">
              <a href="https://redingtonconnect.com/RedApple" target="_blank" rel="noopener noreferrer">
                <img src="themes/frontend/custom/images/logos/redington.png" alt="" class="img-fluid img-thumbnail py-2 py-md-1 px-2">
              </a>
            </div>
          </div>
        </div>
      </div>
  </section>

  <?php
  if (isset($store_locator) && !empty($store_locator))
    echo $store_locator;
  ?>

  <section class="online-stores" id="online_stores_section">
  </section>

  <section class="buy-offline" id="offline_stores_section">
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
      <!-- <div class="cracker">
      <img src="<?= PATH_FILES_UPLOADS . "diwali/c-2.png" ?>" alt="images">
    </div>
    <div class="apr-bottom-flower">
      <img src="<?= PATH_FILES_UPLOADS . "diwali/apr-f-2.png" ?>" alt="images">
    </div> -->
    </section>
  <?php endif; ?>