<?php include 'header.php'; ?>
	<!-- End navbar -->

	<!-- banner -->
	<section id="myCarousel"  class="banner-content carousel slide carousel-fade">
		<!-- Wrapper for Slides -->
		<div class="carousel-inner">
			<div class="item active">
				<!-- Set the first background image using inline CSS below. -->
				<div class="fill" style="background-image:url('image/header-bg.jpg');"></div>
			</div>
			<div class="item">
				<!-- Set the second background image using inline CSS below. -->
				<div class="fill" style="background-image:url('image/header-bg-2.jpg');"></div>
			</div>
			<div class="item">
				<!-- Set the third background image using inline CSS below. -->
				<div class="fill" style="background-image:url('image/header-bg-3.jpg');"></div>
			</div>
			<div class="item">
				<!-- Set the second background image using inline CSS below. -->
					<div class="fill" style="background-image:url('image/header-bg-4.jpg');"></div>
			</div>
		</div>
		<div class="tab-box">
			<div class="container">	
				<div class="row">
					<div class="custom-tab pull-right col-md-6 col-sm-7 col-xs-12 pad-0">
						<!-- Nav tabs -->
						<ol class="nav nav-tabs carousel-indicators" role="tablist">
						    <li role="presentation" data-target="#myCarousel" data-slide-to="0" class="active"><a href="#Air-Frieght" role="tab" data-toggle="tab"><img alt="" width="31" height="41"  src="image/air-f.png"><br>Air Frieght</a></li>
							<li role="presentation" data-target="#myCarousel" data-slide-to="1" ><a href="#Road-Frieght" role="tab" data-toggle="tab"><img alt="" width="45" height="41"  src="image/road-f.png"><br>Road Frieght</a></li>
							<li role="presentation" data-target="#myCarousel" data-slide-to="2" ><a href="#Ship-Frieght"  role="tab" data-toggle="tab"><img alt="" width="42" height="41"  src="image/ship-f.png"><br>Ship Frieght</a></li>
							<li role="presentation" data-target="#myCarousel" data-slide-to="3" ><a href="#Rail-Frieght"  role="tab" data-toggle="tab"><img alt="" width="31" height="41" src="image/rail-f.png"><br>Rail Frieght</a></li>
						</ol>

						<!-- Tab panes -->
						<div class="tab-content hidden-xs">
							<div role="tabpanel" class="tab-pane active" id="Air-Frieght">
								<h4>Air Transformation</h4>
								<p>For express services, we have the air freight. Our air freight services are so fast that you wont even realize you bought a product out of you city/town</p>
							</div>
							<div role="tabpanel" class="tab-pane" id="Road-Frieght">
								<h4>Road Transformation</h4>
								<p>Our shipping services is simple the best, thats why we always deliver in time. We are not specific in what we transport, we are diverse to meet every clients need./p>
							</div>
							<div role="tabpanel" class="tab-pane" id="Ship-Frieght">
								<h4>Ship Transformation</h4>
								<p>Our Company Provides delivery services as well. its not all about tracking to delivering your product at any location that conviniences you. we are very mobile.</p>
							</div>
							 <div role="tabpanel" class="tab-pane" id="Rail-Frieght">
								<h4>Rail Transformation</h4>
								<p>Our Company Provides delivery services as well. its not all about tracking to delivering your product at any location that conviniences you. we are very mobile.</p>
							</div>
						</div>
					</div>	  
				</div>	  
			</div>  
		</div>
		<div class="tracking">
			<div class="container">
				<div class="row">
					<div class="col-md-5 pad-0">
						<h3>Already have track id?</h3>
						<p>Please insert your reference number for tracking and status information</p>
					</div>
					<div class="col-md-7 npr res-pad-o">
					    <form class="tracking-form clearfix" method="post">
							  <div class="form-group col-md-9 res-pad-o">
							    <input type="text" name="term" class="form-control" id="trackid" placeholder="Ex: USPC-20986453">
							  </div>
							  <button type="submit" name="save" class="col-md-3 btn btn-default">track it</button>
						</form>
					</div>	
				</div>
			</div>
				
		</div>			
	</section>
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
                                     <td style="color: #fff; text-transform: uppercase;"><?php echo $row["jname"] ?></td>

                                 </tr>
                                 <tr>

                                    <tr>
                                        <td>
                                         <div class="contact-container"><a href="#" style="color: #ff0000;"><b>RECEIVERS <br> ADDRESS:</b></a> </div>
                                     </td>
                                     <td style="color: #fff; text-transform: uppercase;"><?php echo $row["jadd"] ?></td>

                                 </tr>
                                 <tr>
                                    <td>
                                     <div class="contact-container"><a href="#" style="color: #ff0000;"><b>RECEIVERS <br> COUNTRY:</b></a> </div>
                                 </td>
                                 <td style="color: #fff; text-transform: uppercase;"><?php echo $row["jcountry"] ?></td>

                             </tr>
                             <tr>
                                <td>
                                 <div class="contact-container"><a href="#" style="color: #ff0000;"><b>RECEIVERS <br> Number:</b></a> </div>
                             </td>
                             <td style="color: #fff; text-transform: uppercase;"><?php echo $row["jnumber"] ?></td>

                         </tr>
                         <tr>
                            <td>
                             <div class="contact-container"><a href="#" style="color: #ff0000;"><b>RECEIVERS <br> Email:</b></a> </div>
                         </td>
                         <td style="color: #fff; text-transform: uppercase;"><?php echo $row["jemail"] ?></td>

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
                     <td style="color: #fff; text-transform: uppercase;"><?php echo $row["sname"] ?></td>

                 </tr>
                 <tr>

                    <tr>
                        <td>
                         <div class="contact-container"><a href="#" style="color: #ff0000;"><b>SENDER'S <br> ADDRESS:</b></a> </div>
                     </td>
                     <td style="color: #fff; text-transform: uppercase;"><?php echo $row["sadd"] ?></td>

                 </tr>
                 <tr>
                    <td>
                     <div class="contact-container"><a href="#" style="color: #ff0000;"><b>SENDER'S <br> COUNTRY:</b></a> </div>
                 </td>
                 <td style="color: #fff; text-transform: uppercase;"><?php echo $row["scountry"] ?></td>

             </tr>
             <tr>
                <td>
                 <div class="contact-container"><a href="#" style="color: #ff0000;"><b>SENDER'S <br> Number:</b></a> </div>
             </td>
             <td style="color: #fff; text-transform: uppercase;"><?php echo $row["snumber"] ?></td>

         </tr>
         <tr>
            <td>
             <div class="contact-container"><a href="#" style="color: #ff0000;"><b>SENDER'S <br> Email:</b></a> </div>
         </td>
         <td style="color: #fff; text-transform: uppercase;"><?php echo $row["semail"] ?></td>

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
             <td style="color: #fff; text-transform: uppercase;"><?php echo $row["mode"] ?></td>

         </tr>
         <tr>

            <tr>
                <td>
                 <div class="contact-container"><a href="#" style="color: #ff0000;"><b>PRODUCT <br> NAME:</b></a> </div>
             </td>
             <td style="color: #fff; text-transform: uppercase;"><?php echo $row["prod"] ?></td>

         </tr>
         <tr>
            <td>
             <div class="contact-container"><a href="#" style="color: #ff0000;"><b>TRACKING<br> NUMBER:</b></a> </div>
         </td>
         <td style="color: #fff; text-transform: uppercase;"><?php echo $row["ship_id"] ?></td>

     </tr>
     <tr>
        <td>
         <div class="contact-container"><a href="#" style="color: #ff0000;"><b>DELIVERY <br> STATUS:</b></a> </div>
     </td>
     <td style="color: #fff; text-transform: uppercase;"><?php echo $row["deliverys"] ?></td>

 </tr>
 <tr>
    <td>
     <div class="contact-container"><a href="#" style="color: #ff0000;"><b>SHIPMENT <br> DESCRIPTION:</b></a> </div>
 </td>
 <td style="color: #fff; text-transform: uppercase;"><?php echo $row["descrip"] ?></td>

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
                 <td style="color: #fff; text-transform: uppercase;"><?php echo $row["currentl"] ?></td>

             </tr>
             <tr>

                <tr>
                    <td>
                     <div class="contact-container"><a href="#" style="color: #ff0000;"><b>PACKAGE PICKUP <br> LOCATION:</b></a> </div>
                 </td>
                 <td style="color: #fff; text-transform: uppercase;"><?php echo $row["pickupl"] ?></td>

             </tr>
             <tr>
                <td>
                 <div class="contact-container"><a href="#" style="color: #ff0000;"><b>DEPARTURE<br> DATE:</b></a> </div>
             </td>
             <td style="color: #fff; text-transform: uppercase;"><?php echo $row["Ship_date"] ?></td>

         </tr>
         <tr>
            <td>
             <div class="contact-container"><a href="#" style="color: #ff0000;"><b>DELIVERY <br> DATE:</b></a> </div>
         </td>
         <td style="color: #fff; text-transform: uppercase;"><?php echo $row["ddate"] ?></td>

     </tr>
     <tr>
        <td>
         <div class="contact-container"><a href="#" style="color: #ff0000;"><b>QUANTITY <br> SHIPPED:</b></a> </div>
     </td>
     <td style="color: #fff; text-transform: uppercase;"><?php echo $row["items"] ?></td>

 </tr>
 <tr>
    <td>
     <div class="contact-container"><a href="#" style="color: #ff0000;"><b>PACKAGE <br> WEIGHT:</b></a> </div>
 </td>
 <td style="color: #fff; text-transform: uppercase;"><?php echo $row["weight"] ?></td>

</tr>

<tr>
    <td>
     <div class="contact-container"><a href="#" style="color: #ff0000;"><b>SHIPMENT <br> CATRGORY:</b></a> </div>
 </td>
 <td style="color: #fff; text-transform: uppercase;"><?php echo $row["cat"] ?></td>

</tr>
<tr>
    <td>
     <div class="contact-container"><a href="#" style="color: #ff0000;"><b>SHIPMENT <br> STATUS:</b></a> </div>
 </td>
 <td style="color: #fff; text-transform: uppercase;"><?php echo $row["status"] ?></td>

</tr>
</tbody>
</table>
</div><br>
</div>

<!-- <body > -->
    <br><br>
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
	<br>
	<h1 style="text-align: center; text-transform: capitalize; color: #137bfd">United States Postal Company</h1>

	<!-- about us -->
	<section id="about-us" class="about-us">
		<div class="container">
			<div class="row">
				<div class="section-text col-md-6 npl">
					<h4 class="section-heading">About us</h4>
					<h1 class="focus-text">We are best shipment company in the world</h1>
					<p>We are your best friend when it comes to package transportation and delivery, USPC is the best company you can relly on if you buy online and you need a delivery service or if you are a business man and you need a reliable transport company to bring you goods to you. We also have warehouse services that can hold you goods untill you are ready to take.</p>
					<a class="p-btn" href="#">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
				</div>
				
				<div class="col-md-6 npr res-pad-o">
					<div class="img-wrapper clearfix">
						<img alt="" width="263" height="340" class="img-left hidden-sm hidden-xs" src="image/about-us-1.jpg">
						<img alt="" width="380" height="340" class="img-right pull-right hidden-sm hidden-xs" src="image/about-us-2.jpg">
						<img alt="" width="570" height="305" class="img-right pull-right hidden-md hidden-lg" src="image/ab-left-img.jpg">
					</div>
				</div>				
			</div>			
		</div>
	</section>
	<!-- End about-us -->

	<!-- Statistics -->
	<section class="statistics parallax-window" data-parallax="scroll" data-image-src="image/parallax-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="content-warpper clearfix">
					<div class="stat-col col-sm-6  col-md-3 res-m-bttm">
						<i class="fa fa-globe pull-left" aria-hidden="true"></i>
						<div class="text-wrapper">
							<h3>720</h3>
							<p>Clients Worldwide</p>								
						</div>							
					</div>
					<div class="stat-col col-sm-6  col-md-3 res-m-bttm">
						<i class="fa fa-thumbs-o-up pull-left" aria-hidden="true"></i>
						<div class="text-wrapper">
							<h3>450</h3>
							<p>365 Days Service</p>								
						</div>							
					</div>
					<div class="stat-col col-sm-6  col-md-3 res-m-bttm">
						<i class="fa fa-male pull-left" aria-hidden="true"></i>
						<div class="text-wrapper">
							<h3>900</h3>
							<p>Expert Worker</p>								
						</div>							
					</div>
					<div class="stat-col col-sm-6 col-md-3">
						<i class="fa fa-heart pull-left" aria-hidden="true"></i>
						<div class="text-wrapper">
							<h3>976</h3>
							<p>Satisfaction Member</p>								
						</div>							
					</div>
				</div>
			</div>	
		</div>		
	</section>
	<!-- End Statistics -->

	<!-- Service -->
	<section id="service" class="service">
		<div class="container">
			<div class="row">
				<div class="section-text col-md-6 res-m-bttm npl">
					<h4 class="section-heading">our Services</h4>
					<p>USPC as a company that has been on the internet for more than 25 years offers the following services to its customers. We are very reliable and fast. our services are the best on the market and we are working hard to improve it so it fits all of our clinets need.</p>
					<a class="p-btn" href="#">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
				</div>
				<div class="col-md-6 npr res-pad-o">
					<div class="service-row clearfix">
						<div class="col-sm-6 res-m-bm-xs res-pad-o">
							<i class="fa fa-magnet" aria-hidden="true"></i>
							<div class="text-wrapper">
								<h5>Logistics</h5>
								<p>Low cost An offendit philosophia nec, no mei maiorum appellantur comprehensam. Etiam </p>
								<a href="#">View Details</a>									
							</div>							
						</div>
						<div class="col-sm-6 res-pad-o">
							<i class="fa fa-paper-plane-o" aria-hidden="true"></i>
							<div class="text-wrapper">
								<h5>Quick Delivery</h5>
								<p>Low cost An offendit philosophia nec, no mei maiorum appellantur comprehensam. Etiam </p>
								<a href="#">View Details</a>									
							</div>							
						</div>								
					</div>
					<div class="service-row clearfix">
						<div class="col-sm-6 res-m-bm-xs res-pad-o">
							<i class="fa fa-pie-chart" aria-hidden="true"></i>
							<div class="text-wrapper">
								<h5>Low cost</h5>
								<p>Low cost An offendit philosophia nec, no mei maiorum appellantur comprehensam. Etiam </p>
								<a href="#">View Details</a>									
							</div>							
						</div>
						<div class="col-sm-6 res-pad-o">
							<i class="fa fa-briefcase" aria-hidden="true"></i>
							<div class="text-wrapper">
								<h5>Pack up Delivery</h5>
								<p>Low cost An offendit philosophia nec, no mei maiorum appellantur comprehensam. Etiam </p>
								<a href="#">View Details</a>									
							</div>							
						</div>								
					</div>						
				</div>	
			</div>			
		</div>
	</section>
	<!-- End service -->

	<!--quote&testimonial  -->
	<section class="quo-tstmnail">
		<div class="container">
			<div class="row">
				<div class="quote col-sm-6 npl res-m-bm-xs res-xs-pad-0 res-m-bm-xs">
					<form id="quote-request" method="post">
						<h4 class="section-heading">Quick quote</h4>
						<div class="form-results"></div>
						<div class="select-box clearfix col-sm-6 pad-0"  style="margin-bottom: 20px">
							<select name="fright" class="wide required">
								<option value="">Fright Type *</option>
								<option value="Air Frieght">Air Frieght</option>
								<option value="Road Frieght">Road Frieght</option>
								<option value="Ship Frieght">Ship Frieght</option>
								<option value="Rail Frieght">Rail Frieght</option>
							</select>
						</div>
						<div class="form-group col-sm-6 npr res-xs-pad-0">
							<label class="sr-only">Weight</label>
							<input name="weight" type="text" class="form-control required" placeholder="Weight" required="">
						</div>
						<div class="form-group col-sm-6 pad-0">
							<label class="sr-only">Departure</label>
							<input name="departure" type="text" class="form-control required" placeholder="Departure *" required="">
						</div>
						<div class="form-group col-sm-6 npr res-xs-pad-0">
							<label class="sr-only" >Destination</label>
							<input name="destination" type="text" class="form-control required" placeholder="Destination *" required="">
						</div>
						<div class="form-group">
							<label class="sr-only" >Email</label>
							<input name="email" type="email" class="form-control required email" placeholder="Email *" required="">
						</div>
						<input type="text" class="hidden" name="form-anti-honeypot" value="">
						<button type="submit" class="btn">Submit</button>
					</form>
				</div>
				<div class="testimonial col-sm-6 npr res-xs-pad-0">
					<h4 class="section-heading">WHAT PEOPLE SAYS</h4>
					<div id="carousel" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
							<div class="item active">
								<div class="testimonial-section">
									<i>Thanks for everything…it is truly a non stressful experience working with USPC ! Believe me with all the stress that can go along with importing wine to the USA, it is refreshing to know my company’s transportation needs are in knowledgeable and professional hands.</i> 
								</div>
								<div class="testimonial-section-name clearfix">
						
									<div class="client-name">
										<h4>Victoria L. Gunn</h4>
										<p>President/CEO- Icewine Exclusives ®</p>		
									</div>
								</div>
							</div>
							<div class="item">
								<div class="testimonial-section">
									<i>USPC Logistics Agencies have worked with Costco Wholesale UK for over 16 years. They have become a very loyal and dedicated service provider, always prepared to go the extra mile and ensure our logistics needs are met.</i> 
								</div>
								<div class="testimonial-section-name clearfix">
									
									<div class="client-name">
										<h4>Javier Peinado</h4>
										<p>Import & Ocean Freight Manager</p>		
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End quote&testimonial -->

	<!-- client-logo -->
	<!-- End client-logo -->

	<!-- call to action -->

	
	<?php include 'footer.php'; ?>