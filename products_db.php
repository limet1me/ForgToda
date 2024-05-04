<?php

$products_db = array(
  array('id' => '1','name' => 'Панама Лягушка','description' => 'Красивая летняя панама идеально подойдёт для любителей милых лягушек','price' => '899.00','img' => 'img/Panama frog 1.png'),
  array('id' => '2','name' => 'Повязка Лягушка','description' => 'Модная повязка для волос с лягушачьими глазами!','price' => '499.00','img' => 'img/Headband frog.png'),
  array('id' => '3','name' => 'Брелок Лягушка-мор','description' => 'Милый брелок лягушки с мухомором на голове','price' => '349.00','img' => 'img/Trinket FrogNFlyagaric.png'),
  array('id' => '4','name' => 'Значок Лягушка','description' => 'Красивый деревянный значок Лягушка с чипсиками.','price' => '149.00','img' => 'img/FrogNChips.png'),
  array('id' => '5','name' => 'Толстовка Лягушка','description' => 'Яркая толстовка с принтом лягушки с ножом','price' => '1599.00','img' => 'img/hoodie frog 1.png')
);


function get_products() {
  global $products_db; // Access the global variable
  return $products_db;
}


function get_product_attribute($id, $attr) {
  $products = get_products();
  $result = $products[$id - 1][$attr] ?? null;
  return $result;
}


function get_product_title($id) {
  return get_product_attribute($id, 'name');
}

function get_img_url($id) {
  return get_product_attribute($id, 'img');
}
?>