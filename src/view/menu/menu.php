<?php include_once "style.php"?>

<div id="options-container">
  <div id="products-opt">
    <a href="?class=ProductController&action=show">
      <img src="./../public/checklist.svg" alt="product">
      <h1>Products</h1>
    </a>
  </div>
  <div id="categories-opt">
    <a href="?class=CategoryController&action=show">
      <img src="./../public/tag.svg" alt="tag">
      <h1>Categories</h1>
    </a>
  </div>
  <div id="add-products">
    <a href="?class=ProductController&action=form">
      <img src="./../public/adicionar.svg" alt="add">
      <h1>Add Products</h1>
    </a>
  </div>
</div>