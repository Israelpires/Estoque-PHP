<?php include_once "style.php"?>

<div id="form-container">
  <form action="?class=ProductController" method="POST" id="form">
    <input type="hidden" name="action" value="<?php echo $action; ?>">
    <input type="hidden" name="id" value="<?php echo $product["id"]; ?>">
    <p>Name: <input type="text" required name="name" value="<?php if(isset($product["name"])) echo $product["name"]; ?>"></p>
    <p>Quantity: <input type="number" required name="quantity" value="<?php if(isset($product["quantity"])) echo $product["quantity"]; ?>"></p>
    <p>Price: <input type="number" step="any" name="price" required value="<?php if(isset($product["price"])) echo $product["price"]; ?>"></p>
    <p>Cost: <input type="number" step="any" name="cost" required value="<?php if(isset($product["cost"])) echo $product["cost"]; ?>"></p>
    <div id="category-select">Category: <div id="select"><select name="categoryId" required >
      <?php
        echo "<option value=0 selected >None</option>";
        if($categories != NULL){
          foreach($categories as $category) {
            if($product != NULL) {
              if($product != null){
                if($product["categoryId"] == $category["id"])
                    echo "<option value='".$category['id']."' selected>". $category["name"] . "</option>";
                else
                    echo "<option value='".$category['id']."'>". $category["name"] . "</option>";
              }
            }else {
              echo "<option value='".$category['id']."'>". $category["name"] . "</option>";
            }  
          }
        }
        
      ?>
    </select> <img src="./../public/down.svg" alt="down"></div></div>
    <button id="submit-form" type="submit">Submit</button>




  </form>
</div>