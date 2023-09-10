<style>
    .calc-upper .attribute{text-transform: uppercase;}
</style>
<section class="effective-price-calculator">
  <div class="container">
    <div class="box">
      <div class="heading-container">
        <h2 class="heading-2">Effective Price Calculator</h2>

        <!-- <div class="heading-desc">on <span><img src="<?= PATH_FRONTEND_CUSTOM_IMG . 'logos/hdfc.png' ?>"></span> Cards</div> -->
      </div>

      <div class="selection image">
        <h4 class="heading-4">Select Model</h4>

        <div class="slider">
          <?php foreach ($epc_products as $i => $product) : ?>
            <div class="slider-item">
              <?php
              // replace the below ($i == 0) condition
              // with ($product->prod_slug == $prod_slug)
              // if you want to show selected product of the active page
              ?>
              <div class="model<?= ($i == 0) ? ' selected' : '' ?>" data-value="<?= $product->prod_id ?>" data-prod-slug="<?= $product->prod_slug ?>">
                <div class="img">
                  <img src="<?= PATH_FILES_UPLOADS, "products/$product->prod_slug/$product->prod_img_xs" ?>" alt="<?= $product->prod_name ?>">
                </div>

                <div class="name"><?= $product->prod_name ?></div>
              </div>
            </div>
          <?php endforeach ?>
        </div>
      </div>

      <div class="selection color"></div>

      <div class="selection rect prodprices"></div>
 
      <div class="selection processor calc-upper"></div>

      <div class="pricing-calculation">
        <table>
          <tr class="d-none">
            <td>MRP</td>

            <td><span class="epc_mrp">--</span></td>
          </tr>

          <tr class="d-none">
            <td>Instant Store Discount
              <small style="line-height: 1rem;">
              </small>
            </td>

            <td><span class="epc_store_discount">--</span></td>
          </tr>

          <tr class="d-none">
            <td>Effective price
              <small style="line-height: 1rem;" id="epc_effective_price_text">
              </small>
            </td>

            <td><span class="epc_effective_price">--</span></td>
          </tr>

          <tr class="d-none">
            <td><span id="epc_exchange_effective_title_text">Exchange Effective price</span>
              <small style="line-height: 1rem;" id="epc_exchange_effective_price_text">
              </small>
            </td>
            <td><b><span class="epc_exchange_effective_price">--</span></b></td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</section>