<?php 

  if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(isset($_POST['delete-cart-submit'])){
      $deletedRecord = $cart->deleteCart($_POST['item_id']);
    }

    if(isset($_POST['whishlist-submit'])){
      $cart->saveForLater($_POST['item_id']);
    }
  }
?>

<!-- SHOPPING CAR SECTION -->
<section id="cart" class="py-3">
      <div class="container-fluid w-75">
        <h5 class="font-baloo font-size-20">Shopping Cart</h5>

        <!-- SHOPPING CART ITEMS -->
        <div class="row">
          <div class="col-sm-9">

            <?php 
              foreach($product->getData("cart") as $item) : 
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
                    <div class="d-flex font-rale w-25">
                      <button class="qty-up border bg-light" data-id="<?php echo $item['item_id'] ?? "0"; ?>"><i class="fas fa-angle-up"></i></button>
                      <input data-id="<?php echo $item['item_id'] ?? '0'; ?>" type="text" class="qty_input border px-2 w-100 bg-light" disabled value="1"
                        placeholder="1">
                      <button data-id="<?php echo $item['item_id'] ?? '0'; ?>" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                    </div>
                    <form method="POST">
                      <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? 0; ?>">
                      <button type="submit" name="delete-cart-submit" class="btn font-baloo text-danger px-3 border-right">Delete</button>
                    </form>

                    <form method="POST">
                      <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? 0; ?>">
                      <button type="submit" name="whishlist-submit" class="btn font-baloo text-danger">Save for Later</button>
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
            <!-- SUBTOTAL -->
            <div class="sub-total border text-center mt-2">
              <h6 class="font-size-12 font-rale text-success py-3"><i class="fas fa-check"></i> Your order is eligible
                for
                FREE Delivery.</h6>
              <div class="border-top py-4">
                <h5 class="font-size-20 font-baloo">Subtotal (<?php echo isset($subtotal) ? count($subtotal) : 0; ?> item(s)) &nbsp; <span class="text-danger">$<span
                      class="text-danger" id="deal-price"><?php echo isset($subtotal) ? $cart->getSum($subtotal) : 0; ?></span></span></h5>
                <button type="submit" class="btn btn-warning mt-3">Procced to Buy</button>
              </div>
            </div>
            <!-- SUBTOTAL -->
          </div>
        </div>
        <!-- SHOPPING CART ITEMS -->
      </div>
    </section>
    <!-- SHOPPING CAR SECTION -->
