<?php

class ProductsController extends Controller{
  private $productService = new ProductService();
  public function index()
  {
    // Get all products
    $data = $this->productService->getProductList();
    // Return to view index

    return $this->render("products/index.php", $data);
  }

  public function create(){
    $price = $_POST["price"];
    $name = $_POST["name"];
    $newProduct = new Product($name, $price);
    $this->productService->create($newProduct);
  }

  public function getProduct(){
    $id = $_GET["id"];
    $product = $this->productService->getProduct($id);
    return $this->render("product", $product);
  }
}