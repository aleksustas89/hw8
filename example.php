<?php

require_once 'vendor/autoload.php';

$item = [
    'price' => 1750000,
    'attributes' => '{"memory":"8GB","color":"silver"}',
    'updated_at' => 1649428269
  ];
  
  $product = new \Hillel\Entities\Product(
    $item['price'],
    $item['attributes'],
    $item['updated_at']
  );



// добавим атрибут в виде добавления нового элемента в массив
$attributes = $product->attributes;
$attributes['year'] = 2021;
$product->attributes = $attributes;

// обновим цену
$product->price = 18500;

// зафиксируем время добавления время
$product->updatedAt = time();

echo $product->price; // 18500
print_r($product->attributes); // Array ( [memory] => 8GB [color] => silver [year] => 2021 )
echo $product->updatedAt;

echo $product;