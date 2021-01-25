<?php include 'header.php'; ?>
    <section id="in_pge_banner"  class="banner-content ser_page_banner">
        <div class="header-text text-center">
            <h4 class="page-title">Track Your Package</h4>
            <p class="page-breadcrumb">Home  /  Track a Package</p>             
        </div>          
    </section>
    <!-- End banner -->

    <!-- Service -->
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                
            </div>
            <div class="col-md-6">
                <section id="contact" class="contact-sec">
                            <form  method="post">
                        <h3 class="cntct-heading">Enter Tracking Number To Track Your Package</h3>
                        <p>Please insert your reference number for tracking and status information</p>
                        <div class="form-results"></div>
                        <div class="form-group npr res-xs-pad-0">
                            <label>Tracking Number*</label>
                            <input name="term" class="form-control required" type="text" required="">
                        </div>
                        <div class="form-group npr res-xs-pad-0">
                            <button class="btn" name="save" type="submit">Track Package</button>
                        </div>
                    </form>
                </section>
            </div>
            <div class="col-md-3">
                
            </div>
        </div>
    </div>
 <br>
     <div class="container">
    <div class="row">

        <?php
        include 'backend/conn.php';
// Check connection
        if (!$link) {
            die("Connection failed: " . mysqli_connect_error());
        }
        if(isset($_POST['save'])){
         $name = $_POST['term'];
         if (empty($name)) {
            echo "<div class='alert alert-danger'>
            <strong>Failed!</strong> Tracking Id Cannot Be Empty.
            </div>";
        }else{

            $sql = "SELECT * FROM track where ship_id LIKE '%$name%'";
            $result = mysqli_query($link, $sql);

            if (mysqli_num_rows($result) > 0) {
    // output data of each row
                while($row = mysqli_fetch_assoc($result)) {?> 
                    <h3 align="center">Tracking information for tracking number <?php echo $row["ship_id"] ?></h3>
                    <div class="col-md-6">
                        <h3 align="center">RECEIVERS DETAILS</h3><br>
                        <div class="table-responsive">
                            <table class="table table-clean-paddings margin-bottom-0" style="background-color: #0c1239">

                                <tbody>
                                    <tr>
                                        <td>
                                         <div class="contact-container"><a href="#" style="color: #ff0000;"><b>RECEIVERS <br> NAME:</b></a> </div>
                                     </td> 
                                     <td style="color: #fff; "><?php echo $row["jname"] ?></td>

                                 </tr>
                                 <tr>

                                    <tr>
                                        <td>
                                         <div class="contact-container"><a href="#" style="color: #ff0000;"><b>RECEIVERS <br> ADDRESS:</b></a> </div>
                                     </td>
                                     <td style="color: #fff; "><?php echo $row["jadd"] ?></td>

                                 </tr>
                                 <tr>
                                    <td>
                                     <div class="contact-container"><a href="#" style="color: #ff0000;"><b>RECEIVERS <br> COUNTRY:</b></a> </div>
                                 </td>
                                 <td style="color: #fff; "><?php echo $row["jcountry"] ?></td>

                             </tr>
                             <tr>
                                <td>
                                 <div class="contact-container"><a href="#" style="color: #ff0000;"><b>RECEIVERS <br> Number:</b></a> </div>
                             </td>
                             <td style="color: #fff; "><?php echo $row["jnumber"] ?></td>

                         </tr>
                         <tr>
                            <td>
                             <div class="contact-container"><a href="#" style="color: #ff0000;"><b>RECEIVERS <br> Email:</b></a> </div>
                         </td>
                         <td style="color: #fff; "><?php echo $row["jemail"] ?></td>

                     </tr>

                 </tbody>
             </table>
         </div><br>
     </div>

     <div class="col-md-6">
        <h3 align="center">SENDER's DETAILS</h3><br>
        <div class="table-responsive">
            <table class="table table-clean-paddings margin-bottom-0" style="background-color: #0c1239">

                <tbody>
                    <tr>
                        <td>
                         <div class="contact-container"><a href="#" style="color: #ff0000;"><b>SENDER'S <br> NAME:</b></a> </div>
                     </td> 
                     <td style="color: #fff; "><?php echo $row["sname"] ?></td>

                 </tr>
                 <tr>

                    <tr>
                        <td>
                         <div class="contact-container"><a href="#" style="color: #ff0000;"><b>SENDER'S <br> ADDRESS:</b></a> </div>
                     </td>
                     <td style="color: #fff; "><?php echo $row["sadd"] ?></td>

                 </tr>
                 <tr>
                    <td>
                     <div class="contact-container"><a href="#" style="color: #ff0000;"><b>SENDER'S <br> COUNTRY:</b></a> </div>
                 </td>
                 <td style="color: #fff; "><?php echo $row["scountry"] ?></td>

             </tr>
             <tr>
                <td>
                 <div class="contact-container"><a href="#" style="color: #ff0000;"><b>SENDER'S <br> Number:</b></a> </div>
             </td>
             <td style="color: #fff; "><?php echo $row["snumber"] ?></td>

         </tr>
         <tr>
            <td>
             <div class="contact-container"><a href="#" style="color: #ff0000;"><b>SENDER'S <br> Email:</b></a> </div>
         </td>
         <td style="color: #fff; "><?php echo $row["semail"] ?></td>

     </tr>

 </tbody>
</table>
</div><br>
</div>

<div class="col-md-6">
  <h3 align="center">SHIPMENT DETAILS</h3><br>
  <div class="table-responsive">
    <table class="table table-clean-paddings margin-bottom-0" style="background-color: #0c1239">

        <tbody>
            <tr>
                <td>
                 <div class="contact-container"><a href="#" style="color: #ff0000;"><b>TRANSPORTATION <br> MODE:</b></a> </div>
             </td> 
             <td style="color: #fff; "><?php echo $row["mode"] ?></td>

         </tr>
         <tr>

            <tr>
                <td>
                 <div class="contact-container"><a href="#" style="color: #ff0000;"><b>PRODUCT <br> NAME:</b></a> </div>
             </td>
             <td style="color: #fff; "><?php echo $row["prod"] ?></td>

         </tr>
         <tr>
            <td>
             <div class="contact-container"><a href="#" style="color: #ff0000;"><b>TRACKING<br> NUMBER:</b></a> </div>
         </td>
         <td style="color: #fff; "><?php echo $row["ship_id"] ?></td>

     </tr>
     <tr>
        <td>
         <div class="contact-container"><a href="#" style="color: #ff0000;"><b>DELIVERY <br> STATUS:</b></a> </div>
     </td>
     <td style="color: #fff; "><?php echo $row["deliverys"] ?></td>

 </tr>
 <tr>
    <td>
     <div class="contact-container"><a href="#" style="color: #ff0000;"><b>SHIPMENT <br> DESCRIPTION:</b></a> </div>
 </td>
 <td style="color: #fff; "><?php echo $row["descrip"] ?></td>

</tr>
</tbody>
</table>
</div><br>
</div>
<div class="col-md-6">
    <h3 align="center">PACKAGE DETAILS</h3><br>
    <div class="table-responsive">
        <table class="table table-clean-paddings margin-bottom-0" style="background-color: #0c1239">

            <tbody>
                <tr>
                    <td>
                     <div class="contact-container"><a href="#" style="color: #ff0000;"><b>PACKAGE CURRENT  <br> LOCATION:</b></a> </div>
                 </td> 
                 <td style="color: #fff; "><?php echo $row["currentl"] ?></td>

             </tr>
             <tr>

                <tr>
                    <td>
                     <div class="contact-container"><a href="#" style="color: #ff0000;"><b>PACKAGE PICKUP <br> LOCATION:</b></a> </div>
                 </td>
                 <td style="color: #fff; "><?php echo $row["pickupl"] ?></td>

             </tr>
             <tr>
                <td>
                 <div class="contact-container"><a href="#" style="color: #ff0000;"><b>DEPARTURE<br> DATE:</b></a> </div>
             </td>
             <td style="color: #fff; "><?php echo $row["Ship_date"] ?></td>

         </tr>
         <tr>
            <td>
             <div class="contact-container"><a href="#" style="color: #ff0000;"><b>DELIVERY <br> DATE:</b></a> </div>
         </td>
         <td style="color: #fff; "><?php echo $row["ddate"] ?></td>

     </tr>
     <tr>
        <td>
         <div class="contact-container"><a href="#" style="color: #ff0000;"><b>QUANTITY <br> SHIPPED:</b></a> </div>
     </td>
     <td style="color: #fff; "><?php echo $row["items"] ?></td>

 </tr>
 <tr>
    <td>
     <div class="contact-container"><a href="#" style="color: #ff0000;"><b>PACKAGE <br> WEIGHT:</b></a> </div>
 </td>
 <td style="color: #fff;"><?php echo $row["weight"] ?></td>

</tr>

<tr>
    <td>
     <div class="contact-container"><a href="#" style="color: #ff0000;"><b>SHIPMENT <br> CATRGORY:</b></a> </div>
 </td>
 <td style="color: #fff; "><?php echo $row["cat"] ?></td>

</tr>
<tr>
    <td>
     <div class="contact-container"><a href="#" style="color: #ff0000;"><b>SHIPMENT <br> STATUS:</b></a> </div>
 </td>
 <td style="color: #fff;"><?php echo $row["status"] ?></td>

</tr>
</tbody>
</table>
</div><br>
</div>

<h1 align="center"><a href="map.php?id=<?php echo $row["track_id"]; ?>">View Map Here</a></h1>






<?php       
}
} else {
    echo "<div class='alert alert-danger'>
    <strong>Failed!</strong> No Search Done Yet Or Tracking Id Doesnt Exist.
    </div>";
}
}
}

?>


</div> 
</div> 
<br><br>
    <?php include 'footer.php'; ?>