<?php
require('ForgToda_db.php');
require('components/header.php');

$product_id = $_GET['id'] ?? 1; // Получаем id из URL, если id не задан, то по умолчанию 1

$product_name = get_product_title($product_id);
$product_image = get_img_url($product_id);
$product_description = get_product_attribute($product_id, 'description');
$product_price = get_product_attribute($product_id, 'price');

require('components/product_info.php');
require('components/footer.php');


?>