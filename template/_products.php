<?php 

  $item_id = $_GET['item_id'] ?? 1;

  foreach($product->getData() as $item):

    if($item['item_id'] == $item_id):
?>

<!-- PRODUCT -->
<section id="product" class="py-3">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <img src="<?php echo $item['item_image'] ?? "./assets/products/1.png"; ?>" alt="" class="img-fluid">
            <div class="form-row pt-4 font-size-16 font-baloo">
              <div class="col">
                <button type="submit" class="btn btn-danger form-control">Procced To Buy</button>
              </div>
              <div class="col">
                <button type="submit" class="btn btn-warning form-control">Add To Cart</button>
              </div>
            </div>
          </div>
          <div class="col-sm-6 py-5">
            <h5 class="font-baloo font-size-20"><?php echo $item['item_name'] ?? "Unknown"; ?></h5>
            <small>by <?php echo $item['item_brand'] ?? "Brand"; ?></small>
            <div class="d-flex">
              <div class="rating text-warning font-size-12">
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="far fa-star"></i></span>
              </div>
              <a href="#" class="px-2 font-rale font-size-14">20,534 ratings | 1000+ answered questions</a>
            </div>
            <hr class="m-0">

            <!-- PRODUCT PRICE -->
            <table class="my-3">
              <tr class="font-rale font-size-14">
                <td>M.R.P:</td>
                <td><strike>$163.00</strike></td>
              </tr>
              <tr class="font-rale font-size-14">
                <td>Deal Price:</td>
                <td class="font-size-20 text-danger">$<span><?php echo $item['item_price'] ?? 0; ?></span><small
                    class="text-dark font-size-12">&nbsp;Inclusive of all taxes</small>
                </td>
              </tr>
              <tr class="font-rale font-size-14">
                <td>You Save:</td>
                <td><span class="font-size-16 text-danger">$152.00</span>
                </td>
              </tr>
            </table>
            <!-- PRODUCT PRICE -->

            <!-- POLICY -->
            <div id="policy">
              <div class="d-flex">
                <div class="return text-center mr-5">
                  <div class="font-size-20 my-2 color-second">
                    <span class="fas fa-retweet border p-3 rounded-pill"></span>
                  </div>
                  <a href="#" class="font-rale font-size-12">10 Days <br>Replacement</a>
                </div>

                <div class="return text-center mr-5">
                  <div class="font-size-20 my-2 color-second">
                    <span class="fas fa-truck border p-3 rounded-pill"></span>
                  </div>
                  <a href="#" class="font-rale font-size-12">Daily Tuition <br>Delivered</a>
                </div>

                <div class="return text-center mr-5">
                  <div class="font-size-20 my-2 color-second">
                    <span class="fas fa-check-double border p-3 rounded-pill"></span>
                  </div>
                  <a href="#" class="font-rale font-size-12">1 Year <br>Warranty</a>
                </div>
              </div>
            </div>
            <!-- POLICY -->
            <hr>

            <!-- ORDER DETAILS -->
            <div id="order-details" class="font-rale d-flex flex-column text-dark">
              <small>Delivery By: Mar 29 - Apr 1</small>
              <small>Sold By: <a href="#">Daily Electronics</a> (4.5 out of 5 | 18.198 ratings)</small>
              <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp; Deliver to Customer -
                424201</small>
            </div>
            <!-- ORDER DETAILS -->

            <div class="row">
              <div class="col-6">
                <!-- COLOR -->
                <div class="color my-3">
                  <div class="d-flex justify-content-between">
                    <h6 class="font-baloo">Color:</h6>
                    <div class="p-2 color-yellow-bg rounded-circle"><button class="btn font-size-14"></button></div>
                    <div class="p-2 color-primary-bg rounded-circle"><button class="btn font-size-14"></button></div>
                    <div class="p-2 color-second-bg rounded-circle"><button class="btn font-size-14"></button></div>
                  </div>
                </div>
                <!-- COLOR -->
              </div>
              <div class="col-6">
                <!-- PRODUCT QTY SECTION -->
                <div class="qty d-flex">
                  <h6 class="font-baloo">Qty</h6>
                  <div class="px-4 d-flex font-rale">
                    <button data-id="1" class="qty-up border bg-light"><i class="fas fa-angle-up"></i></button>
                    <input data-id="1" type="text" class="qty_input border px-2 w-50 bg-light" disabled value="1"
                      placeholder="1">
                    <button data-id="1" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                  </div>
                </div>
                <!-- PRODUCT QTY SECTION -->
              </div>
            </div>

            <!-- SIZE -->
            <div class="size my-3">
              <h6 class="font-baloo">Size: </h6>
              <div class="d-flex justify-content-between w-75">
                <div class="font-rubik border p-2">
                  <button class="btn p-0 font-size-14">4GB RAM</button>
                </div>
                <div class="font-rubik border p-2">
                  <button class="btn p-0 font-size-14">6GB RAM</button>
                </div>
                <div class="font-rubik border p-2">
                  <button class="btn p-0 font-size-14">8GB RAM</button>
                </div>
              </div>
            </div>
            <!-- SIZE -->
          </div>

          <div class="col-12">
            <h6 class="font-rubik">Product Description</h6>
            <hr>
            <p class="font-rale font-size-14">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, maiores
              quia sint fugit aspernatur voluptatem vero earum nemo ut ducimus asperiores natus voluptates saepe et
              sapiente laudantium dolorem nihil assumenda nostrum quasi, facere dicta reiciendis. Temporibus similique,
              saepe pariatur velit quia mollitia est laboriosam necessitatibus rerum, sequi cupiditate numquam corrupti!
            </p>
            <p class="font-rale font-size-14">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, maiores
              quia sint fugit aspernatur voluptatem vero earum nemo ut ducimus asperiores natus voluptates saepe et
              sapiente laudantium dolorem nihil assumenda nostrum quasi, facere dicta reiciendis. Temporibus similique,
              saepe pariatur velit quia mollitia est laboriosam necessitatibus rerum, sequi cupiditate numquam corrupti!
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- PRODUCT -->

    <?php endif; endforeach; ?>