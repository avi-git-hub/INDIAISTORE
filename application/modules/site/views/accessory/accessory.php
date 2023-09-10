<style>
 .tns-outer {
    position: relative;
}
    .tns-outer .tns-controls {
    position: absolute;
    top: 40%;
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
<section class="accessories-tabs">
   <div class="tabs-container">
      <div class="container">
         <ul class="nav nav-tabs" id="buyOfflineTab" role="tablist">

            <?php foreach ($categories as $key => $cat) : ?>
               <li class="nav-item">
                  <a class="nav-link <?= $key == 0 ? 'active' : '' ?>" data-cat-slug="<?= $cat->cat_slug ?>" data-cat-id="<?= $cat->cat_id ?>" data-toggle="tab" href="#acces-<?= $cat->cat_id ?>" role="tab" aria-selected="false">
                     <?= $cat->cat_name ?>
                  </a>
               </li>
            <?php endforeach; ?>

         </ul>
      </div>
   </div>
   <div class="tab-content" id="acc-tab-content">
      <?php foreach ($categories as $key => $cat) : ?>
         <div class="store-list tab-pane <?= $key == 0 ? 'active' : '' ?>" id="acces-<?= $cat->cat_id ?>" role="tabpanel"></div>
      <?php endforeach; ?>

   </div>
</section>