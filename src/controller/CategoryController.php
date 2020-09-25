<?php
  include_once 'model/Category.php';
  include_once 'modelDAO/CategoryDAO.php';

  class CategoryController {
    private $dao;

    public function __construct() {
      $this->dao = new CategoryDAO();
    }

    public function show() {
      $categories = $this->dao->show();
      include_once "view/categoriesTable/categoriesTable.php";
    }
  }
?>