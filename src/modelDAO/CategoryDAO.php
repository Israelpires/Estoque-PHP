<?php
  require_once 'model/Connection.php';

  class CategoryDAO {
    private $connection;

    public function __construct() {
      $this->connection = Connection::connect();
    }

    public function show() {
      $categories = array();

      $sql = "select * from category";

      $result = mysqli_query($this->connection, $sql) or die ("<br> <br> Erro SQL <br>" . mysqli_error($this->connection) . " </h2> " . $sql);

      while($category = mysqli_fetch_array($result)) {
        array_push($categories, $category);
      }

      return $categories;
    }

    public function showCategoryById($categoryId) {
      $sql = "select * from category where id = ". $categoryId;

      $result = mysqli_query($this->connection, $sql) or die ("<br> <br> Erro SQL <br>" . mysqli_error($this->connection) . " </h2> " . $sql);

      if ($result) {
        $category = mysqli_fetch_array($result);
        return $category;
      } else {
        echo "<script language='javascript'> alert('Falha ao buscar!'); </script>";
      } 

    }
  }
?>