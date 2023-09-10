<main id="consumer_bank_offers">
  <section class="bg-black">
    <div class="video_banner">
      <img src="<?= PATH_FRONTEND_CUSTOM_IMG . "consumer_loans_offers/desktop_n.png" ?>" class="fordesktoponly bigimg w_century">

      <img src="<?= PATH_FRONTEND_CUSTOM_IMG . "consumer_loans_offers/mobile_n.png" ?>" class="formobileonly w_century din">
    </div>
  </section>

  <section class="s1">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-offset-1 col-md-10">
          <div class="">
            <h2 class="s_title"></h2>
          </div>

          <div id="consumerTable">
            <ul class="nav" role="tablist">
              <li role="presentation" class="nav-item">
                <a href="#hdfc_bank" aria-controls="card_fs_loans" role="tab" data-toggle="tab" aria-expanded="true" class="nav-link active  ga_zero_downpayment">
                  <img src="<?= PATH_FRONTEND_CUSTOM_IMG . "consumer_loans_offers/partner_loan_offer_1.png" ?>" class="img-responsive"> <br> Consumer Loans</a>
              </li>

              <li role="presentation" class="nav-item">
                <a href="#all_bank" aria-controls="card_emi" role="tab" class="ga_tt_downpayment nav-link" data-toggle="tab" aria-expanded="false">
                  <img src="<?= PATH_FRONTEND_CUSTOM_IMG . "consumer_loans_offers/three_logo.png" ?>" class="img-responsive"><br> Consumer Loans</a>
              </li>
            </ul>

            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="hdfc_bank">
                <table class="table table-bordered">
                  <thead>
                    <tr class="loanHead">
                      <th colspan="3">0 Down Payment, 0% Interest, 24 EMI</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr>
                      <td class="strongHead"><strong>Eligible Products</strong></td>
                      <td class="strongHead">Down payment</td>
                      <td class="strongHead">EMI <p>(HDFC)</p>
                      </td>
                    </tr>

                    <tr>
                      <td>Phone SE (64 GB)</td>
                      <td>0</td>
                      <td>₹1663.00</td>
                    </tr>

                    <?php
                    // <tr>
                    //   <td>iPhone XR (64 GB)</td>
                    //   <td>0</td>
                    //   <td>₹1996.00</td>
                    // </tr>
                    ?>

                    <tr>
                      <td>iPhone 11 (64 GB)</td>
                      <td>0</td>
                      <td>₹2288.00</td>
                    </tr>

                    <tr>
                      <td>iPhone 12 mini (64 GB)</td>
                      <td>0</td>
                      <td>₹2913.00</td>
                    </tr>

                    <tr>
                      <td>iPhone 12 (64 GB)</td>
                      <td>0</td>
                      <td>₹3329.00</td>
                    </tr>

                    <tr>
                      <td>iPhone 12 Pro (128 GB)</td>
                      <td>0</td>
                      <td>₹4996.00</td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <div role="tabpanel" class="tab-pane" id="all_bank">
                <table class="table table-bordered">
                  <thead>
                    <tr class="loanHead">
                      <th colspan="3">33% Down Payment, 0% Interest, 24 EMI</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr>
                      <td class="strongHead"><strong>Eligible Products</strong></td>
                      <td class="strongHead">Down payment</td>
                      <td class="strongHead">EMI <p>(BFL, IDFC and ZestMoney)</p>
                      </td>
                    </tr>

                    <tr>
                      <td>Phone SE (64 GB)</td>
                      <td>₹13300.00</td>
                      <td>₹1108.00</td>
                    </tr>

                    <?php
                    // <tr>
                    //   <td>iPhone XR (64 GB)</td>
                    //   <td>₹15967.00</td>
                    //   <td>₹1331.00</td>
                    // </tr>
                    ?>

                    <tr>
                      <td>iPhone 11 (64 GB)</td>
                      <td>₹18300.00</td>
                      <td>₹1525.00</td>
                    </tr>

                    <tr>
                      <td>iPhone 12 mini (64 GB)</td>
                      <td>₹23300.00</td>
                      <td>₹1942.00</td>
                    </tr>

                    <tr>
                      <td>iPhone 12 (64 GB)</td>
                      <td>₹26633.00</td>
                      <td>₹2219.00</td>
                    </tr>

                    <tr>
                      <td>iPhone 12 Pro (128 GB)</td>
                      <td>₹39966.00</td>
                      <td>₹3330.00</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="s_loan_calculator d-none">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">
          <h2 class="s_title">Loan Calculator</h2>
          <!-- <h4 class="s_subtitle mb_xs_30 mb_md_60">on HDFC Bank Cards</h4> -->

          <div class="row">
            <div class="col-sm-offset-1 col-sm-10 padding_zero">
              <div class="row row_space">
                <div class="col-sm-12 col-md-offset-2 col-md-4">
                  <select id="field_epc_partner" class="form-control mb_xs_15 factor_for_calc">
                    <option value="">Select Partner</option>
                  </select>
                </div>

                <div class="col-sm-12 col-md-4">
                  <select id="field_epc_product" class="form-control mb_xs_15 factor_for_calc">
                    <option value="">Select Product</option>
                    <?php
                    foreach ($products_for_epc as $product) {
                      echo '<option value="', $product->prod_name, '">', $product->prod_name, '</option>';
                    }
                    ?>
                  </select>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-12 col-md-offset-2 col-md-4">
                  <select id="field_epc_storage" class="form-control mb_xs_15 factor_for_calc">
                    <option value="">Select Storage</option>
                  </select>
                </div>

                <div class="col-sm-12 col-md-4">
                  <select id="field_epc_color" class="form-control factor_for_calc">
                    <option value="">Select Color</option>
                  </select>
                </div>
              </div>
            </div>
          </div>

          <div id="price_container" class="mt_xs_30 mt_md_60 price_container">
            <div id="prod_loan_amount" class="mb_xs_15 mb_md_15 prod_loan_amount">Loan Amount:<br>&#x20B9;<span></span></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="s2 bg_grey">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-offset-1 col-md-10">
          <div class="assuredBlock">
            <h3>Assured Buyback Value of 25% in 24 months*</h3>

            <img src="<?= PATH_FRONTEND_CUSTOM_IMG . "consumer_loans_offers/s_logo.png" ?>" class="img-responsive" />

            <h4>Servify Assured Buyback</h4>

            <p>Buy a new iPhone on 24 months consumer finance scheme from</p>

            <p>HDFC Bank, Bajaj Finance Ltd, IDFC FIRST Bank or ZestMoney</p>

            <p>& get a free Assured Buyback Plan for 24 months!</p>

            <!-- <img src="<?= PATH_FRONTEND_CUSTOM_IMG . "consumer_loans_offers/detailimg.png" ?>" class="img-responsive dimage"/> -->
          </div>
        </div>

        <div class="col-sm-12 col-md-offset-2 col-md-8">
          <div class="servifyDetails">
            <h4>This plan will be activated by the reseller store for your new iPhone after purchase.</h4>

            <div class="wrapper_inner_box_2 top_box">
              <div class="rank_num">
                <img src="<?= PATH_FRONTEND_CUSTOM_IMG . "consumer_loans_offers/1.png" ?>" alt="icon">
              </div>

              <div class="city_score pd_rt">
                <h3 class="city_clr back_city_ft_new">Pre-determined Assured Buyback Price</h3>
              </div>
            </div>

            <div class="wrapper_inner_box_2 top_box">
              <div class="rank_num">
                <img src="<?= PATH_FRONTEND_CUSTOM_IMG . "consumer_loans_offers/2.png" ?>" alt="icon">
              </div>

              <div class="city_score pd_rt">
                <h3 class="city_clr back_city_ft_new">Protection Against Device Price Drop</h3>
              </div>
            </div>

            <div class="wrapper_inner_box_2 top_box">
              <div class="rank_num">
                <img src="<?= PATH_FRONTEND_CUSTOM_IMG . "consumer_loans_offers/3.png" ?>" alt="icon">
              </div>
              <div class="city_score pd_rt">
                <h3 class="city_clr back_city_ft_new">Flexibility of Ownership Duration</h3>
              </div>
            </div>

            <div class="wrapper_inner_box_2 top_box">
              <div class="rank_num">
                <img src="<?= PATH_FRONTEND_CUSTOM_IMG . "consumer_loans_offers/4.png" ?>" alt="icon">
              </div>

              <div class="city_score pd_rt">
                <h3 class="city_clr back_city_ft_new">Application based Buyback</h3>
              </div>
            </div>

            <div class="wrapper_inner_box_2 top_box">
              <div class="city_score pd_rt" style="padding: 0;">
                <h3 class="city_clr back_city_ft_new bottomText">Assured Buyback Value of 25% in 24 months*</h3>
              </div>
            </div>

            <!-- <div class="bottomText"> 
            <h4>Assured Buyback Value of 25% in 24 months*</h4>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="s3">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-offset-1 col-md-10">
          <div class="offerInfo">
            <p>*Get higher value if redeemed earlier.<br> Please refer to the table below.</p>

            <div class="devicelist">
              <h3>Applicable on the following models:</h3>
              <h3>iPhone 12 Pro | iPhone 12 | iPhone 12 mini | iPhone 11 | iPhone SE </h3>
            </div>
          </div>

          <!-- assured table -->
          <div id="buyBackTable">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th colspan="3">Assured Buyback Value</th>
                </tr>
              </thead>

              <tbody>
                <tr class="headText">
                  <td colspan="1">Months</td>
                  <td colspan="1">iPhone 12 Pro, iPhone 12, iPhone 12 mini</td>
                  <td colspan="1"> iPhone 11, iPhone SE</td>
                </tr>

                <tr>
                  <td>10-12 months</td>
                  <td>₹13300.00</td>
                  <td>₹1108.00</td>
                </tr>

                <tr>
                  <td>12-18 months</td>
                  <td>₹15967.00</td>
                  <td>₹1331.00</td>
                </tr>

                <tr>
                  <td>18-21 months</td>
                  <td>₹18300.00</td>
                  <td>₹1525.00</td>
                </tr>

                <tr>
                  <td>21-24 months</td>
                  <td>₹23300.00</td>
                  <td>₹1942.00</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- faqs -->
  <section class="s4">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-offset-1 col-md-10">
          <div class="panel panel-default">
            <div class="panel-heading order_heading" role="tab" id="heading_faq">
              <div class="row">
                <div class="col-sm-12">
                  <h3 class="panel-title order_title">FAQs on Assured Buyback Plan</h3>
                </div>
              </div>
            </div>

            <div class="panel-body order_body">
              <h4>1. What are the program details?</h4>

              <p>The program allows you to pay for the iPhone in 24 month interest free instalments and guarantees a fixed buyback price for your iPhone when you upgrade to your next iPhone. The plan is available on iPhone 12 Pro, iPhone 12, iPhone 12 mini, iPhone 11 and iPhone SE at select Apple authorized reseller stores near you.</p>

              <p>For more FAQs please, <a href="https://servify.in/termsandconditions/servify-assured-buyback-faqs/" target="_blank" class="ga_faqs"> click here.</a></p>

              <!-- <div id="faq" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_faq">
                <ul class="mb_md_0">
                  <li>The cashback shall be credited within 120 business days from the last date of the transaction month on a best effort basis to all open and active card members accounts only.</li>
                  <li>No Extra Cost EMI is also applicable on HDFC Bank Debit and Credit Cards EMI transactions on 6 months tenure only.</li>
                  <li>The cashback offer is applicable only if the transaction value on the card is more than 90% of the MRP of the device being purchased.</li>

                  <li>The offers may be revised or withdrawn without any prior notice.</li>
                  <li>Offers valid for limited period and till stocks last.</li>
                  <li>Product features vary by model.</li>
                </ul>
              </div>

              <div class="text-center">
                <a role="button" data-toggle="collapse" href="#faq" aria-expanded="false" aria-controls="faq" class="cta_load_more collapsed"></a>
              </div> -->
            </div>
          </div>
        </div>
      </div>
  </section>
  <!-- end -->

  <section class="s6">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-offset-1 col-md-10">
          <div class="panel panel-default">
            <div class="panel-heading order_heading" role="tab" id="heading_tnc">
              <div class="row">
                <div class="col-sm-12">
                  <h3 class="panel-title order_title">*Terms &amp; Conditions</h3>
                </div>
              </div>
            </div>

            <div class="panel-body order_body">
              <ul class="mb_md_0">
                <li>No Extra Cost EMI consumer loan scheme available on Bajaj Finance Ltd, HDFC Bank, IDFC FIRST Bank and ZestMoney. </li>

                <li>0 Down Payment and EMI of ₹3329.00 is computed on the 24/0 No Extra Cost EMI consumer loan scheme available on HDFC Bank for a tenure of 24 months on the MRP of iPhone 12 64 GB, (15.40 cm, 1 N) </li>

                <li>₹26633.00 Down Payment and EMI of ₹2219.00 is computed on the 36/12 No Extra Cost EMI consumer loan scheme available on Bajaj Finance, IDFC First Bank and ZestMoney for a tenure of 24 months on the MRP of iPhone 12 64 GB, (15.40 cm, 1 N). </li>
              </ul>

              <div id="tnc" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_tnc">
                <ul class="mb_md_0">
                  <li>The consumer loan approval from the financier is at their sole discretion. </li>

                  <li>The assured buyback plan is provided by Servify exclusively on select iPhone models at their sole discretion. </li>

                  <li>The assured buyback plan along with 24 months consumer loan schemes will be enabled by Apple Authorised Reseller stores at the time of purchase. </li>

                  <li>Assured buyback plan redemption by Servify will be subject to fulfilment of program terms & conditions as communicated by Servify at the time of purchase. For more details, <a href="https://servify.in/abb-plan/" class="ga_assured_buyback" target="_blank">click here</a></li>

                  <li>The offers may be revised or withdrawn without any prior notice.</li>

                  <li>Product features vary by model.</li>
                </ul>

                <p style="margin-bottom: 0;color: #5d5d5d">TM and © 2021 Apple Incl. All rights reserved.</p>

                <p style="color: #5d5d5d">For details Servify Terms & Conditions,<a href="https://servify.in/termsandconditions/terms-and-conditions-of-assured-buy-back/" class="ga_tnc_click_here" target="_blank"> click here.</a></p>
              </div>

              <div class="text-center">
                <a role="button" data-toggle="collapse" href="#tnc" aria-expanded="false" aria-controls="tnc" class="cta_load_more collapsed"></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php
if (ENVIRONMENT == 'production') {
?>
  <!-- event codes -->
  <script type="text/javascript">
    $(document).on("click", ".ga_zero_downpayment", function() {
      ga("send", {
        hitType: "event",
        eventCategory: "Engagement",
        eventAction: "Click",
        eventLabel: "Consumer Loans-0% Down Payment"
      });
      console.log('Consumer Loans-0% Down Payment');
    });

    $(document).on("click", ".ga_tt_downpayment", function() {
      ga("send", {
        hitType: "event",
        eventCategory: "Engagement",
        eventAction: "Click",
        eventLabel: "Consumer Loans-33% Down Payment"
      });
      console.log('Consumer Loans-33% Down Payment');
    });

    $(document).on("click", ".ga_faqs", function() {
      ga("send", {
        hitType: "event",
        eventCategory: "Engagement",
        eventAction: "Click",
        eventLabel: "Click Here-FAQ"
      });
      console.log('Click Here-FAQ');
    });

    $(document).on("click", ".ga_assured_buyback", function() {
      ga("send", {
        hitType: "event",
        eventCategory: "Engagement",
        eventAction: "Click",
        eventLabel: "Click Here-Servify Assured Buyback"
      });
      console.log('Click Here-Servify Assured Buyback');
    });

    $(document).on("click", ".ga_tnc_click_here", function() {
      ga("send", {
        hitType: "event",
        eventCategory: "Engagement",
        eventAction: "Click",
        eventLabel: "Click Here-Servify T&C"
      });
      console.log('Click Here-Servify T&C');
    });
  </script>
<?php
}
?>