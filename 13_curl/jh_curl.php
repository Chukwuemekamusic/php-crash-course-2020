<?php

#echo 'Welcome to the curl example' . '<br>';

$ch = curl_init();
$search_string = 'leather%20shoes';
// $search = 'pc+video+games+2016&crid=3JXL9QO1RQU29&sprefix=pc+video+games+2016%2Caps%2C176&ref=nb_sb_noss';
// $url = "https://www.amazon.com/s/k=$search";
$url = "https://jiji.ng/search?query=$search_string";

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$server_response = curl_exec($ch);

https://t.co/i/adsct?bci=3&eci=2&event_id=1bffb254-8343-4c77-9640-da5813c4d248&events=%5B%5B%22pageview%22%2C%7B%7D%5D%5D&integration=advertiser&p_id=Twitter&p_user_id=0&pl_id=37c6d5f5-306c-43fd-aec8-1df5cfec535a&tw_document_href=https%3A%2F%2Fjiji.ng%2F&tw_iframe_status=0&tw_order_quantity=0&tw_sale_amount=0&txn_id=o4kdg&type=javascript&version=2.3.29
// preg_match_all("https://i.ebayimg.com/thumbs/images/g/[^\s]*?/s-l225.webp", $server_response, $matches);
// print_r($matches);
curl_close($ch);

echo $server_response;
