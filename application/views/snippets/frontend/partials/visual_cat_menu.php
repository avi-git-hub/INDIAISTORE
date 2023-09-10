<?php
if (!empty($visual_cat_data)) : ?>
    <section class="visual-category-menu">
        <!-- <div class="nav-image-group">
            <div class="left-bg"> <img src="<?= PATH_FILES_UPLOADS . "diwali/nav-l-1.png" ?>" alt="images"></div>
            <div class="right-bg"> <img src="<?= PATH_FILES_UPLOADS . "diwali/nav-r-2.png" ?>" alt="images"></div>
        </div>
        <div class="deepak-group">
            <div class="left-deepak"> <img src="<?= PATH_FILES_UPLOADS . "diwali/deepak-left.png" ?>" alt="images"></div>
            <div class="right-deepak"> <img src="<?= PATH_FILES_UPLOADS . "diwali/deepak-right.png" ?>" alt="images"></div>
        </div> -->
        <div class="wrapper">
            <div class="container container-right">
                <div class="slider">
                    <?php foreach ($visual_cat_data['categories'] as $cat) : ?>
                        <div class="slider-item">
                            <div class="category-item">
                                <div class="img-cont">
                                    <div class="box <?= $cat->cat_slug ?>"></div>
                                </div>
                                <div class="name"><?= $cat->cat_name ?></div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <!-- <div class="slider-item">
                        <div class="category-item">
                            <a href="<?= base_url('apple-tv-4k'); ?>">
                                <div class="img-cont">
                                    <div class="box tv"></div>
                                </div>
                                <div class="name">TV</div>
                            </a>
                        </div>
                    </div> -->
                </div>
            </div>

            <div class="product-panels">
                <div class="container listing">
                    <?php foreach ($visual_cat_data['products'] as $key => $products) : ?>

                        <div class="panel <?= $visual_cat_data['categories'][$key]->cat_slug ?>">

                            <?php foreach ($products as $prod) : ?>
                                <a href='<?= base_url("$prod->prod_slug"); ?>' class="product" data-cat-name="<?= $visual_cat_data['categories'][$key]->cat_name ?>" data-prod-name="<?= $prod->prod_name ?>">
                                    <img src="<?= PATH_FILES_UPLOADS . "products/$prod->prod_slug/$prod->prod_img_sm" ?>">

                                    <?php if ($prod->prod_is_new_status == '1') : ?>
                                        <p class="text-center mt-2" style="color:#bf4800!important;font-size:12px;">New</p>
                                    <?php endif; ?>
                                </a>
                            <?php endforeach; ?>

                            <a href="<?= base_url($visual_cat_data['categories'][$key]->cat_slug); ?>" class="product more" data-cat-name="<?= $visual_cat_data['categories'][$key]->cat_name ?>">
                                <div class=" name">View all<i class="ii-icon-arrow-right"></i>
                                </div>
                            </a>

                        </div>

                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>