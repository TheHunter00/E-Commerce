        <!--   product  -->
        <?php
        $item_id = $_GET['item_id'] ?? 1;
        foreach ($product->getData() as $item) :
            if ($item['item_id'] == $item_id) :
        ?>

                <section id="product" class="py-3">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <img src="<?php echo $item['item_image'] ?? "./assets/products/1.png" ?>" alt="product" class="img-fluid">
                                <div class="form-row pt-4 font-size-16 font-baloo">
                                    <div class="col">
                                        <button type="submit" class="btn btn-danger form-control">Proceed to Buy</button>
                                    </div>
                                    <div class="col">
                                        <?php
                                        if (in_array($item['item_id'], $Cart->getCartId($product->getData('cart')) ?? [])) {
                                            echo '<button type="submit" disabled class="btn btn-success font-size-16 form-control">In the Cart</button>';
                                        } else {
                                            echo '<button type="submit" name="top_sale_submit" class="btn btn-warning font-size-16 form-control">Add to Cart</button>';
                                        }
                                        ?>
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
                                    <a href="#" class="px-2 font-rale font-size-14">20K ratings | 1000+ answered
                                        questions</a>
                                </div>
                                <hr class="m-0">
                                <!-- product price  -->
                                <table class="my-3">
                                    <tr class="font-rale font-size-14">
                                        <td>Real Price :</td>
                                        <td><strike>$180.00</strike></td>
                                    </tr>
                                    <tr class="font-rale font-size-14">
                                        <td>Current price :</td>
                                        <td class="font-size-20 text-danger">$<span><?php echo $item['item_price'] ?? 0; ?></span><small class="text-dark font-size-12">&nbsp;&nbsp;Inclusive of all taxes</small></td>

                                        </td>
                                    </tr>
                                    <tr class="font-rale font-size-14">
                                        <td>You Save :</td>
                                        <td><span class="font-size-16 text-danger">$40.00</span></td>
                                    </tr>
                                </table>
                                <!-- End product price  -->

                                <!-- policy -->
                                <div id="policy">
                                    <div class="d-flex">
                                        <div class="return text-center mr-5">
                                            <div class="font-size-20 my-2 color-second">
                                                <span class="fas fa-retweet border p-3 rounded-pill"></span>
                                            </div>
                                            <a href="#" class="font-rale font-size-12">10 Days <br> Replacement</a>
                                        </div>
                                        <div class="return text-center mr-5">
                                            <div class="font-size-20 my-2 color-second">
                                                <span class="fas fa-truck border p-3 rounded-pill"></span>
                                            </div>
                                            <a href="#" class="font-rale font-size-12">Daily orders <br> Deliverd</a>
                                        </div>
                                        <div class="return text-center mr-5">
                                            <div class="font-size-20 my-2 color-second">
                                                <span class="fas fa-check-double border p-3 rounded-pill"></span>
                                            </div>
                                            <a href="#" class="font-rale font-size-12">1 Year <br> Warranty</a>
                                        </div>

                                    </div>
                                </div>
                                <!-- End policy  -->
                                <hr>
                                <!-- order details  -->
                                <div id="order-details" class="font-rale d-flex flex-column text-dark">
                                    <small>Delivery by : Mar 28 - Apr 12</small>
                                    <small>Sold by <a href="#">Ahmed Elsayyad</a> (4.5 out of 5 | 18K ratings)</small>
                                    <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;Deliver to customer -
                                        354130</small>
                                </div>
                                <hr>
                                <!-- End order details  -->
                                <div class="row">
                                    <div class="col-6">
                                        <!-- color  -->
                                        <div class="color my-3">
                                            <div class="d-flex justify-content-between">
                                                <h6 class="font-baloo">Colors : </h6>
                                                <div class="p-2 color-second-bg rounded-circle"><button
                                                        class="btn font-size-14"></button></div>
                                                <div class="p-2 color-primary-bg rounded-circle"><button
                                                        class="btn font-size-14"></button></div>
                                                <div class="p-2 color-yellow-bg rounded-circle"><button
                                                        class="btn font-size-14"></button></div>
                                            </div>
                                        </div>
                                        <!-- End color  -->
                                    </div>

                                </div>
                                <!-- size  -->
                                <div class="size my-3">
                                    <h6 class="font-baloo">Size :</h6>
                                    <div class="d-flex justify-content-between w-75">
                                        <div class="font-rubik border p-2">
                                            <button class="btn p-0 font-size-14">4GB RAM</button>
                                        </div>
                                        <div class="font-rubik border p-2">
                                            <button class="btn p-0 font-size-14">8GB RAM</button>
                                        </div>
                                        <div class="font-rubik border p-2">
                                            <button class="btn p-0 font-size-14">16GB RAM</button>
                                        </div>
                                        <div class="font-rubik border p-2">
                                            <button class="btn p-0 font-size-14">32GB RAM</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- End size secction  -->

                            </div>

                            <div class="col-12">
                                <h5>Product Descriptions </h5>
                                <hr>
                                <p class="font-rale font-size-14">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    Corporis esse reiciendis eligendi magni ut vero! Iure aut quam quidem qui, quos earum
                                    officia voluptates similique, optio, in ex iste pariatur.</p>
                                <p class="font-rale font-size-14">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste
                                    sequi id, voluptatibus eos optio a soluta odio ipsum sapiente veritatis fugiat neque modi
                                    molestias repellat deserunt numquam omnis autem quam!</p>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End roduct  -->
        <?php
            endif;
        endforeach;
        ?>