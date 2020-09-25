<?php include_once "style.php";

  echo '<script type="text/JavaScript">  
  var productsId = [];
  function handleSelect(e) {
    const id = productsId.findIndex(id => id == e);

    console.log(e);

    if(id != -1) {
      productsId.splice(id, 1);            
      console.log(productsId);
    } else {
      productsId.push(e);
    }
  }
  function handleDelete() {
    window.location.href = "?class=ProductController&action=deleteProducts&id=" + productsId;
  }
  </script>';

?>



<div id="table-container">
  <div id="widgets">
    <a href="?class=ProductController&action=form">
      <img src="./../public/adicionar.svg" alt="add">
      Add Product
    </a>
    <button onclick="handleDelete()">
      <img src="./../public/excluirWhite.svg" alt="delete">
      Delete Selected
    </button>
  </div>
  <table>
    <tr>
        <th class="select">Select</th>
        <th class="id">Id</th>
        <th class="name">Name</th>
        <th class="qntd">Qntd.</th>
        <th class="price">Price</th>
        <th class="tlPrice">Tl. Price</th>
        <th class="cost">Cost</th>
        <th class="tlCost">Tl. Cost</th>
        <th class="profit">Profit</th>
        <th class="tlProfit">Tl. Profit</th>
        <th class="category">Category</th>
        <th class="del">Delete</th>
        <th class="edit">Edit</th>
    </tr>


    <?php
      if ($products != NULL) {
        foreach($products as $product) {
        $totalPrice = $product["price"] * $product["quantity"];
        $totalCost = $product["cost"] * $product["quantity"];
        $profit = $product["price"] - $product["cost"];
        $totalProfit  =  $profit * $product["quantity"];
        echo "<tr><td class=select ><input type=checkbox onchange=handleSelect($product[id])></td>";
        echo "<td class=id >$product[id]</td>";
        echo "<td class=name >$product[name]</td>";
        echo "<td class=qntd >$product[quantity]</td>";
        echo "<td class=price >R$$product[price]</td>";
        echo "<td class=tlPrice >R$$totalPrice</td>";
        echo "<td class=cost >R$$product[cost]</td>";
        echo "<td class=tlCost >R$$totalCost</td>";
        echo "<td class=profit >R$$profit</td>";
        echo "<td class=tlProfit >R$$totalProfit</td>";
        echo "<td class=category >$product[categoryN]</td>";
        echo "<td class=del ><a href=?class=ProductController&action=delete&id=$product[id] ><img src=./../public/excluir.svg alt=delete /></a></td>";
        echo "<td class=edit ><a href=?class=ProductController&action=formUpdate&id=$product[id] ><img src=./../public/editar.svg alt=edit /></a></td></tr>";
      } 
      }else {
        echo "<tr id=no-result-container><td id=no-result>No Result</td></tr>";
      }
      
    ?>
  </table>
</div>