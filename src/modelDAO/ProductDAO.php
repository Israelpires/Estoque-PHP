<?php
  require_once 'model/Connection.php';

  class ProductDAO {

    private $connection;

    public function __construct() {
      $this->connection = Connection::connect();
    }

    public function insert(Product $product) {
      $sql = "insert into product (name, quantity, price, cost, categoryId) values ('". $product->getName() ."','". $product->getQuantity() ."','". $product->getPrice() ."','". $product->getCost() ."','". $product->getCategoryId() ."')";

      $result = mysqli_query($this->connection, $sql) or die ("<br> <br> Erro SQL <br>" . mysqli_error($this->connection) . " </h2> " . $sql);

      if($result)
          echo "<script language='javascript'> alert('Dados salvos com sucesso!'); </script>";
      else
          echo "<script language='javascript'> alert('Falha ao cadastrar!'); </script>";
      
    }

    public function update(Product $product) {
      $sql = "update product set name = '". $product->getName() ."', quantity = '". $product->getQuantity() ."', price = '". $product->getPrice() ."', cost = '". $product->getCost() ."', categoryId = '". $product->getCategoryId() ."' where id = ".$product->getId();

      $result = mysqli_query($this->connection, $sql) or die ("<br> <br> Erro SQL <br>" . mysqli_error($this->connection) . " </h2> " . $sql);
      
      if($result)
          echo "<script language='javascript'> alert('Dados atualizados com sucesso!'); </script>";
      else
          echo "<script language='javascript'> alert('Falha ao Atualizar!'); </script>";

    }

    public function delete($productId) {
      $sql = "delete from product where id = ". $productId;

      $result = mysqli_query($this->connection, $sql) or die ("<br> <br> Erro SQL <br>" . mysqli_error($this->connection) . " </h2> " . $sql);

      if($result)
        echo "<script language='javascript'> alert('Dados excluídos com sucesso!'); </script>";
      else
        echo "<script language='javascript'> alert('Falha ao excluir!'); </script>";
    }

    public function deleteProducts($productsId) {
      foreach($productsId as $productId){
        $sql = "delete from product where id = ". $productId;
        $result = mysqli_query($this->connection, $sql) or die ("<br> <br> Erro SQL <br>" . mysqli_error($this->connection) . " </h2> " . $sql);

        if(!$result) {
          echo "<script language='javascript'> alert('Falha ao excluir!'); </script>";
          break;
        }
      }

        echo "<script language='javascript'> alert('Dados excluídos com sucesso!'); </script>";
    }

    public function show() {
      $products = array();

      $sql = "select p.id, p.name, p.quantity, p.price, p.cost, c.name as categoryN from product as p inner join category as c where p.categoryId like c.id";

      $result = mysqli_query($this->connection, $sql) or die ("<br> <br> Erro SQL <br>" . mysqli_error($this->connection) . " </h2> " . $sql);

      while($product = mysqli_fetch_array($result)) {
        array_push($products, $product);
      }

      return $products;
    }

    public function searchByCategoryId($categoryId) {
      $products = array();

      $sql = "select p.id, p.name, p.quantity, p.price, p.cost, c.name as categoryN from product as p inner join category as c where p.categoryId like c.id and p.categoryId like ".$categoryId;

      $result = mysqli_query($this->connection, $sql) or die ("<br> <br> Erro SQL <br>" . mysqli_error($this->connection) . " </h2> " . $sql);

      while($product = mysqli_fetch_array($result)) {
        array_push($products, $product);
      }

      return $products;
    }

    public function searchById($productId) {
      $sql = "select * from product where id = ". $productId;

      $result = mysqli_query($this->connection, $sql) or die ("<br> <br> Erro SQL <br>" . mysqli_error($this->connection) . " </h2> " . $sql);

      if($result){
        $data = mysqli_fetch_array($result);
        return $data;
      }else{
        echo "<script language='javascript'> alert('Falha ao buscar!'); </script>";
      }

    }

    public function searchByName($productName) {
      $products = array();

      $sql = "select p.id, p.name, p.quantity, p.price, p.cost, c.name as categoryN from product as p inner join category as c where p.categoryId like c.id and p.name like '%". $productName ."%'";

      $result = mysqli_query($this->connection, $sql) or die ("<br> <br> Erro SQL <br>" . mysqli_error($this->connection) . " </h2> " . $sql);

      while($product = mysqli_fetch_array($result)) {
        array_push($products, $product);
      }

      return $products;

    }
  }
?>