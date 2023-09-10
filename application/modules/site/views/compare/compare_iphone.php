<style>
  .compare-row .selector-dropdown{background-color:#ffffff;}

  #sticky-drop.stick {
    position:-webkit-sticky;
    position: fixed;
    top: 70px;
    z-index: 2;
    opacity:1;
   max-width: 1050px;
    left: 0;
    right: 0;
    margin: 0 auto;
  
}
.compare-copy {
    padding: 5% 0;
    color: #1d1d1f;
    font-weight: 600;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, "Helvetica Neue", "Helvetica", "Arial", sans-serif;
}
.compare-row .selector-icon.icon-chevrondown::after {
   font-size: 7px;
    font-weight: 600;
}
.compare-row .selector-dropdown{border-radius:4px;}
.compare-row .selector-dropdown{    border: solid 1px #666;}
.compare-row{ background-color: #ffffff;}
.sticky-remove{opacity: 0 !important;}
@media (max-width: 767px){
  #sticky-drop.stick{ 
    top: 57px;
  /* margin-top: 17px; */
  padding-top: 5px;
padding-bottom: 5px;}
.product-col .colornav-swatch {
    width: 15px;
    height: 15px;
}
#sticky-drop.stick .selector-dropdown {
    background-color: #ffffff;
    border: navajowhite;
    border-bottom: 1px solid #2c7cc7;
    border-radius: 0;
}
.compare-row .selector-icon.icon-chevrondown::after{font-size: 8px;}
.compare-row .selector-icon{top:-2px;}
.product-col .screen-details, .product-col .net-details, .product-col .lidar-details, .product-col .battery-details{min-height:90px !important;}
}
.product-col .screen-details, .product-col .net-details, .product-col .lidar-details, .product-col .battery-details{min-height:150px;}

  </style>
<main>
  <div class="container">
    <div class="text-center" id="sticky-anchor-drop">
      <h2 class="compare-copy">Choose iPhone models to compare</h2>
    </div>

    <!-- dropdowns -->
    <div class="compare-row row justify-content-center css-sticky selector-table with-fullwidthrowheader" id="sticky-drop">
      <div class="col-6 col-md-6 col-lg-4 pro-one">
        <select id="product-col-1" class="channel-compare selector-dropdown product-selector">
          <optgroup label="New iPhone models">
            
        <option value="product27" data-value="iphone_14_Pro_max" aria-selected="true" selected="true">iPhone 14 Pro Max</option>
        <option value="product28" data-value="iphone_14_Pro">iPhone 14 Pro</option>
        <option value="product29" data-value="iphone_14_Plus">iPhone 14 Plus</option>
        <option value="product30" data-value="iphone_14">iPhone 14</option>
            
          </optgroup>
          <optgroup label="More iPhone models">
              <option value="product1" data-value="iphone_13_Pro_Max" >iPhone 13 Pro Max</option>
              <option value="product2" data-value="iphone_13_Pro">iPhone 13 Pro </option>
            <option value="product3" data-value="iPhone_13_mini">iPhone 13 mini</option>
            <option value="product4" data-value="iPhone_13">iPhone 13</option>
            <option value="product1022" data-value="iphone_se_3rd_generation">iPhone SE (3rd generation)</option>
            <option value="product5" data-value="iPhone_12_Pro">iPhone 12 Pro</option>
            <option value="product6" data-value="iPhone_12_Pro_Max">iPhone 12 Pro Max</option>
            <option value="product7" data-value="iPhone_12">iPhone 12</option>
            <option value="product8" data-value="iPhone_12_mini">iPhone 12 mini</option>
            <option value="product9" data-value="iPhone_11_Pro">iPhone 11 Pro</option>
            <option value="product10" data-value="iPhone_11_Pro_Max">iPhone 11 Pro Max</option>
            <option value="product11" data-value="iPhone_11">iPhone 11</option>
            <option value="product12" data-value="iPhone_SE_2nd_generation">iPhone SE (2nd generation)</option>
            <option value="product13" data-value="iPhone_XS">iPhone XS</option>
            <option value="product14" data-value="iPhone_XS_Max">iPhone XS Max</option>
            <option value="product15" data-value="iPhone_XR">iPhone XR</option>
            <option value="product16" data-value="iPhone_X">iPhone X</option>
            <option value="product17" data-value="iPhone_8_Plus">iPhone 8 Plus</option>
            <option value="product18" data-value="iPhone_8">iPhone 8</option>
            <option value="product19" data-value="iPhone_7_Plus">iPhone 7 Plus</option>
            <option value="product20" data-value="iPhone_7">iPhone 7</option>
            <option value="product21" data-value="iPhone_6s_Plus">iPhone 6s Plus</option>
            <option value="product22" data-value="iPhone_6">iPhone 6s </option>
            <option value="product23" data-value="iPhone_6_Plus">iPhone 6 Plus</option>
            <option value="product24" data-value="iPhone_6">iPhone 6</option>
            <option value="product25" data-value="iPhone_SE_1st_generation">iPhone SE (1st generation)</option>
          </optgroup>
        </select>
        <span aria-hidden="true" class="selector-icon icon icon-chevrondown"></span>
      </div>

      <div class="col-6 col-md-6 col-lg-4  pro-two">
        <select id="product-col-2" class="channel-compare selector-dropdown product-selector">
          <optgroup label="New iPhone models">
        <option value="product27" data-value="iphone_14_Pro_max"  >iPhone 14 Pro Max</option>
        <option value="product28" data-value="iphone_14_Pro" aria-selected="true" selected="true">iPhone 14 Pro </option>
        <option value="product29" data-value="iphone_14_Plus">iPhone 14 Plus</option>
        <option value="product30" data-value="iphone_14">iPhone 14</option>
            
          </optgroup>
          <optgroup label="More iPhone models">
              <option value="product1" data-value="iphone_13_Pro">iPhone 13 Pro Max</option>
            <option value="product2" data-value="iphone_13_Pro">iPhone 13 Pro </option>
            <option value="product3" data-value="iPhone_13_mini">iPhone 13 mini</option>
            <option value="product4" data-value="iPhone_13">iPhone 13</option>
            <option value="product1022" data-value="iphone_se_3rd_generation">iPhone SE (3rd generation)</option>
            <option value="product5" data-value="iPhone_12_Pro">iPhone 12 Pro</option>
            <option value="product6" data-value="iPhone_12_Pro_Max">iPhone 12 Pro Max</option>
            <option value="product7" data-value="iPhone_12">iPhone 12</option>
            <option value="product8" data-value="iPhone_12_mini">iPhone 12 mini</option>
            <option value="product9" data-value="iPhone_11_Pro">iPhone 11 Pro</option>
            <option value="product10" data-value="iPhone_11_Pro_Max">iPhone 11 Pro Max</option>
            <option value="product11" data-value="iPhone_11">iPhone 11</option>
            <option value="product12" data-value="iPhone_SE_2nd_generation">iPhone SE (2nd generation)</option>
            <option value="product13" data-value="iPhone_XS">iPhone XS</option>
            <option value="product14" data-value="iPhone_XS_Max">iPhone XS Max</option>
            <option value="product15" data-value="iPhone_XR">iPhone XR</option>
            <option value="product16" data-value="iPhone_X">iPhone X</option>
            <option value="product17" data-value="iPhone_8_Plus">iPhone 8 Plus</option>
            <option value="product18" data-value="iPhone_8">iPhone 8</option>
            <option value="product19" data-value="iPhone_7_Plus">iPhone 7 Plus</option>
            <option value="product20" data-value="iPhone_7">iPhone 7</option>
            <option value="product21" data-value="iPhone_6s_Plus">iPhone 6s Plus</option>
            <option value="product22" data-value="iPhone_6">iPhone 6s </option>
            <option value="product23" data-value="iPhone_6_Plus">iPhone 6 Plus</option>
            <option value="product24" data-value="iPhone_6">iPhone 6</option>
            <option value="product25" data-value="iPhone_SE_1st_generation">iPhone SE (1st generation)</option>
          </optgroup>
        </select>
        <span aria-hidden="true" class="selector-icon icon icon-chevrondown"></span>
      </div>
      <div class="col-6 col-md-6 col-lg-4  pro-three">
        <select id="product-col-3" class="channel-compare selector-dropdown product-selector">
          <optgroup label="New iPhone models">
                 <option value="product27" data-value="iphone_14_Pro_max">iPhone 14 Pro Max</option>
                 <option value="product28" data-value="iphone_14_Pro">iPhone 14 Pro</option>
              <option value="product29" data-value="iphone_14_Plus" aria-selected="true" selected="true">iPhone 14 Plus</option>
              <option value="product30" data-value="iphone_14">iPhone 14</option>

          </optgroup>
          <optgroup label="More iPhone models">
          <option value="product1" data-value="iphone_13_Pro_Max">iPhone 13 Pro Max</option>
            <option value="product2" data-value="iphone_13_Pro">iPhone 13 Pro</option>
            <option value="product3" data-value="iPhone_13_mini" >iPhone 13 mini</option>
            <option value="product4" data-value="iPhone_13">iPhone 13</option>
            <option value="product1022" data-value="iphone_se_3rd_generation">iPhone SE (3rd generation)</option>
            <option value="product5" data-value="iPhone_12_Pro">iPhone 12 Pro</option>
            <option value="product6" data-value="iPhone_12_Pro_Max">iPhone 12 Pro Max</option>
            <option value="product7" data-value="iPhone_12">iPhone 12</option>
            <option value="product8" data-value="iPhone_12_mini">iPhone 12 mini</option>
            <option value="product9" data-value="iPhone_11_Pro">iPhone 11 Pro</option>
            <option value="product10" data-value="iPhone_11_Pro_Max">iPhone 11 Pro Max</option>
            <option value="product11" data-value="iPhone_11">iPhone 11</option>
            <option value="product12" data-value="iPhone_SE_2nd_generation">iPhone SE (2nd generation)</option>
            <option value="product13" data-value="iPhone_XS">iPhone XS</option>
            <option value="product14" data-value="iPhone_XS_Max">iPhone XS Max</option>
            <option value="product15" data-value="iPhone_XR">iPhone XR</option>
            <option value="product16" data-value="iPhone_X">iPhone X</option>
            <option value="product17" data-value="iPhone_8_Plus">iPhone 8 Plus</option>
            <option value="product18" data-value="iPhone_8">iPhone 8</option>
            <option value="product19" data-value="iPhone_7_Plus">iPhone 7 Plus</option>
            <option value="product20" data-value="iPhone_7">iPhone 7</option>
            <option value="product21" data-value="iPhone_6s_Plus">iPhone 6s Plus</option>
            <option value="product22" data-value="iPhone_6">iPhone 6s </option>
            <option value="product23" data-value="iPhone_6_Plus">iPhone 6 Plus</option>
            <option value="product24" data-value="iPhone_6">iPhone 6</option>
            <option value="product25" data-value="iPhone_SE_1st_generation">iPhone SE (1st generation)</option>
          </optgroup>
        </select>
        <span aria-hidden="true" class="selector-icon icon icon-chevrondown"></span>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="data-row row text-center">
                 <!-- iphone 14 pro max-->
      <div id="product27" class="product-col col text-center  compare-col-1">
        <div class="product-image"><img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/header_iphone_14_pro_max_twilight_purple_large.png" ?>" class="big" alt="Product Images"></div>
        <div class="colornav-items  row-colors">
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(89, 79, 99);"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(244, 232, 206);"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(240, 242, 242);"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(64, 62, 61);"></figure>
          </div>
          
        </div>
        <!-- <div class="avlbl-copy" style="color:#000">Available from <span style="display: inline-block;">30<sup>th</sup> October</span></div> -->
        <div class="screen-details">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <span class="badge-value">17.0 cm </span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Super Retina <br> XDR display with ProMotion<sup>◊</sup><br>Always-On display</span>
              </div>
            </div>
          </figure>
        </div>
        <div class="net-details"><img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/5g.png" ?>" alt="Product Images">
          <div>Superfast 5G Cellular<sup>◊</sup></div>
        </div>
                  

        <div class="camera-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <div class="image-icon-wrapper embed-image">
                  <img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/3_camera.png" ?>" alt="Product Images">
                </div>
              </div>

              <div class="badge-row">
                <span class="badge-caption">Pro camera system</span> <br>   
              </div>
              <div class="badge-row">
                <span class="badge-caption">48MP Main | Ultra Wide</span>
              </div>
                <div class="badge-row">
                <span class="badge-caption">|&nbsp;Telephoto</span>
              </div>
                <div class="badge-row">
                <span class="badge-caption">TrueDepth front camera <br>with autofocus</span>
              </div>
<!--
              <div class="badge-row">
                <span class="badge-caption">|&nbsp;Telephoto</span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">&nbsp; <br> &nbsp;</span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">&nbsp; <br>&nbsp;</span>
              </div>
-->
            </div>
          </figure>
        </div>
        <div class="screen-details">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <span class="badge-value">6x</span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Optical zoom range</span>
              </div>
            </div>
          </figure>
        </div>
        <div class="lidar-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <div class="image-icon-wrapper embed-image">
                  <img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/lidar.png" ?>" alt="Product Images">
                </div>
              </div>
              <div class="badge-row">
                <span class="badge-caption">LiDAR Scanner for Night mode portraits, faster autofocus in low light and next-level AR experiences</span>
              </div>
            </div>
          </figure>
        </div>
        <div class="battery-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <div class="image-icon-wrapper embed-image">
                  <img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/battery.png" ?>" alt="Product Images">
                </div>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Up to 29 hours of video playback<sup>◊</sup>
                </span>
              </div>
            </div>
          </figure>
        </div>
      </div>

      <!-- iphone 14 pro max-->
        
         <!-- iphone 14 pro -->
      <div id="product28" class="product-col col text-center compare-col-2">
        <div class="product-image"><img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/header_iphone_14_pro_twilight_purple_large.png" ?>" class="big" alt="Product Images"></div>
        <div class="colornav-items  row-colors">
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(89, 79, 99);"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(244, 232, 206);"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(240, 242, 242);"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(64, 62, 61);"></figure>
          </div>
          
        </div>
        <!-- <div class="avlbl-copy" style="color:#000">Available from <span style="display: inline-block;">30<sup>th</sup> October</span></div> -->
        <div class="screen-details">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <span class="badge-value">15.54 cm</span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Super Retina <br> XDR display with ProMotion<sup>◊</sup><br>Always-On display</span>
              </div>
            </div>
          </figure>
        </div>
        <div class="net-details"><img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/5g.png" ?>" alt="Product Images">
          <div>Superfast 5G Cellular<sup>◊</sup></div>
        </div>

                  
        <div class="camera-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <div class="image-icon-wrapper embed-image">
                  <img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/3_camera.png" ?>" alt="Product Images">
                </div>
              </div>

              <div class="badge-row">
                <span class="badge-caption">Pro camera system</span> <br>   
              </div>
              <div class="badge-row">
                <span class="badge-caption">48MP Main | Ultra Wide</span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">|&nbsp;Telephoto</span>
              </div>
                <div class="badge-row">
                <span class="badge-caption">TrueDepth front camera <br>with autofocus</span>
              </div>
<!--
              <div class="badge-row">
                <span class="badge-caption">&nbsp; <br> &nbsp;</span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">&nbsp; <br>&nbsp;</span>
              </div>
-->
            </div>
          </figure>
        </div>
        <div class="screen-details">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <span class="badge-value">6x</span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Optical zoom range</span>
              </div>
            </div>
          </figure>
        </div>
        <div class="lidar-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <div class="image-icon-wrapper embed-image">
                  <img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/lidar.png" ?>" alt="Product Images">
                </div>
              </div>
              <div class="badge-row">
                <span class="badge-caption">LiDAR Scanner for Night mode portraits, faster autofocus in low light and next-level AR experiences</span>
              </div>
            </div>
          </figure>
        </div>
        <div class="battery-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <div class="image-icon-wrapper embed-image">
                  <img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/battery.png" ?>" alt="Product Images">
                </div>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Up to 23 hours of video playback<sup>◊</sup>
                </span>
              </div>
            </div>
          </figure>
        </div>
      </div>

      <!-- iphone 14 pro-->
         <!-- iphone 14 plus-->
      <div id="product29" class="product-col col text-center compare-col-3">
        <div class="product-image"><img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/header_iphone_14_plus_blue_large.png" ?>" class="big" alt="Product Images"></div>
        <div class="colornav-items  row-colors">
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(160, 180, 199);"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(230, 221, 235);"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(34, 41, 48);"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(250, 246, 242);"></figure>
          </div>
                      <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(252, 3, 36);"></figure>
          </div>
          
        </div>
        <!-- <div class="avlbl-copy" style="color:#000">Available from <span style="display: inline-block;">30<sup>th</sup> October</span></div> -->
        <div class="screen-details">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <span class="badge-value">16.95 cm </span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Super Retina <br> XDR display<sup>◊</sup></span>
              </div>
            </div>
          </figure>
        </div>
        <div class="net-details"><img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/5g.png" ?>" alt="Product Images">
          <div>Superfast 5G Cellular<sup>◊</sup></div>
        </div>
                  

        <div class="camera-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <div class="image-icon-wrapper embed-image">
                  <img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/icon_iphone13_camera.jpg" ?>" alt="Product Images">
                </div>
              </div>

                 <div class="badge-row">
                <span class="badge-caption">Advanced <br>dual-camera system</span> <br>   
              </div>
              <div class="badge-row">
                <span class="badge-caption">12MP Main | Ultra Wide</span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">&nbsp;</span>
              </div>
                                <div class="badge-row">
                <span class="badge-caption">TrueDepth front camera <br>with autofocus</span>
              </div>
<!--
              <div class="badge-row">
                <span class="badge-caption">&nbsp; <br> &nbsp;</span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">&nbsp; <br>&nbsp;</span>
              </div>
-->
            </div>
          </figure>
        </div>
        <div class="screen-details">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <span class="badge-value">2x</span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Optical zoom range</span>
              </div>
            </div>
          </figure>
        </div>
        <div class="lidar-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
<!--
              <div class="badge-row">
                <div class="image-icon-wrapper embed-image">
                  <img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/lidar.png" ?>" alt="Product Images">
                </div>
              </div>
-->
              <div class="badge-row">
                <span aria-hidden="true" class="mdash badge-caption">—</span>
              </div>
            </div>
          </figure>
        </div>
        <div class="battery-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <div class="image-icon-wrapper embed-image">
                  <img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/battery.png" ?>" alt="Product Images">
                </div>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Up to 26 hours of video playback<sup>◊</sup>
                </span>
              </div>
            </div>
          </figure>
        </div>
      </div>

      <!-- iphone 14 plus-->
                 <!-- iphone 14-->
      <div id="product30" class="product-col col text-center">
        <div class="product-image"><img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/header_iphone_14_blue_large.png" ?>" class="big" alt="Product Images"></div>
      <div class="colornav-items  row-colors">
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(160, 180, 199);"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(230, 221, 235);"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(34, 41, 48);"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(250, 246, 242);"></figure>
          </div>
                      <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(252, 3, 36);"></figure>
          </div>
          
        </div>
        <!-- <div class="avlbl-copy" style="color:#000">Available from <span style="display: inline-block;">30<sup>th</sup> October</span></div> -->
        <div class="screen-details">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <span class="badge-value">15.40 cm </span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Super Retina <br> XDR display<sup>◊</sup></span>
              </div>
            </div>
          </figure>
        </div>
        <div class="net-details"><img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/5g.png" ?>" alt="Product Images">
          <div>Superfast 5G Cellular<sup>◊</sup></div>
        </div>
                  

        <div class="camera-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <div class="image-icon-wrapper embed-image">
                  <img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/icon_iphone13_camera.jpg" ?>" alt="Product Images">
                </div>
              </div>

                 <div class="badge-row">
                <span class="badge-caption">Advanced <br> dual-camera system</span> <br>   
              </div>
              <div class="badge-row">
                <span class="badge-caption">12MP Main | Ultra Wide</span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">&nbsp;</span>
              </div>
                                <div class="badge-row">
                <span class="badge-caption">TrueDepth front camera <br>with autofocus</span>
              </div>
<!--
              <div class="badge-row">
                <span class="badge-caption">&nbsp; <br> &nbsp;</span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">&nbsp; <br>&nbsp;</span>
              </div>
-->
            </div>
          </figure>
        </div>
        <div class="screen-details">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <span class="badge-value">2x</span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Optical zoom range</span>
              </div>
            </div>
          </figure>
        </div>
        <div class="lidar-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
<!--
              <div class="badge-row">
                <div class="image-icon-wrapper embed-image">
                  <img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/lidar.png" ?>" alt="Product Images">
                </div>
              </div>
-->
              <div class="badge-row">
                <span aria-hidden="true" class="mdash badge-caption">—</span>
              </div>
            </div>
          </figure>
        </div>
        <div class="battery-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <div class="image-icon-wrapper embed-image">
                  <img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/battery.png" ?>" alt="Product Images">
                </div>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Up to 20 hours of video playback<sup>◊</sup>
                </span>
              </div>
            </div>
          </figure>
        </div>
      </div>

      <!-- iphone 14-->
      <!-- iphone 13 Pro Max-->
      <div id="product1" class="product-col col text-center">
        <div class="product-image"><img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/compare_iphone13_pro_max_green.png" ?>" class="big" alt="Product Images"></div>
        <div class="colornav-items  row-colors">
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color:#495a48;"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color:#f1f2ed;"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color:#54524f;"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: #fae7cf;"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: #a7c1d9;"></figure>
          </div>
        </div>
        <!-- <div class="avlbl-copy" style="color:#000">Available from <span style="display: inline-block;">30<sup>th</sup> October</span></div> -->
        <div class="screen-details">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <span class="badge-value">17.0 cm </span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Super Retina <br> XDR display with ProMotion<sup>◊</sup></span>
              </div>
            </div>
          </figure>
        </div>
        <div class="net-details"><img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/5g.png" ?>" alt="Product Images">
          <div>Superfast 5G Cellular<sup>◊</sup></div>
        </div>
        <div class="camera-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <div class="image-icon-wrapper embed-image">
                  <img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/3_camera.png" ?>" alt="Product Images">
                </div>
              </div>

              <div class="badge-row">
                <span class="badge-caption">Telephoto</span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Wide</span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Ultra Wide</span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Cinematic mode <br> for 1080p at 30 fps</span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Dolby Vision HDR video <br>recording up to 60 fps</span>
              </div>
            </div>
          </figure>
        </div>
        <div class="screen-details">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <span class="badge-value">6x</span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Optical zoom range</span>
              </div>
            </div>
          </figure>
        </div>
        <div class="lidar-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <div class="image-icon-wrapper embed-image">
                  <img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/lidar.png" ?>" alt="Product Images">
                </div>
              </div>
              <div class="badge-row">
                <span class="badge-caption">LiDAR Scanner for Night mode portraits, faster autofocus in low light and next-level AR experiences</span>
              </div>
            </div>
          </figure>
        </div>
        <div class="battery-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <div class="image-icon-wrapper embed-image">
                  <img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/battery.png" ?>" alt="Product Images">
                </div>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Up to 28 hours of video playback<sup>◊</sup>
                </span>
              </div>
            </div>
          </figure>
        </div>
      </div>

      <!-- iphone 13 Pro-->
      <div id="product2" class="product-col col text-center">
        <div class="product-image"><img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/compare_iphone13_pro_max_green.png" ?>" alt="iphone 13 Pro"></div>
        <div class="colornav-items  row-colors ">
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color:#495a48;"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color:#f1f2ed;"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color:#54524f;"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: #fae7cf;"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: #a7c1d9;"></figure>
          </div>
        </div>
        <!-- <div class="avlbl-copy" style="color:#000">Available from <span style="display: inline-block;">30<sup>th</sup> October</span></div> -->
        <div class="screen-details">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <span class="badge-value">15.4 cm </span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Super Retina <br> XDR display with ProMotion<sup>◊</sup></span>
              </div>
            </div>
          </figure>
        </div>
        <div class="net-details"><img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/5g.png" ?>" alt="Product Images">
          <div>Superfast 5G Cellular<sup>◊</sup></div>
        </div>
        <div class="camera-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <div class="image-icon-wrapper embed-image">
                  <img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/3_camera.png" ?>" alt="Product Images">
                </div>
              </div>

              <div class="badge-row">
                <span class="badge-caption">Telephoto</span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Wide</span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Ultra Wide</span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Cinematic mode <br> for 1080p at 30 fps</span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Dolby Vision HDR video <br>recording up to 60 fps</span>
              </div>
            </div>
          </figure>
        </div>
        <div class="screen-details">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <span class="badge-value">6x</span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Optical zoom range</span>
              </div>
            </div>
          </figure>
        </div>
        <div class="lidar-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <div class="image-icon-wrapper embed-image">
                  <img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/lidar.png" ?>" alt="Product Images">
                </div>
              </div>
              <div class="badge-row">
                <span class="badge-caption">LiDAR Scanner for Night mode portraits, faster autofocus in low light and next-level AR experiences</span>
              </div>
            </div>
          </figure>
        </div>
        <div class="battery-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <div class="image-icon-wrapper embed-image">
                  <img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/battery.png" ?>" alt="Product Images">
                </div>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Up to 22 hours of video playback<sup>◊</sup>
                </span>
              </div>
            </div>
          </figure>
        </div>
      </div>


      <!-- iphone 13 mini-->
      <div id="product3" class="product-col col text-center">
        <div class="product-image"><img class="small" src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/compare_iphone13_mini_green.png" ?>" alt="MINI"></div>
        <div class="colornav-items  row-colors ">
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color:#495a48;"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color:#f1f2ed;"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color:#232a31;"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: #276787;"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: #faddd7;"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: #bf0013;"></figure>
          </div>
        </div>
        <!-- <div class="avlbl-copy" style="color:#000">Available from <span style="display: inline-block;">30<sup>th</sup> October</span></div> -->
        <div class="screen-details">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <span class="badge-value">13.7 cm </span>
              </div>
              <div class="badge-row">
                <span class="badge-caption"> Super Retina <br> XDR display<sup>◊</sup></span>
              </div>
            </div>
          </figure>
        </div>
        <div class="net-details"><img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/5g.png" ?>" alt="Product Images">
          <div>Superfast 5G Cellular<sup>◊</sup></div>
        </div>
        <div class="camera-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <div class="image-icon-wrapper embed-image">
                  <img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/icon_iphone13_camera.jpg" ?>" alt="Product Images">
                </div>
              </div>

              <div class="badge-row">
                <span class="badge-caption">-</span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Wide</span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Ultra Wide</span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Cinematic mode <br> for 1080p at 30 fps</span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Dolby Vision HDR video <br>recording up to 60 fps</span>
              </div>
            </div>
          </figure>
        </div>
        <div class="screen-details">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <span class="badge-value">2x</span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Optical zoom range</span>
              </div>
            </div>
          </figure>
        </div>
        <div class="lidar-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <div class="image-icon-wrapper embed-image">
                  -
                </div>
              </div>
              <div class="badge-row">
                <span class="badge-caption">-</span>
              </div>
            </div>
          </figure>
        </div>
        <div class="battery-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <div class="image-icon-wrapper embed-image">
                  <img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/battery.png" ?>" alt="Product Images">
                </div>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Up to 17 hours of
                  video playback<sup>◊</sup>
                </span>
              </div>
            </div>
          </figure>
        </div>
      </div>

      <!-- iphone 13-->
      <div id="product4" class="product-col col text-center">
        <div class="product-image"><img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/compare_iphone13_mini_green.png" ?>" class="" alt="Product Images"></div>
        <div class="colornav-items  row-colors ">
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color:#495a48;"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color:#f1f2ed;"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color:#232a31;"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: #276787;"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: #276787;"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: #bf0013;"></figure>
          </div>
        </div>
        <!-- <div class="avlbl-copy" style="color:#000">Available from <span style="display: inline-block;">30<sup>th</sup> October</span></div> -->
        <div class="screen-details">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <span class="badge-value">15.4 cm </span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Super Retina <br> XDR display<sup>◊</sup></span>
              </div>
            </div>
          </figure>
        </div>
        <div class="net-details"><img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/5g.png" ?>" alt="Product Images">
          <div>Superfast 5G Cellular<sup>◊</sup></div>
        </div>
        <div class="camera-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <div class="image-icon-wrapper embed-image">
                  <img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/icon_iphone13_camera.jpg" ?>" alt="Product Images">
                </div>
              </div>

              <div class="badge-row">
                <span class="badge-caption">-</span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Wide</span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Ultra Wide</span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Cinematic mode <br> for 1080p at 30 fps</span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Dolby Vision HDR video <br>recording up to 60 fps</span>
              </div>
            </div>
          </figure>
        </div>
        <div class="screen-details">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <span class="badge-value">2x</span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Optical zoom range</span>
              </div>
            </div>
          </figure>
        </div>
        <div class="lidar-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <div class="image-icon-wrapper embed-image">
                  -
                </div>
              </div>
              <div class="badge-row">
                <span class="badge-caption">-</span>
              </div>
            </div>
          </figure>
        </div>
        <div class="battery-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <div class="image-icon-wrapper embed-image">
                  <img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/battery.png" ?>" alt="Product Images">
                </div>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Up to 19 hours of
                  video playback<sup>◊</sup>
                </span>
              </div>
            </div>
          </figure>
        </div>
      </div>

      <!-- iphone 12 pro -->
      <div id="product5" class="product-col col text-center">
        <div class="product-image"><img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/iphone_12_pro.png" ?>" alt="Product Images"></div>
        <div class="colornav-items  row-colors ">
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(45, 78, 92);"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(252, 235, 211);"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(82, 81, 77);"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(227, 228, 223);"></figure>
          </div>
        </div>
        <!-- <div class="avlbl-copy" style="color:#000">Available from <span style="display: inline-block;">30<sup>th</sup> October</span></div> -->
        <div class="screen-details">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <span class="badge-value">15.49 cm </span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Super Retina XDR display<sup>◊</sup> <br> <br></span>
              </div>
            </div>
          </figure>
        </div>
        <div class="net-details"><img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/5g.png" ?>" alt="Product Images">
          <div>Superfast 5G Cellular<sup>◊</sup></div>
        </div>
        <div class="camera-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <div class="image-icon-wrapper embed-image">
                  <img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/3_camera.png" ?>" alt="Product Images">
                </div>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Ultra Wide</span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Wide</span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Telephoto</span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Dolby Vision HDR video <br>recording up to 60 fps</span>
              </div>
            </div>
          </figure>
        </div>
        <div class="screen-details">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <span class="badge-value"> 4x</span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Optical zoom range</span>
              </div>
            </div>
          </figure>
        </div>
        <div class="lidar-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <div class="image-icon-wrapper embed-image">
                  <img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/lidar.png" ?>" alt="Product Images">
                </div>
              </div>
              <div class="badge-row">
                <span class="badge-caption">LiDAR Scanner for Night
                  mode portraits, faster autofocus
                  in low light and next-level
                  AR experiences</span>
              </div>
            </div>
          </figure>
        </div>
        <div class="battery-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <div class="image-icon-wrapper embed-image">
                  <img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/battery.png" ?>" alt="Product Images">
                </div>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Up to 17 hours of
                  video playback<sup>◊</sup>
                </span>
              </div>
            </div>
          </figure>
        </div>
      </div>

      <!-- iphone 12 Pro Max -->
      <div id="product6" class="product-col col text-center">
        <div class="product-image"><img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/iphone_12_pro_max.png" ?>" class="big" alt="Product Images"></div>
        <div class="colornav-items  row-colors ">
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(45, 78, 92);"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(252, 235, 211);"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(82, 81, 77);"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(227, 228, 223);"></figure>
          </div>
        </div>
        <!-- <div class="avlbl-copy" style="color:#000">Available in November</span></div> -->
        <div class="screen-details">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <span class="badge-value">17.01 cm </span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Super Retina XDR display<sup>◊</sup> <br> <br></span>
              </div>
            </div>
          </figure>
        </div>
        <div class="net-details"><img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/5g.png" ?>" alt="Product Images">
          <div>Superfast 5G Cellular<sup>◊</sup></div>
        </div>
        <div class="camera-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <div class="image-icon-wrapper embed-image">
                  <img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/3_camera.png" ?>" alt="Product Images">
                </div>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Ultra Wide</span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Wide</span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Telephoto</span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Dolby Vision HDR video <br>recording up to 60 fps</span>
              </div>
            </div>
          </figure>
        </div>
        <div class="screen-details">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <span class="badge-value">5x</span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Optical zoom range</span>
              </div>
            </div>
          </figure>
        </div>
        <div class="lidar-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <div class="image-icon-wrapper embed-image">
                  <img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/lidar.png" ?>" alt="Product Images">
                </div>
              </div>
              <div class="badge-row">
                <span class="badge-caption">LiDAR Scanner for Night
                  mode portraits, faster autofocus
                  in low light and next-level
                  AR experiences</span>
              </div>
            </div>
          </figure>
        </div>
        <div class="battery-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <div class="image-icon-wrapper embed-image">
                  <img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/battery.png" ?>" alt="Product Images">
                </div>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Up to 20 hours of
                  video playback<sup>◊</sup>
                </span>
              </div>
            </div>
          </figure>
        </div>
      </div>

      <!-- iphone 12  -->
      <div id="product7" class="product-col col text-center">
        <div class="product-image"><img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/iphone_12.png" ?>" class="" alt="Product Images"></div>
        <div class="colornav-items row-colors">
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(209, 205, 219);"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(2, 59, 99);"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(216, 239, 213);"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(216, 46, 46);"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(246, 242, 239);"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(37, 33, 43);"></figure>
          </div>
        </div>
        <!-- <div class="avlbl-copy" style="color:#000">Available from 30th October</span></div> -->
        <div class="screen-details">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <span class="badge-value">15.4 cm </span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Super Retina XDR display<sup>◊</sup> <br> <br></span>
              </div>
            </div>
          </figure>
        </div>
        <div class="net-details"><img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/5g.png" ?>" alt="Product Images">
          <div>Superfast 5G Cellular<sup>◊</sup></div>
        </div>
        <div class="camera-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <div class="image-icon-wrapper embed-image">
                  <img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/2_camera.png" ?>" alt="Product Images">
                </div>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Ultra Wide</span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Wide</span>
              </div>
              <div class="badge-row">
                <div><span aria-hidden="true" class="mdash badge-caption">—</span></div>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Dolby Vision HDR video <br>recording up to 30 fps</span>
              </div>
            </div>
          </figure>
        </div>
        <div class="screen-details">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <span class="badge-value">2x</span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Optical zoom range</span>
              </div>
            </div>
          </figure>
        </div>
        <div class="lidar-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <div><span aria-hidden="true" class="mdash badge-caption">—</span></div>
              </div>
            </div>
          </figure>
        </div>
        <div class="battery-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <div class="image-icon-wrapper embed-image">
                  <img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/battery.png" ?>" alt="Product Images">
                </div>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Up to 17 hours of
                  video playback<sup>◊</sup>
                </span>
              </div>
            </div>
          </figure>
        </div>
      </div>

      <!-- iphone 12 mini -->
      <div id="product8" class="product-col col text-center">
        <div class="product-image"><img class="small" src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/iphone_12_mini.png" ?>" alt="Product Images"></div>
        <div class="colornav-items row-colors">
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(209, 205, 219);"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(2, 59, 99);"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(216, 239, 213);"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(216, 46, 46);"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(246, 242, 239);"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(37, 33, 43);"></figure>
          </div>
        </div>
        <!-- <div class="avlbl-copy" style="color:#000">Available in November</div> -->
        <div class="screen-details">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <span class="badge-value">13.7 cm </span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Super Retina XDR display<sup>◊</sup> <br> <br></span>
              </div>
            </div>
          </figure>
        </div>
        <div class="net-details"><img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/5g.png" ?>" alt="Product Images">
          <div>Superfast 5G Cellular<sup>◊</sup></div>
        </div>
        <div class="camera-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <div class="image-icon-wrapper embed-image">
                  <img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/2_camera.png" ?>" alt="Product Images">
                </div>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Ultra Wide</span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Wide</span>
              </div>
              <div class="badge-row">
                <div><span aria-hidden="true" class="mdash badge-caption">—</span></div>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Dolby Vision HDR video <br>recording up to 60 fps</span>
              </div>
            </div>
          </figure>
        </div>
        <div class="screen-details">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <span class="badge-value">2x</span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Optical zoom range</span>
              </div>
            </div>
          </figure>
        </div>
        <div class="lidar-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">

              </div>
              <div class="badge-row">
                <div><span aria-hidden="true" class="mdash badge-caption">—</span></div>
              </div>

            </div>
          </figure>
        </div>
        <div class="battery-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <div class="image-icon-wrapper embed-image">
                  <img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/battery.png" ?>" alt="Product Images">
                </div>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Up to 15 hours of
                  video playback<sup>◊</sup>
                </span>
              </div>
            </div>
          </figure>
        </div>
      </div>

      <!-- iphone 11 pro -->
      <div id="product9" class="product-col col text-center">
        <div class="product-image"><img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/iphone_11_pro.png" ?>" alt="Product Images"></div>
        <div class="colornav-items row-colors">
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(80, 88, 81);"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(235, 235, 228);"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(83, 81, 80);"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(244, 216, 192);"></figure>
          </div>
        </div>
        <!-- <div class="avlbl-copy"><span aria-hidden="true" class="mdash badge-caption">—</span></div> -->
        <div class="screen-details">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <span class="badge-value">14.73 cm </span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Super Retina XDR display<sup>◊</sup> <br> <br></span>
              </div>
            </div>
          </figure>
        </div>
        <div class="net-details"><img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/4g.png" ?>" alt="Product Images">
          <div>4G LTE cellular<sup>◊</sup></div>
        </div>
        <div class="camera-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <div class="image-icon-wrapper embed-image">
                  <img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/2_camera.png" ?>" alt="Product Images">
                </div>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Ultra Wide</span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Wide</span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Telephoto</span>

              </div>
              <div class="badge-row">
                <br>
                <div><span aria-hidden="true" class="mdash badge-caption">—</span></div>
              </div>

            </div>
          </figure>
        </div>
        <div class="screen-details">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <span class="badge-value">4x</span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Optical zoom range</span>
              </div>
            </div>
          </figure>
        </div>
        <div class="lidar-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">

              </div>
              <div class="badge-row">
                <div><span aria-hidden="true" class="mdash badge-caption">—</span></div>
              </div>

            </div>
          </figure>
        </div>
        <div class="battery-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <div class="image-icon-wrapper embed-image">
                  <img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/battery.png" ?>" alt="Product Images">
                </div>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Up to 18 hours of
                  video playback<sup>◊</sup>
                </span>
              </div>
            </div>
          </figure>
        </div>
      </div>


      <!-- iphone 11 pro max -->
      <div id="product10" class="product-col col text-center">
        <div class="product-image"><img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/iphone_11_pro_max.png" ?>" alt="Product Images"></div>
        <div class="colornav-items row-colors">
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(80, 88, 81);"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(235, 235, 228);"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(83, 81, 80);"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(244, 216, 192);"></figure>
          </div>
        </div>
        <!-- <div class="avlbl-copy"><span aria-hidden="true" class="mdash badge-caption">—</span></div> -->
        <div class="screen-details">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <span class="badge-value">16.51 cm </span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Super Retina XDR display<sup>◊</sup> <br> <br></span>
              </div>
            </div>
          </figure>
        </div>
        <div class="net-details"><img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/4g.png" ?>" alt="Product Images">
          <div>4G LTE cellular<sup>◊</sup></div>
        </div>
        <div class="camera-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <div class="image-icon-wrapper embed-image">
                  <img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/3_camera.png" ?>" alt="Product Images">
                </div>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Ultra Wide</span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Wide</span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Telephoto</span>

              </div>
              <div class="badge-row">
                <br>
                <div><span aria-hidden="true" class="mdash badge-caption">—</span></div>
              </div>

            </div>
          </figure>
        </div>
        <div class="screen-details">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <span class="badge-value">4x</span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Optical zoom range</span>
              </div>
            </div>
          </figure>
        </div>
        <div class="lidar-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">

              </div>
              <div class="badge-row">
                <div><span aria-hidden="true" class="mdash badge-caption">—</span></div>
              </div>

            </div>
          </figure>
        </div>
        <div class="battery-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <div class="image-icon-wrapper embed-image">
                  <img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/battery.png" ?>" alt="Product Images">
                </div>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Up to 20 hours of
                  video playback<sup>◊</sup>
                </span>
              </div>
            </div>
          </figure>
        </div>
      </div>


      <!-- iphone 11 pro max -->
      <div id="product11" class="product-col col text-center">
        <div class="product-image"><img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/iphone_11.png" ?>" alt="Product Images"></div>
        <div class="colornav-items row-colors">
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(208, 205, 217);"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(251, 231, 143);"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(184, 224, 206);"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(31, 32, 32);"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(249, 246, 240);"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(171, 38, 51);"></figure>
          </div>
        </div>
        <!-- <div class="avlbl-copy"><span aria-hidden="true" class="mdash badge-caption">—</span></div> -->
        <div class="screen-details">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <span class="badge-value">15.49 cm </span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Liquid Retina HD display<sup>◊</sup></span>
              </div>
            </div>
          </figure>
        </div>
        <div class="net-details"><img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/4g.png" ?>" alt="Product Images">
          <div>4G LTE cellular<sup>◊</sup></div>
        </div>
        <div class="camera-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <div class="image-icon-wrapper embed-image">
                  <img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/2_camera.png" ?>" alt="Product Images">
                </div>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Ultra Wide</span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Wide</span>
              </div>
              <div class="badge-row">
                <div><span aria-hidden="true" class="mdash badge-caption">—</span></div>

              </div>
              <div class="badge-row">
                <br>
                <div><span aria-hidden="true" class="mdash badge-caption">—</span></div>
              </div>

            </div>
          </figure>
        </div>
        <div class="screen-details">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <span class="badge-value">2x</span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Optical zoom range</span>
              </div>
            </div>
          </figure>
        </div>
        <div class="lidar-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">

              </div>
              <div class="badge-row">
                <div><span aria-hidden="true" class="mdash badge-caption">—</span></div>
              </div>

            </div>
          </figure>
        </div>
        <div class="battery-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <div class="image-icon-wrapper embed-image">
                  <img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/battery.png" ?>" alt="Product Images">
                </div>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Up to 17 hours of
                  video playback<sup>◊</sup>
                </span>
              </div>
            </div>
          </figure>
        </div>
      </div>

      <!-- iphone SE 3rd generation-->
      <div id="product1022" class="product-col col text-center">
        <div class="product-image"><img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/iphone_se.png" ?>" class="small" alt="Product Images"></div>
        <div class="colornav-items row-colors">
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(165, 40, 44);"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(38, 37, 41);"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(243, 243, 243);"></figure>
          </div>
        </div>
        <!-- <div class="avlbl-copy"><span aria-hidden="true" class="mdash badge-caption">—</span></div> -->
        <div class="screen-details">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <span class="badge-value">11.94 cm </span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">(4.7″) Retina HD display<sup>◊</sup></span>
              </div>
            </div>
          </figure>
        </div>
        <div class="net-details"><img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/5g.png" ?>" alt="Product Images">
          <div>5G Cellular<sup>◊</sup></div>
        </div>
        <div class="camera-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <div class="image-icon-wrapper embed-image">
                  <img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/1_camera.png" ?>" alt="Product Images">
                </div>
              </div>
              <div class="badge-row">
                <span class="badge-caption"> Wide</span>
              </div>
              <div class="badge-row">
                <div><span aria-hidden="true" class="mdash badge-caption">—</span></div>
              </div>
              <div class="badge-row">
                <div><span aria-hidden="true" class="mdash badge-caption">—</span></div>

              </div>
              <div class="badge-row">
                <br>
                <div><span aria-hidden="true" class="mdash badge-caption">—</span></div>
              </div>

            </div>
          </figure>
        </div>
        <div class="screen-details">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <div><span aria-hidden="true" class="mdash badge-caption">—</span></div>
              </div>
              <div class="badge-row">
                <div><span aria-hidden="true" class="mdash badge-caption">—</span></div>
              </div>
            </div>
          </figure>
        </div>
        <div class="lidar-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">

              </div>
              <div class="badge-row">
                <div><span aria-hidden="true" class="mdash badge-caption">—</span></div>
              </div>

            </div>
          </figure>
        </div>
        <div class="battery-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <div class="image-icon-wrapper embed-image">
                  <img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/battery.png" ?>" alt="Product Images">
                </div>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Up to 15 hours of
                  video playback<sup>◊</sup>
                </span>
              </div>
            </div>
          </figure>
        </div>
      </div>
      <!-- iphone SE -->
      <div id="product12" class="product-col col text-center">
        <div class="product-image"><img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/iphone_se.png" ?>" class="small" alt="Product Images"></div>
        <div class="colornav-items row-colors">
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(165, 40, 44);"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(38, 37, 41);"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(243, 243, 243);"></figure>
          </div>
        </div>
        <!-- <div class="avlbl-copy"><span aria-hidden="true" class="mdash badge-caption">—</span></div> -->
        <div class="screen-details">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <span class="badge-value">11.93 cm </span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Retina HD display<sup>◊</sup></span>
              </div>
            </div>
          </figure>
        </div>
        <div class="net-details"><img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/4g.png" ?>" alt="Product Images">
          <div>4G LTE cellular<sup>◊</sup></div>
        </div>
        <div class="camera-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <div class="image-icon-wrapper embed-image">
                  <img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/1_camera.png" ?>" alt="Product Images">
                </div>
              </div>
              <div class="badge-row">
                <span class="badge-caption"> Wide</span>
              </div>
              <div class="badge-row">
                <div><span aria-hidden="true" class="mdash badge-caption">—</span></div>
              </div>
              <div class="badge-row">
                <div><span aria-hidden="true" class="mdash badge-caption">—</span></div>

              </div>
              <div class="badge-row">
                <br>
                <div><span aria-hidden="true" class="mdash badge-caption">—</span></div>
              </div>

            </div>
          </figure>
        </div>
        <div class="screen-details">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <div><span aria-hidden="true" class="mdash badge-caption">—</span></div>
              </div>
              <div class="badge-row">
                <div><span aria-hidden="true" class="mdash badge-caption">—</span></div>
              </div>
            </div>
          </figure>
        </div>
        <div class="lidar-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">

              </div>
              <div class="badge-row">
                <div><span aria-hidden="true" class="mdash badge-caption">—</span></div>
              </div>

            </div>
          </figure>
        </div>
        <div class="battery-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <div class="image-icon-wrapper embed-image">
                  <img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/battery.png" ?>" alt="Product Images">
                </div>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Up to 13 hours of
                  video playback<sup>◊</sup>
                </span>
              </div>
            </div>
          </figure>
        </div>
      </div>

      <!-- iphone xs -->
      <div id="product13" class="product-col col text-center">
        <div class="product-image"><img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/iphone_xs.png" ?>" alt="Product Images"></div>
        <div class="colornav-items row-colors">
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(228, 228, 226);"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(38, 37, 41);"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(245, 221, 197);"></figure>
          </div>
        </div>
        <!-- <div class="avlbl-copy"><span aria-hidden="true" class="mdash badge-caption">—</span></div> -->
        <div class="screen-details">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <span class="badge-value">14.73 cm </span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Super Retina HD display<sup>◊</sup></span>
              </div>
            </div>
          </figure>
        </div>
        <div class="net-details"><img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/4g.png" ?>" alt="Product Images">
          <div>4G LTE cellular<sup>◊</sup></div>
        </div>
        <div class="camera-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <div class="image-icon-wrapper embed-image">
                  <img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/dual_cam.png" ?>" alt="Product Images">
                </div>
              </div>
              <div class="badge-row">
                <span class="badge-caption"> Wide</span>
              </div>
              <div class="badge-row">
                <span class="badge-caption"> Telephoto</span>
              </div>
              <div class="badge-row">
                <div><span aria-hidden="true" class="mdash badge-caption">—</span></div>

              </div>
              <div class="badge-row">
                <br>
                <div><span aria-hidden="true" class="mdash badge-caption">—</span></div>
              </div>

            </div>
          </figure>
        </div>
        <div class="screen-details">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <span class="badge-value">2x</span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Optical zoom range</span>
              </div>
            </div>
          </figure>
        </div>
        <div class="lidar-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">

              </div>
              <div class="badge-row">
                <div><span aria-hidden="true" class="mdash badge-caption">—</span></div>
              </div>

            </div>
          </figure>
        </div>
        <div class="battery-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <div class="image-icon-wrapper embed-image">
                  <img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/battery.png" ?>" alt="Product Images">
                </div>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Up to 14 hours of
                  video playback<sup>◊</sup>
                </span>
              </div>
            </div>
          </figure>
        </div>
      </div>

      <!-- iphone xs max-->
      <div id="product14" class="product-col col text-center">
        <div class="product-image"><img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/iphone_xs_max.png" ?>" alt="Product Images"></div>
        <div class="colornav-items row-colors">
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(228, 228, 226);"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(38, 37, 41);"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(245, 221, 197);"></figure>
          </div>
        </div>
        <!-- <div class="avlbl-copy"><span aria-hidden="true" class="mdash badge-caption">—</span></div> -->
        <div class="screen-details">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <span class="badge-value">16.51 cm </span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Super Retina HD display<sup>◊</sup></span>
              </div>
            </div>
          </figure>
        </div>
        <div class="net-details"><img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/4g.png" ?>" alt="Product Images">
          <div>4G LTE cellular<sup>◊</sup></div>
        </div>
        <div class="camera-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <div class="image-icon-wrapper embed-image">
                  <img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/dual_cam.png" ?>" alt="Product Images">
                </div>
              </div>
              <div class="badge-row">
                <span class="badge-caption"> Wide</span>
              </div>
              <div class="badge-row">
                <span class="badge-caption"> Telephoto</span>
              </div>
              <div class="badge-row">
                <div><span aria-hidden="true" class="mdash badge-caption">—</span></div>

              </div>
              <div class="badge-row">
                <br>
                <div><span aria-hidden="true" class="mdash badge-caption">—</span></div>
              </div>

            </div>
          </figure>
        </div>
        <div class="screen-details">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <span class="badge-value">2x</span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Optical zoom range</span>
              </div>
            </div>
          </figure>
        </div>
        <div class="lidar-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">

              </div>
              <div class="badge-row">
                <div><span aria-hidden="true" class="mdash badge-caption">—</span></div>
              </div>

            </div>
          </figure>
        </div>
        <div class="battery-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <div class="image-icon-wrapper embed-image">
                  <img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/battery.png" ?>" alt="Product Images">
                </div>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Up to 15 hours of
                  video playback<sup>◊</sup>
                </span>
              </div>
            </div>
          </figure>
        </div>
      </div>


      <!-- iphone xr -->
      <div id="product15" class="product-col col text-center">
        <div class="product-image"><img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/iphone_xr.png" ?>" alt="Product Images"></div>
        <div class="colornav-items row-colors">
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(100, 172, 225);"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(243, 243, 243);"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(46, 48, 52);"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(243, 209, 96);"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(238, 119, 98);"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(165, 40, 44);"></figure>
          </div>
        </div>
        <!-- <div class="avlbl-copy"><span aria-hidden="true" class="mdash badge-caption">—</span></div> -->
        <div class="screen-details">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <span class="badge-value">15.49 cm </span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Liquid Retina HD display<sup>◊</sup></span>
              </div>
            </div>
          </figure>
        </div>
        <div class="net-details"><img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/4g.png" ?>" alt="Product Images">
          <div>4G LTE cellular<sup>◊</sup></div>
        </div>
        <div class="camera-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <div class="image-icon-wrapper embed-image">
                  <img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/xr_camera.png" ?>" alt="Product Images">
                </div>
              </div>
              <div class="badge-row">
                <span class="badge-caption"> Wide</span>
              </div>
              <div class="badge-row">
                <div><span aria-hidden="true" class="mdash badge-caption">—</span></div>
              </div>
              <div class="badge-row">
                <div><span aria-hidden="true" class="mdash badge-caption">—</span></div>

              </div>
              <div class="badge-row">
                <br>
                <div><span aria-hidden="true" class="mdash badge-caption">—</span></div>
              </div>

            </div>
          </figure>
        </div>
        <div class="screen-details">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <div><span aria-hidden="true" class="mdash badge-caption">—</span></div>
              </div>
              <div class="badge-row">
                <div><span aria-hidden="true" class="mdash badge-caption">—</span></div>
              </div>
            </div>
          </figure>
        </div>
        <div class="lidar-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">

              </div>
              <div class="badge-row">

                <div><span aria-hidden="true" class="mdash badge-caption">—</span></div>
              </div>

            </div>
          </figure>
        </div>
        <div class="battery-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <div class="image-icon-wrapper embed-image">
                  <img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/battery.png" ?>" alt="Product Images">
                </div>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Up to 16 hours of
                  video playback<sup>◊</sup>
                </span>
              </div>
            </div>
          </figure>
        </div>
      </div>


      <!-- iphone xr -->
      <div id="product16" class="product-col col text-center">
        <div class="product-image"><img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/iphone_x.png" ?>" alt="Product Images"></div>
        <div class="colornav-items row-colors">
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(228, 228, 226);"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(38, 37, 41);"></figure>
          </div>
        </div>
        <!-- <div class="avlbl-copy"><span aria-hidden="true" class="mdash badge-caption">—</span></div> -->
        <div class="screen-details">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <span class="badge-value">14.73 cm </span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Super Retina HD display<sup>◊</sup></span>
              </div>
            </div>
          </figure>
        </div>
        <div class="net-details"><img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/4g.png" ?>" alt="Product Images">
          <div>4G LTE cellular<sup>◊</sup></div>
        </div>
        <div class="camera-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <div class="image-icon-wrapper embed-image">
                  <img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/dual_cam.png" ?>" alt="Product Images">
                </div>
              </div>
              <div class="badge-row">
                <span class="badge-caption"> Wide</span>
              </div>
              <div class="badge-row">
                <div><span aria-hidden="true" class="badge-caption">Telephoto</span></div>
              </div>
              <div class="badge-row">
                <div><span aria-hidden="true" class="mdash badge-caption">—</span></div>

              </div>
              <div class="badge-row">
                <br>
                <div><span aria-hidden="true" class="mdash badge-caption">—</span></div>
              </div>

            </div>
          </figure>
        </div>
        <div class="screen-details">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <span class="badge-value">2x</span>
              </div>
              <div class="badge-row">
                <div><span aria-hidden="true" class="badge-caption">Optical zoom range</span></div>
              </div>
            </div>
          </figure>
        </div>
        <div class="lidar-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">

              </div>
              <div class="badge-row">
                <div><span aria-hidden="true" class="mdash badge-caption">—</span></div>

              </div>

            </div>
          </figure>
        </div>
        <div class="battery-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <div class="image-icon-wrapper embed-image">
                  <img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/battery.png" ?>" alt="Product Images">
                </div>
              </div>
              <div class="badge-row">
                <span class="badge-value">Up to 13 hours of
                  video playback<sup>◊</sup>
                </span>
              </div>
            </div>
          </figure>
        </div>
      </div>


      <!-- iphone 8 plus -->
      <div id="product17" class="product-col col text-center">
        <div class="product-image"><img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/iphone_8_plus.png" ?>" alt="Product Images"></div>
        <div class="colornav-items row-colors">
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(226, 227, 228);"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(39, 39, 41);"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(244, 232, 222);"></figure>
          </div>
        </div>
        <!-- <div class="avlbl-copy"><span aria-hidden="true" class="mdash badge-caption">—</span></div> -->
        <div class="screen-details">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <span class="badge-value">13.97 cm </span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Retina HD display<sup>◊</sup></span>
              </div>
            </div>
          </figure>
        </div>
        <div class="net-details"><img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/4g.png" ?>" alt="Product Images">
          <div>4G LTE cellular<sup>◊</sup></div>
        </div>
        <div class="camera-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <div class="image-icon-wrapper embed-image">
                  <img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/8plus_cam.png" ?>" alt="Product Images">
                </div>
              </div>
              <div class="badge-row">
                <span class="badge-caption"> Wide</span>
              </div>
              <div class="badge-row">
                <div><span aria-hidden="true" class="badge-caption">Telephoto</span></div>
              </div>
              <div class="badge-row">
                <div><span aria-hidden="true" class="mdash badge-caption">—</span></div>

              </div>
              <div class="badge-row">
                <br>
                <div><span aria-hidden="true" class="mdash badge-caption">—</span></div>
              </div>

            </div>
          </figure>
        </div>
        <div class="screen-details">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <span class="badge-value">2x</span>
              </div>
              <div class="badge-row">
                <div><span aria-hidden="true" class="badge-caption">Optical zoom range</span></div>
              </div>
            </div>
          </figure>
        </div>
        <div class="lidar-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">

              </div>
              <div class="badge-row">
                <div><span aria-hidden="true" class="mdash badge-caption">—</span></div>

              </div>

            </div>
          </figure>
        </div>
        <div class="battery-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <div class="image-icon-wrapper embed-image">
                  <img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/battery.png" ?>" alt="Product Images">
                </div>
              </div>
              <div class="badge-row">
                <span class="badge-value">Up to 14 hours of
                  video playback<sup>◊</sup>
                </span>
              </div>
            </div>
          </figure>
        </div>
      </div>


      <!-- iphone 8   -->
      <div id="product18" class="product-col col text-center">
        <div class="product-image"><img class="small2" src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/iphone_8_plus.png" ?>" alt="Product Images"></div>
        <div class="colornav-items row-colors">
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(226, 227, 228);"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(39, 39, 41);"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(244, 232, 222);"></figure>
          </div>
        </div>
        <!-- <div class="avlbl-copy"><span aria-hidden="true" class="mdash badge-caption">—</span></div> -->
        <div class="screen-details">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <span class="badge-value">11.93 cm </span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Retina HD display<sup>◊</sup></span>
              </div>
            </div>
          </figure>
        </div>
        <div class="net-details"><img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/4g.png" ?>" alt="Product Images">
          <div>4G LTE cellular<sup>◊</sup></div>
        </div>
        <div class="camera-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <div class="image-icon-wrapper embed-image">
                  <img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/8plus_cam.png" ?>" alt="Product Images">
                </div>
              </div>
              <div class="badge-row">
                <span class="badge-caption"> Wide</span>
              </div>
              <div class="badge-row">
                <div><span aria-hidden="true" class="mdash badge-caption">—</span></div>
              </div>
              <div class="badge-row">
                <div><span aria-hidden="true" class="mdash badge-caption">—</span></div>

              </div>
              <div class="badge-row">
                <br>
                <div><span aria-hidden="true" class="mdash badge-caption">—</span></div>
              </div>

            </div>
          </figure>
        </div>
        <div class="screen-details">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <div><br><span aria-hidden="true" class="mdash badge-caption">—</span></div>
              </div>
              <div class="badge-row">
                <div><span aria-hidden="true" class="mdash badge-caption">—</span></div>
              </div>
            </div>
          </figure>
        </div>
        <div class="lidar-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">

              </div>
              <div class="badge-row">
                <div><span aria-hidden="true" class="mdash badge-caption">—</span></div>

              </div>

            </div>
          </figure>
        </div>
        <div class="battery-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <div class="image-icon-wrapper embed-image">
                  <img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/battery.png" ?>" alt="Product Images">
                </div>
              </div>
              <div class="badge-row">
                <span class="badge-value">Up to 13 hours of
                  video playback<sup>◊</sup>
                </span>
              </div>
            </div>
          </figure>
        </div>
      </div>

      <!-- iphone 7 plus-->
      <div id="product19" class="product-col col text-center">
        <div class="product-image"><img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/iphone_7_plus.png" ?>" alt="Product Images"></div>
        <div class="colornav-items row-colors">
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(46, 48, 52);"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(226, 227, 228);"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(244, 232, 222);"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(230, 199, 194);"></figure>
          </div>
        </div>
        <!-- <div class="avlbl-copy"><span aria-hidden="true" class="mdash badge-caption">—</span></div> -->
        <div class="screen-details">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <span class="badge-value">13.97 cm </span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Retina HD display<sup>◊</sup></span>
              </div>
            </div>
          </figure>
        </div>
        <div class="net-details"><img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/4g.png" ?>" alt="Product Images">
          <div>4G LTE cellular<sup>◊</sup></div>
        </div>
        <div class="camera-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <div class="image-icon-wrapper embed-image">
                  <img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/8plus_cam.png" ?>" alt="Product Images">
                </div>
              </div>
              <div class="badge-row">
                <span class="badge-caption"> Wide</span>
              </div>
              <div class="badge-row">
                <span class="badge-caption copy helvetica-neue">Telephoto</span>
              </div>
              <div class="badge-row">
                <div><span aria-hidden="true" class="mdash badge-caption">—</span></div>

              </div>
              <div class="badge-row">
                <br>
                <div><span aria-hidden="true" class="mdash badge-caption">—</span></div>
              </div>

            </div>
          </figure>
        </div>
        <div class="screen-details">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <div class="badge-row">
                  <span class="badge-value">2x</span>
                </div>
              </div>
              <div class="badge-row">
                <div><span class="badge-caption">Optical zoom range</span></div>
              </div>
            </div>
          </figure>
        </div>
        <div class="lidar-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">

              </div>
              <div class="badge-row">
                <div><span aria-hidden="true" class="mdash badge-caption">—</span></div>

              </div>

            </div>
          </figure>
        </div>
        <div class="battery-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <div class="image-icon-wrapper embed-image">
                  <img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/battery.png" ?>" alt="Product Images">
                </div>
              </div>
              <div class="badge-row">
                <span class="badge-value">Up to 14 hours of
                  video playback<sup>◊</sup>
                </span>
              </div>
            </div>
          </figure>
        </div>
      </div>

      <!-- iphone 7-->
      <div id="product20" class="product-col col text-center">
        <div class="product-image"><img class="small2" src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/iphone_7.png" ?>" alt="Product Images"></div>
        <div class="colornav-items row-colors">
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(46, 48, 52);"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(226, 227, 228);"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(244, 232, 222);"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(230, 199, 194);"></figure>
          </div>
        </div>
        <!-- <div class="avlbl-copy"><span aria-hidden="true" class="mdash badge-caption">—</span></div> -->
        <div class="screen-details">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <span class="badge-value">11.93 cm </span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Retina HD display<sup>◊</sup></span>
              </div>
            </div>
          </figure>
        </div>
        <div class="net-details"><img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/4g.png" ?>" alt="Product Images">
          <div>4G LTE cellular<sup>◊</sup></div>
        </div>
        <div class="camera-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <div class="image-icon-wrapper embed-image">
                  <img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/xr_camera.png" ?>" alt="Product Images">
                </div>
              </div>
              <div class="badge-row">
                <span class="badge-caption"> Wide</span>
              </div>
              <div class="badge-row">
                <div><span aria-hidden="true" class="mdash badge-caption">—</span></div>
              </div>
              <div class="badge-row">
                <div><span aria-hidden="true" class="mdash badge-caption">—</span></div>

              </div>
              <div class="badge-row">
                <br>
                <div><span aria-hidden="true" class="mdash badge-caption">—</span></div>
              </div>

            </div>
          </figure>
        </div>
        <div class="screen-details">
          <figure class="badge">
            <div class="badge-content">

              <div class="badge-row">
                <div><br><span aria-hidden="true" class="mdash badge-caption">—</span></div>
              </div>

              <div class="badge-row">
                <div><span aria-hidden="true" class="mdash badge-caption">—</span></div>
              </div>
            </div>
          </figure>
        </div>
        <div class="lidar-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">

              </div>
              <div class="badge-row">
                <div><span aria-hidden="true" class="mdash badge-caption">—</span></div>

              </div>

            </div>
          </figure>
        </div>
        <div class="battery-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <div class="image-icon-wrapper embed-image">
                  <img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/battery.png" ?>" alt="Product Images">
                </div>
              </div>
              <div class="badge-row">
                <span class="badge-value">Up to 13 hours of
                  video playback<sup>◊</sup>
                </span>
              </div>
            </div>
          </figure>
        </div>
      </div>

      <!-- iphone 6s plus-->
      <div id="product21" class="product-col col text-center">
        <div class="product-image"><img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/iphone_6s_plus.png" ?>" alt="Product Images"></div>
        <div class="colornav-items row-colors">
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(177, 178, 183);"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(226, 227, 228);"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(223, 205, 183);"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(230, 199, 194);"></figure>
          </div>
        </div>
        <!-- <div class="avlbl-copy"><span aria-hidden="true" class="mdash badge-caption">—</span></div> -->
        <div class="screen-details">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <span class="badge-value">13.97 cm </span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Retina HD display<sup>◊</sup></span>
              </div>
            </div>
          </figure>
        </div>
        <div class="net-details"><img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/4g.png" ?>" alt="Product Images">
          <div>4G LTE cellular<sup>◊</sup></div>
        </div>
        <div class="camera-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <div class="image-icon-wrapper embed-image">
                  <img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/1_camera.png" ?>" alt="Product Images">
                </div>
              </div>
              <div class="badge-row">
                <span class="badge-caption"> Wide</span>
              </div>
              <div class="badge-row">
                <div><span aria-hidden="true" class="mdash badge-caption">—</span></div>
              </div>
              <div class="badge-row">
                <div><span aria-hidden="true" class="mdash badge-caption">—</span></div>

              </div>
              <div class="badge-row">
                <br>
                <div><span aria-hidden="true" class="mdash badge-caption">—</span></div>
              </div>

            </div>
          </figure>
        </div>
        <div class="screen-details">
          <figure class="badge">
            <div class="badge-content">

              <div class="badge-row">
                <div><br><span aria-hidden="true" class="mdash badge-caption">—</span></div>
              </div>

              <div class="badge-row">
                <div><span aria-hidden="true" class="mdash badge-caption">—</span></div>
              </div>
            </div>
          </figure>
        </div>
        <div class="lidar-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">

              </div>
              <div class="badge-row">
                <div><span aria-hidden="true" class="mdash badge-caption">—</span></div>

              </div>

            </div>
          </figure>
        </div>
        <div class="battery-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <div class="image-icon-wrapper embed-image">
                  <img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/battery.png" ?>" alt="Product Images">
                </div>
              </div>
              <div class="badge-row">
                <span class="badge-value">Up to 14 hours of
                  video playback<sup>◊</sup>
                </span>
              </div>
            </div>
          </figure>
        </div>
      </div>


      <!-- iphone 6s-->
      <div id="product22" class="product-col col text-center">
        <div class="product-image"><img class="small2" src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/iphone_6s.png" ?>" alt="Product Images"></div>
        <div class="colornav-items row-colors">
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(177, 178, 183);"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(226, 227, 228);"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(223, 205, 183);"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(230, 199, 194);"></figure>
          </div>
        </div>
        <!-- <div class="avlbl-copy"><span aria-hidden="true" class="mdash badge-caption">—</span></div> -->
        <div class="screen-details">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <span class="badge-value">11.93 cm </span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Retina HD display<sup>◊</sup></span>
              </div>
            </div>
          </figure>
        </div>
        <div class="net-details"><img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/4g.png" ?>" alt="Product Images">
          <div>4G LTE cellular<sup>◊</sup></div>
        </div>
        <div class="camera-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <div class="image-icon-wrapper embed-image">
                  <img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/1_camera.png" ?>" alt="Product Images">
                </div>
              </div>
              <div class="badge-row">
                <span class="badge-caption"> Wide</span>
              </div>
              <div class="badge-row">
                <div><span aria-hidden="true" class="mdash badge-caption">—</span></div>
              </div>
              <div class="badge-row">
                <div><span aria-hidden="true" class="mdash badge-caption">—</span></div>

              </div>
              <div class="badge-row">
                <br>
                <div><span aria-hidden="true" class="mdash badge-caption">—</span></div>
              </div>

            </div>
          </figure>
        </div>
        <div class="screen-details">
          <figure class="badge">
            <div class="badge-content">

              <div class="badge-row">
                <div><br><span aria-hidden="true" class="mdash badge-caption">—</span></div>
              </div>

              <div class="badge-row">
                <div><span aria-hidden="true" class="mdash badge-caption">—</span></div>
              </div>
            </div>
          </figure>
        </div>
        <div class="lidar-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">

              </div>
              <div class="badge-row">
                <div><span aria-hidden="true" class="mdash badge-caption">—</span></div>

              </div>

            </div>
          </figure>
        </div>
        <div class="battery-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <div class="image-icon-wrapper embed-image">
                  <img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/battery.png" ?>" alt="Product Images">
                </div>
              </div>
              <div class="badge-row">
                <span class="badge-value">Up to 11 hours of
                  video playback<sup>◊</sup>
                </span>
              </div>
            </div>
          </figure>
        </div>
      </div>


      <!-- iphone 6 plus-->
      <div id="product23" class="product-col col text-center">
        <div class="product-image"><img class="" src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/iphone_6.png" ?>" alt="Product Images"></div>
        <div class="colornav-items row-colors">
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(177, 178, 183);"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(226, 227, 228);"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(223, 205, 183);"></figure>
          </div>
        </div>
        <!-- <div class="avlbl-copy"><span aria-hidden="true" class="mdash badge-caption">—</span></div> -->
        <div class="screen-details">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <span class="badge-value">11.93 cm </span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Retina HD display<sup>◊</sup></span>
              </div>
            </div>
          </figure>
        </div>
        <div class="net-details"><img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/4g.png" ?>" alt="Product Images">
          <div>4G LTE cellular<sup>◊</sup></div>
        </div>
        <div class="camera-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <div class="image-icon-wrapper embed-image">
                  <img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/1_camera.png" ?>" alt="Product Images">
                </div>
              </div>
              <div class="badge-row">
                <span class="badge-caption"> Wide</span>
              </div>
              <div class="badge-row">
                <div><span aria-hidden="true" class="mdash badge-caption">—</span></div>
              </div>
              <div class="badge-row">
                <div><span aria-hidden="true" class="mdash badge-caption">—</span></div>

              </div>
              <div class="badge-row">
                <br>
                <div><span aria-hidden="true" class="mdash badge-caption">—</span></div>
              </div>

            </div>
          </figure>
        </div>
        <div class="screen-details">
          <figure class="badge">
            <div class="badge-content">

              <div class="badge-row">
                <div><br><span aria-hidden="true" class="mdash badge-caption">—</span></div>
              </div>

              <div class="badge-row">
                <div><span aria-hidden="true" class="mdash badge-caption">—</span></div>
              </div>
            </div>
          </figure>
        </div>
        <div class="lidar-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">

              </div>
              <div class="badge-row">
                <div><span aria-hidden="true" class="mdash badge-caption">—</span></div>

              </div>

            </div>
          </figure>
        </div>
        <div class="battery-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <div class="image-icon-wrapper embed-image">
                  <img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/battery.png" ?>" alt="Product Images">
                </div>
              </div>
              <div class="badge-row">
                <span class="badge-value">Up to 11 hours of
                  video playback<sup>◊</sup>
                </span>
              </div>
            </div>
          </figure>
        </div>
      </div>

      <!-- iphone 6-->
      <div id="product24" class="product-col col text-center">
        <div class="product-image"><img class="small2" src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/iphone_6.png" ?>" alt="Product Images"></div>
        <div class="colornav-items row-colors">
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(177, 178, 183);"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(226, 227, 228);"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(223, 205, 183);"></figure>
          </div>
        </div>
        <!-- <div class="avlbl-copy"><span aria-hidden="true" class="mdash badge-caption">—</span></div> -->
        <div class="screen-details">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <span class="badge-value">11.93 cm </span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Retina HD display<sup>◊</sup></span>
              </div>
            </div>
          </figure>
        </div>
        <div class="net-details"><img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/4g.png" ?>" alt="Product Images">
          <div>4G LTE cellular<sup>◊</sup></div>
        </div>
        <div class="camera-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <div class="image-icon-wrapper embed-image">
                  <img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/1_camera.png" ?>" alt="Product Images">
                </div>
              </div>
              <div class="badge-row">
                <span class="badge-caption"> Wide</span>
              </div>
              <div class="badge-row">
                <div><span aria-hidden="true" class="mdash badge-caption">—</span></div>
              </div>
              <div class="badge-row">
                <div><span aria-hidden="true" class="mdash badge-caption">—</span></div>

              </div>
              <div class="badge-row">
                <br>
                <div><span aria-hidden="true" class="mdash badge-caption">—</span></div>
              </div>

            </div>
          </figure>
        </div>
        <div class="screen-details">
          <figure class="badge">
            <div class="badge-content">

              <div class="badge-row">
                <div><br><span aria-hidden="true" class="mdash badge-caption">—</span></div>
              </div>

              <div class="badge-row">
                <div><span aria-hidden="true" class="mdash badge-caption">—</span></div>
              </div>
            </div>
          </figure>
        </div>
        <div class="lidar-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">

              </div>
              <div class="badge-row">
                <div><span aria-hidden="true" class="mdash badge-caption">—</span></div>

              </div>

            </div>
          </figure>
        </div>
        <div class="battery-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <div class="image-icon-wrapper embed-image">
                  <img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/battery.png" ?>" alt="Product Images">
                </div>
              </div>
              <div class="badge-row">
                <span class="badge-value">Up to 11 hours of
                  video playback<sup>◊</sup>
                </span>
              </div>
            </div>
          </figure>
        </div>
      </div>

      <!-- iphone SE space-->
      <div id="product25" class="product-col col text-center">
        <div class="product-image"><img class="xtra-small" src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/iphone_se_space.png" ?>" class="small" alt="Product Images"></div>
        <div class="colornav-items row-colors">
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(38, 37, 41);"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(228, 228, 226);"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(250, 220, 194);"></figure>
          </div>
          <div class="colornav-item">
            <figure class="colornav-swatch" style="background-color: rgb(236, 198, 193);"></figure>
          </div>
        </div>
        <!-- <div class="avlbl-copy"><span aria-hidden="true" class="mdash badge-caption">—</span></div> -->
        <div class="screen-details">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <span class="badge-value">10.16 cm </span>
              </div>
              <div class="badge-row">
                <span class="badge-caption">Retina display<sup>◊</sup></span>
              </div>
            </div>
          </figure>
        </div>
        <div class="net-details"><img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/4g.png" ?>" alt="Product Images">
          <div>4G LTE cellular<sup>◊</sup></div>
        </div>
        <div class="camera-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <div class="image-icon-wrapper embed-image">
                  <img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/1_camera.png" ?>" alt="Product Images">
                </div>
              </div>
              <div class="badge-row">
                <span class="badge-caption"> Wide</span>
              </div>
              <div class="badge-row">
                <div><span aria-hidden="true" class="mdash badge-caption">—</span></div>
              </div>
              <div class="badge-row">
                <div><span aria-hidden="true" class="mdash badge-caption">—</span></div>

              </div>
              <div class="badge-row">
                <br>
                <div><span aria-hidden="true" class="mdash badge-caption">—</span></div>
              </div>

            </div>
          </figure>
        </div>
        <div class="screen-details">
          <figure class="badge">
            <div class="badge-content">

              <div class="badge-row">
                <div><br><span aria-hidden="true" class="mdash badge-caption">—</span></div>
              </div>

              <div class="badge-row">
                <div><span aria-hidden="true" class="mdash badge-caption">—</span></div>
              </div>
            </div>
          </figure>
        </div>
        <div class="lidar-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">

              </div>
              <div class="badge-row">
                <div><span aria-hidden="true" class="mdash badge-caption">—</span></div>

              </div>

            </div>
          </figure>
        </div>
        <div class="battery-details common-style-img-copy">
          <figure class="badge">
            <div class="badge-content">
              <div class="badge-row">
                <div class="image-icon-wrapper embed-image">
                  <img src="<?= PATH_FRONTEND_CUSTOM_IMG . "compare_iphone/battery.png" ?>" alt="Product Images">
                </div>
              </div>
              <div class="badge-row">
                <span class="badge-value">Up to 13 hours of
                  video playback<sup>◊</sup>
                </span>
              </div>
            </div>
          </figure>
        </div>
      </div>


    </div>
  </div>


  <!-- legal start -->
  <div class="section-legal">
    <div class="container">
      <div class="section-content">
        <div>
          <p> ◊ Legal Disclaimers</p>
        </div>
        <div class="disclaimer-copy">
          <h5>Display</h5>
          <p>The display has rounded corners that follow a beautiful curved design, and these corners are within a standard rectangle.
            When measured as a standard rectangular shape, the screen is 13.76 cm (iPhone 12 mini), 14.85 cm (iPhone 11 Pro, iPhone XS, iPhone X), 15.39 cm (iPhone 12 Pro, iPhone 12, iPhone 11, iPhone XR), 16.40 cm (iPhone 11 Pro Max, iPhone XS Max) or 16.96 cm (iPhone 12 Pro Max) diagonally. Actual viewable area is less.</p>
          <h5>Cellular and Wireless</h5>
          <p>Data plan is required. 5G is available in selected markets and through selected carriers. Speeds vary based on site conditions and carrier. For details on 5G support, contact your carrier and see  <a href="https://www.apple.com/in/iphone/cellular/" target="_black" style="color: #1D1D1F;">apple.com/in/iphone/cellular.</a>
          </p>
          <h5>Power and Battery</h5>
          <p>All battery claims depend on network configuration and many other factors; actual results will vary. Battery has limited recharge
            cycles and may eventually need to be replaced by an Apple service provider. Battery life and charge cycles vary by use and settings.
            See <a href="www.apple.com/in/batteries" target="_black" style="color: #1D1D1F;">www.apple.com/in/batteries</a> and <a href="https://www.apple.com/in/iphone/battery.html" target="_black" style="color: #1D1D1F;">www.apple.com/in/iphone/battery.html</a> for more information.</p>
        </div>
      </div>
    </div>

  </div>
  <!-- legal end -->
</main>