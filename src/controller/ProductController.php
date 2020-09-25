<?php
  include_once './model/Product.php';
  include_once './modelDAO/ProductDAO.php';
  include_once './modelDAO/CategoryDAO.php';

  class ProductController {
    private $dao;

    public function __construct() {
      $this->dao = new ProductDAO();
    }

    public function form() {
      $action = "insert";
      $product = NULL;
      $category = new CategoryDAO();
      $categories = $category->show();
      include_once "view/form/form.php";
    }

    public function formUpdate() {
      $action = "update";
      $product = $this->dao->searchById($_GET['id']);
      $category = new CategoryDAO();
      $categories = $category->show();
      include_once "view/form/form.php";
    }

    public function insert() {
      $product = new Product($_POST['id'], $_POST['name'], $_POST['quantity'], $_POST['price'], $_POST['cost'], $_POST['categoryId']);
      
      $this->dao->insert($product);

      $this->form();
    }

    public function update() {
      $product = new Product($_POST['id'], $_POST['name'], $_POST['quantity'], $_POST['price'], $_POST['cost'], $_POST['categoryId']);
      
      $this->dao->update($product);

      $this->show();
    }

    public function delete() {
      $this->dao->delete($_GET['id']);
      $this->show();
    }

    public function deleteProducts() {
      $products = explode(",", $_GET["id"]);
      $this->dao->deleteProducts($products);
      $this->show();
    }

    public function show() {
      $products = $this->dao->show();
      include_once "view/table/table.php";
    }

    public function searchById() {
      $this->dao->searchById($_GET['id']);
    }

    public function searchByCategory() {
      $products = $this->dao->searchByCategoryId($_GET['id']);
      include_once "view/table/table.php";
    }

    public function searchByName() {
      $products = $this->dao->searchByName($_GET['search']);
      include_once "view/table/table.php";
    }
  }

?>