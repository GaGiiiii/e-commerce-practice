<?php 
  
  $brand = array_map(function($pro){ return $pro['item_brand']; }, $product_shuffle);
  $unique = array_unique($brand);
  sort($unique);
  shuffle($product_shuffle);

  if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(isset($_POST['special_price_submit'])){
      $cart->addToCart($_POST['user_id'], $_POST['item_id']);
    }
  }

  $in_cart = $cart->getCartId($product->getData('cart'));

?>
<!-- SPECIAL PRICE -->
<secion id="special-price">
    <div class="container">
      <h4 class="font-rubik font-size-20">Special Price</h4>
      <div id="filters" class="button-group text-right font-baloo font-size-16">
        <button class="btn is-checked" data-filter="*">All Brands</button>
        <?php 
          array_map(function($brand){ 
            printf('<button class="btn is-checked" data-filter=".%s">%s</button>', $brand, $brand);
          }, $unique)
        ?>
      </div>

      <div class="grid">
         
        <?php array_map(function ($item) use($in_cart){ ?>

          <div class="grid-item <?php echo $item['item_brand'] ?? "Brand"; ?> border">
            <div class="item py-2" style="width: 200px;">
              <div class="product font-rale">
                <a href="product.php?item_id=<?php echo $item['item_id']; ?>">
                  <img src="<?php echo $item['item_image'] ?? "./assets/products/13.png"; ?>" class="img-fluid">
                </a>
                <div class="text-center">
                  <h6><?php echo $item['item_name'] ?? "Unknown"; ?></h6>
                  <div class="rating text-warning font-size-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                  </div>
                  <div class="price py-2">
                    <span>$<?php echo $item['item_price'] ?? 0; ?></span>
                  </div>
                  <form method="POST">
                    <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? "1"; ?>">
                    <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                    <?php 
                      if(in_array($item['item_id'], $in_cart ?? [])){
                        echo '<button disabled type="submit" class="btn btn-success font-size-12">In The Cart</button>';
                      }else{
                        echo '<button type="submit" name="special_price_submit" class="btn btn-warning font-size-12">Add To Cart</button>';
                      }
                    ?>                  
                  </form>
                </div>
              </div>
            </div>
          </div>

        <?php }, $product_shuffle) ?>

      </div>
    </div>
  </secion>
  <!-- SPECIAL PRICE -->