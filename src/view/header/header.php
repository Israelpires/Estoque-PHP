<?php include_once "style.php"?>

<div id="header-container">
  <a id="logo" href="?home">
    <img src="./../public/logo.png" alt="logo">
  </a>
  <div id="search-container">
    <form id="search" action="" method="GET">
    <input type="hidden" name="class" value="ProductController">
      <input type="hidden" name="action" value="searchByName">
      <button type="submit">
        <img src="./../public/loupe.svg" alt="loupe">
      </button>
      <input type="text" name="search" placeholder="Faça aqui sua busca">
    </form>
  </div>  
  <div id="menu-container">
    <ul>
      <li>
        <a href="?class=ProductController&action=show">
          <img src="./../public/checklist.svg" alt="product">
          <p>Products</p>
        </a>
      </li>
      <li>
        <a href="?class=CategoryController&action=show">
          <img src="./../public/tag.svg" alt="tag">
          <p>Categories</p>
        </a>
      </li>
    </ul>
  </div>
</div>
