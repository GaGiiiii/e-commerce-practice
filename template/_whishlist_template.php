<?php 

  if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(isset($_POST['delete-cart-submit'])){
      $deletedRecord = $cart->deleteCart($_POST['item_id']);
    }

    if(isset($_POST['cart-submit'])){
      $cart->saveForLater($_POST['item_id'], "cart", "wishlist");
    }
  }
?>

<!-- SHOPPING CAR SECTION -->
<section id="cart" class="py-3">
      <div class="container-fluid w-75">
        <h5 class="font-baloo font-size-20">Whishlist</h5>

        <!-- SHOPPING CART ITEMS -->
        <div class="row">
          <div class="col-sm-9">

            <?php 
              foreach($product->getData("wishlist") as $item) : 
                $cart2 = $product->getProduct($item['item_id']);
                $subtotal[] = array_map(function($item){
            ?>
              <!-- CART ITEM -->
              <div class="row border-top py-3 mt-3">
                <div class="col-sm-2">
                  <img src="<?php echo $item['item_image'] ?? "./assets/products/1.png"; ?>" class="img-fluid" alt="" style="height: 120px;">
                </div>
                <div class="col-sm-8">
                  <h5 class="font-baloo font-size-20"><?php echo $item['item_name'] ?? "Unknown"; ?></h5>
                  <small>by <?php echo $item['item_brand'] ?? "Brand"; ?></small>
                  <!-- RATING -->
                  <div class="d-flex">
                    <div class="rating text-warning font-size-12">
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="far fa-star"></i></span>
                    </div>
                    <a href="#" class="px-2 font-rale font-size-14">20,354 ratings</a>
                  </div>
                  <!-- RATING -->

                  <!-- PRODUCT QTY -->
                  <div class="qty d-flex pt-2">
                    <form method="POST">
                      <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? 0; ?>">
                      <button type="submit" name="delete-cart-submit" class="btn font-baloo text-danger pl-0 pr-3 border-right">Delete</button>
                    </form>

                    <form method="POST">
                      <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? 0; ?>">
                      <button type="submit" name="cart-submit" class="btn font-baloo text-danger">Add To Cart</button>
                    </form>
                  </div>
                  <!-- PRODUCT QTY -->
                </div>
                <div class="col-sm-2 text-right">
                  <div class="font-size-20 text-danger font-baloo">
                    $<span data-id="<?php echo $item['item_id'] ?? '0'; ?>" class="product_price"><?php echo $item['item_price'] ?? 0; ?></span>
                  </div>
                </div>
              </div>
              <!-- CART ITEM -->
              <?php return $item['item_price']; ?>
            <?php }, $cart2); endforeach; ?>

          </div>
          <div class="col-sm-3">

          </div>
        </div>
        <!-- SHOPPING CART ITEMS -->
      </div>
    </section>
    <!-- SHOPPING CAR SECTION -->
