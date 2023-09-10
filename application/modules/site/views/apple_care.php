<section class="apple_care_wrapper">
  <div class="container-fluid">
    <div class="logo_img">
      <img src="<?= PATH_FILES_UPLOADS . "apple_care/apple_care_logo.png" ?>" alt="Apple Care">
    </div>
    <h1>For 24/7 priority tech support, <br class="d-none d-md-block"> choose AppleCare+</h1>
  </div>

  <div class="container">
    <div class="emi_calc_heading">
      <h2>AppleCare+ provides up to two incidents of accidental damage protection
        every 12 months. Plus you’ll get 24/7 priority access to Apple experts by chat or phone.*</h2>
    </div>
  </div>

  <section>
    <div class="container container_1280">
      <div class="emi_calculator">
        <div class="row">
          <!-- <div class="col-12 col-md-12">
            <h2><span>EMI Calculator</span></h2>
          </div> -->
        </div>

        <div class="emi_calc_form">
          <!-- EMI Calculator Form -->
          <div class="col-12 offset-md-1 col-md-10">
            <div class="row">
              <div class="col-12 col-md-4">
                <select id="field_apple_care_prod" class="form-control mb_xs_15 for_epc">
                  <option value="" selected>*Product Name</option>
                  <?php foreach ($products as $prod) : ?>
                    <option value="<?= $prod->product_name ?>"><?= $prod->product_name ?></option>
                  <?php endforeach ?>
                </select>
              </div>

              <div class="col-12 col-md-4">
                <select id="field_apple_care_storage" class="form-control mb_xs_15 for_epc">
                  <option value="" selected>*Storage</option>
                </select>
              </div>

              <div class="col-12 col-md-4">
                <input type="text" id="field_apple_care_mrp" class="form-control for_epc" value="*AppleCare MRP" readonly>
                <!-- <select id="field_epc_color" class="form-control for_epc">
                  <option value="">*AppleCare MRP</option>
                </select> -->
              </div>
            </div>
          </div>
          <!-- end EMI Calculator Form -->
          <!-- 
          <div class="col-12 offset-md-1 col-md-10 text-center-mobile">
            <div class="mrp_calculation">
              <div class="row">
                <div class="col-12 col-md-6">
                  <div class="mrp_row">
                    <p class="mrp_row_label">MRP</p>
                    <p id="mrp">: <strong><span>--</span></strong></p>
                  </div>

                  <div class="mrp_row">
                    <p class="mrp_row_label">Loan Amount</p>
                    <p id="loan_amnt">: <strong><span>--</span></strong></p>
                  </div>
                </div>

                <div class="col-12 col-md-6">
                  <div class="mrp_row">
                    <p class="mrp_row_label">Deferred Payment after 24 months</p>
                    <p id="dffrd_pay">: <strong><span>--</span></strong></p>
                  </div>

                  <div class="mrp_row">
                    <p class="mrp_row_label">Effective Monthly Cost</p>
                    <p id="effctve_monthly_cost">: <strong><span>--</span></strong></p>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </div>
  </section>

  <section class="features">
      <style> .banner_100 { width: 100%; } .comman_banner img { width: 100%; } .mobile { display: none; } @media (max-width: 750px) { .desktop { display: none; } .mobile { display: block; } }
        </style>
        <div class="banner_100"> 
            <div class="comman_banner banner-1"> 
                <img src="files/uploads/apple_care/desktop/01.jpg" alt="banner 1" class="desktop"> 
                <img src="files/uploads/apple_care/mobile/01.jpg" alt="banner 1" class="mobile"> 
            </div>
            <div class="comman_banner banner-2"> 
                <img src="files/uploads/apple_care/desktop/02.jpg" alt="banner 2" class="desktop"> 
                <img src="files/uploads/apple_care/mobile/02.jpg" alt="banner 2" class="mobile"> 
            </div> 
            <div class="comman_banner banner-3">
                <img src="files/uploads/apple_care/desktop/03.jpg" alt="banner 3" class="desktop"> 
                <img src="files/uploads/apple_care/mobile/03.jpg" alt="banner 3" class="mobile"> 
            </div> 
            <div class="comman_banner banner-4"> 
                <img src="files/uploads/apple_care/desktop/04.jpg" alt="banner 4" class="desktop"> 
                <img src="files/uploads/apple_care/mobile/04.jpg" alt="banner 4" class="mobile"> 
            </div> 
            <div class="comman_banner banner-5"> 
                <img src="files/uploads/apple_care/desktop/05.jpg" alt="banner 5" class="desktop"> 
                <img src="files/uploads/apple_care/mobile/05.jpg" alt="banner 5" class="mobile"> 
            </div> 
            <div class="comman_banner banner-6"> 
                <img src="files/uploads/apple_care/desktop/06.jpg" alt="banner 6" class="desktop"> 
                <img src="files/uploads/apple_care/mobile/06.jpg" alt="banner 6" class="mobile"> 
            </div> 
            <div class="comman_banner banner-7"> 
                <img src="files/uploads/apple_care/desktop/07.jpg" alt="banner 7" class="desktop"> 
                <img src="files/uploads/apple_care/mobile/07.jpg" alt="banner 7" class="mobile"> 
            </div> 
            
        </div>
      
    </section>

  <section class="apple-premium-resellers">
    <div class="container">
      <h2 class="heading-2">Offer available on selected offline stores</h2>
      <ul class="seller-list">
        <li> <a href="https://www.aptronixindia.com/mac" target="_blank" data-store-name="aptronix-PREMIUM LIFESTYLE &amp; FASHION INDIA PVT LTD">
            <div class="content-overlay"></div> <img src="https://i3-prod-assets.indiaistore.com/files/uploads/partners/partner-logo-1618220534_8394.png">
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
        <li> <a href="https://shop.unicornstore.in/mac" target="_blank" data-store-name="UNICORN INFOSOLUTIONS PVT LTD">
            <div class="content-overlay"></div> <img src="https://i3-prod-assets.indiaistore.com/files/uploads/partners/partner-logo-1622025063_0947.png">
            <div class="content-details fadeIn-bottom">
              <h3 class="content-title">Visit Website <i class="ii-icon-external-link"></i> </h3>
            </div>
          </a> </li>
      </ul>
    </div>
  </section>

</section>

<section class="tnc_section">
  <div class="container">
    <div class="tnc_list">
      <h3>*Terms & Conditions</h3>
      <ul>
<!--
        <li>Offer is valid with HDFC Bank Debit and Credit cards.</li>
        <li>6 Months No Cost EMI on HDFC Bank Debit and Credit cards.</li>
-->
        <li>Offer is available at the select offline reseller stores.</li>
        <li>Offline (via Brand EMI on Pine Labs terminals) - Limited to 2 transactions for the offer period per card.</li>
        <li>Minimum swipe for EMI: Credit Card (₹3,000) and Debit Card (₹5,000) as mandated by the banks.</li>
        <li>Offer is valid from July 1, 2023.</li>
        <li>Offer is applicable only on AppleCare+ and AppleCare Services.</li>

        <li>6 months  / 12 months No Cost EMI schemes available for all eligible AppleCare SKUs via Pine Labs and Paytm for HDFC Cards</li>
<li>9/0, 9/1 and 9/2 loan schemes available with IDFC First</li>
      </ul>
    </div>
  </div>
</section>