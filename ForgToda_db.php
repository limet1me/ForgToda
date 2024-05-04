<?php

/* `ForgToda_db`.`popular_products_db` */
$popular_products_db = array(
  array('id' => '1','product_id' => '2'),
  array('id' => '3','product_id' => '3'),
  array('id' => '2','product_id' => '6')
);

/* `ForgToda_db`.`products_db` */
$products_db = array(
  array('id' => '1','name' => 'Панамка Лягух','description' => 'Красивая летняя панама идеально подойдёт для любителей милых лягушек','price' => '899','img' => 'img/Panama frog 2.png'),
  array('id' => '2','name' => 'Повязка Лягушка','description' => 'Модная повязка для волос с лягушачьими глазами!','price' => '499','img' => 'img/Headband frog.png'),
  array('id' => '3','name' => 'Брелок Лягушка-мор','description' => 'Милый брелок лягушки с мухомором на голове','price' => '349','img' => 'img/Trinket FrogNFlyagaric.png'),
  array('id' => '4','name' => 'Значок Лягушка','description' => 'Красивый деревянный значок Лягушка с чипсиками.','price' => '149','img' => 'img/FrogNChips.png'),
  array('id' => '5','name' => 'Толстовка Лягушка','description' => 'Яркая толстовка с принтом лягушки с ножом','price' => '1599','img' => 'img/hoodie frog 1.png'),
  array('id' => '6','name' => 'Игрушка Лягушонок','description' => 'Милая мягкая игрушка, которая подарит вам только положительные эмоции! Одежда и аксессуары снимаются.','price' => '899','img' => 'img/Frog toy 2.png')
);


function get_products() {
  global $products_db;
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