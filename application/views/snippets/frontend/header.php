<style>

/* header nav{
		width: 100%;
    background-size: 100% 100%;
    background-repeat: no-repeat;
    background-position: center;
 background-image: url(https://www.indiaistore.com/themes/frontend/custom/images/ui/option9.png) !important;
   }
   header nav .main-menu {
  
}

section.header-search.search, section.header-search.search .search-input input{background:transparent !important;}
@media only screen and (max-width: 767px){
	header nav{
		width: 100%;
	background-size: 100% 100%;
    background-repeat: no-repeat;
 background-image: url(https://www.indiaistore.com/themes/frontend/custom/images/ui/option-9_mo.png) !important;
   }
   
}

@media (min-width: 1920px) and (max-width: 2560px)  {
    header nav{
		width: 100%;
   background-size: 100% 100%;
    background-repeat: no-repeat;
	background-position: bottom;
 background-image: url(https://www.indiaistore.com/themes/frontend/custom/images/ui/option9.png) !important;
   }
}

header .hamburger-menu .container {
    height: auto !important;
} */


/* thematic_header_css_menu */


/* header nav .icon a{
	color: #000 !important;
	font-weight: bolder;
}
header nav {
    background-color: #ffffff !important;
}
section.header-search.search .search-input i, section.header-search.search .search-input input{color: #000 !important;}
header .hamburger-menu .container{background-color:#000000;height:auto !important;} */
header .hamburger-menu .container {
    height: auto !important;
}
	</style> 
<?php
if ($this->uri->uri_string() == 'index' || $this->uri->total_segments() == 0) {
	$url_slug = 'home';
} else {
	$url_slug = $this->uri->uri_string();
}

$meta_data = memcached_get("$url_slug-header-get-meta-data");
if (!$meta_data) {
	$meta_data = get_meta_data($url_slug);
	memcached_save("$url_slug-header-get-meta-data", $meta_data, 3600);
}


$main_menu_cat_data = memcached_get("main-menu-cat-data");
if (!$main_menu_cat_data) {
	$main_menu_cat_data = get_cat_data();
	memcached_save("main-menu-cat-data", $main_menu_cat_data, 3600);
}

$main_menu_data = memcached_get("main-menu-nav-data");
if (!$main_menu_data) {
	$main_menu_data = get_nav_data('main-menu');
	memcached_save("main-menu-nav-data", $main_menu_data, 3600);
}

$main_menu_2_data = memcached_get("main-menu-2-nav-data");
if (!$main_menu_2_data) {
	$main_menu_2_data = get_nav_data('main-menu-2');
	memcached_save("main-menu-2-nav-data", $main_menu_2_data, 3600);
}

$trend_search_data = memcached_get("trending-search-data");
if (!$trend_search_data) {
	$trend_search_data = get_trend_search_data();
	memcached_save("trending-search-data", $trend_search_data, 3600);
}

$app_version = get_app_version();

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<base href="<?= BASE_URL; ?>" data-env="<?= ENVIRONMENT; ?>" data-s3-url="<?= S3_URL; ?>" data-browser-type="<?= get_browser_type() ?>" />

	<!-- meta -->
	<?php require_once ABS_PATH_FRONTEND_SNIPPETS . 'partials/meta.php'; ?>

	<title><?= !empty(@$meta_data->page_title) ? $meta_data->page_title : 'Apple Authorised Distributors Website in India - Indiaistore'; ?></title>

	<!-- favicon -->
	<link rel="shortcut icon" href="<?= PATH_FRONTEND_CUSTOM_IMG ?>favicon.ico" type="image/x-icon">
	<?php
	$currentURL = current_url(); 
	?>
	<link rel="canonical" href="<?php echo $currentURL; ?>"/>

	<!-- styles -->
	<?php require_once ABS_PATH_FRONTEND_SNIPPETS . 'partials/styles.php'; ?>
	<!-- Twitter universal website tag code -->
	<script>
					!function(e,t,n,s,u,a){e.twq||(s=e.twq=function(){s.exe?s.exe.apply(s,arguments):s.queue.push(arguments);
					},s.version='1.1',s.queue=[],u=t.createElement(n),u.async=!0,u.src='//static.ads-twitter.com/uwt.js',
					a=t.getElementsByTagName(n)[0],a.parentNode.insertBefore(u,a))}(window,document,'script');
					
					twq('init','o8phh');
					twq('track','PageView');
					</script>
					<!-- End Twitter universal website tag code --> 
	<?php 
		if($currentURL == 'https://www.indiaistore.com/enterprise' || $currentURL == 'https://www.indiaistore.com/Back-To-School' || $currentURL == 'https://indiaistore.com/enterprise'){
	?>
		<!-- Meta Pixel Code -->

					<script>

					!function(f,b,e,v,n,t,s)

					{if(f.fbq)return;n=f.fbq=function(){n.callMethod?

					n.callMethod.apply(n,arguments):n.queue.push(arguments)};

					if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';

					n.queue=[];t=b.createElement(e);t.async=!0;

					t.src=v;s=b.getElementsByTagName(e)[0];

					s.parentNode.insertBefore(t,s)}(window, document,'script',

					'https://connect.facebook.net/en_US/fbevents.js');

					fbq('init', '751255512577397');

					fbq('track', 'PageView');

					</script>

					<noscript><img height="1" width="1" style="display:none"

					src="https://www.facebook.com/tr?id=751255512577397&ev=PageView&noscript=1"

					/></noscript>

					<!-- End Meta Pixel Code -->
					
					<script type="text/javascript">    (function(e, s, t) {        t = t || {}, t.id = e, versaTagObj = {        $: [],        onready: function(e) {        this.$.push(e)        }        };        var n = s.getElementsByTagName("script")[0],        r = s.createElement("script");        r.options = t, r.async = !0, r.src = "https://secure-ds.serving-sys.com/SemiCachedScripts/ebOneTag.js?id=" + e, r.options = t, n.parentNode.insertBefore(r, n)    })("1073748189", document, {        dataLayer:"SizmekDataLayer"    });</script><noscript><iframe src="https://bs.serving-sys.com/Serving?cn=ot&amp;onetagid=1073748189&amp;ns=1&amp;activityValues=$$Session=[Session]$$&amp;dynamicRetargetingValues=$$$$&amp;acp=$$$$" style="display:none;width:0px;height:0px"></iframe></noscript>


						<!-- 
Start of global snippet: Please do not remove
Place this snippet between the <head> and </head> tags on every page of your site.
-->
<!-- Global site tag (gtag.js) - Google Marketing Platform -->
<script async src="https://www.googletagmanager.com/gtag/js?id=DC-11602604"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'DC-11602604');
</script>
<!-- End of global snippet: Please do not remove -->

						
<!-- 
Start of global snippet: Please do not remove
Place this snippet between the <head> and </head> tags on every page of your site.
-->
<!-- Global site tag (gtag.js) - Google Marketing Platform -->
<script async src="https://www.googletagmanager.com/gtag/js?id=DC-11602604"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'DC-11602604');
</script>
<!-- End of global snippet: Please do not remove -->



	<?php
		}
	?>
	<?php 
		if($currentURL == 'https://www.indiaistore.com/Back-To-School'){
	?>
					<!-- offline call-->
					<!-- Global site tag (gtag.js) - Google Marketing Platform -->
				<script async src="https://www.googletagmanager.com/gtag/js?id=DC-11602604"></script>
				<script>
				window.dataLayer = window.dataLayer || [];
				function gtag(){dataLayer.push(arguments);}
				gtag('js', new Date());

				gtag('config', 'DC-11602604');
				</script>
				<!-- End of global snippet: Please do not remove -->

				<!-- offline SMS-->
				<!-- Global site tag (gtag.js) - Google Marketing Platform -->
				<script async src="https://www.googletagmanager.com/gtag/js?id=DC-11602604"></script>
				<script>
				window.dataLayer = window.dataLayer || [];
				function gtag(){dataLayer.push(arguments);}
				gtag('js', new Date());

				gtag('config', 'DC-11602604');
				</script>
				<!-- End of global snippet: Please do not remove -->

				<!-- Offline Website -->
				<!-- Global site tag (gtag.js) - Google Marketing Platform -->
				<script async src="https://www.googletagmanager.com/gtag/js?id=DC-11602604"></script>
				<script>
				window.dataLayer = window.dataLayer || [];
				function gtag(){dataLayer.push(arguments);}
				gtag('js', new Date());

				gtag('config', 'DC-11602604');
				</script>
				<!-- End of global snippet: Please do not remove -->

				<!-- Online call -->
				<!-- Global site tag (gtag.js) - Google Marketing Platform -->
				<script async src="https://www.googletagmanager.com/gtag/js?id=DC-11602604"></script>
				<script>
				window.dataLayer = window.dataLayer || [];
				function gtag(){dataLayer.push(arguments);}
				gtag('js', new Date());

				gtag('config', 'DC-11602604');
				</script>
				<!-- End of global snippet: Please do not remove -->

				<!-- Online Website -->
				<!-- Global site tag (gtag.js) - Google Marketing Platform -->
				<script async src="https://www.googletagmanager.com/gtag/js?id=DC-11602604"></script>
				<script>
				window.dataLayer = window.dataLayer || [];
				function gtag(){dataLayer.push(arguments);}
				gtag('js', new Date());

				gtag('config', 'DC-11602604');
				</script>
				<!-- End of global snippet: Please do not remove -->

				<!-- Landing Page -->

				<!-- 
					Start of global snippet: Please do not remove
					Place this snippet between the <head> and </head> tags on every page of your site.
					-->
					<!-- Global site tag (gtag.js) - Google Marketing Platform -->
					<script async src="https://www.googletagmanager.com/gtag/js?id=DC-11602604"></script>
					<script>
					window.dataLayer = window.dataLayer || [];
					function gtag(){dataLayer.push(arguments);}
					gtag('js', new Date());

					gtag('config', 'DC-11602604');
					</script>
					<!-- End of global snippet: Please do not remove -->

    <?php
		}
	?>

	<?php if (ENVIRONMENT == 'production') : ?>
		<!-- Google Tag Manager -->
		<script>
			(function(w, d, s, l, i) {
				w[l] = w[l] || [];
				w[l].push({
					'gtm.start': new Date().getTime(),
					event: 'gtm.js'
				});
				var f = d.getElementsByTagName(s)[0],
					j = d.createElement(s),
					dl = l != 'dataLayer' ? '&l=' + l : '';
				j.async = true;
				j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
				f.parentNode.insertBefore(j, f);
			})(window, document, 'script', 'dataLayer', 'GTM-PW5HNTC');
		</script>
		<!-- End Google Tag Manager -->

		<!-- Facebook Pixel Code -->
		<script>
			! function(f, b, e, v, n, t, s) {
				if (f.fbq) return;
				n = f.fbq = function() {
					n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments)
				};
				if (!f._fbq) f._fbq = n;
				n.push = n;
				n.loaded = !0;
				n.version = '2.0';
				n.queue = [];
				t = b.createElement(e);
				t.async = !0;
				t.src = v;
				s = b.getElementsByTagName(e)[0];
				s.parentNode.insertBefore(t, s)
			}(window, document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
			fbq('init', '131465354280784');
			fbq('track', 'PageView');
		</script>
		<noscript>
			<img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=131465354280784&ev=PageView&noscript=1" />
		</noscript>
		<!-- End Facebook Pixel Code -->

		<!-- Global site tag (gtag.js) - Google Ads: 838139362 -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=AW-838139362"></script>
		<script>
			window.dataLayer = window.dataLayer || [];

			function gtag() {
				dataLayer.push(arguments);
			}
			gtag('js', new Date());
			gtag('config', 'AW-838139362');
		</script>
		<!-- End Global site tag (gtag.js) - Google Ads: 838139362 -->

		<!-- Global site tag (gtag.js) - Google Marketing Platform -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=DC-8200890"></script>
		<script>
			window.dataLayer = window.dataLayer || [];

			function gtag() {
				dataLayer.push(arguments);
			}
			gtag('js', new Date());

			gtag('config', 'DC-8200890');
		</script>
		<!-- End Global site tag (gtag.js) - Google Marketing Platform -->




		<?php if (!empty(@$meta_data->gtags_header)) : ?>
			<script>
				<?= $meta_data->gtags_header ?>
			</script>
		<?php endif; ?>

	<?php endif; ?>
	
	<!-- Global site tag (gtag.js) - Google Marketing Platform -->
<script async src="https://www.googletagmanager.com/gtag/js?id=DC-11602604"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'DC-11602604');
</script>
<!-- End of global snippet: Please do not remove -->

<!-- Global site tag (gtag.js) - Google Marketing Platform -->
<script async src="https://www.googletagmanager.com/gtag/js?id=DC-11602604"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'DC-11602604');
</script>
<!-- End of global snippet: Please do not remove -->

<!-- Global site tag (gtag.js) - Google Marketing Platform -->
<script async src="https://www.googletagmanager.com/gtag/js?id=DC-11602604"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'DC-11602604');
</script>
<!-- End of global snippet: Please do not remove -->

<!-- Global site tag (gtag.js) - Google Marketing Platform -->
<script async src="https://www.googletagmanager.com/gtag/js?id=DC-11602604"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'DC-11602604');
</script>
<!-- End of global snippet: Please do not remove -->

<!-- Global site tag (gtag.js) - Google Marketing Platform -->
<script async src="https://www.googletagmanager.com/gtag/js?id=DC-11602604"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'DC-11602604');
</script>
<!-- End of global snippet: Please do not remove -->

<!-- Global site tag (gtag.js) - Google Marketing Platform -->
<script async src="https://www.googletagmanager.com/gtag/js?id=DC-11602604"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'DC-11602604');
</script>
<!-- End of global snippet: Please do not remove -->


<!-- 
Start of global snippet: Please do not remove
Place this snippet between the <head> and </head> tags on every page of your site.
-->
<!-- Global site tag (gtag.js) - Google Marketing Platform -->
<script async src="https://www.googletagmanager.com/gtag/js?id=DC-10620631"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'DC-10620631');
</script>
<!-- End of global snippet: Please do not remove -->

<!-- Global site tag (gtag.js) - Google Marketing Platform -->
<script async src="https://www.googletagmanager.com/gtag/js?id=DC-10620631"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'DC-10620631');
</script>
<!-- End of global snippet: Please do not remove -->

<!-- Global site tag (gtag.js) - Google Marketing Platform -->
<script async src="https://www.googletagmanager.com/gtag/js?id=DC-10620631"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'DC-10620631');
</script>
<!-- End of global snippet: Please do not remove -->

<!-- Global site tag (gtag.js) - Google Marketing Platform -->
<script async src="https://www.googletagmanager.com/gtag/js?id=DC-10620631"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'DC-10620631');
</script>
<!-- End of global snippet: Please do not remove -->

<!-- Global site tag (gtag.js) - Google Marketing Platform -->
<script async src="https://www.googletagmanager.com/gtag/js?id=DC-10620631"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'DC-10620631');
</script>
<!-- End of global snippet: Please do not remove -->
<!-- Global site tag (gtag.js) - Google Marketing Platform -->
<script async src="https://www.googletagmanager.com/gtag/js?id=DC-10620631"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'DC-10620631');
</script>
<!-- End of global snippet: Please do not remove -->

<style>
/* .loaderScreen {
    background: #000000;
    text-align: center;
    color: #ffffff;
    position: fixed;
    top: 0;
    left: 0;
    z-index: 9;
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.loaderScreen img {
    margin: 20px 0;
} */
		</style>


<!-- Watch Global codes -->
<!-- SMS -->
<!-- 
Start of global snippet: Please do not remove
Place this snippet between the <head> and </head> tags on every page of your site.
-->
<!-- Global site tag (gtag.js) - Google Marketing Platform -->
<script async src="https://www.googletagmanager.com/gtag/js?id=DC-11647498"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'DC-11647498');
</script>
<!-- End of global snippet: Please do not remove -->

<!-- Call -->
<!-- 
Start of global snippet: Please do not remove
Place this snippet between the <head> and </head> tags on every page of your site.
-->
<!-- Global site tag (gtag.js) - Google Marketing Platform -->
<script async src="https://www.googletagmanager.com/gtag/js?id=DC-11647498"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'DC-11647498');
</script>
<!-- End of global snippet: Please do not remove -->

<!-- Website -->

<!-- 
Start of global snippet: Please do not remove
Place this snippet between the <head> and </head> tags on every page of your site.
-->
<!-- Global site tag (gtag.js) - Google Marketing Platform -->
<script async src="https://www.googletagmanager.com/gtag/js?id=DC-11647498"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'DC-11647498');
</script>
<!-- End of global snippet: Please do not remove -->

<!-- Landing page -->

<!-- 
Start of global snippet: Please do not remove
Place this snippet between the <head> and </head> tags on every page of your site.
-->
<!-- Global site tag (gtag.js) - Google Marketing Platform -->
<script async src="https://www.googletagmanager.com/gtag/js?id=DC-11647498"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'DC-11647498');
</script>
<!-- End of global snippet: Please do not remove -->

<?php 
		if($currentURL == 'https://www.indiaistore.com/Try-Mac' || $currentURL == 'https://indiaistore.com/Try-Mac'){
			?>
				<!-- 
Start of global snippet: Please do not remove
Place this snippet between the <head> and </head> tags on every page of your site.
-->
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=DC-11602604"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'DC-11602604');
</script>
<!-- End of global snippet: Please do not remove -->

			<?php
		}
	?>

</head>


<?php $visual_cat_menu = (in_array($url_slug, ['home', 'offers','home-new'])) ? true : false; ?>

<body class="<?= ($visual_cat_menu) ? 'has-visual-cat-menu' : '' ?>" data-is-mobile="<?= (is_mobile()) ? 1 : 0; ?>">

<!-- <div class="loaderScreen">
				<div class="middleLs">
				<img src="<?= PATH_FRONTEND_CUSTOM_IMG . 'logos/logo@2x.png' ?>" alt="India iStore">
				<p>Loading...</p>
				</div>
			</div> -->

	<h1 style="display: none;">IndiaiStore</h1>
	<?php if (ENVIRONMENT == 'production') : ?>
		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PW5HNTC" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->

		<?php if (!empty(@$meta_data->gtags_body_start)) : ?>
			<script>
				<?= $meta_data->gtags_body_start ?>
			</script>
		<?php endif; ?>

	<?php endif; ?>

	<?php require_once ABS_PATH_FRONTEND_SNIPPETS . 'partials/navbar.php'; ?>

	<?php
	if ($visual_cat_menu) :
		require_once ABS_PATH_FRONTEND_SNIPPETS . 'partials/visual_cat_menu.php';
	endif;
	?>