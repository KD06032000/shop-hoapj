<?php ob_start();
include "db.php";
session_start();
if(isset($_GET['action']))
{
	$action=$_GET['action'];
}
else
{
	$action="";
}
if(isset($_GET['id']))
{
	$product_id=$_GET['id'];
}   
else
{
	$product_id=0;
}
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <!-- Basic page needs
        ============================================ -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Single Product | fc flower</title>
    <meta name="description" content="">
    <!-- Mobile specific metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- font awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <!-- carousel Theme CSS -->
    <link rel="stylesheet" href="css/owl.my_theme.css">
    <!-- carousel transitions CSS -->
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- nivo slider slider css -->
    <link rel="stylesheet" href="css/nivo-slider.css">
    <!-- animate css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Price jquery-ui  -->
    <link rel="stylesheet" href="css/jquery-ui.css">
    <!-- fancy-box theme -->
    <link rel="stylesheet" href="fancy-box/jquery.fancybox.css">
    <!-- normalizer -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Mobile menu css -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- main -->
    <link rel="stylesheet" href="css/main.css">
    <!-- style -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
    <!--Start Header-->
    <?php include "header.php"; ?>
    <!--End Main Menu area -->
        <!-- breadcrumbs area -->
        <div class="breadcrumbs_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcrumb-single breadcrumb_top">
                            <ul id="breadcrumbs">
                                <li><a href=""><i class="fa fa-home"></i>Home</a></li>
                                <li><span>I</span></li>
                                <li>LOREM IPSUM DOLOR</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End breadcrumbs area -->
        <!-- Start preview Product details area -->
        <div class="blog_single_view_area">
            <div class="container">
                <?php
                        $rows=query("SELECT * FROM `products` where `product_id`=$product_id ");
                        while ($row=mysqli_fetch_array($rows)) {
                            $image=$row['product_image'];
                            $price=$row['product_price'];
                            $tit=$row['product_title'];
                            $desc=$row['product_desc'];
                    ?>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="my_tabs">
                            <div class="tab-content tab_content_style">
                                <div id="tab1" class="tab-pane fade in active">
                                    <div class="blog_tabs">
                                        <a class="fancybox" href="img/product/pr1.png" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="img/product/<?php echo $image ?>" alt="" /></a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog_view_list">
                                <ul class="tab_style tab_bottom">
                                    <li class="active">
                                        <div class="blog_single_carousel">
                                            <a data-toggle="tab" href="#tab1"><img src="img/product/<?php echo $image ?>" alt="" /></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    
                        <div class="blog_product_details">
                            <h2 class="blog_heading"><a href=""><?php echo $tit; ?></a></h2>
                            <div class="product_rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product_rating">
                                <a href="#">1 Review(s) <span>I</span></a>
                                <a href="#"> Add Your Review</a>
                            </div>
                            <div class="pricing_rate">
                                <p class="stack">T??nh tr???ng:<span class="in-stock"> C??n h??ng</span></p>
                                <p class="rating_dollor rating_margin"><span class="rating_value_one dollor_size">400000 VND</span> <span class="rating_value_two"><?php echo $price; ?> VND</span></p>
                                <p class="blog_texts"><?php echo $desc; ?></p>
                            </div>
                            <div class="product_blog_button">
                                <div class="cart_blog_details blog_icon_border">
                                    <a href="" target="blank"><i class="fa fa-heart-o"></i></a>
                                </div>
                                <div class="cart_blog_details blog_icon_border updateqty" name="btnqty">
                                    <a href="" target="expand"><i class="fa fa-retweet"></i></a> 
                                </div>
                                <div class="cart_blog_details blog_icon_border">
                                    <a href="" target="heart"><i class="fa fa-envelope"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="product_options_area">
                            <div class="product_options_selection">
                            
                            </div>
                            <div class="cart_blog_item">
                                <form method="GET" action="cart2.php" class="">
                                <p class="rating_dollor rating_margin"><span class="rating_value_one dollor_size">$170.00</span> <span class="rating_value_two">$12.00</span></p>
                                    <div class="add-to-cart">
                                        <input type="number" title="Qty" value="1" class="qty" name="qty"/>
                                        <input type="hidden" value="<?php echo $row['product_id'] ?>" name="id"/>
                                        <a href="cart2.php"><button type="submit" title="Add to Cart" class="cart_button" ><span>Add to Cart</span></button><a>
                                    </div>    
                                </form>  
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>   
            </div>   
        </div>    
        <!-- End preview Product details area -->
        <!-- Start Product details tabs area -->
        <div class="product_collateral_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="my_tabs_description">
                            <ul class="tab_style">
                                <li class="active">
                                    <a data-toggle="tab" href="#tab-1">M?? t???</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab-2">????nh gi??</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab-3">Product Tags</a>
                                </li>
                            </ul>
                            <div class="tab-content tab_content_style">
                                <div id="tab-1" class="tab-pane fade in active">
                                    <div class="product_description">
                                        <p>??? Mi???n ph?? ship to??n Th??nh Ph???.<br><br>
                                        ??? Mi???n ph?? h??a ????n ????? n???u qu?? kh??ch c?? nhu c???u.<br><br>
                                        ??? Mi???n ph?? b??ng r??n ho???c thi???p ch??c m???ng.<br><br>
                                        ??? Cam k???t h??i l??ng qu?? kh??ch<br><br>
                                        ??? V???i ?????i ng?? nh??n vi??n tr??? trung ?????y nhi???t huy???t v?? d??y d???n kinh nghi???m, ch??ng t??i lu??n n??? l???c h???t s???c m??nh ????? l??m h??i l??ng qu?? kh??ch h??ng.<br><br>
                                        ??? ??i???n hoa t????i cam k???t s???n ph???m hoa sinh nh???t ???????c th???c hi???n d???a tr??n m???u ???? ch???n.<br><br>
                                        ??? Mi???n ph?? thi???p ch??c m???ng, b??ng z??n ( n???u c?? n???i dung ch??c m???ng ).<br><br>
                                        ??? S???n ph???m ???????c chuy???n ph??t mi???n ph?? trong khu v???c n???i th??nh. Ri??ng ngo???i th??nh ph?? ship s??? t??? 30-70.000??.<br><br>
                                        ??? Th???i gian giao h??ng nhanh nh???t c?? th??? t??? 30 ph??t k??? t??? khi kh??ch h??ng ?????t h??ng (?????i v???i c??c ????n h??ng g???p, tu??? thu???c v??o y??u c???u v?? ?????a ch??? ???????c giao).<br><br>
                                        ??? D??? d??ng thanh to??n online v???i th??? n???i ?????a, qu???c t???, Visa, Master, Paypal??? ngay t???i website.<br><br>
                                        ??? Hoa t???t cam k???t g???i h??nh ???nh th???c t??? s???n ph???m c???a qu?? kh??ch tr?????c khi giao h??ng 30 ph??t(qua zalo ho???c c??c ph????ng ti???n li??n h??? kh??c). S???n ph???m c???a ch??ng t??i lu??n mang nh???ng ?? ngh??a t???t ?????p nh???t g???i t???i ng?????i nh???n.. 
                                        </p>
                                                                            
                                    </div>
                                </div>
                                <div id="tab-2" class="tab-pane fade">
                                    <div class="product_description">
                                        <ul id="Motorola">
                                            <li><a href="#">Motorola</a> Review by <span class="Motorola_cl">Motorola</span></li>
                                            <li><span>Quality</span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li><span>Price</span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li><span>Value</span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>Motorola (Posted on 11/2/2015)</li>
                                        </ul>
                                        <div class="fieldsets">
                                            <h3>You're reviewing: <span>Lorem ipsum dolor</span></h3>
                                            <h4>How do you rate this product?*</h4>
                                            <div class="start_tab_pricing_area">
                                                <fieldset>
                                                    <table class="star_pricing_tb">
                                                        <tr>
                                                            <th></th>
                                                            <th>1 Star</th>
                                                            <th>2 Stars</th>
                                                            <th>3 Stars</th>
                                                            <th>4 Stars</th>
                                                            <th>5 Stars</th>
                                                        </tr>
                                                        <tr>
                                                            <td>Quality</td>
                                                            <td><input type="radio" name="ratings[1]" value="1" class="radio"></td>
                                                            <td><input type="radio" name="ratings[1]" value="2" class="radio"></td>
                                                            <td><input type="radio" name="ratings[1]" value="3" class="radio"></td>
                                                            <td><input type="radio" name="ratings[1]" value="4" class="radio"></td>
                                                            <td><input type="radio" name="ratings[1]" value="5" class="radio"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Price</td>
                                                            <td><input type="radio" name="ratings[2]" value="6" class="radio"></td>
                                                            <td><input type="radio" name="ratings[2]" value="7" class="radio"></td>
                                                            <td><input type="radio" name="ratings[2]" value="8" class="radio"></td>
                                                            <td><input type="radio" name="ratings[2]" value="9" class="radio"></td>
                                                            <td><input type="radio" name="ratings[2]" value="10" class="radio"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value</td>
                                                            <td><input type="radio" name="ratings[3]" value="11" class="radio"></td>
                                                            <td><input type="radio" name="ratings[3]" value="12" class="radio"></td>
                                                            <td><input type="radio" name="ratings[3]" value="13" class="radio"></td>
                                                            <td><input type="radio" name="ratings[3]" value="14" class="radio"></td>
                                                            <td><input type="radio" name="ratings[3]" value="15" class="radio"></td>
                                                        </tr>
                                                    </table>
                                                </fieldset>
                                            </div>

                                            <div class="rating_contact">
                                                <ul id="review_contact">
                                                    <li>Nickname<span>*</span></li>
                                                    <li><input type="text" name="nickname" class="input-text required-entry" value=""></li>
                                                    <li>Summary of Your Review<span>*</span></li>
                                                    <li><input type="text" name="nickname" class="input-text required-entry" value=""></li>
                                                    <li>Review<span>*</span></li>
                                                    <li><textarea name="detail" cols="5" rows="3" class="required-entry"></textarea></li>
                                                </ul>
                                            </div>
                                            <div class="review_button">
                                                <button type="submit" title="Submit Review" class="button">Submit Review</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-3" class="tab-pane fade">
                                    <div class="product_description">
                                        <div class="product_tag_area">
                                            <h2>Other people marked this product with these tags:</h2>
                                            <ul id="product_tags">
                                                <li><a href="#">fashion</a> <span>(1)</span></li>
                                                <li><a href="#">Nunc</a> <span>(1)</span></li>
                                                <li><a href="#">facilisis</a> <span>(1)</span></li>
                                            </ul>
                                            <div class="add_tags">
                                                <h2>Add Your Tags:</h2>
                                                <input type="text" name="nickname" class="input-text required-entry" value="">
                                            </div>
                                            <div class="review_button product_tag_add">
                                                <button type="submit" title="Submit Review" class="button">Add Tags</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Product details tabs area -->
        <!-- Start upsell products area -->
        <!-- <div class="upsell_products">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="feature_text feature_upsell">
                            <h4>Upsell Products</h4>
                        </div>
                        <div class="row">
                            <div class="upsell_product_list">
                                <div class="col-lg-3">
                                    <div class="single_upsell">
                                        <a href="#"><img src="img/product/pr1.png" alt="" /></a>
                                        <div class="upsell_details">
                                            <h2><a href="">Vivamus eu imper</a></h2>
                                            <div class="product_rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="product_rating">
                                                <a href="#">1 Review(s) <span>I</span></a>
                                                <a href="#"> Add Your Review</a>
                                            </div>
                                            <p>$10.00</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_upsell">
                                        <a href="#"><img src="img/product/pr2.png" alt="" /></a>
                                        <div class="upsell_details">
                                            <h2><a href="">Vivamus eu imper</a></h2>
                                            <div class="product_rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="product_rating">
                                                <a href="#">1 Review(s) <span>I</span></a>
                                                <a href="#"> Add Your Review</a>
                                            </div>
                                            <p>$9.00</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_upsell">
                                        <a href="#"><img src="img/product/pr3.png" alt="" /></a>
                                        <div class="upsell_details">
                                            <h2><a href="">Vivamus eu imper</a></h2>
                                            <div class="product_rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="product_rating">
                                                <a href="#">1 Review(s) <span>I</span></a>
                                                <a href="#"> Add Your Review</a>
                                            </div>
                                            <p>$15.00</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_upsell">
                                        <a href="#"><img src="img/product/pr4.png" alt="" /></a>
                                        <div class="upsell_details">
                                            <h2><a href="">Vivamus eu imper</a></h2>
                                            <div class="product_rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="product_rating">
                                                <a href="#">1 Review(s) <span>I</span></a>
                                                <a href="#"> Add Your Review</a>
                                            </div>
                                            <p>$17.00</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_upsell">
                                        <a href="#"><img src="img/product/pr5.png" alt="" /></a>
                                        <div class="upsell_details">
                                            <h2><a href="">Vivamus eu imper</a></h2>
                                            <div class="product_rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="product_rating">
                                                <a href="#">1 Review(s) <span>I</span></a>
                                                <a href="#"> Add Your Review</a>
                                            </div>
                                            <p>$18.00</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- End upsell products area -->
        <!-- Start Related products area -->
        <!-- <div class="related_products_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="feature_text feature_upsell">
                            <h4>Related Products</h4>
                        </div>
                        <div class="row">
                            <div class="upsell_product_list">
                                <div class="col-lg-3">
                                    <div class="single_upsell">
                                        <a href="#"><img src="img/product/pr6.png" alt="" /></a>
                                        <div class="upsell_details">
                                            <h2><a href="">Vivamus eu imper</a></h2>
                                            <div class="product_rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="product_rating">
                                                <a href="#">1 Review(s) <span>I</span></a>
                                                <a href="#"> Add Your Review</a>
                                            </div>
                                            <p>$12.00</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_upsell">
                                        <a href="#"><img src="img/product/pr7.png" alt="" /></a>
                                        <div class="upsell_details">
                                            <h2><a href="">Vivamus eu imper</a></h2>
                                            <div class="product_rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="product_rating">
                                                <a href="#">1 Review(s) <span>I</span></a>
                                                <a href="#"> Add Your Review</a>
                                            </div>
                                            <p>$19.00</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_upsell">
                                        <a href="#"><img src="img/product/pr8.png" alt="" /></a>
                                        <div class="upsell_details">
                                            <h2><a href="">Vivamus eu imper</a></h2>
                                            <div class="product_rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="product_rating">
                                                <a href="#">1 Review(s) <span>I</span></a>
                                                <a href="#"> Add Your Review</a>
                                            </div>
                                            <p>$12.00</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_upsell">
                                        <a href="#"><img src="img/product/pr9.png" alt="" /></a>
                                        <div class="upsell_details">
                                            <h2><a href="">Vivamus eu imper</a></h2>
                                            <div class="product_rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="product_rating">
                                                <a href="#">1 Review(s) <span>I</span></a>
                                                <a href="#"> Add Your Review</a>
                                            </div>
                                            <p>$17.00</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_upsell">
                                        <a href="#"><img src="img/product/pr10.png" alt="" /></a>
                                        <div class="upsell_details">
                                            <h2><a href="">Vivamus eu imper</a></h2>
                                            <div class="product_rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="product_rating">
                                                <a href="#">1 Review(s) <span>I</span></a>
                                                <a href="#"> Add Your Review</a>
                                            </div>
                                            <p>$15.00</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- End Related products area -->
        <!-- Start Branding area -->
        <?php include "footer.php"; ?>
        <!-- End Footer area -->
        <!-- jquery JS -->
        <script src="js/vendor/jquery-1.11.3.min.js"></script>
        <!-- bootstrap JS -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Mobile menu JS -->
        <script src="js/jquery.meanmenu.js"></script>
        <!-- jquery.easing js -->
        <script src="js/jquery.easing.1.3.min.js"></script>
        <!-- knob circle js -->
        <script src="js/jquery.knob.js"></script>
        <!-- fancybox JS -->
        <script src="fancy-box/jquery.fancybox.pack.js"></script>
        <!-- price slider JS  -->
        <script src="js/price-slider.js"></script>
        <!-- nivo slider JS -->
        <script src="js/jquery.nivo.slider.pack.js"></script>
        <!-- wow JS -->
        <script src="js/wow.js"></script>
        <!-- nivo-plugin JS -->
        <script src="js/nivo-plugin.js"></script>
        <!-- scrollUp JS -->
        <script src="js/jquery.scrollUp.js"></script>
        <!-- carousel JS -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- plugins JS -->
        <script src="js/plugins.js"></script>
        <!-- main JS  -->
        <script src="js/main.js"></script>
</body>
</html>
<?php

ob_end_flush();
?>