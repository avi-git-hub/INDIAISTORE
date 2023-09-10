<style>
  .new-store-structure .form-control {
   
    color: #ffffff;
    background-color: #000000;
   border-radius: 4px;
   height: 50px;
  
}
section.locate-store {
    padding: 36px 0px;
    padding-top: 55px;
}
.new-store-structure .form-control:focus {
    outline: none;
    color: #ffffff;
    background-color: #000000;
    border-color: #ffffff;
   box-shadow: none;
}
.new-store-structure .error, .new-store-structure .error:focus{color:red !important;border-color:red !important;}
.new-store-structure .form-control::placeholder { color:#ffffff;}
.new-store-structure .error::placeholder { color:red !important;}
.new-store-structure .submitBtn{
  background-color: #41b0bc;
    color: #ffffff;
    /* width: 176%; */
    border: 0;
    border-radius: 6px !important;
    padding: 15px 51px;
    margin: 25px 0px;
}
.nearby{margin-top:13px;}
.new-store-structure .sub_btn{
margin:0 auto;
display:table;
}
.container_cust{    
  margin: 0 auto;
    width: 81%;
    margin-bottom: 35px;}
    .new-store-structure .form-group:after{
      content: '\e907';
    font-family: 'icon-font' !important;
    speak: never;
    font-style: normal;
    font-weight: normal;
    font-variant: normal;
    text-transform: none;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    padding: 0px 0;
    position: absolute;
    font-weight: normal;
    right: 25px;
    top: 21px;
    color: #ffffff;
    z-index: 1;
    text-align: center;
    /* width: 4%; */
    font-size: 9px;
    /* height: 100%; */
    pointer-events: none;
}
   select{
    background: transparent;
  -webkit-appearance: none;
 
   }
   section.locate-store h2{
  font-size: 33px;
}
   @media only screen and (max-width: 767px){
    .container_cust {
    margin: 0 auto;
    width: 89%;
    margin-bottom: 23px;
}
section.locate-store h2{font-size: 19px;}
.nearby {
    margin-top: 0px;
}

  }


  /* Not found section CSS*/
  .not_found_wrapper {
    text-align: center;
    height: 80vh;
    width: 650px;
    margin: 0 auto;
    padding-top: 5%;
}
</style>
<section class="locate-store bg-dark"  style="display:none;">
  <div class="container">
    <h2 class="heading-2">Locate a store <a href="#" class="nearby" id="nearby">Search Nearby</a></h2>

    <div class="select-dd">
      <div class="drop state-drop">
        <select class="select-state-dd" id="select-state-dd" name="state">
          <option></option>
          <?php foreach ($states as $state) : ?>
            <option value=<?= $state->id ?>><?= $state->name ?></option>
          <?php endforeach; ?>
        </select>
      </div>

      <div class="drop city-drop">
        <select class="select-city-dd" id="select-city-dd" name="select-city-dd">
          <option></option>
        </select>
      </div>
    </div>
  </div>
</section>

<section class="locate-store bg-dark">
  <div class="container_cust">
    <h2 class="heading-2">Locate a store near you <a href="#" class="nearby" id="nearby">Search Nearby</a></h2>
    </div>
    <div class="new-store-structure">
    <div class="container1">
      <form name="form_state_city_2" id="form_state_city_2" class="find_now_band_main" method="post">
          <div class="col-md-12">
           <div class="row">
             <div class="col-md-1">
               
            </div>
              <div class="col-md-3 pincode-p">
                    <div class="fm-group">
                      <input name="pincode_2" type="text" class=" form-control pincode" id="pincode_2" inputmode="numeric" maxlength="6" placeholder="Enter Pincode">
                    </div>
              </div>

              <div class="col-md-1">
                <p style="text-align: center; padding-top: 11px;padding-bottom: 11px;"><span>OR</span></p>
              </div>

              
              <div class="col-md-3 col-6">
                <div class="form-group">
                  <select class="form-control arrow-select" name="frmstate_2" id="frmstate_2">
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

              <div class="col-md-3 col-6">
                <div class="form-group">
                  <select class="form-control" name="frmcity_2" id="frmcity_2">
                    <option value="">Select City</option>
                  </select>
                </div>
              </div>
              <div class="col-md-1">
               
               </div>
        </div>
        </div>
        <div class="col-md-12">
                <div class="sub_btn">
                  <input type="submit" class="submitBtn ga_search_store_locator" name="search_submit_2" id="search_submit_2" value="SEARCH">
                </div>
              </div>
      </form>
    </div>
</div>
</section>