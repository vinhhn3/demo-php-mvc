<?php

class ProductService
{
  public function __construct()
  {

  }

  public function getProducts()
  {
    $sql = "SELECT * FROM products";
    $stmt = $GLOBALS[""]->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }

  public function insert(Product $product)
  {
    $sql = "INSERT INTO products (name, price, category_id) VALUES ($product->name, $product->price, $product->category_id)";
  }

  public function deleteById($id)
  {
    $sql = "DELETE FROM products WHERE id = $id";
  }

  public function getProductsByCategoryId($categoryId)
  {
    $sql = "SELECT * FROM products WHERE category_id = $categoryId";
    $stmt = $GLOBALS[""]->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }

  public function getProductsWithGreaterPrice($price){
    $sql = "SELECT * FROM products WHERE price >= $price";
  }

  public function getProductById($id){
    $sql = "SELECT * from products where id = $id";
    $stmt = $GLOBALS[""]->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $product = new Product($result[0]["name"], $result[0]["price"]);
    return $product;
  }


}