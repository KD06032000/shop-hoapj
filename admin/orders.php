<?php
session_start();
include("../db.php");

error_reporting(0);
if(isset($_GET['action']) && $_GET['action']!="" && $_GET['action']=='delete')
{
$order_id=$_GET['order_id'];

/*this is delet query*/
query("DELETE FROM `orders` WHERE `id`='$order_id'")or die("delete query is incorrect...");
query("DELETE FROM `orders_detail` WHERE `orders_id`='$order_id'")or die("delete query is incorrect...");
} 

include "sidenav.php";
include "topheader.php";
?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <!-- your content here -->
          <div class="col-md-14">
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Orders  / Page <?php echo $page;?> </h4>
              </div>
              <div class="card-body">
                <div class="table-responsive ps">
                  <table class="table table-hover tablesorter " id="">
                    <thead class=" text-primary">
                      <tr>
                        <th>Full Name</th>
                        <th>Name</th>
                        <th>Email | Phone</th>
                        <th>Address</th>
                        <th>Total</th>
                        <th>Payments</th>
                        <th>Time</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                        //$result=mysqli_query($con,"select order_id, product_title, first_name, mobile, email, address1, address2, product_price,address2, qty from orders,products,user_info where orders.product_id=products.product_id and user_info.user_id=orders.user_id Limit $page1,10")or die ("query 1 incorrect.....");
                        $rows=query("SELECT `id`, `first_name`, `last_name`, `email`, `address1`, `address2`, `mobile`, `total`, `ship`, `date`, `description` FROM `orders`");
                        while ($row=mysqli_fetch_array($rows)) 
                        //while(list($order_id,$p_names,$cus_name,$contact_no,$email,$address,$country,$details,$zip_code,$time,$quantity)=mysqli_fetch_array($result))
                        {
                        $order_id=$row['id'];
                        $description=$row['description'];
                        $first_name=$row['first_name'];
                        $last_name=$row['last_name'];
                        $total=$row['total'];
                        $email=$row['email'];
                        $address1=$row['address1'];
                        $address2=$row['address2'];
                        $mobile=$row['mobile'];
                        $date=$row['date'];
                        echo "<tr>
                                <td>$first_name $last_name</td>
                                <td>$last_name</td>
                                <td>$email<br>ZIP: $mobile</td>
                                <td>$address2<br>$address1</td>
                                <td>$description</td>
                                <td>$total</td>
                                <td>$date</td>

                        <td>
                        <a class=' btn btn-danger' href='orders.php?order_id=$order_id&action=delete'>Delete</a>
                        </td></tr>";
                        }
                        ?>

                    </tbody>
                  </table>
                  
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
              </div> 
              <div class="float-right">
                      <a href="./export.php" class="btn btn-success"><i class="dwn"></i>Export</a>
              </div>
            </div>
          </div>
          
        </div>
      </div>
      <?php
include "footer.php";
?>