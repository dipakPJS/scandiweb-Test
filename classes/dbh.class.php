
<?php



 abstract class dbh {
    
 private $host = "localhost";
 private $dbname = "ecommerce";
 private $user = "root";
 private $password = "";

 // connect() function for database connection

 public function connect()
    
 {


     $dsn = "mysql:host=$this->host;dbname=$this->dbname";
     $pdo = new pdo($dsn, $this->user, $this->password);
     $pdo->setAttribute(pdo::FETCH_ASSOC, pdo::ATTR_DEFAULT_FETCH_MODE);
     return $pdo;
    
 }


 // abstract getProduct() method for fetching the data from the database

 abstract protected function getProduct();

 // abstract insertProduct() method for inserting the data into database
 
 abstract protected function insertProduct($sku, $name, $price, $product_type, $size, $weight, $height, $width, $length);

 // abstract deleteProduct() method for deleting the data with checkbox

 abstract protected function deleteProduct($selector);

 

 



 

 }