<style>
  footer .partners a:not(:first-child) {
    border-left: solid 0px #d5d5d5;
  }

  footer .partners a:nth-child(2) {
    border-left: solid 1px #d5d5d5;
    border-right: solid 1px #d5d5d5;
  }

  @media (min-width: 1025px) {
    footer nav #footer-accordion>li {
      font-weight: 600;
    }

    footer nav #footer-accordion>li.has-menu ul a {
      font-weight: bold;
      opacity: 9;
    }
  }

  footer .social-icons li .fab {
    color: #ffffff;
  }

  footer .social-icons li a {
    border: solid 1px #ffffff;
  }

  @media (max-width: 1024.98px) {
    footer nav li a {
      font-weight: bold;
    }
  }

  @media (max-width: 1024.98px) {
    footer nav li.has-menu ul a {
      font-weight: 600;
      opacity: 9;
    }


  }

  @media (max-width: 768px) {
    footer .partners a img.logo_ingram {
      max-width: 70px !important;
    }
  }
</style>
<?php
$footer_first_menu_data = memcached_get("footer-first-nav-data");
if (!$footer_first_menu_data) {
  $footer_first_menu_data = get_nav_data('footer-first');
  memcached_save("footer-first-nav-data", $footer_first_menu_data, 3600);
}

$footer_second_menu_data = memcached_get("footer-second-nav-data");
if (!$footer_second_menu_data) {
  $footer_second_menu_data = get_nav_data('footer-second');
  memcached_save("footer-second-nav-data", $footer_second_menu_data, 3600);
}

$footer_third_menu_data = memcached_get("footer-third-nav-data");
if (!$footer_third_menu_data) {
  $footer_third_menu_data = get_nav_data('footer-third');
  memcached_save("footer-third-nav-data", $footer_third_menu_data, 3600);
}
?>

<div class="instruction_wrapper">
  <img src="<?= PATH_FILES_UPLOADS, 'store_locator/instruction.png' ?>" alt="" />
  <div class=" text-center">
    <button class="btn btn-primary">GOT IT</button>
  </div>
</div>

<div class="process_loader"></div>

<footer>
  <div class="wrapper bg-dark">
    <div class="container">
      <nav>
        <ul class="accordion justify-content-around" id="footer-accordion">
          <li class="has-menu explore">
            <a href="" class="collapsed" data-toggle="collapse" data-target="#exploreCollapse" aria-expanded="true"
              aria-controls="exploreCollapse">EXPLORE <i class="ii-icon-arrow-up"></i></a>
            <?php if (!empty(@$footer_first_menu_data)): ?>
              <ul id="exploreCollapse" class="collapse" data-parent="#footer-accordion">
                <?php foreach ($footer_first_menu_data as $first_m): ?>
                  <li><a href="<?= base_url($first_m->slug) ?>"><?= $first_m->name ?></a></li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>
          </li>

          <li class="has-menu offers">
            <a href="" class="collapsed" data-toggle="collapse" data-target="#offersCollapse" aria-expanded="true"
              aria-controls="offersCollapse">OFFERS <i class="ii-icon-arrow-up"></i></a>

            <?php if (!empty(@$footer_second_menu_data)): ?>
              <ul id="offersCollapse" class="collapse" data-parent="#footer-accordion">
                <?php foreach ($footer_second_menu_data as $second_m): ?>
                  <li><a href="<?= base_url($second_m->slug) ?>"><?= $second_m->name ?></a></li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>
          </li>

          <li class="has-sub-menu">
            <ul>
              <?php if (!empty(@$footer_third_menu_data)): ?>
                <?php foreach ($footer_third_menu_data as $third_m): ?>
                  <li><a href="<?= base_url($third_m->slug) ?>"><?= $third_m->name ?></a></li>
                <?php endforeach; ?>
              <?php endif; ?>

              <li class="social-icons">
                <a href="">CONNECT WITH US</a>

                <ul>
                  <li><a data-social-name="Facebook" href="https://www.facebook.com/indiaistore/" target="_blank"><i
                        class="fab fa-facebook-f"></i></a></li>
                  <li><a data-social-name="Twitter" href="https://twitter.com/indiaistore" target="_blank"><i
                        class="fab fa-twitter"></i></a></li>
                  <li><a data-social-name="Instagram" href="https://www.instagram.com/indiaistore/" target="_blank"><i
                        class="fab fa-instagram"></i></a></li>
                  <li><a data-social-name="Youtube" href="https://www.youtube.com/channel/UCSUfTb8JAeoaRnu1zxGQomA"
                      target="_blank"><i class="fab fa-youtube"></i></a></li>
                      <li><a data-social-name="Youtube" href="https://www.threads.net/@indiaistore"
                      target="_blank"><img style="    padding: 5px;border-radius: 19px;min-height: 11px;height: 30px;" src="https://stage.indiaistore.com/files/uploads/thread.png"></a></li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
      </nav>

      <!-- <div class="social-icons">
        <h4 class="heading">Connect with us</h4>
      </div> -->
    </div>
  </div>

  <div class="container">
    <div class="partners">
      <a href="https://in.ingrammicro.com/Site/home" target="_blank">
        <picture>
          <source media="(max-width: 768px)" srcset="<?= PATH_FRONTEND_CUSTOM_IMG . 'logos/ingram.png' ?>">
          <source media="(min-width: 769px)" srcset="<?= PATH_FRONTEND_CUSTOM_IMG . 'logos/ingram.png' ?>">
          <img data-src="<?= PATH_FRONTEND_CUSTOM_IMG . 'logos/ingram.png' ?>" class="logo_ingram">
        </picture>
      </a>


      <a href="https://redingtongroup.com/" target="_blank">
        <picture>
          <source media="(max-width: 768px)" srcset="<?= PATH_FRONTEND_CUSTOM_IMG . 'logos/redington-new.png' ?>">
          <source media="(min-width: 769px)" srcset="<?= PATH_FRONTEND_CUSTOM_IMG . 'logos/redington-new.png' ?>">
          <img data-src="<?= PATH_FRONTEND_CUSTOM_IMG . 'logos/redington-new.png' ?>" class="logo_redington">
        </picture>
      </a>
      <a href="https://indiaistore.com/" target="_blank">
        <picture>
          <source media="(max-width: 768px)"
            srcset="<?= PATH_FRONTEND_CUSTOM_IMG . 'logos/authorized-distributors.png' ?>">
          <source media="(min-width: 769px)"
            srcset="<?= PATH_FRONTEND_CUSTOM_IMG . 'logos/authorized-distributors-dex.png' ?>">
          <img data-src="<?= PATH_FRONTEND_CUSTOM_IMG . 'logos/authorized-distributors.png' ?>" class="">
        </picture>
      </a>
    </div>

    <div class="copy">
      <span>&copy; 2023 IndiaiStore. All rights reserved.</span>
    </div>
  </div>
</footer>

<!-- scripts -->
<?php require_once ABS_PATH_FRONTEND_SNIPPETS . 'partials/scripts.php'; ?>
<?php
$currentURL1 = current_url();
?>
<?php
if ($currentURL1 == 'https://www.indiaistore.com/enterprise') {
  ?>
  <script type="text/javascript">
    _linkedin_partner_id = "1731633";
    window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
    window._linkedin_data_partner_ids.push(_linkedin_partner_id);
  </script>
  <script type="text/javascript">
    (function (l) {
      if (!l) {
        window.lintrk = function (a, b) { window.lintrk.q.push([a, b]) };
        window.lintrk.q = []
      }
      var s = document.getElementsByTagName("script")[0];
      var b = document.createElement("script");
      b.type = "text/javascript"; b.async = true;
      b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
      s.parentNode.insertBefore(b, s);
    })(window.lintrk);
  </script>
  <noscript>
    <img height="1" width="1" style="display:none;" alt=""
      src="https://px.ads.linkedin.com/collect/?pid=1731633&fmt=gif" />
  </noscript>
  <?php
}
?>
<script type="text/javascript">
  _linkedin_partner_id = "1731633";
  window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
  window._linkedin_data_partner_ids.push(_linkedin_partner_id);
</script>
<script type="text/javascript">
  (function (l) {
    if (!l) {
      window.lintrk = function (a, b) { window.lintrk.q.push([a, b]) };
      window.lintrk.q = []
    }
    var s = document.getElementsByTagName("script")[0];
    var b = document.createElement("script");
    b.type = "text/javascript"; b.async = true;
    b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
    s.parentNode.insertBefore(b, s);
  })(window.lintrk);
</script>
<noscript>
  <img height="1" width="1" style="display:none;" alt=""
    src="https://px.ads.linkedin.com/collect/?pid=1731633&fmt=gif" />
</noscript>
</body>

</html>