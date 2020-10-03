  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js" ></script>
<?php

session_start();

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'order_form');

$name=$_POST['name'];
$pickupdate=$_POST['pickupdate'];
$deliverydate=$_POST['deliverydate'];

if($deliverydate==$pickupdate){
    echo "<script type='text/javascript'>
    alert('pickup date and delivery date can not be same');
    window.location='index.html';
    </script>";
}
else{
    echo "<script type='text/javascript'>
    alert('successfully submitted');
    window.location='index.html';
    $qy="INSERT INTO form(name,pickupdate,deliverydate) VALUES('$name','$pickupdate','$deliverydate')";
    mysqli_query($con,$qy);
}

?>