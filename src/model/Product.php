<?php
  class Product {
    private $id;
    private $name;
    private $quantity;
    private $price;
    private $cost;
    private $categoryId;

    public function __construct($id, $name, $quantity, $price, $cost, $categoryId) {
      $this->id = $id;
      $this->name = $name;
      $this->quantity = $quantity;
      $this->price = $price;
      $this->cost = $cost;
      $this->categoryId = $categoryId;
    }

    public function getId() {
      return $this->id;
    }

    public function getName() {
      return $this->name;
    }

    public function getQuantity() {
      return $this->quantity;
    }

    public function getPrice() {
      return $this->price; 
    }

    public function getCost(){
      return $this->cost;
    }

    public function getCategoryId() {
      return $this->categoryId;
    }

    public function setId($id) {
      $this->id = $id;
    }

    public function setName($name) {
      $this->name = $name;
    }

    public function setQuantity($quantity) {
      $this->quantity = $quantity;
    }

    public function setPrice($price) {
      $this->price = $price;
    }

    public function setCost($cost){
      $this->cost = $cost;
    }

    public function setCategoryId($categoryId) {
      $this->categoryId = $categoryId;
    }
  }
?>