<main id="pg_store_locator_new" data-is-mobile="<?= (is_mobile()) ? 'Y' : 'N' ?>" data-env="<?= ENVIRONMENT ?>" data-gmap-key="<?= GOOGLE_MAPS_API_KEY ?>">
  <!-- state and city window -->
  <section class="store_front" id="store_front">
    <div class="form_wrapper">
      <div class="form_state_city">
        <h2>Find the online and offline stores near you.</h2>

        <form name="form_state_city" id="form_state_city">
          <div class="form_inner">
            <div class="col-md-12">
              <div class="col-md-8 offset-md-2">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <select class="form-control" name="frmstate" id="frmstate">
                        <option value="">Select State</option>
                        <?php foreach ($states as $state) : ?>
                          <option value=<?= $state->id ?>><?= $state->name ?></option>
                        <?php endforeach ?>
                      </select>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <select class="form-control" name="frmcity" id="frmcity">
                        <option value="">Select City</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- nearby -->
          <div class="nearby_link">
            <div class="nearby_wrapper current_location">
              <a href="javascript:void(0);" class="find_nearby ga_current_store_locator">
                <img src="<?= PATH_FILES_UPLOADS, 'store_locator/map_point.png' ?>" alt="" /> Use your current location.
              </a>
            </div>
          </div>

          <div class="sub_btn">
            <button type="submit" class="submitBtn ga_search_store_locator" name="search_submit" id="search_submit">Locate Store</button>
          </div>
        </form>
      </div>
    </div>
  </section>

  <!-- Main Window -->
  <section class="main_window">
    <div>
      <?php if (is_mobile()) : ?>
        <div class="text-center search_toggle">
          <h2 data-toggle="collapse" data-target="#search_band" class="collapsed" aria-expanded="false">SEARCH
            <i class="ii-icon-arrow-down iconupdown"></i>
          </h2>
        </div>
      <?php else : ?>
      <?php endif ?>

      <div class="container find_now_band<?= (is_mobile()) ? ' collapse' : '' ?>" id="search_band">
        <form name="form_state_city_2" id="form_state_city_2" class="find_now_band_main">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <select class="form-control" name="frmstate_2" id="frmstate_2">
                    <option value="">Select State</option>
                    <?php
                    foreach ($states as $state) {
                    ?>
                      <option value="<?= $state->id ?>"><?= $state->name; ?></option>
                    <?php
                    }
                    ?>
                  </select>
                </div>
              </div>

              <div class="col-md-3">
                <div class="form-group">
                  <select class="form-control" name="frmcity_2" id="frmcity_2">
                    <option value="">Select City</option>
                  </select>
                </div>
              </div>

              <div class="col-md-3">
                <div class="nearby_link_main">
                  <div class="nearby_wrapper current_location">
                    <a href="javascript:void(0);" class="find_nearby ga_current_store_locator">
                      <img src="<?= PATH_FILES_UPLOADS, 'store_locator/map_point_black.png' ?>" alt="" /> Use your current location.
                    </a>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="sub_btn">
                  <button type="submit" class="submitBtn ga_search_store_locator" name="search_submit_2" id="search_submit_2">SEARCH</button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>

    <div>
      <div id="optionPills">
        <div id="topNavs">
          <ul class="nav nav-tabs">
            <li class="nav-item">
              <a href="#online_store" class="ga_apr_online_store_locator nav-link active" data-toggle="tab">Online Stores</a>
            </li>

            <li class="nav-item">
              <a href="#offline_store" class="ga_apr_ofline_store_locator nav-link" data-toggle="tab">Offline Stores</a>
            </li>
          </ul>
        </div>

        <div class="tab-content clearfix">
          <!-- online store -->
          <div class="tab-pane active" id="online_store">
            <div class="container">
              <div class="online_store_wrapper notification">
                <h3>You will be redirected to the Apple Authorised Reseller’s website.</h3>
              </div>

              <!-- online partners -->
              <section class="locator-online-stores" id="locator_online_stores_section">
                <div class="container">

                  <div class="stores" style="background-color:#fff;color:#212529;">

                  </div>

                </div>
              </section>
            </div>
          </div>

          <!-- offline store -->
          <div class="tab-pane" id="offline_store">
            <div class="container" id="offline_store_band">
              <div class="col-md-9 offset-md-1">
                <div class="row">
                  <div class="col-md-6">
                    <ul class="nav nav-tabs">
                      <li class="aarli nav-item">
                        <a data-toggle="pill" class="aar_switch ga_apr_store_locator active" href="#aar_sec">APR/AAR <br> Mono Brand Store</a>
                      </li>

                      <li class="mbsli nav-item">
                        <a data-toggle="pill" class="mbs_switch ga_multiBrand_store_locator" href="#multibrand_sec">Multi Brands Stores</a>
                      </li>
                    </ul>
                  </div>

                  <?php if (is_mobile()) { ?>

                  <?php } else { ?>
                    <div class="col-md-1 hideit bigmob">
                      <div class="vl"></div>
                    </div>
                  <?php } ?>

                  <div class="col-md-5 hideit">
                    <div class="style-3 m-b-50 p-l-r">
                      <div class="slider-skip"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <section>
              <div class="tab-content">
                <div id="aar_sec" class="tab-pane fade show active">
                  <div class="row">
                    <div class="col-md-4 pr-0 pl-0">
                      <div class="stores_list stores_list_online_apr_aar">
                        <!-- store tiles -->
                        <div class="store_tiles">
                          <div class="store_ctr">1.</div>

                          <div class="store_details">
                            <h4 class="store_name">Future World | N9 Cp Store</h4>

                            <p class="store_address">N-9, Outer Circle, Connaught Place, New Delhi, 110001</p>

                            <p class="store_email">
                              <a href="mailto:myimaginestore@gmail.com"><i class="ii-icon-email"></i> myimaginestore@gmail.com</a>
                            </p>

                            <p class="store_contact">
                              <a class="" href="tel:9599233538"><i class="ii-icon-phone"></i> 9599233538</a>
                            </p>

                            <!-- direction and sms -->
                            <a href="https://www.google.com/maps/dir/Current+Location/28.37481,77.13125" role="button" class=" cta_get_directions btn" target="_blank">Get Directions</a>

                            <a href="#" role="button" class="btn cta_send_sms trigger_modal_send_sms">SMS</a>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-8 pr-0 pl-0">
                      <div class="map_sec">
                        <div id="map" class="get-store-location hidden-xs"></div>
                      </div>
                    </div>
                  </div>
                </div>

                <div id="multibrand_sec" class="tab-pane fade container">
                  <div class="container">
                    <div class="multibrand_wrapper">
                      <div class="grid stores_list_online_multi_brand masonry">
                        <!-- card grids -->
                        <div class="grid-item">
                          <div class="store store_tile">
                            <div class="store_ctr">1.</div>

                            <div class="store_details">
                              <h4 class="store_name">Arun Watch Company</h4>

                              <p class="store_address">11/12, Dav School Building, .Yusuf Sarai, 110016</p>

                              <p class="store_email" style="display:none">
                                <a href="mailto:myimaginestore@gmail.com"><i class="ii-icon-email"></i> myimaginestore@gmail.com</a>
                              </p>

                              <p class="store_contact">
                                <a class="ga_link_contact" href="tel:9372398353"><i class="ii-icon-phone"></i> 93723 98353</a>
                              </p>

                              <button type="button" class="btn cta_send_sms trigger_modal_send_sms">SMS</button>
                            </div>
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
      </div>
    </div>
  </section>

  <!-- #modal_send_sms -->
  <div class="modal fade" tabindex="-1" role="dialog" id="modal_send_sms">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Mobile Number</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

        </div>

        <div class="modal-body">
          <div class="alert field_msg hidden" role="alert"></div>

          <input type="hidden" name="field_store_name" id="field_store_name" value="" />
          <input type="hidden" name="field_store_address" id="field_store_address" value="" />
          <input type="hidden" name="field_store_pincode" id="field_store_pincode" value="" />
          <input type="hidden" name="field_store_phone" id="field_store_phone" value="" />
          <input type="hidden" name="field_store_is_open" id="field_store_is_open" value="" />
          <input type="hidden" name="field_store_type" id="field_store_type" value="" />

          <div class="input-group">
            <input type="tel" placeholder="Enter your 10 digit mobile number" maxlength="10" class="form-control" name="field_mob_num" id="field_mob_num" />

            <span class="input-group-btn">
              <button class="btn" type="button" name="btn_send_sms" id="btn_send_sms">Send SMS</button>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- #modal_send_sms -->
  <!-- location instruction section -->

  <div class="instr_wrapper">
    <img src="<?= PATH_FILES_UPLOADS, 'store_locator/instruction.png' ?>" alt="" />

    <div class="sub_btn gotit">
      <button class="submitBtn" name="gotit" id="got_it">GOT IT</button>
    </div>
  </div>
</main>