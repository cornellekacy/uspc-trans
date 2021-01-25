<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<!-- End Left Sidebar  -->
<!-- Page wrapper  -->
<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Dashboard</h3> </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>
        <!-- End Bread crumb -->
        <!-- Container fluid  -->
        <div class="container-fluid">
            <!-- Start Page Content -->
            <div class="row">
                <div class="col-md-2">

                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-title">
                            <h4>Add New Tracking</h4>
                                            <?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
include 'conn.php';

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
if(isset($_POST['save'])){
 $jname = mysqli_real_escape_string($link,$_POST['jname']);
 $jadd = mysqli_real_escape_string($link,$_POST['jadd']);
 $jcountry = mysqli_real_escape_string($link,$_POST['jcountry']);
 $jemail = mysqli_real_escape_string($link,$_POST['jemail']);
 $jnumber = mysqli_real_escape_string($link,$_POST['jnumber']);
 $sname = mysqli_real_escape_string($link,$_POST['sname']);
 $sadd = mysqli_real_escape_string($link,$_POST['sadd']);
 $scountry = mysqli_real_escape_string($link,$_POST['scountry']);
 $semail = mysqli_real_escape_string($link,$_POST['semail']);
 $snumber = mysqli_real_escape_string($link,$_POST['snumber']);
 $prod = mysqli_real_escape_string($link,$_POST['prod']);
 $mode = mysqli_real_escape_string($link,$_POST['mode']);
 $ship_date = mysqli_real_escape_string($link,$_POST['ship_date']);
 $ddate = mysqli_real_escape_string($link,$_POST['ddate']);
 $currentl = mysqli_real_escape_string($link,$_POST['currentl']);
 $pickupl = mysqli_real_escape_string($link,$_POST['pickupl']);
 $status = mysqli_real_escape_string($link,$_POST['status']);
 $deliverys = mysqli_real_escape_string($link,$_POST['deliverys']);
 $cat = mysqli_real_escape_string($link,$_POST['cat']);
 $weight = mysqli_real_escape_string($link,$_POST['weight']);
 $items = mysqli_real_escape_string($link,$_POST['items']);
 $descrip = mysqli_real_escape_string($link,$_POST['descrip']);
   $lon = mysqli_real_escape_string($link,$_POST['lon']);
 $lat = mysqli_real_escape_string($link,$_POST['lat']);

 if (empty($jname)) {
    echo "<div class='alert alert-danger'>
    <strong>Failed!</strong>Receiver's Name Cannot Be Empty.
    </div>";
}

elseif (empty($jadd)) {
    echo "<div class='alert alert-danger'>
    <strong>Failed!</strong> Receiver's Address Cannot Be Empty.
    </div>";
}
elseif (empty($jcountry)) {
    echo "<div class='alert alert-danger'>
    <strong>Failed!</strong> Receiver's Country Mode Cannot Be Empty.
    </div>";
}
elseif (empty($sname)) {
    echo "<div class='alert alert-danger'>
    <strong>Failed!</strong> Senders name Cannot Be Empty.
    </div>";
}
elseif (empty($sadd)) {
    echo "<div class='alert alert-danger'>
    <strong>Failed!</strong> sender address Cannot Be Empty.
    </div>";
}
elseif (empty($scountry)) {
    echo "<div class='alert alert-danger'>
    <strong>Failed!</strong> Sender's Country Cannot Be Empty.
    </div>";
}
elseif (empty($prod)) {
    echo "<div class='alert alert-danger'>
    <strong>Failed!</strong> Product Cannot Be Empty.
    </div>";
}

else{
    $me = rand();
// Attempt insert query execution
    $sql = "INSERT INTO track (jname,jadd,jcountry,jemail,jnumber,sname,sadd,scountry,semail,snumber, prod, mode, ship_date, ddate, currentl, pickupl, status,deliverys,cat,weight,items,descrip,ship_id,lon,lat) 
    VALUES ('$jname','$jadd','$jcountry','$jemail','$jnumber','$sname','$sadd','$scountry','$semail','$snumber', '$prod', '$mode', '$ship_date', '$ddate', '$currentl', '$pickupl', '$status','$deliverys','$cat','$weight','$items','$descrip','USPC-$me','$lon','$lat')";
    if(mysqli_query($link, $sql)){
        echo "<div class='alert alert-success'>
        <strong>Success!</strong> Tracking Successfully Created.
        </div>";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
}
}
// Close connection
mysqli_close($link);

?>

                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form method="post">
                                 <div class="form-group">
                                    <label>Jk Name</label>
                                    <input type="text" name="jname" class="form-control" placeholder="jk's name">
                                </div>
                                <div class="form-group">
                                    <label>Jk address</label>
                                    <input type="text" name="jadd" class="form-control" placeholder="jk's address">
                                </div>
                                <div class="form-group">
                                    <label>Jk Country</label>
                                    <input type="text" name="jcountry" class="form-control" placeholder="jk's country">
                                </div>
                                <div class="form-group">
                                    <label>Jk Email</label>
                                    <input type="text" name="jemail" class="form-control" placeholder="jk's Email">
                                </div>
                                <div class="form-group">
                                    <label>Jk Number</label>
                                    <input type="text" name="jnumber" class="form-control" placeholder="jk's number">
                                </div>
                                <div class="form-group">
                                    <label>Seller Name</label>
                                    <input type="text" name="sname" class="form-control" placeholder="seller's name">
                                </div>
                                <div class="form-group">
                                    <label>Seller address</label>
                                    <input type="text" name="sadd" class="form-control" placeholder="seller's address">
                                </div>
                                <div class="form-group">
                                    <label>Seller Country</label>
                                    <input type="text" name="scountry" class="form-control" placeholder="seller's country">
                                </div>
                                <div class="form-group">
                                    <label>Seller Email</label>
                                    <input type="text" name="semail" class="form-control" placeholder="seller's email">
                                </div>
                                <div class="form-group">
                                    <label>Seller Number</label>
                                    <input type="text" name="snumber" class="form-control" placeholder="seller's number">
                                </div>
                                <div class="form-group">
                                    <label>Product Name</label>
                                    <input type="text" name="prod" class="form-control" placeholder="Product Name">
                                </div>
                                <div class="form-group">
                                    <label >Transportation Mode</label>

                                    <select class="form-control" name="mode">
                                        <option value="Air">Air</option>
                                        <option value="Road">Road</option>
                                        <option value="Sea">Sea</option>
                                        <option value="Rail">Rail</option>
                                    </select>

                                </div>
                                <div class="form-group">
                                    <label>Shipped Date</label>
                                    <input type="date" name="ship_date" class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label>Delivery Date</label>
                                    <input type="date" class="form-control" name="ddate" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label>Current Location</label>
                                    <input type="text" class="form-control" name="currentl" placeholder="current location">
                                </div>
                                <div class="form-group">
                                    <label>Pickup Location</label>
                                    <input type="text" class="form-control" name="pickupl" placeholder="pickup location">
                                </div>
                                <div class="form-group">
                                    <label ">Shipment Status</label>

                                    <select class="form-control" name="status">
                                        <option value="In Progress">In Progress</option>
                                        <option value="Delivered">Delivered</option>
                                        <option value="Delivered">On Hold</option>
                                    </select>

                                </div>
                                <div class="form-group">
                                    <label>Delivery Status</label>
                                    <input type="text" class="form-control" name="deliverys" placeholder="delivery Status">
                                </div>
                                <div class="form-group">
                                    <label>Shipment Category</label>
                                    <input type="text" class="form-control" name="cat" placeholder="E.g pet">
                                </div>
                                <div class="form-group">
                                    <label>Shipment Weight</label>
                                    <input type="text" class="form-control" name="weight" placeholder="e.g 10kg">
                                </div>
                                <div class="form-group">
                                    <label>Number Of Item To Ship</label>
                                    <input type="text" class="form-control" name="items" placeholder="e.g 01">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="textarea_editor form-control" name="descrip" rows="15" placeholder="Enter text ..." style="height:150px"></textarea>

                                </div>
                                <div class="form-group">
                                    <label>Shipping From</label>
                                    <input type="text" class="form-control" name="lon" placeholder="Mexico">
                                </div>
                                   <div class="form-group">
                                    <label>Shipping To</label>
                                    <input type="text" class="form-control" name="lat" placeholder="New York">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Check me out
                                    </label>
                                </div>
                                <button type="submit" name="save" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-2">

            </div>
        </div>







        <!-- End PAge Content -->
        <?php include 'footer.php'; ?>