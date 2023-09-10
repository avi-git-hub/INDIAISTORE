<?php
echo '<meta charset="utf-8">';
echo '<meta http-equiv="X-UA-Compatible" content="IE=edge">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
/**
 * meta tags
 */
if ((isset($page_data['meta']['description'])) && ($page_data['meta']['description'] !== '')) {
  echo '<meta name="description" content="', $page_data['meta']['description'], '" />';
}

if ((isset($page_data['meta']['keywords'])) && ($page_data['meta']['keywords'] !== '')) {
  echo '<meta name="keywords" content="', $page_data['meta']['keywords'], '" />';
}
