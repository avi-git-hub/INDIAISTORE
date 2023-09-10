<?php
$this->load->helper('html');
$this->load->helper('og');


$meta_array =
    [
        [
            'name' => 'charset',
            'content' => 'UTF-8'
        ],
        [
            'name' => 'X-UA-Compatible',
            'content' => 'IE=edge',
            'type' => 'equiv'
        ],
        [
            "name" => "viewport",
            "content" => "width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"
        ]
    ];


if (!empty(@$meta_data->page_meta_description)) {
    $meta_array[] = [
        'name' => 'description',
        'content' => $meta_data->page_meta_description
    ];
}

if (!empty(@$meta_data->page_meta_keywords)) {
    $meta_array[] = [
        'name' => 'keywords',
        'content' => $meta_data->page_meta_keywords
    ];
}

echo meta($meta_array);

echo og_title($meta_data->page_title);
echo og_image("https://www.indiaistore.com/themes/frontend/custom/images/logos/logo@2x.png");
echo og_url($currentmetaurl);
echo og_description($meta_data->page_meta_description);
echo og_type("website");
echo og_twitter_card("summary_large_image");
echo og_twitter_domain("indiaistore.com");
echo og_twitter_url($currentmetaurl);
echo og_twitter_image("https://www.indiaistore.com/themes/frontend/custom/images/logos/logo@2x.png");
echo og_twitter_title($meta_data->page_title);
echo og_twitter_description($meta_data->page_meta_description);
