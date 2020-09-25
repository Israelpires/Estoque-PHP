<?php echo "<style type=\"text/css\"> 

#header-container {
  display: flex;
  position: relative;
  align-items: center;
  width: 100%;
  height: 50px;
  background: #dfdfdf;
}

#logo {
  display: flex;
  position: absolute;
  align-items: center;
  left: 0;
  width: 10%;
  height: 100%;
}

#header-container #logo img {
  height: 45px;
  margin-left: 10px;
}

#search-container {
  display: flex;
  position: absolute;
  left: 10%;
}

#search-container #search {
  display: flex;
  align-items: center;
  border-radius: 5px;
  height: 40px;
  width: 400px;
  background: #fff;
}

#search-container #search button {
  display: flex;
  border: none;
  background: none;
  margin-left: 10px;
}

#search-container #search button img {
  height: 20px;
}


#search-container #search input {
  border: none;
  margin-left: 10px;
  width: 100%;
  font-size: 14px;
}

#menu-container {
  display: flex;
  position:absolute;
  top: 0;
  right:0;
  width: 20%;
  height: 100%;
  align-items: center;
}

#menu-container ul {
  display: flex;
  justify-content: space-between;
  width: 100%;
  height: 100%;
  
}

#menu-container ul li {
  display: flex;
  height: 100%;
  width: 100%;
  justify-content: center;
  align-items: center;
  font-size: 14px;
  cursor: pointer;
  background: #00acec;
}

#menu-container ul li:hover {
  background: #137ca3;
}

#menu-container ul li a {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;
  height: 100%;
  text-decoration: none;
  color: white;
}

#menu-container ul li a img {
  height: 20px;
  margin-right: 10px;
}

</style>" ?>