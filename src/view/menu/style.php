<?php echo "<style type=\"text/css\"> 

#options-container {
  display: flex;
  width: 100%;
  height: 100%;
  justify-content: space-between;
}

#options-container div {
  display: flex;
  width: 33.33%;
  justify-content: center;
  align-items: center;
  transition: width 1s;
}

#options-container div a img {
  height: 60px;
  margin-bottom: 10px;
}

#options-container div a {
  display: flex;
  height: 100%;
  width: 100%;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  text-decoration: none;
  color: white;

}

#products-opt {
  background: #ff3f66;

}

#products-opt:hover {
  width: 50%;
}

#categories-opt {
  background: #1cb7cd;
}

#categories-opt:hover {
  width: 50%;
}

#add-products {
  background: #ffc327;
}

#add-products:hover {
  width: 50%;
}



</style>" ?>