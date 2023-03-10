<?php
include "db.php";
session_start();

?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <!-- Basic page needs
        ============================================ -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Shopping Cart | fc flower</title>
    <meta name="description" content="">
    <!-- Mobile specific metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- font awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- carousel CSS  -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <!-- carousel Theme CSS  -->
    <link rel="stylesheet" href="css/owl.my_theme.css">
    <!-- carousel transitions CSS  -->
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- nivo slider slider css -->
    <link rel="stylesheet" href="css/nivo-slider.css">
    <!-- animate css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Price jquery-ui  -->
    <link rel="stylesheet" href="css/jquery-ui.css">
    <!-- fancy-box theme -->
    <link rel="stylesheet" href="fancy-box/jquery.fancybox.css">
    <!-- normalizer  -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Mobile menu css -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- main  -->
    <link rel="stylesheet" href="css/main.css">
    <!-- style  -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS ============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--Start Header Top area -->
    <?php include "header.php"?>
    <!--End Main Menu area -->
    <!--Start Shopping Cart top area -->
    <div class="shopping_cart_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="cart_title">
                        <h2>Shopping Cart</h2>
                    </div>
                    <div class="shopping-cart-table">
					<!-- <form action="" method="POST"> -->
                        <table class="cart_items">
                            <tr>
                                <th>X??a</th>
                                <th>STT</th>
                                <th>S???n ph???m</th>
                                <th>S??? l?????ng</th>
                                <th>S???a</th>
                                <th>Gi??</th>
                                <th>T???ng ti???n</th>
                            </tr>
							<tr>
								<?php $sub_total =0; ?>
                                <?php foreach ($cart as $key => $value):
                                    $sub_total+=($value['qty']*$value['price']);
                                    ?>
								<td><a href="cart2.php?id=<?php echo $value['id']?>&action=delete"><img src="img/arrow/btn_trash.gif" alt="" /></a></td>
								<td><?php echo $key ++; ?></td>
                                <td><img src="img/product/<?php echo $value['image']; ?>" width="150pt" height="150pt"></td>
                                <form action="cart2.php">
                                    <input type="hidden" name="action" value="update">
                                    <input type="hidden" name="id" value="<?php echo $value['id'];?>">
                                    <td><input type="text" name="qty" value="<?php echo $value['qty']; ?>"></td>
                                    <td><button type="submit">c???p nh???t</button></td>
                                </form>
								<td><?php echo $value['price'];?></td>
								<td><?php echo number_format($value['qty']*$value['price']);?></td>	
								</tr>
                                <?php endforeach ?>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="shopping_cart_main">
                        <div class="shopping_button">
                            <a href="shop.php"><button  type="button" title="shop" class="continue_shopping">Ti???p t???c mua h??ng</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Shopping Cart top area -->
    <!--Start Estimate Shipping,Discount,Total checkout area -->
    <div class="cart-collaterals-item">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <!-- ------------------------- -->
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shopping_details_des">
                        <h2>M?? gi???m gi??</h2>
                        <h3>N???u b???n c?? m?? gi???m gi?? h??y nh???p d?????i ????y.</h3>
                        <div class="shopping_form">
                            <form method="POST" action="">
                                <input class="input-text validate-postcode" type="text" name="postcode" value="">
                                <div class="review_button product_tag_add">
                                    <button type="submit" title="Submit Review" class="button">??p d???ng</button>
                                </div>
                                
                            </form>
                            <?php
                            if (isset($_POST['postcode']))
                            {
                                $code=$_POST['postcode'];
                            } else
                            $code ='';
                            //echo "<script>console.log('qty: " . $qty . "' );</script>";
                        ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="total_price">
                        <table class="total_rate">
                            <tr>
                                <td>T???ng c???ng</td>
                                <td><?php echo number_format($sub_total); ?> VND</td>
                            </tr>
                            <tr>
                                <?php
                                //echo "<script>console.log('qty: " . $code . "' );</script>";
                                $c=0;
                                if($code =='code'||$code =='HQQB1') {
                                    $c=$sub_total-50000;
                                }else{
                                    $c=$sub_total;
                                }
                                $format2 = number_format($c);
                                ?>
                                <th>C??n l???i</th>
                                <th><?php echo $format2; ?> VND</th>
                            </tr>
                            <tr>
                                <td>M?? ???????c ??p d???ng:</td>
                                <td><?php echo $code; ?></td>
                            </tr>
                        </table>
                    </div>
                    <div class="check_out_simble review_button">
                        
                        <a href="check.php"><button type="submit" title="Submit Review" class="button" name="btnx">Thanh to??n</button></a>
                        <!-- <a href="check.php"><input type="submit" name="momo" value="MOMO ATM" class="btn btn-danger"></a> -->
                        <form class="" method="POST" target="_blank" enctype="application/x-www-form-urlencoded" action="xulythanhtoanmomoatm.php">
                            <input type="submit" name="momo" value=" MOMO ATM " class="btn btn-danger">
                            <input type="hidden" value="<?php  echo $sub_total ?>" name="tong_tien" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Estimate Shipping,Discount,Total checkout area -->
    <!--End Branding area -->

    <!--Start Footer area -->
    <?php include "footer.php"?>
    <!--End Footer area -->

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