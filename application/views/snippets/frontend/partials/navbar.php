<header>

  <nav>
    <div class="container">
      <ul class="main-menu">
        <li class="toggle-nav">
          <div class="bars">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
          </div>
        </li>
        <li class="logo">
          <a href="/"><img src="<?= PATH_FRONTEND_CUSTOM_IMG . 'logos/logo@2x.png' ?>" alt="India iStore"></a>
        </li>
        <li>
          <section class="header-search search">
            <div class="helper">
              <div class="search-container">
                <div class="search-input">
                  <input type="text" id="q" placeholder="Search">

                  <i class="ii-icon-search"></i>
                  <i class="ii-icon-close clear"></i>
                </div>



              </div>
              <div id="search-results">
              </div>
              <div class="trending" data-search="0">
                <div class="heading">Trending</div>

                <?php if (!empty($trend_search_data)) : ?>
                  <div class="list">
                    <?php foreach ($trend_search_data as $ts_data) : ?>
                      <div data-href="<?= $ts_data->cta ?>" class="item"><?= $ts_data->name ?></div>
                    <?php endforeach; ?>
                  </div>
                <?php endif; ?>
              </div>

              <div class="search-no-result">
                <img src="<?= PATH_FILES_UPLOADS . 'search_404.png' ?>" alt="">
                <h6>No result found</h6>
              </div>
            </div>

            <div class="floating-wigdet-store" style="display:none;">
              <div class="icon-container">
                <a href="<?= base_url('store-locator') ?>" target="_blank">
                  <span class="calculator-img top"> <i class="ii-icon-map-pin"></i></span><span class="background font">Find A Store</span>
                </a>
              </div>
            </div>
          </section>
        </li>
        <li class="icon location">
          <a href="javascript:void(0);">
            <span class="ii-icon-map-pin-badge"></span>
            <i class="ii-icon-map-pin"></i>
            <div class="txt">Location</div>
          </a>
        </li>
        <!-- <li class="icon at-work">
          <a href="<?= base_url('store-locator') ?>"> -->
        <!-- <i class="ii-icon-briefcase"></i> -->
        <!-- <img src="<?= PATH_FRONTEND_CUSTOM_IMG, 'svg/store-locator-icon.svg' ?>" alt="Stores" />
            <div class="txt">Store Locator</div>
          </a>
        </li> -->
        <!-- navbar changes -->
        <li class="icon offers">
          <a href="<?= base_url('offers') ?>">
            <i class="ii-icon-offers"></i>
            <div class="txt">Offers</div>
          </a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="hamburger-menu">
    <div class="hamburger-menu-inner">
      <div class="container">
        <div class="wrapper">
          <div class="close-menu">
            <div class="ii-icon-close"></div>
          </div>

          <?php if (!empty(@$main_menu_cat_data)) : ?>
            <ul class="accordion" id="category-menu">

              <li><a href="<?= base_url(); ?>" data-menu-name="Home">Home</a></li>

              <?php foreach ($main_menu_cat_data as $cat) : ?>
                <li class="has-menu">
                  <a href="<?= base_url($cat->cat_slug); ?>" data-toggle="collapse" data-target="#menu<?= $cat->cat_id ?>-collapse" aria-expanded="false" class="collapsed" aria-controls="menu<?= $cat->cat_id ?>-collapse">
                    <?= $cat->cat_name ?> <i class="ii-icon-arrow-up"></i>
                  </a>
                  <ul id="menu<?= $cat->cat_id ?>-collapse" class="collapse" data-parent="#category-menu">
                  <?php if($cat->cat_name == 'Mac'){ ?>
                     <!-- <li><a href="https://www.indiaistore.com/macbook-air-m2-chip">MacBook Air (M2 chip) <div class="badge">New</div></a></li> -->
                     <!-- <li><a href="https://www.indiaistore.com/macbook-pro-m2-chip">MacBook Pro (M2 chip) <div class="badge">New</div></a></li> -->
                   <?php } ?>
                    <?php foreach ($cat->products as $prod) : ?>
                      <li>
                        <a href="<?= base_url($prod->prod_slug); ?>" data-menu-name="<?= $cat->cat_name ?>" data-prod-name="<?= $prod->prod_name ?>"><?= $prod->prod_name ?>
                          <?php if ($prod->prod_is_new_status == '1') : ?>
                            <div class="badge">New</div>
                          <?php endif; ?>
                        </a>
                      </li>
                    <?php endforeach; ?>
                    <?php if($cat->cat_name == 'Mac'){ ?>
                      <!-- <li><a href="https://www.indiaistore.com/mac-studio">Mac Studio</a></li> -->
                      <!-- <li><a href="https://www.indiaistore.com/studio-display">Studio Display</a></li> -->
                    <?php } ?>
                    <?php if($cat->cat_name == 'Watch'){ ?>
                      <li><a href="https://www.indiaistore.com/why-apple-watch">Why Apple Watch</a></li>
                      
                    <?php } ?>
                  </ul>
                </li>
              <?php endforeach; ?>

              <?php if (!empty(@$main_menu_2_data)) : ?>
                <?php foreach ($main_menu_2_data as $key => $nav) : ?>
                  <li><a href="<?= base_url($nav->slug) ?>" data-menu-name="<?= $nav->name ?>"><?= $nav->name ?></a></li>
                <?php endforeach; ?>
              <?php endif; ?>

            </ul>
          <?php endif; ?>


          <?php if (!empty(@$main_menu_data)) : ?>
            <ul class="misc-links">
              <?php foreach ($main_menu_data as $key => $nav) : ?>
                <li><a href="<?= base_url($nav->slug) ?>" data-menu-name="<?= $nav->name ?>"><?= $nav->name ?></a></li>
              <?php endforeach; ?>
            </ul>
          <?php endif; ?>

          <ul class="social-media">
            <li><a href="https://www.facebook.com/indiaistore/" target="_blank" data-menu-name="Facebook"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="https://twitter.com/indiaistore" target="_blank" data-menu-name="Twitter"><i class="fab fa-twitter"></i></a></li>
            <li><a href="https://www.instagram.com/indiaistore/" target="_blank" data-menu-name="Instagram"><i class="fab fa-instagram"></i></a></li>
            <li><a href="https://www.youtube.com/channel/UCSUfTb8JAeoaRnu1zxGQomA" target="_blank" data-menu-name="Youtube"><i class="fab fa-youtube"></i></a></li>
            <li><a data-social-name="Youtube" href="https://www.threads.net/@indiaistore"
                      target="_blank"><img style="    padding: 5px;border-radius: 19px;min-height: 11px;height: 30px;" src="https://stage.indiaistore.com/files/uploads/thread.png"></a></li>
          </ul>
        </div>
      </div>
    </div>
</header>


<?php if (false) : ?>
  <!-- <section class="offerbandfornewproduct"> <a href="https://www.youtube.com/watch?v=EvGOlAkLSLw" target="_blank">The Big day is here! Catch the exciting announcements from Apple Park tonight at 10:30 PM.</a> </section> -->
<?php endif; ?>