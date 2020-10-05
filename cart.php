<?php 

  include("header.php"); 

  count($product->getData('cart')) ? include("./template/_cart.php") : include("./template/notFound/_cart_not_found.php") ; 

  count($product->getData('wishlist')) ? include("./template/_whishlist_template.php") : include("./template/notFound/_wishlist_not_found.php") ; 

  include("./template/_new-phones.php"); 

  include("footer.php"); 
  
