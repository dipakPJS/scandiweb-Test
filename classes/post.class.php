<?php

class post extends dbh {
   
 // getProduct method for fetching the data from the database starts 

public function getProduct(){

    $sql = "SELECT * FROM products";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute();

    while($result = $stmt->fetchAll()) {

        return $result;

    }


}

// getProduct method ends

// insertProduct() method for inserting the data into database starts

public function insertProduct($sku, $name, $price, $product_type, $size, $weight, $height, $width, $length){

    $sql = "INSERT INTO products(sku, name, price, product_type, size, weight, height, width, length) VALUES (:sku, :name, :price, :product_type, :size, :weight, :height, :width, :length)";
   
    $stmt = $this->connect()->prepare($sql);
    
    $stmt->bindValue('sku', $sku);
    $stmt->bindValue('name', $name);
    $stmt->bindValue('price', $price);
    $stmt->bindValue('product_type', $product_type);
    $stmt->bindValue('size', $size);
    $stmt->bindValue('weight', $weight);
    $stmt->bindValue('height', $height);
    $stmt->bindValue('width', $width);
    $stmt->bindValue('length', $length);
    $stmt->execute();

 

}

 
 
// insertProduct() method ends

// deleteProduct() method for deleting the data through checkbox starts

public function deleteProduct($selector){

$sql = "DELETE FROM products WHERE id = :id";
$stmt = $this->connect()->prepare($sql);
$stmt->bindValue('id', $selector);
$stmt->execute();


 

}

// deleteProduct() method for deleting the data through checkbox ends


}
