<style>
 .tns-outer {
    position: relative;
}
    .tns-outer .tns-controls {
    position: absolute;
    top: 50%;
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

</style>

<?php if (!empty($products)) : ?>
<section class="sort-filter">
    <div class="filter-close-overlay"></div>

    <div class="filters" id="filter-accordion">
        <div class="container">
            <div class="filters-wrapper">
                <div class="heading">
                    <div class="close-filters">
                        <i class="ii-icon-arrow-left"></i>
                        <span>Filter</span>
                    </div>
                    <div id="reset_prod_filters" class="reset">Reset All</div>
                </div>

                <div class="filter-list" id="filter-parent">
                    <div class="filter-item">
                        <a href="javascript:void(0)" class="collapsed" data-toggle="collapse" data-target="#f1"
                            aria-expanded="false" aria-controls="f1">Price <i class="ii-icon-arrow-up"></i></a>

                        <ul id="f1" class="collapse" data-parent="#filter-parent">
                            <li>
                                <div class="range-slider">
                                    <input type="hidden" value="<?= $my_budget->min_price ?>" id="filter_min_price">
                                    <input type="hidden" value="<?= $my_budget->max_price ?>" id="filter_max_price">
                                    <input type="hidden" value="<?= $products[0]->cat_slug ?>"
                                        id="filter_category_slug">
                                    <div id="filterRangeSlider"></div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <?php $i = 2 ?>
                    <?php foreach ($product_filters as $filter_group => $filter) : ?>
                    <div class="filter-item">
                        <a href="javascript:void(0)" <?= ($i == 2) ? '' : ' class="collapsed"' ?> data-toggle="collapse"
                            data-target="#f<?= $i ?>" aria-expanded="true" aria-controls="<?= $i ?>">
                            <?= ucwords(strtr($filter_group, ['_' => ' '])) ?> <i class="ii-icon-arrow-up"></i>
                        </a>

                        <ul id="f<?= $i ?>" class="collapse<?= ($i == 2) ? ' show' : '' ?>"
                            data-parent="#filter-parent">
                            <?php foreach ($filter as $filter_value) : ?>
                            <li>
                                <label>
                                    <input type="checkbox" name="prod_filter_<?= $filter_group ?>"
                                        value="<?= $filter_value->feat_id ?>" />
                                    <div class="box"></div>
                                    <span><?= $filter_value->feat_title ?></span>
                                </label>
                            </li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                    <?php $i++; ?>
                    <?php endforeach ?>

                    <!-- <div class="filter-item">
              <a href="" data-toggle="collapse" data-target="#f3" aria-expanded="true" aria-controls="f3">Storage <i class="ii-icon-arrow-down"></i></a>

              <ul id="f3" class="collapse show" data-parent="#filter-parent">
                <li>
                  <label>
                    <input type="checkbox">
                    <div class="box"></div>
                    <span>64 GB</span>
                  </label>
                </li>
                <li>
                  <label>
                    <input type="checkbox">
                    <div class="box"></div>
                    <span>128 GB</span>
                  </label>
                </li>
                <li>
                  <label>
                    <input type="checkbox">
                    <div class="box"></div>
                    <span>256 GB</span>
                  </label>
                </li>
              </ul>
            </div> -->
                </div>

                <div class="text-center">
                    <div id="apply_prod_filters" class="btn btn-primary apply">Apply</div>
                </div>
            </div>
        </div>
    </div>

    <div class="cta-helper">
        <div class="container cta-container">
            <div class="cta">
                <div class="btn-sort">
                    <i class="ii-icon-sort"></i>
                    <span>Sort</span>
                </div>
                <div class="btn-filter">
                    <i class="ii-icon-filter"></i>
                    <span>Filter</span>
                </div>
            </div>
        </div>
    </div>

    <div class="sort-close-overlay"></div>

    <div class="sort">
        <div class="container">
            <div class="sort-options">
                <div class="heading">
                    <i class="ii-icon-arrow-left"></i>Sort
                </div>

                <a href="javascript:void(0)" data-value="new">New</a>

                <a href="javascript:void(0)" data-value="name_asc">Name: A-Z</a>

                <a href="javascript:void(0)" data-value="name_desc">Name: Z-A</a>
            </div>
        </div>
    </div>
</section>

<section class="category-info">
    <div class="container">
        <h1 class="category-name">
            <i class="fab fa-apple"></i><?= $products[0]->cat_name ?>
        </h1>
    </div>

    <div class="container container-right">
        <div class="category-listing-carousel">
            <div class="slider clc_slider">
                <?php foreach ($products as $key => $prod) : ?>
                <div class="slider-item">
                    <div class="product <?= ($key == 0) ? 'active' : '' ?>">
                        <div class="img">
                            <img src="<?= PATH_FILES_UPLOADS . "products/$prod->prod_slug/$prod->prod_img_md"; ?>">
                        </div>
                        <div class="name"><?= $prod->prod_name ?></div>
                        <div class="price">₹<span><?= currency_format($prod->prod_mrp, 'INR') ?></span></div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<section class="category-products">
    <div class="container container-right">
        <div class="products-info-carousel">
            <div class="slider pic_slider">
                <?php foreach ($products as $prod) : ?>
                <div class="slider-item">
                    <div class="product" data-prod-name="<?= $prod->prod_name ?>">
                        <div class="name">
                            <span><a href="<?= base_url($prod->prod_slug) ?>"><?= $prod->prod_name ?></a></span>
                            <div class="action">
                                <?php if (!in_array($products[0]->cat_slug,['tv','music'])) : ?>
                                <a class="cat-compare-btn" href="javascript:void(0);" role="button"
                                    title="Add to compare" data-prod-slug="<?= $prod->prod_slug ?>">
                                    <i class="ii-icon-compare"></i>
                                </a>
                                <?php endif; ?>

                                <a class="share cat-share-btn" href="javascript:void(0);" data-html="true"
                                    data-placement="top"
                                    data-popover-content="#cat-share-content-<?= $prod->prod_slug ?>"
                                    data-toggle="popover" tabindex="0"><i class="ii-icon-share"></i></a>

                                <div class="d-none" id="cat-share-content-<?= $prod->prod_slug ?>">
                                    <div class="popover-body">
                                        <div class="share-container">
                                            <h4>SHARE</h4>
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a class="facebook-share-icon"
                                                        href="https://www.facebook.com/sharer/sharer.php?u=<?= urlencode(base_url($prod->prod_slug)) ?>"
                                                        target="_blank">
                                                        <img
                                                            src="<?= PATH_FILES_UPLOADS . 'share-icons/facebook/facebook.png' ?>">
                                                        <p>Facebook</p>
                                                    </a>
                                                </li>

                                                <li class="list-inline-item">
                                                    <a href="https://twitter.com/share?text=<?= urlencode('I love this product on IndiaiStore. Visit your nearest Apple Authorised Resellers today.') ?>&url=<?= urlencode(base_url($prod->prod_slug)) ?>"
                                                        target="_blank" class="twitter-share-icon">
                                                        <img
                                                            src="<?= PATH_FILES_UPLOADS . 'share-icons/twitter/twitter.png' ?>">
                                                        <p>Twitter</p>
                                                    </a>
                                                </li>

                                                <?php if (is_mobile()) : ?>
                                                <li class="list-inline-item">
                                                    <a href="https://wa.me/?text=<?= urlencode(base_url($prod->prod_slug)) ?>"
                                                        target="_blank" class="whatsapp-share-icon">
                                                        <img
                                                            src="<?= PATH_FILES_UPLOADS . 'share-icons/whatsapp/whatsapp.png' ?>">
                                                        <p>WhatsApp</p>
                                                    </a>
                                                </li>
                                                <?php endif; ?>

                                                <li class="list-inline-item">
                                                    <a href="<?= base_url($prod->prod_slug) ?>"
                                                        class="copy-link-share-icon"
                                                        <?= is_mobile() ? "data-trigger='click' data-toggle='tooltip' title='Copied!'" : ''; ?>>
                                                        <img
                                                            src="<?= PATH_FILES_UPLOADS . 'share-icons/copy-link/copy-link.png' ?>">
                                                        <p>Copy Link</p>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="pricing">
                            <div class="desc">Starting from</div>
                            <?php if (empty($prod->prod_effective_price)) : ?>
                            <div class="price">₹ <span><?= currency_format($prod->prod_mrp, 'INR') ?></span></div>
                            <?php else : ?>
                            <div class="price">₹
                                <span><?= currency_format($prod->prod_effective_price, 'INR') ?></span>* <sup
                                    class="note">(Effective price) incl. bank offer</sup>
                            </div>
                            <?php endif; ?>
                        </div>

                        <div class="product-media">
                            <?php if (!empty($prod->images)) : ?>
                            <div class="main-img">
                                <a href="<?= base_url($prod->prod_slug) ?>">
                                    <img
                                        src="<?= PATH_FILES_UPLOADS . "products/pdp/" . $prod->images[0]->pdp_set_slug . "/" . $prod->images[0]->pdp_img; ?>">
                                </a>
                            </div>
                            <div class="product-shots">
                                <div class="slider ps_slider">
                                    <?php foreach ($prod->images as $key => $img) : ?>
                                    <div class="shot-slider-item">
                                        <div class="product-shot <?= ($key == 0) ? 'active' : '' ?>"
                                            data-cta-url="<?= base_url($prod->prod_slug); ?>">
                                            <img src="<?= PATH_FILES_UPLOADS . "products/pdp/" . $prod->images[0]->pdp_set_slug . "/$img->pdp_img"; ?>"
                                                data-large="<?= PATH_FILES_UPLOADS . "products/pdp/" . $prod->images[0]->pdp_set_slug . "/$img->pdp_img"; ?>">
                                        </div>
                                    </div>
                                    <?php endforeach; ?>

                                    <?php if ((!is_null($prod->prod_vid_id)) && (!is_null($prod->prod_vid_thumbnail))) : ?>
                                    <div class="shot-slider-item">
                                        <div class="product-shot" data-asset-type="video"
                                            data-video-url="https://www.youtube.com/watch?v=<?= $prod->prod_vid_id ?>">
                                            <img src="<?= PATH_FILES_UPLOADS, "products/$prod->prod_slug/$prod->prod_vid_thumbnail" ?>"
                                                alt="<?= $prod->prod_name ?> Video"
                                                data-large="<?= PATH_FILES_UPLOADS, "products/$prod->prod_slug/$prod->prod_vid_thumbnail" ?>">
                                        </div>
                                    </div>
                                    <?php endif ?>
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<section class="recommendation">
    <div class="container">
        <div class="box">
            <div class="budget">
                <h4 class="heading-4">My budget</h4>
                <div class="range-slider">
                    <input type="hidden" value="<?= $my_budget->min_price ?>" id="min_price">
                    <input type="hidden" value="<?= $my_budget->max_price ?>" id="max_price">
                    <input type="hidden" value="<?= $products[0]->cat_slug ?>" id="category_slug">
                    <div id="budgetRangeSlider"></div>
                </div>
            </div>

            <div class="products">
                <h4 class="heading-4">Recommendations for you</h4>

                <div class="versus-products">
                </div>
            </div>

            <div class="recommend-compare-btn text-center">
                <a href="#" class="btn btn-primary">Compare</a>
            </div>
        </div>
    </div>
</section>

<?php if (!empty($banner_cat_page_trend)) : ?>
<section class="trending">
    <div class="container">
        <?php if ($products[0]->cat_slug == 'music') : ?>
        <h2 class="heading-2">Most Trending Music Products</h2>
        <?php else : ?>
        <h2 class="heading-2">Most Trending <?= $products[0]->cat_name ?></h2>
        <?php endif ?>

        <div class="slider">
            <?php foreach ($banner_cat_page_trend as $banner) : ?>
            <div class="slider-item <?= $banner->additional_classes ?>">
                <a href="<?= ($banner->cta) ?: 'javascript:void(0);' ?>"
                    target="<?= ($banner->is_external_cta) ? '__blank' : '' ?>" data-banner-name="<?= $banner->name ?>">
                    <picture>
                        <source media="(max-width: 768px)"
                            srcset="<?= PATH_FILES_UPLOADS . "banners/$banner->position_slug/$banner->mobile_image" ?>">
                        <source media="(min-width: 769px)"
                            srcset="<?= PATH_FILES_UPLOADS . "banners/$banner->position_slug/$banner->desktop_image" ?>">

                        <img src="<?= PATH_FILES_UPLOADS . "banners/$banner->position_slug/$banner->desktop_image" ?>"
                            alt="<?= $banner->alt_text ?>">
                    </picture>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<?php if (!empty($tb_reasons_to_buy)) : ?>
<section class="switch-reasons">
    <div class="container">

            <h2 class="heading-2" id="<?php echo $products[0]->cat_name; ?>">There are so many reasons to switch to
            <?php if($products[0]->cat_name == 'TV & Home') { 
                echo 'HomePod';
            } else {
                echo $products[1]->cat_name;
            } 
                
                ?>.</h2>
    </div>

    <div class="reason-categories">
        <div class="container">
            <ul class="nav nav-tabs" role="tablist">
                <?php foreach ($tb_reasons_to_buy as $key => $tb) : ?>
                <li class="nav-item">
                    <a class="nav-link <?= ($key == 0) ? 'active' : '' ?>" data-toggle="tab"
                        href="#tb-<?= slugify($tb->tab_title) ?>" role="tab"><?= $tb->tab_title ?></a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="tab-content">
            <?php foreach ($tb_reasons_to_buy as $key => $tb) : ?>
            <div class="reason tab-pane <?= ($key == 0) ? 'active' : '' ?>" id="tb-<?= slugify($tb->tab_title) ?>"
                role="tabpanel">
                <?php if ($tb->tab_content_type == 'banner-upload') : ?>
                <picture>
                    <picture>
                        <source media="(max-width: 768px)"
                            srcset="<?= PATH_FILES_UPLOADS, 'components/tab-blocks/', $tb->section_slug, '/', $tb->banner_upload_mob ?>">
                        <source media="(min-width: 769px)"
                            srcset="<?= PATH_FILES_UPLOADS, 'components/tab-blocks/', $tb->section_slug, '/', $tb->banner_upload_dex ?>">

                        <img src="<?= PATH_FILES_UPLOADS, 'components/tab-blocks/', $tb->section_slug, '/', $tb->banner_upload_dex ?>"
                            alt="<?= $tb->tab_title, ' content' ?>">
                    </picture>
                </picture>
                <?php elseif ($tb->tab_content_type == 'custom-html') :
                echo $tb->custom_html;
              endif; ?>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<?php if (!empty($tb_reasons_to_buy_2)) : ?>
<section class="switch-reasons">
    <div class="container">
        <h2 class="heading-2">There are so many reasons to switch to
            <?= (strtolower($products[0]->cat_name) == 'music') ? 'AirPods' : $products[0]->cat_name ?>.</h2>
    </div>

    <div class="reason-categories">
        <div class="container">
            <ul class="nav nav-tabs" role="tablist">
                <?php foreach ($tb_reasons_to_buy_2 as $key => $tb2) : ?>
                <li class="nav-item">
                    <a class="nav-link <?= ($key == 0) ? 'active' : '' ?>" data-toggle="tab"
                        href="#tb2-<?= slugify($tb2->tab_title) ?>" role="tab"><?= $tb2->tab_title ?></a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="tab-content">
            <?php foreach ($tb_reasons_to_buy_2 as $key => $tb2) : ?>
            <div class="reason tab-pane <?= ($key == 0) ? 'active' : '' ?>" id="tb2-<?= slugify($tb2->tab_title) ?>"
                role="tabpanel">
                <?php if ($tb2->tab_content_type == 'banner-upload') : ?>
                <picture>
                    <picture>
                        <source media="(max-width: 768px)"
                            srcset="<?= PATH_FILES_UPLOADS, 'components/tab-blocks/', $tb2->section_slug, '/', $tb2->banner_upload_mob ?>">
                        <source media="(min-width: 769px)"
                            srcset="<?= PATH_FILES_UPLOADS, 'components/tab-blocks/', $tb2->section_slug, '/', $tb2->banner_upload_dex ?>">

                        <img src="<?= PATH_FILES_UPLOADS, 'components/tab-blocks/', $tb2->section_slug, '/', $tb2->banner_upload_dex ?>"
                            alt="<?= $tb2->tab_title, ' content' ?>">
                    </picture>
                </picture>
                <?php elseif ($tb2->tab_content_type == 'custom-html') :
                echo $tb2->custom_html;
              endif; ?>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<?php if (!empty($banner_cat_page_feat_acces)) : ?>
<section class="offer-carousel featured-accesories">
    <div class="container">
        <h2 class="heading-2">Featured Accesories</h2>
    </div>

    <div class="container container-right">
        <div class="slider">
            <?php foreach ($banner_cat_page_feat_acces as $banner) : ?>
            <div class="offer-item <?= $banner->additional_classes ?>">
                <a href="<?= ($banner->cta) ?: 'javascript:void(0);' ?>"
                    target="<?= ($banner->is_external_cta) ? '__blank' : '' ?>" data-banner-name="<?= $banner->name ?>">
                    <picture>
                        <source media="(max-width: 768px)"
                            srcset="<?= PATH_FILES_UPLOADS . "banners/$banner->position_slug/$banner->mobile_image" ?>">
                        <source media="(min-width: 769px)"
                            srcset="<?= PATH_FILES_UPLOADS . "banners/$banner->position_slug/$banner->desktop_image" ?>">

                        <img src="<?= PATH_FILES_UPLOADS . "banners/$banner->position_slug/$banner->desktop_image" ?>"
                            alt="<?= $banner->alt_text ?>">
                    </picture>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<?php if (!empty($compare_trending_prod) && sizeof($compare_trending_prod) > 1) : ?>
<section class="compare-models">
    <div class="container">
        <h2 class="heading-2 compare-all-heading">Find the right <?= $products[0]->cat_name ?> for you</h2>

        <a class="heading-desc compare-all-btn" href="<?= base_url("compare/" . $products[0]->cat_slug) ?>">Compare All
            Models <i class="ii-icon-arrow-right"></i></a>

        <div class="versus-products">
            <?php foreach ($compare_trending_prod as $prod) : ?>
            <div class="product"
                style="<?= ($prod->prod_card_bg_color) ? "background-color:$prod->prod_card_bg_color;" : '' ?>">
                <a href="<?= base_url(($prod->prod_slug)) ?>" data-prod-name="<?= ($prod->prod_name) ?>">
                    <picture>
                        <source media="(max-width: 768px)"
                            srcset="<?= PATH_FILES_UPLOADS . "products/$prod->prod_slug/$prod->prod_img_lg" ?>">
                        <source media="(min-width: 769px)"
                            srcset="<?= PATH_FILES_UPLOADS . "products/$prod->prod_slug/$prod->prod_img_lg" ?>">

                        <img class="mob"
                            src="<?= PATH_FILES_UPLOADS . "products/$prod->prod_slug/$prod->prod_img_lg" ?>">
                        <img class="dex"
                            src="<?= PATH_FILES_UPLOADS . "products/$prod->prod_slug/$prod->prod_img_lg" ?>">
                    </picture>
                    <div class="name"><?= $prod->prod_name; ?></div>
                </a>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="compare-models-compare text-center">
            <a href="<?= base_url("compare/") . $products[0]->cat_slug . "?" . implode("-vs-", array_column($compare_trending_prod, 'prod_slug')); ?>"
                class="btn btn-primary">Compare</a>
        </div>
    </div>
</section>
<?php endif; ?>

<div class="category-floating-btn animated" style="display:none;">
    <a href="javascript:void(0);" class="d-inline-block" title="Compare <?= $products[0]->cat_name ?>">
        <div class="total-product"><span>00</span></div>
        <img src="<?= PATH_FILES_UPLOADS . 'compare_floating_btn.png' ?>" alt="">
    </a>
</div>

</div>
<div class="modal fade" tabindex="-1" role="dialog" id="compare_limit_modal">
    <div class="modal-dialog modal-sm-lg" role="document">
        <div class="modal-content">
            <div class="modal-header py-2">
                <h4 class="modal-title">Compare Products</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>

            <div class="modal-body">
                <div class="modal-body text-center w-100">
                    Maximum <?= (is_mobile()) ? "two" : "three" ?> products can be added to compare.
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>